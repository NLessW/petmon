<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DonationResource\Pages;
use App\Filament\Resources\DonationResource\RelationManagers;
use App\Models\Donation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DonationResource extends Resource
{
    protected static ?string $model = Donation::class;
    protected static ?string $navigationIcon = 'heroicon-o-heart';
    protected static ?string $navigationLabel = "기부하기관리";
    protected static ?string $modelLabel = "기부하기";
    protected static ?string $recordTitleAttribute = "name";
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('type')
                    ->label('구분')
                    ->options(config('site.donation.type'))
                    ->required(),
                Forms\Components\Select::make('pay_method')
                    ->label('결제방법')
                    ->options(config('site.donation.pay_method'))
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->label('이름')
                    ->required()
                    ->maxLength(64),
                Forms\Components\TextInput::make('contact')
                    ->label('연락처')
                    ->required()
                    ->maxLength(16),
                Forms\Components\TextInput::make('email')
                    ->label('이메일')
                    ->email()
                    ->required()
                    ->maxLength(32),
                Forms\Components\Textarea::make('content')
                    ->label('후원자의 한마디')
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('checked')
                    ->label('확인')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->label('등록일')
                    ->dateTime('Y-m-d H:i'),
                Tables\Columns\TextColumn::make('type')
                    ->label('구분')
                    ->state(function (Donation $record): string {
                        return config('site.donation.type')[$record->type];
                    })
                    ->color(fn(string $state): string => match ($state) {
                        '개인' => 'success',
                        '단체' => 'danger',
                    }),
                Tables\Columns\TextColumn::make('pay_method')
                    ->label('결제방법')
                    ->state(function (Donation $record): string {
                        return config('site.donation.pay_method')[$record->pay_method];
                    })
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('이름')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contact')
                    ->label('연락처')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                Tables\Columns\IconColumn::make('checked')
                    ->label('확인')
                    ->boolean(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('수정일')
                    ->dateTime('Y-m-d H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('deleted_at')
                //     ->label('삭제일')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->closeModalByClickingAway(false),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageDonations::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
