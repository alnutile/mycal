<?php

namespace App\Domain\Calendar;

use Spatie\GoogleCalendar\Event;
use Facades\App\Domain\Calendar\EventWrapper;

class NextTwoWeeks
{

    public function handle(int $startTime = 9, int $endTime = 5)
    {
        //get events for next two weeks/
        //get rid of all sat sun since not doing that
        //get rid of events before 9am and after 5pm
        //  unless we have other calendars?
        //
        //

        $events = EventWrapper::get(now(), now()->addDays(14));



        return $events;
    }
}
