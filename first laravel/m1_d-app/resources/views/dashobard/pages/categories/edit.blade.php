@extends('dashobard.layouts.master')
@section('title' , "Edit Category ($category->title)")
@section('main-content')
<div class="container  mt-4">
    <div class="row justidy-content-center">
        <div class="col-12">
            <div class="card shadow-lg mb-4">
                <div class="card-header">
                    <strong>Edit Category (<span class="text-primary">{{ $category->title }}</span>) </strong>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('categories.update' , $category->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                @include('dashobard.pages.categories.form')
                                <button type="submit" class="btn btn-primary px-4 btn-md borderd-2 shadow rounded">Update</button>
                            <a class="btn btn-dark btn-md px-2 py-2 font-weight-bold fs-6 shadow borderd-2 rounded" href="{{ route('categories.index') }}">Return To Categories </a>
                            <a class="btn btn- btn-md px-2 py-2 font-weight-bold fs-6 shadow borderd-2 rounded" href="{{ url()->previous() }}">Go Back</a>
                            </form>
                        </div>
                    </div>
        </div>
    </div>
</div>
    </div>
</div>
@endsection
