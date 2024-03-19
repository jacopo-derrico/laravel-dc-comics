@extends('layouts.app')

@section('title', 'index')

@section('content')
    <main>
        <div class="banner w-100 ">
            <div class="uppercase title">index comics</div>
        </div>
        <a class="btn btn-primary mx-3 my-5" href="{{ route('comics.create') }}">Add new comic</a>
        <table class="table table-primary my-5">
            @foreach ($currentSeries as $comic)
                        <tr class="slide">
                            
                            <td class="uppercase" scope="row">
                                <a href="{{ route('comics.show', $comic->id) }}">
                                    {{ $comic['title'] }}
                                </a>
                            </td>
                            <td class="uppercase">{{ $comic['thumb'] }}</td>
                            <td class="uppercase">{{ $comic['description'] }}</td>
                            <td class="uppercase">{{ $comic['price'] }}</td>
                            <td class="uppercase">{{ $comic['series'] }}</td>
                            <td class="uppercase">{{ $comic['sale_date'] }}</td>
                            <td class="uppercase">{{ $comic['type'] }}</td>
                            
                            <td>
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger" type="submit">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
            @endforeach
        </table>
    </main>
@endsection