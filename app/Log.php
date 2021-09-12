<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = "logs";
    protected $fillable = ['user_id', 'url', 'method', 'request_body', 'device', 'ip', 'country', 'city'];
    protected $casts = [
        'request_body' => 'array'
    ];
}
