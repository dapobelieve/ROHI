<div class="container">
                     <div class="logo pull-left">
                        <a href="{{route('home')}}"><img src="/assets/images/logo.png" alt=""></a>
                     </div>
                     <nav class="main-menu pull-right">
                            <div class="navbar-header">     
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
    <ul class="navigation clearfix">
        <li class="{{ Request::is( '/' ) ? ' current' : ''  }}"><a href="{{route('home')}}">Home</a></li>
        <li class="{{ Request::is( 'events' ) ? ' current' : ''  }}"><a href="{{route('events')}}">Events</a></li>
        <li class="{{ Request::is( '/report' ) ? ' current' : ''  }}"><a href="{{route('report')}}">Situation Report</a></li>
        <li class="{{ Request::is( 'gallery' ) ? ' current' : ''  }}"><a href="{{route('gallery')}}">Gallery</a></li>
        <li class="{{ Request::is( 'about' ) ? ' current' : ''  }}"><a href="{{route('about')}}">About Us</a></li>
        <li class="{{ Request::is( 'contact' ) ? ' current' : ''  }}"><a href="{{route('contact')}}">Contact</a></li>
    </ul>
                                {{-- mobile menu start --}}
                                <ul class="mobile-menu clearfix">
        <li class="{{ Request::is( '/' ) ? ' current' : ''  }}"><a href="{{route('home')}}">Home</a></li>
        <li class="{{ Request::is( 'events' ) ? ' current' : ''  }}"><a href="{{route('events')}}">Events</a></li>
        <li class="{{ Request::is( 'gallery' ) ? ' current' : ''  }}"><a href="{{route('gallery')}}">Gallery</a></li>
        <li class="{{ Request::is( 'about' ) ? ' current' : ''  }}"><a href="{{route('about')}}">About Us</a></li>
        <li class="{{ Request::is( 'contact' ) ? ' current' : ''  }}"><a href="{{route('contact')}}">Contact</a></li>
                                </ul>
                                {{-- mobile menu ends --}}
                            </div>
                     </nav>
                </div>