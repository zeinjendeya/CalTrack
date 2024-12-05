@extends('main')

@section('content')
    <div class="d-flex justify-content-around text-black" style="background: #cae5eb">
        <img src="{{ url('./images/undraw_workout_gcgu.svg') }}" width="350" height="350" class="col-4" alt="workout">
        @if (isset($today_user_foods) && isset($today_user_exercise))
            <div class="d-flex flex-row justify-content-around align-items-center col-5">
                <div class="d-flex flex-col align-items-center">
                    <p style="font-weight: bold; color: #035C6E;">Food Calories</p>
                    <p>{{ $today_user_foods }}</p>
                </div>
        
                <div class="d-flex flex-col align-items-center">
                    <p style="font-weight: bold; color: #035C6E;">Exercise Calories</p>
                    <p>{{ $today_user_exercise }}</p>
                </div>
            </div>
        @endif
    </div>
    <div class="container mt-6 my-md-5">
        @foreach ($blogs as $blog)
            <div class="card my-2">
                <div class="card-header">
                    {{ $blog->title }}
                </div>
                <div class="card-body">
                    {!! explode('. ', $blog->body)[0] !!}
                </div>
            </div>

            <div class="card my-2">
                <div class="card-header">
                    {{ $blog->title }}
                </div>
                <div class="card-body">
                    {!! $blog->body !!}
                </div>
            </div>

            <div class="card my-2">
                <div class="card-header">
                    {{ $blog->title }}
                </div>
                <div class="card-body">
                    {!! $blog->body !!}
                </div>
            </div>
        @endforeach
    </div>
@endsection
