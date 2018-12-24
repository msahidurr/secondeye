<?php

namespace App\Listeners;

use App\Events\DeliveryShipped;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendDeliveryNotification
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
     * @param  DeliveryShipped  $event
     * @return void
     */
    public function handle(DeliveryShipped $event)
    {
        //
    }
}
