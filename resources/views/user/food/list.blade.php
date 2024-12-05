@extends('main')

@section('content')
    <div class="container mt-6 my-md-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="/{{ $user->id }}/food/amount" class="card">
                    <div class="card-header">
                        <div class="row align-items-center justify-content-between">
                            <p style="width: fit-content" class="m-0">Food</p>

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
                                    <th scope="col">carbohydrates</th>
                                    <th scope="col">fat</th>
                                    <th scope="col">protein</th>
                                    <th scope="col">sugar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($foods as $food)
                                    <tr>
                                        <th scope="col"><input type="checkbox" name="selected_foods[]"
                                                value="{{ $food->id }}"></th>
                                        <th scope="col">{{ $food->name }}</th>
                                        <th scope="col">{{ $food->calories }}</th>
                                        <th scope="col">{{ $food->carbs }}</th>
                                        <th scope="col">{{ $food->fat }}</th>
                                        <th scope="col">{{ $food->protein }}</th>
                                        <th scope="col">{{ $food->sugar }}</th>
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
