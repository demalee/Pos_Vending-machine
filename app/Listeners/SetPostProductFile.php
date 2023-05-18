<?php

namespace App\Listeners;

use App\Events\userPostProduct;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SetPostProductFile
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
     * @param  \App\Events\userPostProduct  $event
     * @return void
     */
    public function handle(userPostProduct $event)
    {
        //
    }
}
