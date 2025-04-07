<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    protected $table = 'licenses';
    protected $fillable = [
        'license_key',
        'domain',
        'status',
        'expires_at',
    ];
    
}
