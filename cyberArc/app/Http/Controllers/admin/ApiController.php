<?php

namespace App\Http\Controllers\admin;

use App\Models\Events;
use App\Models\NewsFeed;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function getEventData(){
        $events = Events::get();
        return response()->json($events);
    }
    public function getNewsData()
    {
        $news = NewsFeed::get();
        return $news;
    }
}
