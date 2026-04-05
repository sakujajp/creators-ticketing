<?php

namespace sakujajp\CreatorsTicketing\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use sakujajp\CreatorsTicketing\Models\Ticket;

class TicketAssigned
{
    use Dispatchable, SerializesModels;

    public function __construct(
        public Ticket $ticket,
        public ?int $oldAssigneeId,
        public ?int $newAssigneeId,
        public mixed $assignedBy
    ) {
    }
}