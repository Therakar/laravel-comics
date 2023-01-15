@extends('layouts.main')

@section('page-title')
    Homepage
@endsection

@section('content')
    <section>

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
@endsection

