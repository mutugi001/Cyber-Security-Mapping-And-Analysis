<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubscribedUser extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'email'
    ];
}
