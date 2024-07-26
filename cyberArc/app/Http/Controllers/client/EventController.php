<?php

namespace App\Http\Controllers\client;

use App\Models\Events;
use App\Mail\EventMail;
use Illuminate\Http\Request;
use App\Services\AdminApiService;
use App\Http\Controllers\Controller;
use App\Models\RegisteredEventUsers;
use Illuminate\Support\Facades\Mail;


class EventController extends Controller
{
    //Client 
    
    public function RegisteredEventUserstore(Request $request)
    {   //add logic to this

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'event_id' => 'required',
            'terms' => ['accepted']
        ]);

        

        $user = RegisteredEventUsers::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'event_id' => $request->event_id,
            'terms_accepted' => true
        ]);

        $events = Events::first();

        foreach($events as $event){
            if($request->event_id == $event['id']){
                $event_registered = $event;
            }
            else{
                continue;
            }
        }
        
        Mail::to($request->email)->send(new EventMail($user, $event_registered));


        return redirect()->route('web.events');
    }
}
