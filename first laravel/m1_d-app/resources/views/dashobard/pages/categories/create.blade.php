@extends('dashobard.layouts.master')
@section('title' , "Create Category")
@inject('category', 'App\Models\category')
@section('main-content')
<div class="container w-100 mt-3 d-flex justify-content-center">
    <div class="row ">
        <div class="col-12">
            <div class="card shadow-lg mb-4">
                <strong class="card-title fs-2">Create Category</strong>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf
                            @include('dashobard.pages.categories.form')
                            <button type="submit" class="btn btn-success ntn-md px-4 py-1 font-weigth-bold">submit</button>
                            <button type="reset" class="btn btn-success ntn-md px-4 py-1 font-weigth-bold">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
