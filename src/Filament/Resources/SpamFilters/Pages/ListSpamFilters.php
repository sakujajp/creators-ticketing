<?php

namespace sakujajp\CreatorsTicketing\Filament\Resources\SpamFilters\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use sakujajp\CreatorsTicketing\Filament\Resources\SpamFilters\SpamFilterResource;

class ListSpamFilters extends ListRecords
{
    protected static string $resource = SpamFilterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
