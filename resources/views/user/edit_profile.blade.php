@extends('main')

@section('content')
    <div class="container mt-6 my-md-5">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center justify-content-between">
                    <div class="d-flex flex-row align-items-center col-2">
                        <a style="width: fit-content" class="btn p-0" href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-compact-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223" />
                            </svg>
                        </a>
                        <p style="width: fit-content" class="m-0 px-1">Edit Profile</p>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="/profile/{{ $user->id }}/update" method="POST">
                    @csrf
                    <fieldset >
                        <legend>{{ $user->first_name . ' ' . $user->last_name }}</legend>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" id="email" disabled class="form-control"
                                value="{{old('email', $user->email) }}">
                        </div>

                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="text" id="age" name="age" class="form-control"
                                value="{{ old('age', $user->age) }}">
                        </div>

                        <div class="row mb-3">
                            <label for="gender" class="cform-label">Gender</label>

                            <div class="col-md-1 d-flex align-items-center">
                                <input id="gender_f" {{ old('gender', $user->gender) == 'F'? "checked" : "" }} class=" form-check mx-1" type="radio" class="form-control"
                                    name="gender" required value="F">
                                <span>Female</span>
                            </div>
                            <div class="col-md-1 d-flex align-items-center">
                                <input id="gender_m" {{ old('gender', $user->gender) == 'M'? "checked" : "" }} class=" form-check mx-1" type="radio" class="form-control"
                                    name="gender" required value="M">
                                <span>Male</span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="calorie_goal" class="form-label">Daily Calorie Goal</label>
                            <input type="text" id="calorie_goal" name="calorie_goal" class="form-control"
                                value="{{ $user->calorie_goal }}">
                        </div>

                        <div class="mb-3">
                            <label for="height" class="form-label">Height</label>
                            <input type="text" id="height" name="height" class="form-control"
                                value="{{ $user->height }}">
                        </div>

                        <div class="mb-3">
                            <label for="weight" class="form-label">Weight</label>
                            <input type="text" id="weight" name="weight" class="form-control"
                                value="{{ $user->weight }}">
                        </div>

                        <div class="mb-3">
                            <label for="goal_weight" class="form-label">Goal Weight</label>
                            <input type="text" id="goal_weight" name="goal_weight" class="form-control"
                                value="{{ $user->goal_weight }}">
                        </div>
                    </fieldset>

                    <button type="submit" href="/profile/{{ $user->id }}/edit" class="btn btn-primary col-2" style="background: #035C6E; width: fit-content">Edit Profile</button>
                </form>
            </div>

        </div>
    </div>
@endsection
