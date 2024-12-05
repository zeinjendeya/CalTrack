@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center justify-content-between">
                            <p style="width: fit-content" class="m-0">Exercises</p>
                            <a class="btn btn-primary" style="width: fit-content; background: #035C6E; border: none;"
                                href="/admin/exercise/new">Add Exercise</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead class="">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">name</th>
                                    <th scope="col">calories</th>
                                    <th class="d-flex justify-content-center" scope="col">actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($exercises as $exercise)
                                    <tr>
                                        <th scope="row">{{ $exercise->id }}</th>
                                        <th>{{ $exercise->name }}</th>
                                        <th>{{ $exercise->calories }}</th>
                                        <th><div class=" d-flex flex-row justify-content-center">
                                            <a class="btn btn-outline-secondary mx-2" style="width: fit-content"
                                                href="/admin/exercise/{{ $exercise->id }}/edit">edit</a>
                                            <form action="/admin/exercise/{{ $exercise->id }}/delete" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">delete</button>
                                            </form>
                                        </div></th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection