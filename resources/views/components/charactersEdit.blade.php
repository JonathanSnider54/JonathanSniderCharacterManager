@extends('layouts.app')

@section('title', 'Edit Character')

@section('content')
    <h1>Edit Character</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('characters.update', $character->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="name" class="form-label">Character Name</label>
            <input type="text" class="form-control" id="name" name="name"
                   value="{{ old('name', $character->name) }}">
        </div>

        <div class="mb-3">
            <label for="class" class="form-label">Choose a class:</label>
            <select name="class" id="characterClass" class="form-select">
                <option value="warrior" {{ $character->class === 'warrior' ? 'selected' : '' }}>Warrior</option>
                <option value="archer" {{ $character->class === 'archer' ? 'selected' : '' }}>Archer</option>
                <option value="wizard" {{ $character->class === 'wizard' ? 'selected' : '' }}>Wizard</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="health" class="form-label">Health Points</label>
            <input type="number" class="form-control" id="health" name="health"
                   value="{{ old('health', $character->health) }}">
        </div>

        <div class="mb-3">
            <label for="level" class="form-label">Starting Level</label>
            <input type="number" class="form-control" id="level" name="level"
                   value="{{ old('level', $character->level) }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Character Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $character->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('characters.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
