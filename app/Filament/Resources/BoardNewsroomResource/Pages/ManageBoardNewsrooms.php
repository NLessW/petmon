<?php

namespace App\Filament\Resources\BoardNewsroomResource\Pages;

use App\Filament\Resources\BoardNewsroomResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageBoardNewsrooms extends ManageRecords
{
    protected static string $resource = BoardNewsroomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->createAnother(false)
                ->closeModalByClickingAway(false),
        ];
    }
}
