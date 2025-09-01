<?php

namespace App\Filament\Resources\BoardNoticeResource\Pages;

use App\Filament\Resources\BoardNoticeResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageBoardNotices extends ManageRecords
{
    protected static string $resource = BoardNoticeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->createAnother(false)
                ->closeModalByClickingAway(false),
        ];
    }
}
