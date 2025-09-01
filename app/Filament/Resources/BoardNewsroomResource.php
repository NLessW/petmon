<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Board;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\BoardNewsroom;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BoardNewsroomResource\Pages;
use App\Filament\Resources\BoardNewsroomResource\RelationManagers;

class BoardNewsroomResource extends Resource
{
    protected static ?string $model = Board::class;
    protected static ?string $navigationGroup = "커뮤니티";
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationLabel = "뉴스룸관리";
    protected static ?string $modelLabel = "뉴스룸";
    protected static ?string $recordTitleAttribute = "title";
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('type')->default('newsroom'),
                Forms\Components\Select::make('category_id')
                    ->label('카테고리')
                    ->options(config('site.newsroom_categories'))
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->label('제목')
                    ->required()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('content')
                    ->toolbarButtons([
                        'attachFiles',
                        'bold',
                        'h2',
                        'h3',
                        'italic',
                        'redo',
                        'strike',
                        'underline',
                        'undo',
                    ])
                    ->label('내용')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\SpatieMediaLibraryFileUpload::make('default')
                    ->label('대표이미지'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('id', 'desc')
            ->columns([
                Tables\Columns\SpatieMediaLibraryImageColumn::make('default')
                    ->label('대표이미지')
                    ->collection('default')
                    ->width(60)
                    ->height(40)
                    ->conversion('thumb'),
                Tables\Columns\TextColumn::make('category_id')
                    ->label('분류')
                    ->state(function (Board $record): string {
                        return config('site.newsroom_categories.' . $record->category_id);
                    }),
                Tables\Columns\TextColumn::make('title')
                    ->label('제목')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('hit')
                //     ->numeric()
                //     ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('등록일')
                    ->dateTime('Y-m-d H:i')
                    ->sortable(),
                // ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('수정일')
                    ->dateTime('Y-m-d H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ManageBoardNewsrooms::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->newsroom()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
