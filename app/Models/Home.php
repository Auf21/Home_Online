<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Image;

class Home extends Model
{
    use HasFactory;
protected $table='homes';
    protected $fillable = [
        'info_position',
        'room_no',
        'area',
        'condition',
        'floor',
        'cladding',
        'bathroom_no',
        'brdroom_no',
        'carage',
         'address',
         'price',
         'user_id',
         'expanse',
         'argement',
         'type',
         
     ];
     /*   public function img(){
        return $this->hasMany(Image::class);
     }   */
     
     /* public function user(){
        return $this->belongsTo(User::class);
     } */
     
     public static function homeimages(){
        return DB::table('homes as h')
                ->leftJoin('images as i', 'h.id', '=', 'i.home_id')
                ->select('i.path')
                ->get();
    } 

      public function image()
    {
         return $this->hasMany(Image::class,'home_id');
    }  
   


}
