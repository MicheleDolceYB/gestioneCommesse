<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    public function project()
    {
        return $this->belongsTo(Project::class);
    }


    public function dependent_activity()
    {
        return $this->belongsToMany(Dependent_Activity::class);
    }
    

    public function stima()
    {
        return $this->hasMany(Stima::class);
    }

    
    public function activity_timesheet()
    {
        return $this->belongsToMany(Activity_Timesheet::class);
    }
}
