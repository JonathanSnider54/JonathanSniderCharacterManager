<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Character extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'class_id',      
        'level',
        'health',
        'description',
    ];

    public function characterClass()
    {
        return $this->belongsTo(CharacterClass::class, 'class_id');
    }

}
