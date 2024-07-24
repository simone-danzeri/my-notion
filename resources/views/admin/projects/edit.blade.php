@extends('layouts.admin')
@section('content')
    <h1 class="text-center mt-2 mb-4">Edit <span class="fw-lighter text-warning-emphasis">{{ $project->name }}</span></h1>
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
    <form class="mt-5" method="POST" action="{{ route('admin.projects.update', ['project' => $project->slug]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="name" class="form-label">Project Title</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $project->name) }}">
        </div>
        <div class="mb-3">
            <label class="mb-2">Change technologies used</label>
            @foreach ($technologies as $technology)
            <div class="form-check">
                @if ($errors->any())
                    <input class="form-check-input" type="checkbox" @checked(in_array($technology->id, old('techs', []))) value="{{$technology->id}}" id="tech-{{$technology->id}}" name="techs[]">
                @else
                    <input class="form-check-input" type="checkbox" @checked($project->technologies->contains($technology)) value="{{$technology->id}}" id="tech-{{$technology->id}}" name="techs[]">
                @endif
                <label class="form-check-label" for="tech-{{$technology->id}}">
                    {{ $technology->name }}
                </label>
            </div>
            @endforeach
        </div>
        <div class="mb-3">
            <label for="type_id" class="form-label">Project type</label>
            <select class="form-select" id="type_id" name="type_id" aria-label="Default select example">
                <option value="">Open this select menu</option>
                @foreach ($types as $type)
                    <option @selected($type->id == old('type_id', $project->type_id)) value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="summary" class="form-label">Project Summary</label>
            @if ($project->summary)
                <textarea class="form-control" id="summary" rows="3">{{ old('summary', $project->summary) }}</textarea>
            @else
                <textarea class="form-control" id="summary" rows="3" placeholder="Write here this project's summary">{{ old('summary', $project->summary) }}</textarea>
            @endif
        </div>
        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
@endsection
