@extends('layout')

@section('title')
Welcome to Restoration of Hope Initiative (ROHI)

@stop


@section('pageContent')
 @include('includes.slider')
        <!-- /banner -->
	<!-- ====================== /Banner =================== -->
        <!--.mission-seciton-->
        @include('includes.mission')
        <!--/mission-seciton-->
        <!--.welcome-seciton-->
        <section class="welcome-seciton page-3">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Recent <span>Events</span></h2>
                </div>
                <div class="row">
                @foreach($eventy as $evento)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <!-- Start single-item -->
                        <div class="welcome-item ">
                            <div class="img-holder">
                               <figure><a href="{{  route('event.post', ['pid' => $evento->slug]) }}"><img src="{{$evento->getImage()}}" alt="Images"></a></figure>
                                <!-- Start overlay -->
                                <div class="overlay">
                                    <h4><a href="single-causes.html"><span>{{$evento->title}}</span></a></h4>
                                </div>
                                <!-- End overlay -->
                            </div>
                            <div class="text">
                                <p>{{ $evento->getSumry($evento->body, 20)}}...</p>
                                <a href="{{  route('event.post', ['pid' => $evento->slug]) }}">Read More</a>
                            </div>
                        </div>
                        <!-- End single-item -->
                    </div>
                @endforeach
                </div>
            </div>
        </section>
        <section class="mission-seciton">
           <div class="container">
               <div class="section-title text-center">
                <h2>Core <span>Values</span></h2>
               </div>
               <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <!-- Start single-item -->
                        <div class="mission-item">
                            <i class="fa fa-group"></i>
                            <h4>Team Work</h4>
                        </div>
                        <!-- End single-item -->
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <!-- Start single-item -->
                        <div class="mission-item">
                            <i class="fa fa-pencil"></i>
                            <h4>Accountability</h4>
                        </div>
                        <!-- End single-item -->
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <!-- Start single-item -->
                        <div class="mission-item">
                            <i class="fa fa-star-o"></i>
                            <h4>Transparency</h4>
                        </div>
                        <!-- End single-item -->
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <!-- Start single-item -->
                        <div class="mission-item">
                            <i class="fa fa-sitem"></i>
                            <h4>Mutual Understanding</h4>
                        </div>
                        <!-- End single-item -->
                    </div>
                </div>
           </div>
        </section>
        <br>
        <br>
       
        <!--/blog-seciton-->
        <!--Start volunteer-section -->
        <section class="volunteer-section" style="background-image:url(/assets/images/blog/xfiles/bg6.jpg);">
            <div class="container">
                <div class="volunteer-item">
                    <h2>WE HELP many people</h2>
                    <h4>want to become a <span> volunteer?</span></h4>
                    <p>Donate generously to help our cause.</p>
                    <a href="#"data-toggle="modal" data-target=".bs-example-modal-sm" class="btn-3">Donate now</a>
                </div> 
            </div>
        </section>
        <!--End volunteer-section -->


<!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel">Welcome Address</h4>
                    </div>
                <div class="modal-body">
                    <center>
                        <p style="color:black" class="text-justify">
                            Welcome to ROHI's website. Our goal in developing this site is to make the information families need easier to find and more timely as well as to share our mission and goals with our local communities. 
                            ROHI shows all of its events and gallery, works and  humanitarian activities carried out by ROHI are shown on this site and we also have a support center.
                            You are free to click the donate now button to assist the humanitarian activities ROHI is carrying out. 
                            I am proud of the long history of responding to the ever changing needs of local families.<br>     Over the years we have expanded our programs and even created new programs to ensure that the local children and families continue to have access to the services they need. 
                            We will continue to update our agency strategic plans, incorporating new ideas and innovative services and programs, paving the way to assure the continued and string presence of the proffesional center for child development in the lives of the families in out community.
                            I welcome you to navigate through our website and if you don't find answer to your question, give us a call and we will be more happy to help. 
                            
                            
                        </p>
                    </center>
                        <img src="http://res.cloudinary.com/rohing/image/upload/c_crop,g_face,q_66,r_7,w_1454/v1505815573/rosePete_copy_qjtk8k.jpg" name="aboutme" width="90"  border-radius="20px" class="img">
                        <br>
                        <address>
                            Roseline Peters <br>
                            Executive director
                        </address>
                </div>
                <div class="modal-footer">
                    <center>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
            

            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
              <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel">Account Details</h4>
                    </div>
                    <div class="modal-body">
                    <p style="color:black; font-size:18px">
                        Account name: Restoration of Hope Initiative<br>
                        Bank Name: Zenith Bank<br>
                        Naira: 1014513188<br>
                        Dollar: 5070695956
                      </p>  
                    </div>
                    
                </div>
              </div>
            </div>
@stop
