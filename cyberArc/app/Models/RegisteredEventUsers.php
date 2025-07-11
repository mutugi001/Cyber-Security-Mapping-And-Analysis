<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RegisteredEventUsers extends Model
{
    use HasFactory,HasUuids;
    
    protected $fillable = [
        'name',
        'email',
        'contact',
        'event_id'
    ];
}
