<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Home;

class Image extends Model
{
    use HasFactory;
    protected $table='images';
    protected $fillable = [
        'id',
        'title',
        'path',
        'home_id',
        "created_at",
        'updated_at'
    ];

    public $timestamp=false;

     public static function homeimages($id){
        return DB::table('images as i')
                ->select('i.path')
                ->where('i.home_id',$id)
               ->get();
    } 

     /*    public function home(){
        return $this->belongsTo(Home::class,'home_id');
     }    */ 
}
