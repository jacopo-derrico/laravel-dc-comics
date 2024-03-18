@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    <main>
        <div class="banner w-100 ">
            <div class="uppercase title">current series</div>
        </div>
        <div class="col-10 m-center">
            <div id="slider" class="flex">
                    @foreach ($currentSeries as $comic)
                        <div class="slide">
                            <figure>
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </figure>
                            <h4 class="uppercase">{{ $comic['title'] }}</h4>
                        </div>
                    @endforeach
            </div>
            <div class="flex justify-center">
                <button class="uppercase">load more</button>
            </div>
        </div>

        <div id="bannerLink">
            <nav class="h-100 col-10 m-center flex align-center">
                <ul class="flex h-100 w-100 align-center m-center">
                    @foreach ($bannerLink as $link)
                        <li class="h-100 flex align-center">
                            <figure>
                                <img src="img/<?php echo $link['image']; ?>">
                            </figure>
                            <a href="{{ $link['link'] }}" class="uppercase">{{ $link['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </main>
@endsection