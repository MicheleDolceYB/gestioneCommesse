<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependent extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['name','surname','email'];

    public function dependent_activity()
    {
        return $this->belongsToMany(Dependent_Activity::class);
    }

    public function stima()
    {
        return $this->hasMany(Stima::class);
    }

    public function timesheet()
    {
        return $this->hasMany(Timesheet::class);
    }
}
