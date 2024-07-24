@extends('layouts.admin')
@section('content')
    <h1 class="text-center mt-2 mb-4">Edit <span class="fw-lighter text-warning-emphasis">{{ $project->name }}</span></h1>
    <form class="mt-5">
        <div class="mb-3">
          <label for="name" class="form-label">Project Title</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $project->name) }}">
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
