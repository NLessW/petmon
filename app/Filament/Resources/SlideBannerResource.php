<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Slide;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\SlideBanner;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SlideBannerResource\Pages;
use App\Filament\Resources\SlideBannerResource\RelationManagers;

class SlideBannerResource extends Resource
{
    protected static ?string $model = Slide::class;
    protected static ?string $navigationGroup = "배너관리";
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = "하단배너관리";
    protected static ?string $modelLabel = "하단배너";
    protected static ?string $recordTitleAttribute = "title";
    protected static ?int $navigationSort = 10;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('type')->default('banner'),
                Forms\Components\TextInput::make('title')
                    ->label('제목')
                    ->required()
                    ->maxLength(64),
                Forms\Components\TextInput::make('url')
                    ->label('링크')
                    ->maxLength(128),
                Forms\Components\SpatieMediaLibraryFileUpload::make('default')
                    ->label('대표이미지'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\SpatieMediaLibraryImageColumn::make('default')
                    ->label('대표이미지')
                    ->collection('default')
                    ->width(60)
                    ->height(40)
                    ->conversion('thumb'),
                Tables\Columns\TextColumn::make('title')
                    ->label('제목')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('url')
                //     ->searchable(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ManageSlideBanners::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->banner()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
