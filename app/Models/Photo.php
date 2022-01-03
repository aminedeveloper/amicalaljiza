<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    public function album(){
        return $this->belongsTo(Album::class);
    }

    public function photo()
    {
        return $this->hasMany(TranchePhoto::class);
    }

    public function image()
    {
        return TranchePhoto::where('photo_id',$this->id)->first()->path;
    }
}
