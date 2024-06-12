@extends('dashboard')

@section('title', 'Bookclass')


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
                <span class="card-label fw-bold fs-3 mb-1">HiTOEFL Bookclass</span>

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
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
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
