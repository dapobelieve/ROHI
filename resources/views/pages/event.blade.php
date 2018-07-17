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
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Start single-item -->
                            <div class="event-item">
                                <div class="img-holder">
                                   <figure><a href="{{  route('event.post', ['pid' => $post->slug]) }}"><img src="{{$post->getImage()}}" alt="Images"></a></figure>
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
                        {{-- <div class="side-search">
                            <ul class="search-bar">
                                <li>
                                    <form action="#">
                                        <input type="text" placeholder="Enter Your Keyword">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </li>
                            </ul>
                            <h5>Looking For A Good Place</h5>
                        </div>
                        <div class="similar">
                            <h2>Similar Causess</h2>
                            <!-- Start single-item -->
                            <div class="blog-item">
                                <div class="img-holder">
                                   <figure><a href="single-blog.html"><img src="/assets/images/blog/3.jpg" alt="Images"></a></figure>
                                </div>
                                <div class="text">
                                    <h4><a href="single-blog.html">Children’s National<br>festival for learning</a></h4>
                                    <h5><i class="fa fa-user" aria-hidden="true"></i>By <span>John Doe</span></h5>
                                    <h5><i class="fa fa-map-marker" aria-hidden="true"></i>By <span>John Doe</span></h5>
                                    <a href="single-blog.html"class="dont-btn">Read more</a>
                                </div>
                            </div>
                            End single-item
                        </div>
                        <div class="category">
                            <h2>category</h2>
                            <ul>
                                <li><a href="#">Food<span>(10)</span></a></li>
                                <li><a href="#">Nonprofit<span>(8)</span></a></li>
                                <li><a href="#">Wedding<span>(5)</span></a></li>
                                <li><a href="#">Architecture<span>(13)</span></a></li>
                            </ul>
                        </div>
                        <div class="category">
                            <h2>Archives</h2>
                            <ul>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>October 2014</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> November 2014</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>December 2014</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>January 2015</a></li>
                                <li>
                                    <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Feberuary 2015</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>March 2015</a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                    <!-- Eind side-bar -->
                </div>
            </div>
        </div>
    </section>
@stop