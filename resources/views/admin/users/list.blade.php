@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center justify-content-between">
                            <h3 class="m-0">Users</h3>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead class="">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">name</th>
                                    <th scope="col">email</th>
                                    <th class="d-flex justify-content-center" scope="col">actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <th>{{ $user->first_name . ' ' . $user->last_name }}</th>
                                        <th>{{ $user->email }}</th>
                                        <th>
                                            <div class=" d-flex flex-row justify-content-center">
                                                <a class="btn btn-outline-secondary mx-2" style="width: fit-content"
                                                    href="/admin/users/{{ $user->id }}/show">show</a>

                                                <form action="/admin/users/{{ $user->id }}/delete" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger">delete</button>
                                                </form>
                                            </div>
                                        </th>
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
