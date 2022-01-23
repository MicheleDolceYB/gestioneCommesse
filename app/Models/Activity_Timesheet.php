<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity_Timesheet extends Model
{
    use HasFactory;

    public function activity()
    {
        return $this->belongsToMany(Activity::class);
    }

    public function timesheet()
    {
        return $this->belongsToMany(Timesheet::class);
    }
}
