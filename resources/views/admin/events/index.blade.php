@extends('layouts.admin')
@section('content')
    <h1 class="text-center mb-5">Calendar</h1>
    @if ($events->isEmpty())
        <p class="text-center mt-5">No events</p>
    @else
        <div class="d-flex flex-wrap my-5">
            @foreach ($events as $event)
                <div class="event">
                    <p class="event-title">{{ $event->title }}</p>
                    <div>
                        <span class="bold">Start:</span> {{ $event->start }}
                    </div>
                    <div>
                        <span class="bold">Start:</span> {{ $event->end }}
                    </div>
                    <small class="fw-lighter">
                        <span class="bold">Created at:</span> {{ $event->created_at }}
                    </small>
                </div>
            @endforeach
        </div>
    @endif
@endsection
