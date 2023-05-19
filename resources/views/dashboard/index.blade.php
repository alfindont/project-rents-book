@extends('layouts.main')

@section('title','Dashboard')
@section('content')
<div class="row my-5">
    <div class="col-lg-4">
        <div class="card-data book">
            <div class="row">
                <div class="col-lg-6">
                    <i class="bi bi-book-half"></i>
                </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">
                            Books
                        </div>
                        <div class="card-count">
                            {{$data->count()}}
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-data user">
            <div class="row">
                <div class="col-lg-6">
                    <i class="bi bi-person-circle"></i>
                </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">
                            Users
                        </div>
                        <div class="card-count">
                            {{$user->count()}}
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-data category">
            <div class="row">
                <div class="col-lg-6">
                    <i class="bi bi-bookmark-check"></i>
                </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">
                            Category
                        </div>
                        <div class="card-count">
                            {{$data->count()}}
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection