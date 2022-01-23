<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function commesse()
    {
        return $this->belongsTo(Commesse::class);
    }

    public function activity()
    {
        return $this->hasMany(Activity::class);
    }
}
