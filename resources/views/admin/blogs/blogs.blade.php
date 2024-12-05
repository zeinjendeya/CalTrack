@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center justify-content-between">
                            <p style="width: fit-content" class="m-0">Blogs</p>
                            <a class="btn btn-primary" style="width: fit-content; background: #035C6E; border: none;"
                                href="/admin/blogs/new">Add Blog</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead class="">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">title</th>
                                    <th scope="col">posted</th>
                                    <th class="d-flex justify-content-center" scope="col">actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <th scope="row">{{ $blog->id }}</th>
                                        <td>{{ $blog->title }}</td>
                                        <td>
                                            @if ($blog->posted)
                                                yes
                                            @else
                                                no
                                            @endif
                                        </td>
                                        <td>
                                            <div class=" d-flex flex-row justify-content-center">
                                                <a class="btn btn-outline-secondary mx-2" style="width: fit-content"
                                                    href="/admin/blogs/{{ $blog->id }}/edit">edit</a>
                                                <form action="/admin/blogs/{{ $blog->id }}/delete" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger">delete</button>
                                                </form>
                                            </div>
                                        </td>
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
