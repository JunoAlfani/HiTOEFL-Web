@extends('dashboard')

@section('title', 'Edit')

@section('extra-css')
    <!-- start here -->
@endsection

@section('extra-styles')
    <!-- start here -->
@endsection

@section('content')

    <div class="container mt-3">
        <div class="card-header border-0 pt-4">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Edit HiTOEFL Teachers</span>
                <br>
            </h3>
        </div>

        <div class="class mb-3">
            <div class="card-header border-0">
                <div class="class-body">
                    <form action="{{route('dashboard.teachers.postUpdate', $data->id)}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="topic" class="form-label">Topic</label>
                            <input type="text" class="form-control" name="topic" value="{{$data->topic}}">
                        </div>
                        <div class="mb-3">
                            <label for="teacher" class="form-label">Teacher</label>
                            <input type="text" class="form-control" name="teacher" value="{{$data->teacher}}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{$data->email}}">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" class="form-control" name="category" value="{{$data->category}}">
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-label-form">Image</label>
                            <div class="col-sm-10">
                                <input type="file" name="img">
                                <br />
                                <img src="{{ asset('global/img/' . $data->img) }}" width="100" class="img-thumbnail">
                                <input type="hidden" name="hidden_img" value="{{ $data->img }}" />
                            </div>
                        </div>
                        <br>
                        <a href="{{ route('dashboard.teachers.getIndex') }}" class="btn btn-danger">back</a>
                        <input type="hidden" name="hidden_id" value="{{ $data->id }}" />
                        <button type="submit" class="btn btn-success mx-2">Save</button>
                    </form>
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
