<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZoomClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'meeting_id',
        'host_id',
        'topic',
        'agenda',
        'start_at',
        'duration',
        'type',
        'status',
        'email',
        'join_url',
        'password',
        'approval',
    ];
}
