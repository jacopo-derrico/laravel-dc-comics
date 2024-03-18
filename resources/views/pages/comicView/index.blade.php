@extends('layouts.app')

@section('title', 'index')

@section('content')
    <main>
        <div class="banner w-100 ">
            <div class="uppercase title">index comics</div>
        </div>
        <table class="table table-primary my-5">
            @foreach ($currentSeries as $comic)
                        <tr class="slide">
                            
                            <td class="uppercase">{{ $comic['title'] }}</td>
                            <td class="uppercase">{{ $comic['price'] }}</td>
                            <td class="uppercase">{{ $comic['series'] }}</td>
                            <td class="uppercase">{{ $comic['thumb'] }}</td>
                            <td class="uppercase">{{ $comic['sale_date'] }}</td>
                            <td class="uppercase">{{ $comic['type'] }}</td>                            
                        </tr>
            @endforeach
        </table>
    </main>
@endsection