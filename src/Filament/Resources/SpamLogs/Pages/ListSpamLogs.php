<?php

namespace sakujajp\CreatorsTicketing\Filament\Resources\SpamLogs\Pages;

use Filament\Resources\Pages\ListRecords;
use sakujajp\CreatorsTicketing\Filament\Resources\SpamLogs\SpamLogResource;

class ListSpamLogs extends ListRecords
{
    protected static string $resource = SpamLogResource::class;
}
