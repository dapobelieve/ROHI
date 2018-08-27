@extends('layout')
@section('title')
ROHI : {{$post->title}}
@stop

@section('pageContent')
    <section class="slider-section" style="background-repeat: no-repeat;background-image:url(/assets/images/slider/2.jpg);">
            <div class="container">
                <div class="slider">
                    <div class="text team-light">
                        <h2>Report Details </h2>
                        <p><a href="{{route('home')}}">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="{{route('events')}}">Report</a> <i class="fa fa-angle-right" aria-hidden="true"></i>Details</p>
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
                               <img src="/dikwa/{{$post->image1}}" alt="Images">
                            </div>
                            <br>
                            <h2>{{ $post->title}} </h2>
                            <p style="white-space: pre-line;font-size: 14px !important" class="text-justify">
                                {{ $post->content }}
                            </p>
                            <br>
                            <br>
                            <div class="">
                               <img class="img-responsive" src="/dikwa/{{$post->graph}}" alt="Images">
                            </div>
                            <div class="tags">
                                {{-- <p class="border"><i class="fa fa-window-restore" aria-hidden="true"></i>  <span>nonprofit</span></p> --}}
                                {{-- <p><i class="fa fa-tag" aria-hidden="true"></i>tags:  <span> charity, fund</span></p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                    </div>
                </div>
            </div>
        </section>
@stop