@extends('main')

@section('content')
    <div class="container mt-6 my-md-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="/{{ $user->id }}/exercise/process" method="POST" class="card">
                    @csrf
                    <div class="card-header">
                        <div class="row align-items-center justify-content-between">
                            <p style="width: fit-content" class="m-0">Exercise</p>

                            <button class="btn btn-primary" style="width: fit-content; background: #035C6E; border: none;"
                                type="submit">Add</button>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead class="">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">name</th>
                                    <th scope="col">calories</th>
                                    <th scope="col">time in minutes</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($exercises as $exercise)
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">{{ $exercise->name }}</th>
                                        <th scope="col">{{ $exercise->calories }}</th>
                                        <th scope="col"><input class=" form-control" type="number"
                                                name="times[{{ $exercise->id }}]"></th>
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
