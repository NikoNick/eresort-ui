<div class="navbar">
    <div class="logo">
        <a href="{{ route('home') }}">
            <h1>PALAWI</h1>
        </a>
    </div>
    <ul class="nav">
        <li class="active"><span>PENCARIAN</span></li>
        <li><span>KONTAK</span></li>
        <li><a href="{{ route('booking.detail') }}"><span>PESANAN ANDA</span></a></li>
    </ul>
    <div class="special">
        {{ $special }}
    </div>
</div>