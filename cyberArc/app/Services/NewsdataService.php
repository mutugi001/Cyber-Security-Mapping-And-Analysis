<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class NewsdataService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('NEWSDATA_API_KEY');
    }

    public function getNews($query = '', $country= ['Kenya','Tanzania'])
    {
        $response = Http::withOptions(['verify' => False])->get('https://newsdata.io/api/1/news', [
            'apikey' => $this->apiKey,
            'q' => $query,
            
        ]);

        return $response->json();
    }
}
