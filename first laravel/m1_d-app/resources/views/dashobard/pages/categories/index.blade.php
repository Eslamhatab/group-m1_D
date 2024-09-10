@extends('dashobard.layouts.master')
@section('title' , 'Categories')
@section('main-content')
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-end flex-wrap">
                    <div class="d-flex justify-contnet-between align-items-end flex-wrap">
                        <a href="{{ route('categories.create') }}" class="mx-3 mt-3 btn btn-success text-light font-weight-bold">
                            <span>Add Category</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

           <!-- Table with stripped rows -->
           <table class="table w-50 m-auto datatable">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created By</th>
                <th>Updated By</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                    @forelse ($categories as $category )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->title }}</td>
                        <td>{{Str::words($category->description , '5', '....') ?? 'N/A' }}</td>
                        <td>{{ $category->create_user->name  }}</td>
                        <td>{{ $category->update_user_name ?? 'N/A' }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at ?? 'N/A'}}</td>
                        <td>
                            <form method="post" class="d-flex justify-content-between aligin-items-center">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-warning font-weight-bold btn-sm fs-6" href="{{ route('categories.show' , $category->id) }}">Show</a>
                                @if (auth()->user()->user_type  == 'admin')
                                <a class="btn btn-primary btn-sm font-weight-bold fs-6" href="{{ route('categories.edit' , $category->id) }}">Edit</a>
                                <button type="submit" class="btn btn-danger btn-sm font-weight-bold fs-6">Delete</button>
                                @endif
                            </form>
                        </td>
                    </tr>
                    @empty

                    @endforelse
            </tbody>
          </table>
          <div class="my-4 d-flex justify-content-center">
            {{ $categories->links() }}
          </div>
          <!-- End Table with stripped rows -->



@endsection
