<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commesse extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['client_id','stato','link','description'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function project()
    {
        return $this->hasMany(Project::class);
    }
}
