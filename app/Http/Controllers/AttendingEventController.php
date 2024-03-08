<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class AttendingEventController extends Controller
{
    public function __invoke(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $attending = $event->attendings()->where('user_id', auth()->id())->first();
        if (!is_null($attending)) {
            $attending->delete();
            return null;
        } else {
            $attending = $event->attendings()->create([
                'user_id' => auth()->id(),
                'num_tickets' => 1
            ]);
            return $attending;
        }
    }
}