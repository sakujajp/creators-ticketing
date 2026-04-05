<?php

namespace sakujajp\CreatorsTicketing\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use sakujajp\CreatorsTicketing\Models\Ticket;
use sakujajp\CreatorsTicketing\Models\TicketReply;

class InternalNoteAdded
{
    use Dispatchable, SerializesModels;

    public function __construct(
        public Ticket $ticket,
        public TicketReply $note
    ) {
    }
}