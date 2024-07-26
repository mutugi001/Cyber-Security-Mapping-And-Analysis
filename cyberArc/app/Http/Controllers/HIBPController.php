<?php

namespace App\Http\Controllers;

use App\Services\HIBPService;
use Illuminate\Http\Request;

class HibpController extends Controller
{
    protected $hibpService;

    public function __construct(HIBPService $hibpService)
    {
        $this->hibpService = $hibpService;
    }

    public function checkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $result = $this->hibpService->checkEmail($request->input('email'));

        // return response()->json($result);
        return view('client.index', compact('result'));
    }
}
