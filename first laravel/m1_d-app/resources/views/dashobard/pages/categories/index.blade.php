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
                <th>
                  <b>N</b>ame
                </th>
                <th>Ext.</th>
                <th>City</th>
                <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                <th>Completion</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
          <!-- End Table with stripped rows -->



@endsection
