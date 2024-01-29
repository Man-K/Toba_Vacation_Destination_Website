<header class="site-header">
    <div class="top-header">
        <div class="container">
            <div class="top-header-right">
                <div class="social-block">
                    <ul class="social-list">
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Top header Close -->
    <div class="main-header">
        <div class="container">
            <div class="logo-wrap" itemprop="logo">
                <img src="{{ asset('images/tvd2.jpg') }}" alt="Logo Image">
                <!-- <h1>Toba Vacation Destination</h1> -->
            </div>
            <div class="nav-wrap">
                <nav class="nav-desktop">
                    <ul class="menu-list">
                        <li><a class="nav-link {{ Request::is ('Home') ? 'active' : '' }}" href="/">Home</a></li>
                        <li class="menu-parent">Jenis Wisata
                            <ul class="sub-menu">
                                <li><a href="/wisata">Wisata Alam</a></li>
                                <li><a href="/wisata">Wisata Rohani</a></li>
                                <li><a href="/wisata">Wisata Budaya</a></li>
                                <li><a href="/wisata">Wisata Olahraga</a></li>
                                <li><a href="/wisata">Wisata Pendidikan</a></li>
                            </ul>
                        </li>
                        <li class="menu-parent">Akomodasi
                            <ul class="sub-menu">
                                <li><a href="{{ route('tambahhotel.index') }}">Hotel</a></li>
                                <li><a href="{{ route('tambahtravel.index') }}">Travel</a></li>
                                <li><a href="{{ route('tambahkuliner.index') }}">Kuliner</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('tambahevent.index') }}">Events</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        @auth
                            <li class="menu-parent">Welcome Back, {{ auth()->user()->username }}
                                <ul class="sub-menu">
                                    <li><a href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My
                                            Dashboard</a></li>
                                    <li>
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button type="submit" class="dropdown-item"><i
                                                    class="bi bi-box-arrow-right"></i> Logout</a></button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li><a href="/login" class="nav-link  {{ Request::is('login') ? 'active' : '' }}"><i
                                        class="bi bi-box-arrow-in-right"></i> Login Sebagai Admin</a></li>
                        @endauth
                    </ul>
                </nav>
                <div id="bar">
                    <i class="fas fa-bars"></i>
                </div>
                <div id="close">
                    <i class="fas fa-times"></i>
                </div>
            </div>
        </div>
    </div>
</header>
