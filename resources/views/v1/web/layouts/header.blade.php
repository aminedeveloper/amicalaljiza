@php
    $tranches = App\Models\Tranche::get();
    $albums = App\Models\Album::get();
@endphp
<div class="header-clear clearfix">
    <div class="header-content-left clearfix">
        <!-- LOGO START  
            ============================================= -->
        <div class="logo">
            <a href="{{route('home')}}"><img src="/assets/web/img/logo.png" alt="Gedung Logo" /></a>
        </div>
        <!-- LOGO END -->
    </div>
    <div class="header-content-right">
        <!-- NAVIGATION START============================================= -->
        <nav class="main-nav animated">
            <!-- Mobile menu toggle button (hamburger/x icon) -->
            <input id="main-menu-state" type="checkbox" />
            <label class="main-menu-btn sub-menu-trigger" for="main-menu-state">
                <span class="main-menu-btn-icon"></span> Toggle main menu visibility
            </label>
            <!-- Sample menu definition -->
            <ul id="main-menu" class="sm sm-clean">
                <li class="menu-item"><a href="{{route('home')}}" class="menu-link active">Acceuil</a></li>
                <li class="menu-item"><a  class="menu-link" href="{{route('about')}}">À Propos De Nous </a>
                    <ul class="dropdown">
                      <li class="menu-item"><a href="{{route('about')}}">Amicale Al Jiza</a></li>
                      <li class="menu-item"><a href="{{route('team')}}">Bureau</a></li>
                      <li class="menu-item"><a href="{{route('partners')}}">Partenaires</a></li>
                    </ul>
                </li>
                <li class="menu-item"><a href="{{route('nouveautes')}}" class="menu-link">Nouveautés</a></li>
                <li class="menu-item"><a href="{{route('projects')}}" class="menu-link">Projets</a>
                    <ul class="dropdown">
                        @foreach ($tranches as $tranche)
                            <li class="menu-item"><a href="{{route('tranches',$tranche->id)}}">{{$tranche->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="menu-item"><a href="#" class="menu-link">Galeries</a>
                    <ul class="dropdown">
                        @foreach ($albums as $album)
                            <li class="menu-item"><a href="{{route('galleries',$album->id)}}">{{$album->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="menu-item"><a href="{{route('contact')}}" class="menu-link">Contact</a></li>
                <li class="menu-item"><a href="{{route('mosquee')}}" class="menu-link">Mosquee</a></li>
            </ul>
        </nav>
        <!-- NAVIGATION END -->
        <div class="header-info head-item clearfix">
            <div class="info-wrap">
                <div class="search-wrap">
                    <button id="btn-search" class="btn btn--search"><i class="icon-simple-line-icons-143"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- search -->
    <div class="search">
        <button id="btn-search-close" class="btn--search-close"><i class="icon-themify-1"></i></button>
        <form class="search__form">
            <input class="search__input" name="search" type="search" placeholder="Type and hit enter ..." />
            <span class="search__info">Hit enter to search or ESC to close</span>
        </form>
    </div>
    <!-- /search -->
</div>