<?php

namespace App\Services;

use GuzzleHttp\Client;

class AdminApiService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => config('services.admin_app.base_url'),// replace with actual URL
            'headers' => [
                'Accept' => 'json',
            ],
        ]);
    }


    public function sendnewsEmails()
    {
        
    }
    public function getEvents()
{
    try {
        // Send GET request to 'events' endpoint
        $response = $this->client->get('events');
        // return $response;
        // $news = $response->getBody()->getContent();
        // return $response;
        // Decode the JSON response to a PHP array
        $events = json_decode($response->getBody()->__toString(), true);

        // Return the array of events
        return $events;
    } catch (\Exception $e) {
        // Handle exceptions (e.g., log error, rethrow, or return a default value)
        error_log($e->getMessage());
        throw $e;
    }
}

public function getEventsImages(Request $request)

    {
        $request->validate([
            'filename' => 'required|string',
            'image' => 'required|file',
        ]);

        $filename = $request->input('filename');
        $image = $request->file('image');

        $path = $image->storeAs('eventsImages', $filename, 'public');

        return response()->json(['message' => 'Image saved successfully', 'path' => $path], 200);
    }



public function getNews()
{
    try {
        // Send GET request to 'events' endpoint
        $response = $this->client->get('news');
        // return $response;
        // $news = $response->getBody()->getContent();
        // return $response;
        // Decode the JSON response to a PHP array
        $news = json_decode($response->getBody()->__toString(), true);

        // Return the array of events
        return $news;
    } catch (\Exception $e) {
        // Handle exceptions (e.g., log error, rethrow, or return a default value)
        error_log($e->getMessage());
        throw $e;
    }
}
}