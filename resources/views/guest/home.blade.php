@extends('guest.layout.base')

@section('documentTitle')
    vue-comics
@endsection

@section('content')
   <main>
       <div class="current">
           <h2>
               CURRENT SERIES
           </h2>
       </div>
       <div class="main-container">
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
   </main>
@endsection