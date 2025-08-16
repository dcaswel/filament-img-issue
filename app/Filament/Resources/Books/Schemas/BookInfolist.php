<?php

namespace App\Filament\Resources\Books\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class BookInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageEntry::make('cover')->defaultImageUrl(asset('images/DefaultCover.png')),
                TextEntry::make('title'),
            ]);
    }
}
