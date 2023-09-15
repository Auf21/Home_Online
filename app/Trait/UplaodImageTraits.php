<?php

namespace App\Trait;

trait UplaodImageTraits
{
    
public function UploadImage($folder,$image){//Upload Photo To DataBase
    $image->store('/',$folder);
    $filename=$image->hashName();
    return $filename;
}



}