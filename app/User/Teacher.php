<?php

namespace App\User;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'full_name', 'email', 'password',
    ];
    protected $hidden = [
        'password',
    ];
}
