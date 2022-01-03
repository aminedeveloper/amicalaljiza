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

    public function video()
    {
        return $this->hasMany(TrancheVideos::class);
    }

    public function media()
    {
        return TrancheVideos::where('video_id',$this->id)->first()->path;
    } 
    
}
