<?php

namespace Tests\Feature;

use Facades\App\Domain\Calendar\NextTwoWeeks;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Psy\Readline\Hoa\Event;
use Tests\TestCase;

use Facades\App\Domain\Calendar\EventWrapper;

class NextTwoWeeksTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_filters_down_two_weeks_out(): void
    {
        $data = get_fixture('events.json');
        EventWrapper::shouldReceive("get")->once()
            ->andReturn($data);

        $results = NextTwoWeeks::handle();

        dd($results);
    }
}
