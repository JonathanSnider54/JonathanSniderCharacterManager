<?php

namespace App\Services;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterService {
    public function getAllCharacters() {
        //return Character::all();
        return Character::withTrashed()->get();
    }

    
    public function searchCharacters(Request $request)
    {
        $query = Character::withTrashed();

        if ($request->filled('search_name')) {
            $query->where('name', 'LIKE', '%' . $request->search_name . '%');
        }

        if ($request->filled('search_class')) {
            $query->where('class', $request->search_class);
        }

        return $query->get();
    }

        public function createCharacter(array $data)
    {
        return Character::create([
            'name' => $data['name'],
            'class_id' => $data['class_id'],
            'level' => $data['level'],
            'health_points' => $data['health'],
            'description' => $data['description'] ?? null,
        ]);
    }

    public function getCharacterById($id)
{
    return \App\Models\Character::find($id);
}

public function updateCharacter($id, array $data)
{
    $character = \App\Models\Character::findOrFail($id);

    $character->update([
        'name' => $data['name'],
        'class_id' => $data['class_id'],
        'level' => $data['level'],
        'health_points' => $data['health'],
        'description' => $data['description'] ?? null,
    ]);

    return $character;
}

public function deleteCharacter($id)
{
    $character = \App\Models\Character::findOrFail($id);
    $character->delete();
}

public function restoreCharacter($id)
{
    $character = Character::withTrashed()->findOrFail($id);
    $character->restore();
}

}
