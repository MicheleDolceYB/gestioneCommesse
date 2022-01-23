<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stima extends Model
{
    use HasFactory;

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }


    public function dependent()
    {
        return $this->belongsTo(Dependent::class);
    }
}
