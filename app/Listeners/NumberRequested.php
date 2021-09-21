<?php

namespace App\Listeners;

use App\Events\UserSendRequestNumber;
use App\Models\Bigbang;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class NumberRequested
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(UserSendRequestNumber $event)
    {
        Bigbang::create([
            'number' => $event->number
        ]);
    }
}
