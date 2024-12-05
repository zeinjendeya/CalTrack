@extends('main')

@section('content')
    <div class="container mt-6 my-md-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="/{{ $user->id }}/exercise/time" class="card">
                    <div class="card-header">
                        <div class="row align-items-center justify-content-between">
                            <p style="width: fit-content" class="m-0">Exercises</p>

                            <button class="btn btn-primary" style="width: fit-content; background: #035C6E; border: none;"
                                type="submit">Submit</button>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead class="">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">name</th>
                                    <th scope="col">calories</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($exercises as $exercise)
                                    <tr>
                                        <th scope="col"><input type="checkbox" name="selected_exercises[]"
                                                value="{{ $exercise->id }}"></th>
                                        <th scope="col">{{ $exercise->name }}</th>
                                        <th scope="col">{{ $exercise->calories }}</th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
