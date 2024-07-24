@extends('layouts.admin')
@section('content')
    <h1 class="text-center mt-2 mb-2">{{ $project->name }}</h1>
    <div class="container">
        <div class="infos mt-5">
            <div class="slug my-2">
                <span class="fw-bold">Slug:</span> <small>{{ $project->slug }}</small>
            </div>
            <div class="techs my-2">
                <span class="fw-bold">Technologies used:</span>
                @foreach ($project->technologies as $techs)
                    <small class="badge rounded-pill text-bg-info">{{ $techs->name }}</small>
                @endforeach
            </div>
            <div class="type">
                <span class="fw-bold">Project type:</span> <small class="fst-italic">{{ $project->type['name'] }}</small>
            </div>
            <div class="summary my-5">
                @if ($project->summary)
                    <p>{{ $project->summary }}</p>
                @else
                    <p>No Summary for this project. <br> You can add it <a href="{{route('admin.projects.edit', ['project' => $project->slug])}}">here</a> if you want!</p>
                @endif
            </div>
        </div>
    </div>
@endsection
