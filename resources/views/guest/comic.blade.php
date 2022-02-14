@extends('guest.layout.base')

@section('documentTitle')
    vue-comics-comic
@endsection

@section('content')
    <main>
        <section>
            <div class="header-comic">
               <img src="{{$comic["thumb"]}}" alt=""> 
            </div>
        </section>

        <section>
            <div class="main-comic">
                <div class="main-comic-left">
                    <h2>{{$comic["title"]}}</h2>
                    <div class="price-container">
                        <div class="price">
                            <div>
                                U.S Price: <span id="dollar-price">{{$comic["price"]}}</span>
                            </div>
                            <div>
                                AVAILABLE
                            </div>
                        </div>
                        <button>
                            Check availability <i class="fas fa-sort-down"></i>
                        </button>
                    </div>
                    <div class="description">
                        {{$comic["description"]}}
                    </div>
                </div>
                <div class="main-comic-rigth">
                    <div class="advertisment">ADVERTISMENT</div>
                    <img src="/img/adv.jpg" alt="">
                </div>
            </div>
        </section>

        <section class="bibliography-container">
            <div class="bibliography">
                <div class="talent-container">
                    <div>
                        <h3>Talent</h3>
                    </div>
                    <div class="cont-flex-bibliography">
                        <div class="cont-flex-bibliography-l">
                            Art by:
                        </div>
                        <div class="cont-flex-bibliography-r">
                            @foreach ($comic["artists"] as $artist)
                            @if ($loop->last)
                            <a href="">{{$artist}}</a> 
                            @else
                            <a href="">{{$artist}},</a> 
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="cont-flex-bibliography">
                        <div class="cont-flex-bibliography-l">
                            Written by:
                        </div>
                        <div class="cont-flex-bibliography-r">
                            @foreach ($comic["writers"] as $writer)
                                    @if ($loop->last)
                                    <a href="">{{$writer}}</a> 
                                    @else
                                    <a href="">{{$writer}},</a> 
                                    @endif
                                @endforeach
                        </div>
                    </div>
                </div>
                <div class="specs">
                    <div>
                        <h3>Specs</h3>
                    </div>
                    <div class="cont-flex-bibliography">
                        <div class="cont-flex-bibliography-l">
                            Series:
                        </div>
                        <div class="cont-flex-bibliography-r">
                            <a href="">{{$comic["series"]}}</a>
                        </div>
                    </div>
                    <div class="cont-flex-bibliography">
                        <div class="cont-flex-bibliography-l">
                            U.S. Price:
                        </div>
                        <div class="cont-flex-bibliography-r">
                            {{$comic["price"]}}
                        </div>
                    </div>
                    <div class="cont-flex-bibliography">
                        <div class="cont-flex-bibliography-l">
                            On Sale Date:
                        </div>
                        <div class="cont-flex-bibliography-r">
                            {{$comic["sale_date"]}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer-comic">
            <div class="footer-container">
                <div>
                    <div class="left-footer">
                         DIGITAL COMICS   
                    </div>
                    <div class="pad-links">
                    </div>
                </div>
                <div>
                    <div class="left-footer">
                        SHOP DC  
                   </div>
                   <div class="shop-links">
                   </div>
                </div>
                <div>
                    <div class="left-footer">
                        COMIC SHOP LOCATOR 
                   </div>
                   <div class="locator-links">
                   </div>
                </div>
                <div class="last-border">
                    <div class="left-footer">
                        SUBSCRIPTIONS
                   </div>
                   <div class="subscription-links">
                   </div>
                </div>
            </div>
        </section>
    </main>
@endsection