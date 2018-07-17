@extends('layout')
@section('title')
ROHI : Gallery
@stop

@section('styles')
<link href="/assets/css/lightbox.min.css" rel="stylesheet">
@stop

@section('pageContent')
<section class="slider-section" style="background-image:url(/assets/images/slider/2.jpg);">
            <div class="container">
                <div class="slider">
                    <div class="text team-light">
                        <h2>our <span> great </span> memories </h2>
                        <p><a href="index-2.html">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> Gallery</p>
                    </div>
                </div>
            </div>
        </section>
        <!--End slider-section-->
        <!--Start gallery-section-->
        <section class="gallery-section">
            <div class="container">
                <div class="sortable-masonry">
                    {{-- <div class="filters text-center">
                        <ul class="filter-tabs filter-btns clearfix">
                            <li class="active filter" data-role="button" data-filter=".all"><span class="txt">all</span></li>
                            <li class="filter" data-role="button" data-filter=".food"><span class="txt">food</span></li>
                            <li class="filter" data-role="button" data-filter=".education"><span class="txt">education</span></li>
                            <li class="filter" data-role="button" data-filter=".others"><span class="txt">others</span></li>
                            
                        </ul>
                    </div> --}}                       
                    <div class="row items-container">
                    @if(!$galas->count())
                    <p>No Images in the gallery yet..</p>
                    @else
                        @foreach($galas as $gala)
                        <div class="col-md-3 col-sm-6 col-xs-12 all food education">
                            <!-- Start single-item -->
                            <div class="gallery-item">
                                <div class="img-holder">
                                   <figure><img src="{{$gala->img}}" alt="Images"></figure>
                                    <!-- Start overlay -->
                                    <div class="overlay">
                                      <a data-lightbox="{{$gala->img}}" href="{{$gala->img}}"   data-group="set1" data-width="800" data-height="600">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <!-- End overlay -->   
                                </div>
                                    <h4>{{$gala->caption}}</h4>
                            </div>
                            <!-- End single-item -->
                        </div>
                        @endforeach
                    @endif
                    </div>
                </div>
               {{--  <div class="page-list">
                    <ul>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#" class="next">next</a></li>
                    </ul>
                </div> --}}
            </div>
        </section>
        <!--End Gallery Section-->

        <!--.news-seciton-->
        {{-- <div class="news-seciton">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="news-text">
                            <h4>Newsletter Sign-up</h4>
                            <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <div class="news-form">
                            <input type="text" name="lastname" placeholder="Full Name" value="">
                            <input type="email" name="email" placeholder="Email" value="">
                            <button type="submit" class="btn news-btn">send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
@stop

@section('scripto')
<script src="/assets/js/lightbox.min.js"></script>

<script type="text/javascript">

    lightbox.option({
        'alwaysShowNavOnTouchDevices': true,
        'positionFromTop'   : 50,
    })
</script>
@stop