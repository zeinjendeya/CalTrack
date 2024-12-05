@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <p style="width: fit-content" class="m-0 h3">Blogs</p>
                    </div>

                    <div class="card-body">
                        <form action="/admin/blogs/create" method="POST">
                            @csrf
                            <div class="mb-3">
                              <label for="blog_title" class="form-label">Blog Title</label>
                              <input type="text" name="title" class="form-control" id="blog_title" required>
                            </div>
                            <div class="mb-3">
                              <label for="blog_body" class="form-label">Blog Body</label>
                              <textarea class="form-control" name="body" id="blog_body" rows="3"></textarea>
                            </div>
                            <div class="mb-3 form-check">
                              <input type="checkbox" value=1 class="form-check-input" name="posted" id="posted">
                              <label class="form-check-label" for="posted">Posted</label>
                            </div>
                            <button type="submit" class="btn btn-primary" style="background: #035C6E">Add</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection