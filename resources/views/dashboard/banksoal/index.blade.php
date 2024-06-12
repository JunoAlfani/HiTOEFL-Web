@extends('dashboard')

@section('title', 'Bank Soal')


@section('extra-css')
    <!-- start here -->

@endsection

@section('extra-styles')
    <!-- start here -->



@endsection

@section('content')

    <main class="row">

        <header class="site-header">
            <div class="">
                <a href="{{route('site.home.getIndex')}}">
                    <img src="{{ asset('global') }}/img/logohitoefl.svg" style="width: 300px" class="rounded mx-auto d-block mt-5" alt="">
                </a>
            </div>
        </header>

        <div id="main-content" class="twelve columns mt-5">

            <h1 class="text-center" >Our website is almost ready.</h1>

            <p class="text-center mt-5"> Everything, what we create from design, code or adversiting it's building a solid brand. thanks for support us !
            </p>


        </div>


    </main>









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
