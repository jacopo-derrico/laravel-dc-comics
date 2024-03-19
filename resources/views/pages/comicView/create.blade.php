@extends('layouts.app')

@section('title', 'Show')

@section('content')
    <main>
        <form action="{{ route('comics.store') }}" method="POST" class="col-10 mx-auto py-5">
            @csrf

            <div class="mb-3">
              <label for="title" class="form-label">Titles</label>
              <input type="text" class="form-control" id="title" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3"></textarea>
            </div>

            <div class="mb-3">
              <label for="thumb" class="form-label">Image URL</label>
              <input type="text" class="form-control" id="thumb">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Date</label>
                <input type="date" class="form-control" id="sale_date">
            </div>

            <div class="mb-3">
                <label for="Type" class="form-label">Type</label>
                <input type="text" class="form-control" id="Type">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </main>
@endsection