<div id="sidebar">
    <ul>
        <li class="active"><a href="{{ route('hadmin') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li>
            <a href="{{ route('posts.index') }}"><i class="fa fa-signal"></i> <span>Events</span></a>
        </li>
        <li>
            <a href="{{ route('gala.index') }}"><i class="fa fa-cogs"></i> <span>Gallery</span></a>
        </li>
        <li>
                        <a href="{{ route('auth') }}"><i class="fa exit"></i> <span>Logout</span></a>
        </li>
        {{-- <li>
            <a href="charts.html"><i class="fa fa-cogs"></i> <span>Messages <span class="label label-danger">5</span></span></a>
        </li> --}}
    </ul>
</div>