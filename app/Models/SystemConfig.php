<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemConfig extends Model
{
    use HasFactory;
    protected $fillable = [
        'api_key',
        'database_host',
        'database_username',
        'database_password',
        'database_name',
    ];
}
