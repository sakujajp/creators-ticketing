<?php

namespace sakujajp\CreatorsTicketing\Filament\Resources\TicketStatuses\Pages;

use sakujajp\CreatorsTicketing\Filament\Resources\TicketStatuses\TicketStatusResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTicketStatus extends CreateRecord
{
    protected static string $resource = TicketStatusResource::class;
}
