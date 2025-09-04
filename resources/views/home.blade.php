@extends('layouts.app')

@section('title', 'Welcome to Dungeons of Laravel!')

@section('content')
    <h1 style="text-align: center;">Welcome to Dungeons of Laravel!</h1>
    <form action="{{ route('characters.index') }}" method="GET" class="mb-4">
 <div class="row g-2 justify-content-center">


    <div class="col-md-2">
      <form action="{{ route('characters.index') }}" method="GET" class="mb-4">
        <button type="submit" class="btn btn-primary w-100">View Characters</button>
      </form>
    </div>

    <div class="col-md-2">
    <form action="{{ route('characters.create') }}" method="GET" class="mb-4">
        <button type="submit" class="btn btn-primary w-100">Create Character</button>
    </form>
    </div>

</div>
@endsection
