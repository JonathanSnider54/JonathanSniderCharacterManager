<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\CharacterService;

class CharacterController extends Controller
{


public function index(Request $request, CharacterService $characterService)
{
    $characters = $characterService->searchCharacters($request);

    return view('components.charactersIndex', compact('characters'));
}


public function create()
{
    return view('components.charactersCreate');
}

public function store(Request $request, CharacterService $characterService)
{
    $validated = $request->validate([
    'name' => 'required|string|max:255',
    'class' => ['required', 'not_in:select'],
    'level' => 'required|integer|min:1|max:100',
    'health' => 'required|integer|min:1',
    'description' => 'nullable|string'
    ],
    [
    'name.required' => 'Please enter a character name.',
    'class.not_in' => 'Please select a valid class.',
    'level.required' => 'Please enter a level between 1 and 100.',
    'level.min' => 'Level must be at least 1.',
    'level.max' => 'Level may not exceed 100.',
    'level.integer' => 'Level must be a number between 1 and 100.',
    'health.required' => 'Please enter health points.',
    'health.integer' => 'Health points must be a number between 1 and 80.',
    'health.min' => 'Health points must be at least 1.',
]);

    $characterService->createCharacter($validated);

    return redirect()->route('characters.index')->with('success', 'Character created successfully. Welcome to the Realm!');
}

public function show($id, CharacterService $characterService)
{
    $character = $characterService->getCharacterById($id);

    if (!$character) {
        abort(404, 'That character does not exist');
    }

    return view('components.charactersShow', compact('character'));
}

public function edit($id, CharacterService $characterService)
{
    $character = $characterService->getCharacterById($id);

    if (!$character) {
        abort(404, 'Character not found');
    }

    return view('components.charactersEdit', compact('character'));
}

public function update(Request $request, $id, CharacterService $characterService)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'class' => ['required', 'not_in:select'],
        'level' => 'required|integer|min:1|max:100',
        'health' => 'required|integer|min:1',
        'description' => 'nullable|string',
    ],
    [
        'name.required' => 'Please enter a character name.',
        'class.not_in' => 'Please select a valid class.',
        'level.required' => 'Please enter a level between 1 and 100.',
        'level.min' => 'Level must be at least 1.',
        'level.max' => 'Level may not exceed 100.',
        'level.integer' => 'Level must be a number between 1 and 100.',
        'health.required' => 'Please enter health points.',
        'health.integer' => 'Health points must be a number between 1 and 80.',
        'health.min' => 'Health points must be at least 1.',
    ]);

    $characterService->updateCharacter($id, $validated);

    return redirect()->route('characters.show', $id)
        ->with('success', 'Character updated successfully.');
}

public function destroy($id, CharacterService $characterService)
{
    $characterService->deleteCharacter($id);

    return redirect()->route('characters.index')->with('success', 'Character deleted successfully.');
}

public function restore($id, CharacterService $characterService)
{
    $characterService->restoreCharacter($id);

    return redirect()->route('characters.index')->with('success', 'Character restored successfully.');
}
}
