<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lenguage extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome'
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
