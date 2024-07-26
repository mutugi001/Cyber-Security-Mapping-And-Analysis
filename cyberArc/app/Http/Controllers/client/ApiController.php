<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Models\SubscribedUser;
use App\Services\AdminApiService;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function NewsMails()
    {
        $emails = SubscribedUser::get('email'); 
        return $emails;
    }

}
