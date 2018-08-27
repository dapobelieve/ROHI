@extends('layout')

@section('title')
ROHI : Events
@stop

@section('pageContent')

    <section class="slider-section" style="background-image:url(/assets/images/slider/2.jpg);">
        <div class="container">
            <div class="slider">
                <div class="text team-light">
                    <h2> <span>All</span> Events </h2>
                    <p><a href="{{route('home')}}">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> Events</p>
                </div>
            </div>
        </div>
    </section>
    <!--End slider-section-->
     <!--.event-seciton-->
    <section class="event-seciton event-page">
        <div class="container">
           <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="section-title text-center">
                        <h2><span>Events</span></h2>
                    </div>
                    <div class="row">
                        @foreach($posts as $post)
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <!-- Start single-item -->
                            <div class="event-item">
                                <div class="img-holder">
                                   <figure><a href="{{  route('event.post', ['pid' => $post->slug]) }}"><img src="{{$post->singleImage()}}" alt="Images"></a></figure>
                                    <div class="text">
                                        <h4>
                <a href="{{  route('event.post', ['pid' => $post->slug]) }}">{{ $post->created_at->format('jS F Y ')}}<br> <span>{{ $post->title }}</span></a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End single-item -->
                        </div>
                        @endforeach
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
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <!-- Start side-bar -->
                    <div class="side-bar">
                    </div>
                    <!-- Eind side-bar -->
                </div>
            </div>
        </div>
    </section>
@stop