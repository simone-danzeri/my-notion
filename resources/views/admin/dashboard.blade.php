@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="fs-4 my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h1>Hello {{ $user->name }}!</h1>
                </div>
            </div>
            <div class="functions my-5">
                <ul class="ms-li p-0">
                    <li class="mb-5">
                        <a class="" href="{{route('admin.events.index')}}"><i class="fa-regular fa-calendar-days me-2"></i>Calendar</a>
                    </li>
                    <li class="my-5">
                        <a class="" href="#"><i class="fa-solid fa-list-check me-2"></i>To Do List</a>
                    </li>
                    <li class="my-5">
                        <a class="" href="#"><i class="fa-solid fa-diagram-project me-2"></i>Projects</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
