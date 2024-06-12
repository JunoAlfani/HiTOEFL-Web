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
                <span class="card-label fw-bold fs-3 mb-1">Edit HiTOEFL Userlist</span>
                <br>
            </h3>
        </div>

        <div class="class mb-3">
            <div class="card-header border-0">
                <div class="class-body">
                    <form action="{{route('dashboard.userlist.postUpdate', $data->id)}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="topic" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" value="{{$data->username}}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{$data->email}}">
                        </div>
                        <div class="mb-3">
                            <label for="teacher" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" value="{{$data->password}}">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Is Admin ?</label>
                            <input type="text" class="form-control" name="is_admin" value="{{$data->is_admin}}">
                        </div>
                        <br>
                        <a href="{{ route('dashboard.userlist.getIndex') }}" class="btn btn-danger">back</a>
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
