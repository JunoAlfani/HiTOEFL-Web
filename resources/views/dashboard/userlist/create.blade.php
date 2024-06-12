@extends('dashboard')

@section('title', 'Create')

@section('extra-css')
    <!-- start here -->
@endsection

@section('extra-styles')
    <!-- start here -->
@endsection

@section('content')

    @if ($errors->any())

        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif

    <!-- Container Start -->

    <div class="container mt-3">
        <div class="card-header border-0 pt-4">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Add HiTOEFL User</span>
                <br>
            </h3>
        </div>

        <div class="class mb-3">
            <div class="card-header border-0">
                <div class="class-body">
                    <form action="{{route('dashboard.userlist.postStore')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <div class="form-group">
                                <strong>Username:</strong>
                                <input type="text" name="username" class="form-control" placeholder="Username">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <strong>Email:</strong>
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <strong>Password:</strong>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <strong>Admin ?:</strong>
                                <input type="text" name="is_admin" class="form-control" placeholder="Is Admin">
                            </div>
                        </div>
                        <br>
                        <a href="{{route('dashboard.userlist.getIndex')}}" class="btn btn-danger">back</a>
                        <button type="submit" class="btn btn-success mx-2 ">Save</button>
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
