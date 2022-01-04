<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tranche extends Model
{
    use HasFactory;

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function media()
    {
        return $this->hasMany(TrancheMedia::class);
    }

    public function image()
    {
        return TrancheMedia::where('tranche_id',$this->id)->first()->path;
    }
}
