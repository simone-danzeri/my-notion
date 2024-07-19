@extends('layouts.admin')
@section('content')
    <section>
        <div class="container">
            <h1 class="text-center mt-3">EDIT - <span class="text-warning">{{$event->title}}</span></h1>
            {{-- Errors --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- Errors --}}
            <form enctype="multipart/form-data" action="{{route('admin.events.update', ['event' => $event->id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title *</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $event->title) }}" required maxlength="255">
                </div>
                <div class="mb-3">
                    <label for="start" class="form-label">Start *</label>
                    <input type="date" class="form-control" id="start" name="start" value="{{ old('start', $event->start) }}" required>
                </div>
                <div class="mb-3">
                    <label for="end" class="form-label">End *</label>
                    <input type="date" class="form-control" id="end" name="end" value="{{ old('end', $event->end) }}" required>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Where</label>
                    <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $event->location) }}" maxlength="255">
                </div>
                <button type="submit" class="btn btn-primary my-3">SAVE</button>
            </form>
        </div>
    </section>
@endsection
