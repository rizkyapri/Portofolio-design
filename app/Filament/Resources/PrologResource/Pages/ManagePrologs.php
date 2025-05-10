<?php

namespace App\Filament\Resources\PrologResource\Pages;

use App\Filament\Resources\PrologResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePrologs extends ManageRecords
{
    protected static string $resource = PrologResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
