<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependent_activity extends Model
{
    use HasFactory;

    public function dependent()
    {
        return $this->belongsToMany(Dependent::class);
    }

    public function activity()
    {
        return $this->belongsToMany(Activity::class);
    }
}
