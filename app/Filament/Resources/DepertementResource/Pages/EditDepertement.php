<?php

namespace App\Filament\Resources\DepertementResource\Pages;

use App\Filament\Resources\DepertementResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDepertement extends EditRecord
{
    protected static string $resource = DepertementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
