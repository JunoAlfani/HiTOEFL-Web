@extends('dashboard')

@section('title', 'Teachers')


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
                <span class="card-label fw-bold fs-3 mb-1">HiTOEFL Teachers</span>
                <br>
                <a href="{{route('dashboard.teachers.getCreate')}}" class="btn btn-primary mb-3 float-start mt-4">+ Add New</a>

            </h3>
        </div>

        <div class="class mb-3">
            <div class="card-header border-0">
                <div class="class-body">
                    <table class="table">
                        <thead>
                            <th>Teachers</th>
                            <th>Topic</th>
                            <th>Category</th>
                            <th>Action</th>
                        </thead>
                        <tbody>


                            @foreach ($teacher as $no )
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-45px me-4">
                                                <img src="{{ asset('global/img/' . $no->img) }}" width="50px"
                                                    height="60px" class="rounded-corners" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href=""
                                                    class="text-dark fw-bold text-hover-primary fs-6">{{ $no->teacher }}</a>
                                                <span
                                                    class="text-muted fw-semibold text-muted d-block fs-7">{{ $no->email }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $no->topic }}</td>
                                    <td>{{ $no->category }}</td>
                                    <td>
                                    <form action="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('dashboard.teachers.getEdit', $no->id)}}" class="btn btn-success btn-sm"><span data-feather="edit" class="mb-1" ></span>Edit</a>
                                        <a href="{{route('dashboard.teachers.getDestroy', $no->id)}}" class="btn btn-danger btn-sm"><span data-feather="trash" class="mb-1" ></span>Hapus</a>
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
