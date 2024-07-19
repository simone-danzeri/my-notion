@extends('layouts.admin')
@section('content')
    <h1 class="text-center mb-5">Calendar</h1>
    @if ($events->isEmpty())
        <p class="text-center mt-5">No events</p>
    @else
    {{-- Success Message Section --}}
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    {{-- Success Message Section --}}
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
                <div class="actions d-flex justify-content-start gap-2">
                    <a href="{{route('admin.events.edit', ['event' => $event->id])}}" class="btn btn-warning">Edit</a>
                    <form enctype="multipart/form-data" action="{{route('admin.events.destroy', ['event' => $event->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Sei sicuro di voler eliminare questo evento?')" class="btn btn-danger">Done</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
@endsection
