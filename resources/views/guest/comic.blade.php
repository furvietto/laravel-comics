@extends('guest.layout.base')

@section('documentTitle')
    vue-comics-comic
@endsection

@section('content')
    <main>
        <div class="header-comic">
           <img src="{{$comic["thumb"]}}" alt=""> 
        </div>
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
                <img src="{{asset('img/adv.jpg')}}" alt="">
            </div>
            <div class="bibliography">
                <div class="talent">

                </div>
                <div class="specs">

                </div>
            </div>
        </div>
    </main>
@endsection