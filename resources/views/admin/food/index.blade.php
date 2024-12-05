@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center justify-content-between">
                            <p style="width: fit-content" class="m-0">Food</p>
                            <a class="btn btn-primary" style="width: fit-content; background: #035C6E; border: none;"
                                href="/admin/food/new">Add Food</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead class="">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">name</th>
                                    <th scope="col">calories</th>
                                    <th scope="col">carbohydrates</th>
                                    <th scope="col">fat</th>
                                    <th scope="col">protein</th>
                                    <th scope="col">sugar</th>
                                    <th class="d-flex justify-content-center" scope="col">actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($foods as $food)
                                    <tr>
                                        <th scope="row">{{ $food->id }}</th>
                                        <th>{{ $food->name }}</th>
                                        <th>{{ $food->calories }}</th>
                                        <th>{{ $food->carbs }}</th>
                                        <th>{{ $food->fat }}</th>
                                        <th>{{ $food->protein }}</th>
                                        <th>{{ $food->sugar }}</th>
                                        <th><div class=" d-flex flex-row justify-content-center">
                                            <a class="btn btn-outline-secondary mx-2" style="width: fit-content"
                                                href="/admin/food/{{ $food->id }}/edit">edit</a>
                                            <form action="/admin/food/{{ $food->id }}/delete" method="POST">
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
