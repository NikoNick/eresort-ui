<div class="navbar @yield('additional-class')">
    <div class="nav-trigger">
        <i class="fas fa-bars"></i>
    </div>
    <div class="logo">
        <a href="{{ route('home') }}">
            <!-- <h1>PALAWI</h1> -->
            <img class="logo-white" src="{{ asset('../img/logo-white.png') }}">
            <img class="logo-default" src="{{ asset('../img/logo.png') }}">
        </a>
    </div>
    <ul class="nav animation anim-blink">
        <li class="active"><span>PENCARIAN</span></li>
        <li><span>KONTAK</span></li>
        <li><a href="{{ route('booking.detail') }}"><span>PESANAN ANDA</span></a></li>
    </ul>
    <div class="special">
        {{ $special }}
    </div>
</div>