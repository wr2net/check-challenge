<?php

namespace App\Observers;

use App\Emails\Models\Email;
use App\Jobs\SendCakeEmail;

class EmailObserver
{
    /**
     * Handle the Email "created" event.
     *
     * @param  \App\Models\Email  $email
     * @return void
     */
    public function created(Email $email)
    {
        SendCakeEmail::dispatch($email);
    }

    /**
     * Handle the Email "updated" event.
     *
     * @param  \App\Models\Email  $email
     * @return void
     */
    public function updated(Email $email)
    {
        //
    }

    /**
     * Handle the Email "deleted" event.
     *
     * @param  \App\Models\Email  $email
     * @return void
     */
    public function deleted(Email $email)
    {
        //
    }

    /**
     * Handle the Email "restored" event.
     *
     * @param  \App\Models\Email  $email
     * @return void
     */
    public function restored(Email $email)
    {
        //
    }

    /**
     * Handle the Email "force deleted" event.
     *
     * @param  \App\Models\Email  $email
     * @return void
     */
    public function forceDeleted(Email $email)
    {
        //
    }
}
