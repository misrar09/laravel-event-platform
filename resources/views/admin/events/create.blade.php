@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="mt-5"> Add New Event</h1>

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

            <form action="{{ route('admin.events.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        placeholder="Insert name" name= "name" value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label for="organizer" class="form-label">Organizer</label>
                    <input type="text" class="form-control @error('organizer') is-invalid @enderror" id="organizer"
                        placeholder="Insert Descriptoin" name= "organizer" value="{{ old('organizer') }}">
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="text" class="form-control @error('date') is-invalid @enderror" id="date"
                        placeholder="Insert Conslution" name= "date" value="{{ old('date') }}">
                </div>
                <div class="mb-3">
                    <label for="capacity" class="form-label">Capacity</label>
                    <input type="text" class="form-control @error('capacity') is-invalid @enderror" id="capacity"
                        placeholder="Insert Conslution" name= "capacity" value="{{ old('capacity') }}">
                </div>
                {{--                 <div class="mb-3">
                    <label for="exampleSelect" class="form-label">Select multiple options</label>
                    <select class="form-select" name="authors[]" id="authors" multiple>

                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach

                    </select>
                </div> --}}
        </div>

        <button type="submit" class="btn btn-primary">Insert</button>
        </form>
        <a href="{{ route('admin.events.index') }}" class="btn btn-secondary w-25 mt-3 mb-5 text-white">Go Back</a>
    </div>

@endsection
