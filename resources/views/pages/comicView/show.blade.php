@extends('layouts.app')

@section('title', 'Show')

@section('content')
    <main>
        <div class="banner w-100 ">
            <div class="uppercase title">single comic</div>
        </div>
        <div  class="py-5 col-10 mx-auto ">
            <h2 class="my-5">{{ $comic->title }}</h2>
    
            <p>{{ $comic->description }}</p>
        </div>
    </main>
@endsection