@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <p style="width: fit-content" class="m-0 h3">Food</p>
                    </div>

                    <div class="card-body">
                        <form action="/admin/food/create" method="POST">
                            @csrf
                            <div class="row justify-content-around">
                                <div class="mb-3 col-3">
                                    <label for="name" class="form-label">Food Name</label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                </div>

                                <div class="mb-3 col-3">
                                    <label for="calories" class="form-label">Calories</label>
                                    <input type="number" name="calories" class="form-control" id="calories" required>
                                </div>
                                <div class="mb-3 col-3">
                                    <label for="carbs" class="form-label">Carbohydrates</label>
                                    <input type="number" name="carbs" class="form-control" id="carbs" required>
                                </div>
                            </div>
                            <div class="row justify-content-around">
                                <div class="mb-3 col-3">
                                    <label for="fat" class="form-label">Fat</label>
                                    <input type="number" name="fat" class="form-control" id="fat" required>
                                </div>
                                <div class="mb-3 col-3">
                                    <label for="protein" class="form-label">Protein</label>
                                    <input type="number" name="protein" class="form-control" id="protein" required>
                                </div>
                                <div class="mb-3 col-3">
                                    <label for="sugar" class="form-label">Sugar</label>
                                    <input type="number" name="sugar" class="form-control" id="sugar" required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary" style="background: #035C6E">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
