@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            @foreach ($events as $event)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">{{ $event->name }}</div>
                        <div class="card-body">
                            {{ $event->organizer }} -
                            {{ $event->date }} -
                            {{ $event->capacity }}
                        </div>
                        {{--                         <div class="card-footer">
                            {{ $event->type ? $event->type->name : 'No Type' }}

                        </div> --}}
                        {{--                         <div class="card-footer">
                            <span><strong>Authors:</strong></span>
                            @if (count($event->authors) > 0)
                                @foreach ($event->authors as $author)
                                    {{ $author->name }}
                                    ({{ $author->country }})
                                @endforeach
                            @else
                                <span>No Author found</span>
                            @endif

                        </div> --}}
                    </div>
                    <div>
                        <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-primary m-auto text-white">Edit
                            this event</a>
                    </div>
                    <div>
                        <form class=""position-absolute action="{{ route('admin.events.destroy', $event->id) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link text-warning" onclick="return confirmDelete()">
                                <i class="fa-solid fa-trash"></i> Delete
                            </button>
                        </form>
                        <script>
                            function confirmDelete() {
                                return confirm('Are you sure you want to delete this item?');
                            }
                        </script>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
