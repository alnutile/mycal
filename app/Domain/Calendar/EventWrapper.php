<?php

namespace App\Domain\Calendar;

use Carbon\Carbon;
use Spatie\GoogleCalendar\Event;

class EventWrapper
{

    public function get(Carbon $start, Carbon $end)
    {

        /**
         * @NOTE
         * Speed up UI work
         */
        if(config('google-calendar.mock')) {

            return collect(get_fixture('events.json'));
        }

        $events = Event::get(now(), now()->addDays(14));

        return $events;

    }
}
