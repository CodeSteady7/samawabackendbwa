<?php

namespace App\Filament\Resources\WeddingPackageResource\Pages;

use App\Filament\Resources\WeddingPackageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Log;

class EditWeddingPackage extends EditRecord
{
    protected static string $resource = WeddingPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    // protected function mutateFormDataBeforeSave(array $data): array
    // {
    //     // Debug data sebelum diupdate
    //     dd($data);

    //     // Atau gunakan log untuk mencatat data
    //     Log::info('Update Payload Data:', $data);

    //     return $data; // Pastikan mengembalikan data agar proses tetap berjalan
    // }
}
