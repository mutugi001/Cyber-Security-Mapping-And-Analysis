<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Services\AdminApiService;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    protected $AdminApiService;
    public function downloadImage($url)
    {
        $events = $this->AdminApiService->getEvents();
        foreach($events as $event){
        redirect()->route('downloadImage', ['url'=> $event['image_url']]);
        }


        $imageUrl = $url;
        $imageName = basename($imageUrl);
        $imagePath = public_path('eventsImages/' . $imageName);

        try {
            $response = Http::get($imageUrl);
            if ($response->successful()) {
                Storage::disk('public')->put('eventsImages/' . $imageName, $response->body());
                return response()->json(['message' => 'Image downloaded successfully']);
            } else {
                return response()->json(['message' => 'Error downloading image'], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error downloading image: ' . $e->getMessage()], 500);
        }
    }
    }
    