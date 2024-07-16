<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'titolo',
        'descrizione',
        'immagine'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function lenguages()
    {
        return $this->belongsToMany(Lenguage::class);
    }
}
