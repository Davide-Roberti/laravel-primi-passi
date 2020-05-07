<header>
    <div class="container">
        <div class="logo-menu">
            <img id="molisana-logo" src="{{asset('img/logo.png')}}" alt="La Molisana">
            <nav class="header-nav">
                <ul>
                   <li class="{{(url()->current() == route('homepage')) ? 'active' : ''}}"><a href="#">Home</a></li>
                   <li class="{{(url()->current() == route('prodotti')) ? 'active' : ''}}"><a href="{{route('prodotti')}}">Prodotti</a></li>
                   <li class="{{(url()->current() == route('contatti')) ? 'active' : ''}}"><a href="{{route('contatti')}}">Contatti</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
