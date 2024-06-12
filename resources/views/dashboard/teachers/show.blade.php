@extends('dashboard')

@section('title', 'Bookclass')

@section('extra-css')
    <!-- start here -->
@endsection

@section('extra-styles')
    <!-- start here -->
@endsection

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>Teachers Details</b></div>
                <div class="col col-md-6">
                    <a href="{{ route('dashboard.teachers.getIndex') }}" class="btn btn-primary btn-md float-end">Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-0 mx-2">
                <label class="col-sm-2 col-label-form"><b>Topic</b></label>
                <div class="col-sm-10">
                    {{ $data->topic }}
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"><b>Teacher Name</b></label>
                    <div class="col-sm-10">
                        {{ $teacher->teacher }}
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"><b>Email</b></label>
                    <div class="col-sm-10">
                        {{ $teacher->email }}
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form"><b>Category</b></label>
                    <div class="col-sm-10">
                        {{ $teacher->category }}
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form"><b>Teachers Image</b></label>
                    <div class="col-sm-10">
                        <img src="{{ asset('global/img/' . $teacher->img) }}" width="150" class="img-thumbnail" />
                    </div>
                </div>
            </div>
        </div>





        <!-- Container End -->


    @endsection

    @section('extra-content')
        <!-- start here -->
    @endsection

    @section('extra-js')
        <!-- start here -->
    @endsection

    @section('extra-script')
        <!-- start here -->
    @endsection
