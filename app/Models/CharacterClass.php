<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CharacterClass extends Model
{

    protected $fillable = ['name'];

    public function characters()
    {
        return $this->hasMany(Character::class, 'class_id');
    }

    public function abilities()
    {
    return $this->hasMany(Ability::class, 'class_id');
    }
}
