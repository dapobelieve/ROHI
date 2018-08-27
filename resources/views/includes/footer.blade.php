<footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="footer-item">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="widget">
                                <h2>Contact Us</h2>
                                <ul>
                                    <li>
                                        <h5>
                                            <address>
                                               Nurses Welfare house former INEC Road <br>
                                                Demsawo jimeta yola Adamawa State

                                            </address>
                                        </h5>
                                    </li>
                                <li>
                                    <h5>
                                    {{-- <i class="fa fa-map-marker" aria-hidden="true"></i> --}} 
                                        <address>
                                        <span style="padding-botttom:25px padding-left:50px"> House 4 Gomari Airport Bus stop beside Simple Pharmacy Maiduguri Borno State.</span>
                                        </address>
                                            {{-- <div class="col-xs-6" style="padding-right:20px"></div>
                                            <div class="col-xs-6"> --}}
                                            {{-- </div> --}}
                                    </h5>
                                </li>
                                

                                {{--  --}}

                                <li><h5><i class="fa fa-envelope-o" aria-hidden="true"></i>support@restorationofhopeinitiative.org</h5></li>
                                <li><h5><i class="fa fa-phone" aria-hidden="true"></i>07065784570, 08058917183</h5></li>
                            </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="date-widget">
                                <h2>Events</h2>
                                @foreach($events as $event)
                                    <h4>{{$event->title}}</h4>
                                    <p>{{ $event->created_at->format('F jS Y ')}}</p>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="gallery-widget">
                                <h2> Photos</h2>
                                <ul class="gallery">
                                    <li>
                                        <div class="img-holder">
                                            {{-- <img src="/assets/images/gallery/1.jpg" alt="Images"> --}}
                                            <div class="overlay">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            {{-- <img src="/assets/images/gallery/2.jpg" alt="Images"> --}}
                                            <div class="overlay">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            {{-- <img src="/assets/images/gallery/3.jpg" alt="Images"> --}}
                                            <div class="overlay">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            <img src="/assets/images/gallery/4.jpg" alt="Images">
                                            <div class="overlay">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    {{-- <li>
                                        <div class="img-holder">
                                            <img src="/assets/images/gallery/5.jpg" alt="Images">
                                            <div class="overlay">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            <img src="/assets/images/gallery/6.jpg" alt="Images">
                                            <div class="overlay">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="footer-bottom">
            <p>
                <span>Restorationofhopinitiative.org </span>
                Copyright 2017. Developed by 
                <span>
                    <a href="#">Believe</a>
                </span>
            </p>
        </div>
    </footer>