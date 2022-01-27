<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stima extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['dependent_id','activity_id','stima'];

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }


    public function dependent()
    {
        return $this->belongsTo(Dependent::class);
    }
}
