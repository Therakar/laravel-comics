@extends('layouts.main')

@section('page-title')
    Homepage
@endsection

@section('content')
    <section id="main-top">

    {{-- hero --}}
        @include('partials.hero')


        <div class="container d-flex">

            <span class="badge label text-bg-primary"><h4>CURRENT SERIES</h4></span>
            <div class="row">
                @foreach ($comics as $product)
                    <div class="card-custom col-md-6" >
                        <img src="{{ $product['thumb']}}" alt="{{ $product['title'] }}">
                        <h5>{{ $product['series'] }}</h5>
                    </div>
                @endforeach
                
            </div>
            
            <div class="btn-container d-flex justify-content-center">
                <button class="btn-load-more">LOAD MORE</button>
            </div>
        </div>
    </section>
    <div id="main-bottom">

        <section class="container d-flex justify-content-between align-items-center px-0">
                    <ul class="d-flex px-0">
                    <li class="d-flex align-items-center justify-content-center">
                        <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
                        <span>DIGITAL COMICS</span>
                    </li>
                    <li class="d-flex align-items-center justify-content-center">
                        <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
                        <span>DC MERCHANDISE</span>
                    </li>
                    <li class="d-flex align-items-center justify-content-center">
                        <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
                        <span>SUBSCRIPTION</span>
                    </li>
                    <li class="d-flex align-items-center justify-content-center">
                        <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                        <span>COMIC SHOP LOCATOR</span>
                    </li>
                    <li class="d-flex align-items-center justify-content-center">
                        <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
                        <span>DC POWER VISA</span>
                    </li>
                    </ul>
                </div>


            </section>    
@endsection

