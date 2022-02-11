@extends('guest.layout.base')

@section('documentTitle')
    vue-comics
@endsection

@section('content')
   <main>
       <section class="main-comics">
            <div class="current">
                <h2>
                    CURRENT SERIES
                </h2>
            </div>
            <div class="main-container-top">
                <ul>
                    @foreach ($comic as $item)
                        <li>
                            <div class="img-container">
                                <img src="{{$item["thumb"]}}" alt="{{$item["title"]}}"> 
                            </div>
                            <div class="series">{{$item["series"]}}</div>
                        </li>
                    @endforeach
                </ul>
                <div class="load">
                    <button class="load-container">
                        LOAD MORE
                    </button>
                </div>
            </div>
       </section>
       <section class="main-links">
            <div class="main-container-bottom">
                <ul>
                    <li>
                        <a href="">
                            <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="digital comics">
                            <span>DIGITAL COMICS</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="digital comics">
                            <span>DC MERCHANDISE</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="digital comics">
                            <span>SUBSCRIPTION</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img id="locator" src="{{asset('img/buy-comics-shop-locator.png')}}" alt="digital comics">
                            <span>COMIC SHOP LOCATOR</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img id="visa" src="{{asset('img/buy-dc-power-visa.svg')}}" alt="digital comics">
                            <span>DIGITAL COMICS</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
       </section>
       
   </main>
@endsection