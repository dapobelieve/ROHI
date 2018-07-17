@extends('layout')
@section('title')
ROHI : About
@stop

@section('pageContent')

    <section class="slider-section" style="background-image:url(/assets/images/slider/2.jpg);">
            <div class="container">
                <div class="slider">
                    <div class="text">
                        <h2>Save <span>people’s</span> Life</h2>
                        <p><a href="{{route('home')}}">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> About Us</p>
                    </div>
                </div>
            </div>
        </section>
        <!--End slider-section-->
        <!--.video-seciton-->
        <section class="video-seciton">
            <div class="container">  
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <!-- Start single-item -->
                        <div class="single-item">
                            <h2>What we <span>Do</span></h2>
                            {{-- <h4>help children: build a<br> School for education</h4> --}}
                                <p class="text-justify" style="font-size:15px" >
                                Since the insurgency began in 2009, many lives were lost and properties worth billions of Naira destroyed.
                                There has been a lot of migration of people from one location to another location which is considered
                                relatively peaceful, as a result many are displaced and homeless and
                                many international organizations are bringing relief services in the
                                areas of Water Sanitation and Hygiene (WASH), Food Security and
                                Livelihood (FSL), Education, Health and other sectors as listed out in
                                the Humanitarian Response Plan. Some of the local Government
                                Areas (LGA) are relatively peaceful and there is a high population
                                density with men and women who are suffering from poverty, and
                                children who are vulnerable to illiteracy. In order to educate these
                                young children, ROHI, funded by USAID is working at expanding
                                access to quality, protective and relevant non-formal education and
                                alternative education opportunities to internally displaced out of school children.
                                ROHI has done a community mapping to intervene in communities
                                that has a high number of internally displaced persons (IDPs) mostly girls and boys within school age of 6 – 17
                                years. ROHI is working at Girei LGA of Adamawa State and Maiduguri Metropolitan Council (MMC) Borno
                                State.
                            </p>
                        </div>
                        <!-- End single-item -->
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12" style="margin-top:62px">
                        <!-- video-preview start -->
                        <div class="video-preview" style="background-image:url(/assets/images/blog/bg3.jpg);">
                            <ul class="v-container text-center">
                                <li>
                                    <a href="https://youtu.be/7ZN9PIjzmys" class="html5lightbox"><i class="fa fa-play" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="https://youtu.be/7ZN9PIjzmys" class="html5lightbox" id="watch-video"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- video-preview end -->
                    </div>
                </div>
            </div>
        </section>
        {{-- <hr> --}}
        <section class="team-seciton team-page">
            <div class="container">
                <div class="row"> 
                            <div class="team-item">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <!-- Start single-item -->
                                    {{--  --}}
                                    <!-- End single-item -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <!-- Start single-item -->
                                    <div class="single-item wow fadeInUp">
                                        <div class="img-holder">
                                           <figure><a href="#"><img src="/assets/images/team/2.jpg" alt="Images"></a></figure>
                                            <!-- Start overlay -->
                                           {{--  <div class="overlay">
                                                <div class="link-icon">
                                                    <ul class="link">
                                                        <li>
                                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div> --}}
                                            <!-- End overlay -->
                                        </div>
                                        <div class="text">
                                            <h4><a href="#">Peters Roseline, <small>08027996421</small></a></h4>
                                            <p>Executive Director</p><br>
                                            
                                        </div>
                                    </div>
                                    <!-- End single-item -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <!-- Start single-item -->
                                    <div class="single-item wow fadeInUp">
                                        <div class="img-holder">
                                           <figure><a href="#"><img src="/assets/images/team/3.jpg" alt="Images"></a></figure>
                                            <!-- Start overlay -->
                                            {{-- <div class="overlay">
                                                <div class="link-icon">
                                                    <ul class="link">
                                                        <li>
                                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div> --}}
                                            <!-- End overlay -->
                                        </div>
                                        <div class="text">
                                            <h4><a href="#">Benjamin John, <small>08131820439</small></a></h4>
                                            <p>Program Manager</p><br>

                                        </div>
                                    </div>
                                    <!-- End single-item -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <!-- Start single-item -->
                                    {{-- <div class="single-item wow fadeInUp">
                                        <div class="img-holder">
                                           <figure><a href="team.html"><img src="images/team/4.jpg" alt="Images"></a></figure>
                                            <!-- Start overlay -->
                                            <div class="overlay">
                                                <div class="link-icon">
                                                    <ul class="link">
                                                        <li>
                                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- End overlay -->
                                        </div>
                                        <div class="text">
                                            <h4><a href="team.html">natalia alex</a></h4>
                                            <p>volunteer</p>
                                        </div>
                                    </div> --}}
                                    <!-- End single-item -->
                                </div>
                            </div>
                </div>
            </div>
        </section>
        <!--/video-seciton-->
        <!--.mission-seciton-->
        {{-- <section class="mission-seciton">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- Start single-item -->
                        <div class="mission-item ab-item">
                            <i class="flaticon-medical"></i>
                            <h4><a href="#">give donation</a></h4>
                            <p>Pellentesque eu malesuada nisi as<br>
                                et condimen tum lorem ipsem vitae<br>
                                arcu eget lobortis cursus.</p>
                        </div>
                        <!-- End single-item -->
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- Start single-item -->
                        <div class="mission-item ab-item">
                            <i class="flaticon-heart-3"></i>
                            <h4><a href="#">become volunteer</a></h4>
                            <p>Pellentesque eu malesuada nisi as<br>
                                et condimen tum lorem ipsem vitae<br>
                                arcu eget lobortis cursus.</p>
                        </div>
                        <!-- End single-item -->
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- Start single-item -->
                        <div class="mission-item ab-item">
                            <i class="flaticon-heart"></i>
                            <h4><a href="#">fund raising</a></h4>
                            <p>Pellentesque eu malesuada nisi as<br>
                                et condimen tum lorem ipsem vitae<br>
                                arcu eget lobortis cursus.</p>
                        </div>
                        <!-- End single-item -->
                    </div>
                </div>
            </div>
        </section> --}}

@stop