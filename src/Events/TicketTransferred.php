<?php

namespace sakujajp\CreatorsTicketing\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use sakujajp\CreatorsTicketing\Models\Ticket;
use sakujajp\CreatorsTicketing\Models\Department;

class TicketTransferred
{
    use Dispatchable, SerializesModels;

    public function __construct(
        public Ticket $ticket,
        public Department $oldDepartment,
        public Department $newDepartment,
        public mixed $transferredBy
    ) {
    }
}