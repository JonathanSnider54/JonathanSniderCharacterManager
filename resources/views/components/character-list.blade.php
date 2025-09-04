<ul class="list-group">
    @foreach ($characters as $character)
        <li class="list-group-item align-items-center">
        {{ $character->name }}
               @if ($character->trashed())
                <form action="{{ route('characters.restore', $character->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-sm btn-success" 
                        onclick="return confirm('Restore this character?')">
                        Restore
                    </button>
                </form>
                @else
            
            <a href="{{ route('characters.show', $character->id) }}" class="btn btn-sm btn-primary">
                View
            </a>
            <a href="{{ route('characters.edit', $character->id) }}" class="btn btn-sm btn-warning">Edit</a>
<form action="{{ route('characters.destroy', $character->id) }}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-sm btn-danger"
        onclick="return confirm('Are you SURE you want to do this?')">
        Delete
    </button>
</form>
@endif
        </li>
@endforeach
</ul>
