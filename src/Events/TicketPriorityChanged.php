<?php

namespace sakujajp\CreatorsTicketing\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use sakujajp\CreatorsTicketing\Models\Ticket;
use sakujajp\CreatorsTicketing\Enums\TicketPriority;

class TicketPriorityChanged
{
    use Dispatchable, SerializesModels;

    public function __construct(
        public Ticket $ticket,
        public TicketPriority $oldPriority,
        public TicketPriority $newPriority,
        public mixed $changedBy
    ) {
    }
}