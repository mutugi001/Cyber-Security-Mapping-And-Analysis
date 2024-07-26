<?php

namespace App\Services;

use GuzzleHttp\Client;

class HIBPService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://haveibeenpwned.com/api/v3/',
            'verify' => storage_path('cacert.pem'),

        ]);
    }

    public function checkEmail($email)
    {
        try {
            $response = $this->client->request('GET', "breachedaccount/$email", [
                'headers' => [
                    'hibp-api-key' => env('HIBP_API_KEY'),
                    'User-Agent' => 'Laravel-App'
                ],
                'query' => [
                    'truncateResponse' => false
                ]
            ]);

            return json_decode($response->getBody()->getContents(), true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
