@extends('layout')
@section('title')
ROHI : Contact Us
@stop

@section('pageContent')

 <section class="slider-section" style="background-image:url(/assets/images/slider/2.jpg);">
            <div class="container">
                <div class="slider">
                    <div class="text">
                        <p><a href="{{route('home')}}">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> Contact Us</p>
                    </div>
                </div>
            </div>
        </section>

<section class="contact-section contact-page">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Contact Us</h2>
                    <p>We would love to hear your comments, advice or enquires.Contact us on any of the following channels.  </p>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12">
                        <div class="contact-us">
                            <div class="contaat-item">
                                <div class="icon" style="margin-bottom:2px">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                </div>
                                <div class="text">
                                    <h4>Address:</h4>
                                    
                                    <p>Suite 4 Red Roof Upstairs Opp. M.M Ali Oil Station Bama Road,<br> Maiduguri, Borno State.</p>
                                    <p>Nurses Welfare House INEC Road Demsawo Jimeta Yola,Adamawa State.</p>
                                    <p>Adjacent new Era Nursery and Primary School Jalingo Taraba State</p>
                                </div>
                            </div>
                            <div class="contaat-item con-pd">
                                <div class="icon" style="margin-bottom:2px">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="text">
                                    <h4>Email Address:</h4>
                                    <p>roselinepeters@restorationofhopeinitiative.org</p>
                                    <p>benjaminjohn@restorationofhopeinitiative.org</p>
                                    <p>alamazira@restorationofhopeinitiative.org</p>
                                    <p>hauwamamza@restorationofhopeinitiative.org</p>
                                    <p>maimunaali@restorationofhopeinitiative.org</p>
                                    <p>richardpeters@restorationofhopeinitiative.org</p>
                                    <p>salwanajonah@restorationofhopeinitiative.org</p>
                                    <p>victoranekunu@restorationofhopeinitiative.org</p>
                                    <p>joshuapeter@restorationofhopeinitiative.org</p>
                                    <p>desmondpeter@restrationofhopeinitiative.org</p>
                                    <p>info@restrationofhopeinitiative.org</p>
                                    <p>recruitment@restrationofhopeinitiative.org</p>
                                </div>
                            </div>
                            <div class="contaat-item con-pd">
                                <div class="icon">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="text">
                                    <h4>Phone</h4>
                                    <p>07065784570</p>
                                    <p>08058917183</p>
                                </div>
                            </div>
                            
                        </div>
                        {{-- <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-12">
                                <div class="default-form-2 clearfix">
                                    <form id="contact-form" name="contact_form" class="default-form" action="http://per-concept.com/Kindness/sendmail.php" method="post">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" name="form_name" value="" placeholder="Full Name" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input type="email" name="form_email" value="" placeholder="Email Address" required="">
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                               <div class="form-group">
                                                    <input type="text" name="form_subject" value="" placeholder="Subject" required="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="form_phone" value="" placeholder="phone" required="">
                                                </div>
                                                <div class="form-group comments">
                                                    <textarea name="form_message" placeholder="Detail" required=""></textarea>
                                                </div>
                                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                                <button class="btn btn-1" type="submit" data-loading-text="Please wait...">Contact Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>  --}}             
                    </div>
                </div>
            </div>
        </section>
@stop