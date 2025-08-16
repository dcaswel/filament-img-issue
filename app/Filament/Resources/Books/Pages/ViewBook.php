<?php

namespace App\Filament\Resources\Books\Pages;

use App\Filament\Resources\Books\BookResource;
use App\Filament\Resources\Books\Schemas\BookForm;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewBook extends ViewRecord
{
    protected static string $resource = BookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make()->slideOver()->schema(fn ($schema) => BookForm::configure($schema)),
        ];
    }
}
