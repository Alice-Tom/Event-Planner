<?php

namespace App\Observers;

use App\Models\Client;
use App\Models\Event;

class EventObserver
{
    /**
     * Handle the event "created" event.
     *
     * @param  \App\Models\Event  $event
     * @return void
     */
    public function created(Event $event)
    {
        $clients = request()->clients;
        $urls = request()->file('media') ?? [];

        $dps = request()->file('display_photo');

        foreach ($clients as $client) {
            $event->clients()->create([
                'name' => $client
            ]);
        }

        foreach ($dps as $dp) {
            $event->addMedia($dp)->toMediaCollection('dp-'.$event->token);
        }

        foreach ($urls as $url) {
            $event->addMedia($url)->toMediaCollection($event->token);
        }
    }

    /**
     * Handle the event "updated" event.
     *
     * @param  \App\Models\Event  $event
     * @return void
     */
    public function updated(Event $event)
    {
        $clients = request()->clients;

        $dps = request()->file('display_photo') ?? [];

        $urls = request()->file('media') ?? [];

        foreach ($dps as $dp) {
            $event->addMedia($dp)->toMediaCollection('dp-'.$event->token);
        }

        foreach ($urls as $url) {
            $event->addMedia($url)->toMediaCollection($event->token);
        }

        Client::destroy(request()->client_id);

        foreach ($clients as $client) {
            $event->clients()->create([
                'name' => ucwords($client),
            ]);
        }
    }

    /**
     * Handle the event "deleted" event.
     *
     * @param  \App\Models\Event  $event
     * @return void
     */
    public function deleted(Event $event)
    {
        //
    }

    /**
     * Handle the event "restored" event.
     *
     * @param  \App\Models\Event  $event
     * @return void
     */
    public function restored(Event $event)
    {
        //
    }

    /**
     * Handle the event "force deleted" event.
     *
     * @param  \App\Models\Event  $event
     * @return void
     */
    public function forceDeleted(Event $event)
    {
        //
    }
}
