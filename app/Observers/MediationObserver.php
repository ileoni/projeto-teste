<?php

namespace App\Observers;

use App\Mail\MediationNotify;
use App\Mediation;
use Illuminate\Support\Facades\Mail;

class MediationObserver
{
    // php artisan make:observer UserObserver --model=User
    
    protected $afterCommit = true;
    /**
     * Handle the mediation "created" event.
     *
     * @param  \App\Mediation  $mediation
     * @return void
     */
    public function created(Mediation $mediation)
    {
        $emails = request('emails') ?? request()->has('emails');

        if($emails) {
            Mail::to($emails)
                ->send(new MediationNotify());
        }
    }

    /**
     * Handle the mediation "updated" event.
     *
     * @param  \App\Mediation  $mediation
     * @return void
     */
    public function updated(Mediation $mediation)
    {
        //
    }

    /**
     * Handle the mediation "deleted" event.
     *
     * @param  \App\Mediation  $mediation
     * @return void
     */
    public function deleted(Mediation $mediation)
    {
        //
    }

    /**
     * Handle the mediation "restored" event.
     *
     * @param  \App\Mediation  $mediation
     * @return void
     */
    public function restored(Mediation $mediation)
    {
        //
    }

    /**
     * Handle the mediation "force deleted" event.
     *
     * @param  \App\Mediation  $mediation
     * @return void
     */
    public function forceDeleted(Mediation $mediation)
    {
        //
    }
}
