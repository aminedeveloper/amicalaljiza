<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrancheMedia extends Model
{
    use HasFactory;

    public function tranche()
    {
        return $this->belongsTo(Tranche::class,'tranche_id');
    }
}
