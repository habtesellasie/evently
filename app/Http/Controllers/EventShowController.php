<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $event = Event::findOrFail($id);
        $like = $event->likes()->where('user_id', auth()->id())->first();
        $savedEvent = $event->savedEvents()->where('user_id', auth()->id())->first();

        $attending = $event->attendings()->where('user_id', auth()->id())->first();


        return view('eventsShow', [
            'event' => $event,
            'like' => $like,
            'savedEvent' => $savedEvent,
            'attending' => $attending
        ]);
    }
}
