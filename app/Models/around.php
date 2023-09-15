<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class around extends Model
{
    use HasFactory;
    protected $table = "around";

    protected $fillable=['
    name, 
    phone,
    email,
    message,
    settime,
    user_id
    '];

    public function user(){
        return $this->belongsTo(User::class);
     }


}
