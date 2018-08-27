@extends('layout')

@section('title')
ROHI : Report
@stop

@section('pageContent')
<section class="slider-section" style="min-height: 200px;background-image:url(/assets/images/slider/2.jpg);">
    <div class="container">
        <div class="slider">
            <div class="text team-light">
                <h2> <span>Situation Report</h2>
                <p><a href="{{route('home')}}">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> Situation Report</p>
            </div>
        </div>
    </div>
</section>

<section class="event-seciton event-page">
        <div class="container">
           <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="section-title text-center">
                        <h2><span>Recent Reports</span></h2>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <!-- Start single-item -->
                            @foreach($reports as $report)
                            <div class="">
                                <div style="padding-bottom: 20px; maring-bottom: 100px ">
                                    <a href="{{ route('report-details', ['id' => $report->id]) }}">
                                        <img class="img-responsive" src="/dikwa/{{ $report->image1 }}" alt="Images">
                                    </a>                                    
                                </div>
                                <h4>
                                    <a href="{{ route('report-details', ['id' => $report->id]) }}">{{ title_case($report->title) }}<br> 
                                    </a>
                                </h4>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            @endforeach
                            <!-- End single-item -->
                        </div>
                    </div>
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
