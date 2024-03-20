@extends('layouts.app')

@section('title', 'Create')

@section('content')
    <main class="py-4">

        {{-- Error popup --}}
        @if ($errors->any())
            <div class="alert alert-danger col-10 mx-auto">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>    
        @endif


        <form action="{{ route('comics.store') }}" method="POST" class="col-10 mx-auto py-5">
            @csrf

            <div class="mb-3">
              <label for="title" class="form-label">Titles</label>
              <input type="text" class="form-control" id="title" aria-describedby="emailHelp"
              name="title">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3"
                name="description"></textarea>
            </div>

            <div class="mb-3">
              <label for="thumb" class="form-label">Image URL</label>
              <input type="text" class="form-control" id="thumb"
              name="thumb">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price"
                name="price">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series"
                name="series">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Date</label>
                <input type="date" class="form-control" id="sale_date"
                name="sale_date">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type"
                name="type">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </main>
@endsection