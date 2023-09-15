<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Authenticatable implements AuthenticatableContract
{
  //  use HasFactory;
  // protected $table='users';
    protected $fillable = [
       'id',
        'name',
        'lname',
        'email',
        'password',
        'phone',
        'gender',
        'birthday_date',
        'country',
        'avilable'   
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function home(){
        return $this->hasMany(Home::class);
     }

    public function around(){
        return $this->hasMany(around::class);
     }
}
