@extends('layouts.app')

@section('title', 'Character Details')

@section('content')
    <div class="container">
        <h1>{{ $character->name }}</h1>

        <ul class="list-group mb-3">
            <li class="list-group-item"><strong>Class:</strong> {{ ucfirst($character->characterClass->name) }}</li>
            <li class="list-group-item"><strong>Level:</strong> {{ $character->level }}</li>
            <li class="list-group-item"><strong>Health Points:</strong> {{ $character->health }}</li>
            @if($character->description)
                <li class="list-group-item"><strong>Description:</strong> {{ $character->description }}</li>
            @endif
        </ul>

    <h3>Abilities</h3>
    <ul class="list-group mb-3">
        @foreach($character->characterClass->abilities as $ability)
            <li class="list-group-item">
                <strong>{{ $ability->name }}</strong> – {{ $ability->description ?? 'No description' }}
                <br>
                <small><strong>Damage:</strong> {{ $ability->damage }}</small>
            </li>
        @endforeach
    </ul>

        <a href="{{ route('characters.index') }}" class="btn btn-secondary">Back to List</a>
        <form action="{{ route('characters.destroy', $character->id) }}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-secondary btn-danger"
        onclick="return confirm('Are you SURE you want to do this?')">
        Delete
    </button>
    </div>
@endsection
