<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="index.html">
                        <!-- <img src="images/logo.png" alt="" /> --><span>Focus</span></a></div>
                <li class="label">Main</li>
                <li><a href="{{route('dashboard')}}"><i class="ti-home"></i>Dashboard</a></li>
                <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i>Layanan Dan Paket <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('layananhost') }}">Hosting</a></li>
                        <li><a href="{{ route('layanandomain') }}">Domain</a></li>
                    </ul>
                </li>
                <hr>
                <li><a href="{{ route('cpanel') }}"><i class="ti-panel"></i> Akses Cpanel </a></li>
                <li><a href="{{ route('database') }}"><i class="ti-server    "></i> Database</a></li>
                <li><a href="{{ route('filemanager') }}"><i class="ti-files"></i> File Manager</a></li>
                {{-- <li><a class="sidebar-sub-toggle"><i class="ti-archive"></i>Domain <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="chart-flot.html">Addons Domain</a></li>
                        <li><a href="chart-morris.html">Sub Domain</a></li>
                    </ul>
                </li> --}}
                <li><a href="{{ route('costumerservice') }}"><i class="ti-headphone-alt"></i>Costumer Service</a></li>
            </ul>
        </div>
    </div>
</div>