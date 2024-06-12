@extends('site.layouts.main')

@section('title', 'About')

@section('extra-css')
    <!-- start here -->
@endsection

@section('extra-styles')
    <!-- start here -->
@endsection

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">About Us</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="{{route('site.home.getIndex')}}">Home</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">About Us</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('global')}}/img/Office.jpeg" alt="" />
                </div>
                <div class="col-lg-7">
                    <p class="section-title pr-5">
                        <span class="pr-2">Learn About Us</span>
                    </p>
                    <h1 class="mb-4">Best place to test you skill</h1>
                    <p>HiTOEFL is a company founded in 2022. We are here to help people's preaparation for their TOEFL Test
                        which is usually required for admission by English-speaking universities and programs around the
                        world.</p>
                    <a href="{{route('login')}}" class="btn btn-primary mt-2 py-2 px-4">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Facilities Start -->
    <div class="container-fluid pt-5">
        <div class="container pb-3">
            <div class="row">
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-third shadow-sm border-top rounded mb-4" style="padding: 30px">
                        <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Experienced Teachers</h4>
                            <p class="m-0">Our professional teachers deliver an effective and progressive learning
                                experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-third shadow-sm border-top rounded mb-4" style="padding: 30px">
                        <i class="flaticon-022-drum h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Various Learning Methods</h4>
                            <p class="m-0">We offer various ways for you to learn new knowledge, from private to group
                                classes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-third shadow-sm border-top rounded mb-4" style="padding: 30px">
                        <i class="flaticon-030-crayons h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Certified Courses</h4>
                            <p class="m-0">Our curriculums are designed by credible and reputable learning institutions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-third shadow-sm border-top rounded mb-4" style="padding: 30px">
                        <i class="flaticon-017-toy-car h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Competent Test</h4>
                            <p class="m-0">we provide a fair and appropriate test for every examinee</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-third shadow-sm border-top rounded mb-4" style="padding: 30px">
                        <i class="flaticon-025-sandwich h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Life long learning</h4>
                            <p class="m-0">knowledge that is used not only for now but can be used for a lifetime</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-third shadow-sm border-top rounded mb-4" style="padding: 30px">
                        <i class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Educational impact</h4>
                            <p class="m-0">not only academic knowledge but also practical knowledge</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facilities End -->









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
