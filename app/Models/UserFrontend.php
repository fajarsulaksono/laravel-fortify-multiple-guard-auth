<?php
namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserFrontend extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'user_frontends';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
