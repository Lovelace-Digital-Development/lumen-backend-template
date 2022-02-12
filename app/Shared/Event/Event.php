<?php

namespace App\Shared\Event;

use Illuminate\Queue\SerializesModels;

abstract class Event
{
    use SerializesModels;
}
