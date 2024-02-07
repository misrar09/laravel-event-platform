@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            @foreach ($events as $event)
                <div class="col-md-3">
                    <div class="card h-75">
                        <span>userID: {{ $event->user_id ? $event->user_id : 'no userID found' }}</span>
                        <div class="card-header"><strong>{{ $event->name }}</strong></div>
                        <div class="card-body">
                            <strong>Organizer:</strong> {{ $event->organizer }} <br>
                            <strong>Date:</strong> {{ $event->date }} <br>
                            <strong>Capacity:</strong> {{ $event->capacity }}
                        </div>

                        <div class="card-footer">
                            <span><strong>Tags:</strong></span>
                            @if (count($event->tags) > 0)
                                @foreach ($event->tags as $tag)
                                    {{ $tag->name }}
                                @endforeach
                            @else
                                <span>No Tag found</span>
                            @endif

                        </div>
                    </div>
                    <div class="mt-2">
                        <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-primary m-auto text-white">Edit
                            this event</a>
                    </div>
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
                    <div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
