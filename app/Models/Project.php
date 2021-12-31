<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public function tranche()
    {
        return $this->belongsTo(Tranche::class,'tranche_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
