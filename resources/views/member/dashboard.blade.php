@extends('layout.frontend.main')


@section('title','Member Dashboard')


@push('css')
<link href="{{asset('assets/frontend/css/member/styles.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/css/member/responsive.css')}}" rel="stylesheet">
@endpush


@section('content')

<section class="blog-area section">
    <div class="container">

        <div class="row">

            @include('member.sidebar')

            <div class="col-lg-8 col-md-12">
                <div class="single-post info-area ">

                    <div class="about-area">
                        <h4 class="title"><b>MEMBER PROFILE</b></h4>
                        <h5>test</h5>
                    </div>


                </div><!-- info-area -->
            </div><!-- col-lg-8 col-md-12 -->

        </div><!-- row -->

    </div><!-- container -->
</section><!-- section -->

@endsection


@push('js')

@endpush
