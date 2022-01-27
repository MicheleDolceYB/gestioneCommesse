<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['dependent_id','activity_id','data','ore'];

    public function dependent()
    {
        return $this->belongsTo(Dependent::class);
    }

    public function activity_timesheet()
    {
        return $this->belongsToMany(Activity_Timesheet::class);
    }
}
