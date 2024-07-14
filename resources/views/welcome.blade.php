@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="container">
            <div class="title">
                <h1 class="text-center mt-5 ms-white fw-light">Welcome to your own customizable Notion</h1>
            </div>
            <div class="d-flex justify-content-between align-content-center ms-margin-top">
                <div class="functions">
                    <ul class="ms-li">
                        <li class="mb-5">
                            <a class="ms-link ms-white" href="#"><i class="fa-regular fa-calendar-days me-2 ms-white"></i>Calendar</a>
                        </li>
                        <li class="my-5">
                            <a class="ms-link ms-white" href="#"><i class="fa-solid fa-list-check me-2 ms-white"></i>To Do List</a>
                        </li>
                        <li class="my-5">
                            <a class="ms-link ms-white" href="#"><i class="fa-solid fa-diagram-project me-2 ms-white"></i>Projects</a>
                        </li>
                    </ul>
                </div>
                <div class="access">
                    <h3 class="ms-white w-75">Login and start planning!</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
