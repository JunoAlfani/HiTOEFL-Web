@extends('dashboard')

@section('title', 'Userlist')


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
                <span class="card-label fw-bold fs-3 mb-1">HiTOEFL Userlist</span>
                <br>
                <a href="{{route('dashboard.userlist.getCreate')}}" class="btn btn-primary mb-3 float-start mt-4">+ Add New</a>

            </h3>
        </div>

        <div class="class mb-3 ">
            <div class="card-header border-1">
                <div class="class-body">
                    <table class="table">
                        <thead>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Is_Admin</th>
                            <th>Action</th>
                        </thead>
                        <tbody>


                            @foreach ($userlist as $no )
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href=""
                                                    class="text-dark fw-bold text-hover-primary fs-6">{{ $no->username }}</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $no->email }}</td>
                                    <td>{{ $no->password }}</td>
                                    <td>{{ $no->is_admin }}</td>
                                    <td>
                                    <form action="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('dashboard.userlist.getEdit', $no->id)}}" class="btn btn-success btn-sm"><span data-feather="edit" class="mb-1" ></span>Edit</a>
                                        <a href="{{route('dashboard.userlist.getDestroy', $no->id)}}" class="btn btn-danger btn-sm"><span data-feather="trash" class="mb-1" ></span>Hapus</a>
                                    </form>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    @include('sweetalert::alert')



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
