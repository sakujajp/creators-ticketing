<?php

namespace sakujajp\CreatorsTicketing\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use sakujajp\CreatorsTicketing\Models\Ticket;
use sakujajp\CreatorsTicketing\Models\TicketStatus;

class TicketStatusChanged
{
    use Dispatchable, SerializesModels;

    public function __construct(
        public Ticket $ticket,
        public ?TicketStatus $oldStatus,
        public TicketStatus $newStatus,
        public mixed $changedBy
    ) {
    }
}