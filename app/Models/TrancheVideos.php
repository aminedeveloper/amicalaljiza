<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrancheVideos extends Model
{
    use HasFactory;


    public function video()
    {
        return $this->belongsTo(Photo::class,'photo_id');
    }
}
