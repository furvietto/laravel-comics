<header>
    <div class="header-top">
        <div class="container-header-top">
            <div class="left-header-top">
                DC POWER&#8480; 
            </div>
            <div >
                VISA &#xA9;
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div>
            <img src="{{asset('img/dc-logo.png')}}" alt="">
        </div>
        <ul>
            <li>
                <a class="{{ 'characters' === Route::currentRouteName() ? 'active' : '' }}" href="{{ route('characters')}}">CHARACTERS</a>
            </li>
            <li >
                <a class="{{ 'home' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('home')}}">COMICS</a>
            </li>
            <li>
               <a class="{{ 'movies' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('movies')}}">MOVIES</a> 
            </li>
            <li>
                <a class="{{  'tv' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('tv')}}">TV</a>            
            </li>
            <li>
                <a class="{{  'games' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('games')}}">GAMES</a>
            </li>
            <li>
                <a class="{{  'collectibles' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('collectibles')}}">COLLECTIBLES</a>   
            </li>
            <li>
                <a class="{{  'videos' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('videos')}}">VIDEOS</a>
            </li>
            <li>
                <a class="{{  'fans' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('fans')}}">FANS</a>
            </li>
            <li>
                <a class="{{  'news' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('news')}}">NEWS</a>    
            </li>
            <li>
                <a class="{{  'shop' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('shop')}}">SHOP <i class="fas fa-sort-down"></i></a>
                
            </li>
        </ul>
        <div class="search">
            <input type="text" placeholder="Search">
        </div>
    </div>
    <div class="header-bottom">
    </div>
</header>