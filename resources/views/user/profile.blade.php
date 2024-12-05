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
                        <p style="width: fit-content" class="m-0 px-1">Profile Details</p>
                    </div>
                    <a href="/profile/{{ $user->id }}/edit" class="btn btn-primary col-2 mx-2" style="background: #035C6E; width: fit-content">Edit Profile</a>
                </div>
            </div>

            <div class="card-body">
                <form>
                    <fieldset disabled>
                        <legend>{{ $user->first_name . ' ' . $user->last_name }}</legend>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Email</label>
                            <input type="text" id="disabledTextInput" class="form-control"
                                value="{{ $user->email }}" placeholder="Disabled input">
                        </div>

                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Age</label>
                            <input type="text" id="disabledTextInput" class="form-control"
                                value="{{ $user->age }}" placeholder="Disabled input">
                        </div>

                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Gender</label>
                            <input type="text" id="disabledTextInput" class="form-control"
                                @if ($user->gender == 'F') value="Female" @else value="Male" @endif
                                placeholder="Disabled input">
                        </div>

                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Daily Calorie Goal</label>
                            <input type="text" id="disabledTextInput" class="form-control"
                                value="{{ $user->calorie_goal }}" placeholder="Disabled input">
                        </div>

                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Height</label>
                            <input type="text" id="disabledTextInput" class="form-control"
                                value="{{ $user->height }}" placeholder="Disabled input">
                        </div>

                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Weight</label>
                            <input type="text" id="disabledTextInput" class="form-control"
                                value="{{ $user->weight }}" placeholder="Disabled input">
                        </div>

                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Goal Weight</label>
                            <input type="text" id="disabledTextInput" class="form-control"
                                value="{{ $user->goal_weight }}" placeholder="Disabled input">
                        </div>
                    </fieldset>
                </form>
            </div>

        </div>
    </div>
@endsection
