<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Поля, которые можно массово заполнять
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class);
    }

    // Поля, скрытые при сериализации (например, в JSON)
   /* protected $hidden = [
        'password',
        'remember_token',
    ];*/

}
