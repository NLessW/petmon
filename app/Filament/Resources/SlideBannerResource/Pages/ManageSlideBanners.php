<?php

namespace App\Filament\Resources\SlideBannerResource\Pages;

use App\Filament\Resources\SlideBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageSlideBanners extends ManageRecords
{
    protected static string $resource = SlideBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
