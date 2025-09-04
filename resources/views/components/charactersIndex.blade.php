@extends('layouts.app')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


@section('title', 'Character List')

@section('content')
    <h1>List of characters</h1>
    <form action="{{ route('characters.index') }}" method="GET" class="mb-4">
    <div class="row g-2">
        <div class="col-md-5">
            <input type="text" name="search_name" class="form-control" placeholder="Search by name" value="{{ request('search_name') }}">
        </div>
        <div class="col-md-5">
            <select name="search_class" class="form-select">
                <option value="">All Classes</option>
                <option value="warrior" {{ request('search_class') == 'warrior' ? 'selected' : '' }}>Warrior</option>
                <option value="archer" {{ request('search_class') == 'archer' ? 'selected' : '' }}>Archer</option>
                <option value="wizard" {{ request('search_class') == 'wizard' ? 'selected' : '' }}>Wizard</option>
            </select>
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary w-100">Filter</button>
        </div>
    </div>
</form>
 <x-character-list :characters="$characters" />
     <form action="{{ route('characters.create') }}" method="GET" class="mb-4">
        <button type="submit" class="btn btn-med btn-success w-100">Create Character</button>
    </form>
@endsection
