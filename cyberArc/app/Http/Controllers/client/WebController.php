<?php

namespace App\Http\Controllers\client;

use Carbon\Carbon;
use App\Models\Events;
use App\Mail\QueryMail;
use Carbon\Traits\Date;
use App\Models\NewsFeed;
use Illuminate\Http\Request;
use App\Services\AdminApiService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class WebController extends Controller
{

    public function index()
    {
        return view('client/index');
    }
    public function learn()
    {
        $news = NewsFeed::get();
        $date = now()->format('F j, Y');
        
        // return $news;
        return view('client/learn', compact('news', 'date'));
        

    }
//     public function images($id)
// {
//     $event = $this->AdminApiService->getEvents::where();
//     foreach($events as $event){
//     $imageData = $event['image'];

//         // Create a response with the image data
//         return response($imageData)
//             ->header('Content-Type', 'image/jpeg') // Adjust this based on your image type
//             ->header('Content-Disposition', 'inline; filename="' . $event['Name'] . '"');
// }
// }

    public function events()
    {
        $events = Events::get();
        
        
        // foreach($events as $event){
        //     return $event['image_url'];
        // }
    //     
        return view('client/events/events',compact('events'));
}

    public function solution()
    {
        $news = NewsFeed::get();
        $date = now()->format('F j, Y');

        return view('client/solution', compact('news', 'date'));
    }

    public function about()
    {
        return view('client/about');
    }
    public function faq()
    {
        return view('client/faq');
    }

    public function query(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $email = env('MAIL_USERNAME');
        // return $email;
        Mail::to($email)->send(new QueryMail($request));

        return redirect()->route('web.about')->with('message', 'Email sent succefully. You will be contacted within 48hrs');
    }
}
