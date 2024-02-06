@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="mt-5"> Edit event</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="row">

            <form action="{{ route('admin.events.update', $event->id) }}" method="POST">

                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        placeholder="Insert name" name= "name" value="{{ old('name') ?? $event->name }}">
                </div>
                <div class="mb-3">
                    <label for="organizer" class="form-label">Organizer</label>
                    <input type="text" class="form-control @error('organizer') is-invalid @enderror" id="organizer"
                        placeholder="Insert Descriptoin" name= "organizer"
                        value="{{ old('organizer') ?? $event->organizer }}">
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="text" class="form-control @error('date') is-invalid @enderror" id="date"
                        placeholder="Insert date" name= "date" value="{{ old('date') ?? $event->date }}">
                </div>

                <div class="mb-3">
                    <label for="capacity" class="form-label">Capacity</label>
                    <input type="number" class="form-control @error('capacity') is-invalid @enderror" id="capacity"
                        placeholder="Insert capacity" name= "capacity" value="{{ old('date') ?? $event->capacity }}">
                </div>
                {{--                 <div class="mb-3">
                    <label for="exampleSelect" class="form-label">Select multiple options</label>
                    <select class="form-select" name="authors[]" id="authors" multiple>

                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach

                    </select>
                </div> --}}
                <div>
                    <button type="submit" class="btn btn-primary">Modify</button>
                </div>
            </form>
        </div>
        <a href="{{ route('admin.events.index') }}" class="btn btn-secondary w-25 mt-3 mb-5 text-white">Go Back</a>
    </div>

@endsection
