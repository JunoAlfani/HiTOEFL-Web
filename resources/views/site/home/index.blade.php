@extends('site.layouts.main')

@section('title', 'Home')

@section('extra-css')
    <!-- start here -->
@endsection

@section('extra-styles')
    <!-- start here -->
@endsection

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
        <div class="row align-items-center px-3">
            <div class="col-lg-6 text-center text-lg-left">
                <h4 class="text-white mb-4 mt-5 mt-lg-0">English Learning Center</h4>
                <h1 class="display-3 font-weight-bold text-white">Grow together,<br />Learn Together</h1>
                <p class="text-white mb-4">We provide various learning methods for you to explore. Here is a glimpse of
                    HiTOEFL and why we might be the right learning partner for you to learn english as fast as possible.</p>
                <a href="/log-in.html" class="btn btn-secondary justify-content-center mt-2 py-3 px-5">Learn More</a>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <img class="img-fluid mt-5" src="{{ asset('global') }}/img/girl.svg" alt="" />
            </div>
        </div>
    </div>
    <!-- Header End -->

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

    <!-- Class Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Popular Course</span>
                </p>
                <h1 class="mb-4">Courses for You</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-third shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="{{ asset('global') }}/img//img1.jpg" alt="" />
                        <div class="card-body text-center">
                            <h4 class="card-title">English Short Course</h4>
                            <p class="card-text">Here you can find activities to practise your listening skills. Listening
                                will help you to improve your understanding of the language and your pronunciation...</p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Age</strong>
                                </div>
                                <div class="col-6 py-1">Reguler</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Total Seats</strong>
                                </div>
                                <div class="col-6 py-1">40 Seats</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Class Time</strong>
                                </div>
                                <div class="col-6 py-1">08:00 - 10:00</div>
                            </div>
                            <div class="row">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Tution Fee</strong>
                                </div>
                                <div class="col-6 py-1">IDR399.999 / Month</div>
                            </div>
                        </div>
                        <a href="{{route('login')}}" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-third shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="{{ asset('global') }}/img/img2.jpg" alt="" />
                        <div class="card-body text-center">
                            <h4 class="card-title">English on Demand</h4>
                            <p class="card-text">Practice your English writing by learning how to arrange clear grammar
                                explanations and learn new vocabularies...</p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Age</strong>
                                </div>
                                <div class="col-6 py-1">Reguler</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Total Seats</strong>
                                </div>
                                <div class="col-6 py-1">40 Seats</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Class Time</strong>
                                </div>
                                <div class="col-6 py-1">08:00 - 10:00</div>
                            </div>
                            <div class="row">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Tution Fee</strong>
                                </div>
                                <div class="col-6 py-1">IDR550.000 / Month</div>
                            </div>
                        </div>
                        <a href="{{route('login')}}" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-third shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="{{ asset('global')}}/img/img3.jpg" alt="" />
                        <div class="card-body text-center">
                            <h4 class="card-title">English Skills Building</h4>
                            <p class="card-text">Here you can find activities to practise your speaking skills. speaking
                                will help you to improve your understanding of the language and your pronunciation...</p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Age</strong>
                                </div>
                                <div class="col-6 py-1">Reguler</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Total Seats</strong>
                                </div>
                                <div class="col-6 py-1">40 Seats</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Class Time</strong>
                                </div>
                                <div class="col-6 py-1">08:00 - 10:00</div>
                            </div>
                            <div class="row">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Tution Fee</strong>
                                </div>
                                <div class="col-6 py-1">IDR755.000 / Month</div>
                            </div>
                        </div>
                        <a href="{{route('login')}}" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Class End -->

    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Latest Blog</span>
                </p>
                <h1 class="mb-4">Latest Articles From Blog</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="{{ asset('global') }}/img/img5.jpg" alt="" />
                        <div class="card-body bg-third text-center p-4">
                            <h4 class="">The Difference Between TOEFL, IELTS and TOEIC</h4>
                            <p>The difference between TOEFL, IELTS and TOEIC must be understood by students. As one of the conditions for seeking scholarships abroad ...</p>
                            <a href="{{route('login')}}" class="btn btn-primary px-4 mx-auto my-2">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="{{ asset('global') }}/img/img6.jpg" alt="" />
                        <div class="card-body bg-third text-center p-4">
                            <h4 class="">Tips for Getting a TOEFL Score Above >500</h4>
                            <p>The TOEFL ITP test score can be called high if it goes above 500-600. However, getting a TOEFL ITP score above 500 can also be said to be difficult ...</p>
                            <a href="{{route('login')}}" class="btn btn-primary px-4 mx-auto my-2">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="{{ asset('global') }}/img/img7.jpg" alt="" />
                        <div class="card-body bg-third text-center p-4">
                            <h4 class="">Singapore NUS Undergraduate Scholarship 2023</h4>
                            <p>National University Singapore (NUS) is a campus representative in an Asian country that has succeeded in achieving the highest position with intense competition ...</p>
                            <a href="{{route('login')}}" class="btn btn-primary px-4 mx-auto my-2">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->







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
