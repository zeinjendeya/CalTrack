@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="col-lg col-md col-sm">
                    <div class="card card-icon-bg o-hidden mb-4" style="background: #83abb3;">
                        <div class="card-body">
                            <div class="content ">
                                <a class=" mt-2 mb-0 h3 text-decoration-none" href="/admin/users">
                                    Users
                                </a>
                                <p class=" text-24 line-height-1 mb-2">
                                    {{ $users }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="col-lg col-md col-sm">
                    <div class="card card-icon-bg o-hidden mb-4" style="background: #8cb383;">
                        <div class="card-body">
                            <div class="content ">
                                <a class=" mt-2 mb-0 h3 text-decoration-none" href="/admin/food">
                                    Food items
                                </a>
                                <p class=" text-24 line-height-1 mb-2">
                                    {{ $food }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-lg col-md col-sm">
                    <div class="card card-icon-bg o-hidden mb-4" style="background: #e3c391;">
                        <div class="card-body">
                            <div class="content ">
                                <a class=" mt-2 mb-0 h3 text-decoration-none" href="/admin/exercise">
                                    Exercises
                                </a>
                                <p class=" text-24 line-height-1 mb-2">
                                    {{ $exercises }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="col-lg col-md col-sm">
                    <div class="card card-icon-bg o-hidden mb-4" style="background: #df8c8c;">
                        <div class="card-body">
                            <div class="content ">
                                <a class=" mt-2 mb-0 h3 text-decoration-none" href="/admin/users">
                                    Logged Users
                                </a>
                                <p class=" text-24 line-height-1 mb-2">
                                    {{ $logged }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
