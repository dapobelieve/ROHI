@extends('layout')
@section('title')
ROHI : {{$post->title}}
@stop

@section('pageContent')
    <section class="slider-section" style="background-image:url(/assets/images/slider/2.jpg);">
            <div class="container">
                <div class="slider">
                    <div class="text team-light">
                        <h2>Event Details </h2>
                        <p><a href="{{route('home')}}">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="{{route('events')}}">Event</a> <i class="fa fa-angle-right" aria-hidden="true"></i>Details</p>
                    </div>
                </div>
            </div>
        </section>
        <!--End slider-section-->
        <!--.blog-seciton-->
        <section class="blog-seciton blog-pag">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <!-- Start single-item -->
                        <div class="blog-item clearfix">
                            <div class="img-holder">
                               <figure><img src="{{$post->getImage()}}" alt="Images"></figure>
                            </div>
                            <br>

                            <h2>{{ $post->title}} </h2>
                            <span>{{ $post->created_at->format('jS F Y ')}}</span>
                             
                            <p class="text-justify">
                                {{ $post->body }}
                            </p>
                            <div class="tags">
                                <p class="border"><i class="fa fa-window-restore" aria-hidden="true"></i>  <span>nonprofit</span></p>
                                {{-- <p><i class="fa fa-tag" aria-hidden="true"></i>tags:  <span> charity, fund</span></p> --}}
                            </div>
                        </div>
                        <!-- End single-item -->
                        {{-- <div class="comment clearfix">
                            <div class="comment-box ">
                                <h2>Comments on this post</h2>
                                <div class="img-box">
                                    <img src="images/blog/10.png" alt="Images">
                                    <h4>niltoi kona</h4>
                                    <h5>25th Feb, 2017</h5>
                                    <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. 
                                        Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
                                    <a href="#">Reply</a>
                                </div>
                                <div class="img-box">
                                    <img src="images/blog/10.png" alt="Images">
                                    <h4>niltoi kona</h4>
                                    <h5>25th Feb, 2017</h5>
                                    <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. 
                                        Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
                                    <a href="#">Reply</a>
                                </div>
                            </div>
                            <div class="default-form clearfix">
                                <h2>leave a comment here</h2>
                                <form method="post" action="http://per-concept.com/Kindness/sendemail.php" class="contact-form">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                           <div class="form-group">
                                                <input type="text" name="lastname" placeholder="your Name">
                                            </div> 
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                           <div class="form-group">
                                                <input type="email" name="email" placeholder="Email address">
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="form-group comments">
                                        <textarea type="text" name="message" placeholder="Comment here"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-3">send us</button>
                                </form>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <!-- Start side-bar -->
                        {{-- <div class="side-bar">
                            <div class="side-search">
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
                                <div class="blog-item mar-0">
                                    <div class="img-holder">
                                       <figure><a href="single-blog.html"><img src="images/blog/3.jpg" alt="Images"></a></figure>
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
                            </div>
                        </div> --}}
                        <!-- Eind side-bar -->
                    </div>
                </div>
            </div>
        </section>
@stop