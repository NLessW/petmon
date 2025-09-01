<?php

namespace App\Filament\Resources\BoardGalleryResource\Pages;

use App\Filament\Resources\BoardGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageBoardGalleries extends ManageRecords
{
    protected static string $resource = BoardGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->createAnother(false)
                ->closeModalByClickingAway(false),
        ];
    }
}
