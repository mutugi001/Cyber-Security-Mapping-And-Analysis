<?php

namespace App\Http\Controllers\admin;

use App\Models\Events;
use GuzzleHttp\Client;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\EventsHistory;
use App\Models\SubscribedUser;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class EventsController extends Controller
{
    public function index()
    {
        $events = Events::get();
        return view('admin.Events.index', compact('events'));
    }
    public function show(Events $event)
    {
        return view('admin.events.show', compact('event'));    
    }
    public function create()
    {
        return view('admin.Events.create');
    }
    public function store(Request $request){
 
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'date' => 'required',
            'time' => 'required',
            'speaker' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'description' => 'required'
           
        ]);
        $path = $request->file('image')->storeAs('event', Str::random(10));
        // return $path;
        
        if ($request->file('image')) {
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $filePath = public_path('eventImages/' . $filename);
        
                // Store the file in the admin app's public directory
                $file->move(public_path('eventImages'), $filename);

                $image_url = url('eventImages/'. $filename);
                // return $image_url;
        
        

        Events::create([
            'name' => $request->name,
            'location' => $request->location,
            'date' => $request->date,
            'time' => $request->time,
            'GuestSpeaker' => $request->speaker,
            'image_name' => $filename,
            'image_url' => $image_url,
            'description' => $request->description
        ]);
    }

        return redirect()->route('admin.events.index');
    }

    public function history()
    {
        $events = EventsHistory::get();
        return view('admin.Events.history', compact('events'));
    }
    public function historyStore(Events $event)
    {
        EventsHistory::create([
            'name' => $event->Name,
            'location' => $event->location,
            'date' => $event->date,
            'time' => $event->time,
            'GuestSpeaker' => $event->GuestSpeaker,
            'image_url' => $event->image_url,
            'description' => $event->description
        ]);

        $event = Events::where('id', $event->id)->delete();
        $imageName = $event->input('image_name');
        $imagePath = public_path('eventsImages' . $imageName);

        if (File::exists($imagePath)) {
            File::delete($imagePath);
            return response()->json(['message' => 'Image deleted successfully']);
        } else {
            return response()->json(['message' => 'Image not found'], 404);
        }

        return redirect()->route('admin.events.index');
    }
    public function update(Request $request)
    {
        //
    }

    public function Api()
    {
        $events = Events::get();
        return $events;
    }

    //Subscribed users control

    public function user()
    {
        $users = SubscribedUser::get();
        return view('admin.subscribed-Users', compact('users'));
    }

}

