@extends('layouts.admin')
@section('content')
    <h1 class="text-center mt-2 mb-5">All Projects</h1>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($projects as $project)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body overflow-y-auto">
                            <h2 class="card-title h-50">{{ $project->name }}</h2>
                            <small class="card-text fw-lighter">{{ $project->slug }}</small>
                            <div class="mt-2">
                                @if ($project->summary)
                                    <p class="card-text">{{ $project->summary }}</p>
                                @else
                                    <p class="card-text">No Summary available for this project.</p>
                                @endif
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <div class="d-flex flex-column">
                                <small class="text-body-secondary">Created at {{ $project->created_at }}</small>
                                <small class="text-body-secondary">Last updated at {{ $project->updated_at }}</small>
                            </div>
                            <div>
                                <a href="{{route('admin.projects.show', ['project' => $project->slug])}}" class="btn btn-success align-self-start">Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
