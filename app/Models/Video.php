<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public function album(){
        return $this->belongsTo(Album::class);
    }

    public function photo()
    {
        return $this->hasMany(TrancheVideos::class);
    }

}
