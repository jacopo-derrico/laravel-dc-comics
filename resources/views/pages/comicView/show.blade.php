@extends('layouts.app')

@section('title', 'Show')

@section('content')
    <main>
        <div class="banner w-100 ">
            <div class="uppercase title">single comic</div>
        </div>
        {{-- <table class="table table-primary my-5">
            @foreach ($currentSeries as $comic)
                        <tr class="slide">
                            
                            <td class="uppercase">
                                <a href="{{ route('comics.show', ['comic' => $comic['id']]) }}">
                                    {{ $comic['title'] }}
                                </a>
                            </td>
                            <td class="uppercase">{{ $comic['price'] }}</td>
                            <td class="uppercase">{{ $comic['series'] }}</td>
                            <td class="uppercase">{{ $comic['thumb'] }}</td>
                            <td class="uppercase">{{ $comic['sale_date'] }}</td>
                            <td class="uppercase">{{ $comic['type'] }}</td>                            
                        </tr>
            @endforeach
        </table> --}}
    </main>
@endsection