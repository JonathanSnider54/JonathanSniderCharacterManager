@extends('layouts.app')

@section('title', 'Create Character')

@section('content')
    <h1>Create New Character</h1>

<form action="{{ route('characters.store') }}" method="POST">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Character Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
  <div class="mb-3">
    <label for="class" class="form-label">Choose a class:</label>
    <select name="class" id="class" class="form-select">
  <option value="select">Select</option>
  <option value="warrior">Warrior</option>
  <option value="archer">Archer</option>
  <option value="wizard">Wizard</option>
    </select>
    </div>
            <div class="mb-3">
            <label for="name" class="form-label">Max Health</label>
            <input type="text" class="form-control" id="health" name="health">
        </div>
            </div>
            <div class="mb-3">
            <label for="name" class="form-label">Starting Level</label>
            <input type="text" class="form-control" id="level" name="level">
        </div>
          <div class="mb-3">
            <label for="description" class="form-label">Character Description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
