<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['name'];

    public function commesse()
    {
        return $this->hasMany(Commesse::class);
    }
}
