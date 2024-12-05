@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <p style="width: fit-content" class="m-0 h3">Exercise</p>
                    </div>

                    <div class="card-body">
                        <form action="/admin/exercise/create" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Exercise Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="calories" class="form-label">Calories</label>
                                <input type="number" name="calories" class="form-control" id="calories" required>
                            </div>

                            <button type="submit" class="btn btn-primary" style="background: #035C6E">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
