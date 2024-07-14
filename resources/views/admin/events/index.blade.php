@extends('layouts.admin')
@section('content')
    <h1 class="text-center mb-5">Calendar</h1>
    @if ($events->isEmpty())
        <p class="text-center mt-5">No events</p>
    @else
    <div class="d-flex flex-wrap">
        @foreach ($events as $event)
        <div class="card my-5 mx-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $event->title }}</h5>
                <div class="card-text">
                    <span class="bold">Start:</span> {{ $event->start }}
                </div>
                <div class="card-text">
                    <span class="bold">End:</span> {{ $event->end }}
                </div>
                @if ($event->location)
                    <div class="card-text my-2">
                        <span class="bold">Where:</span> {{ $event->location }}
                    </div>
                @else
                    <div class="card-text my-2">
                        <span class="bold">No place specified</span>
                    </div>
                @endif
                <div class="card-text fw-lighter mt-4 mb-2">
                    <small>Created at: {{ $event->created_at }}</small>
                </div>
                <a href="{{route('admin.events.edit', ['event' => $event->id])}}" class="btn btn-warning">Edit</a>
            </div>
        </div>
        @endforeach
    </div>
    @endif
@endsection
