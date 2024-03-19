@extends('layouts.app')

@section('title', 'Edit')

@section('content')
    <main>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST" class="col-10 mx-auto py-5">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label for="title" class="form-label">Titles</label>
              <input type="text" class="form-control" id="title" aria-describedby="emailHelp"
              name="title"
              value="{{ old('title') ?? $comic->title }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3"
                name="description">{!! old('title') ?? $comic->description !!}</textarea>
            </div>

            <div class="mb-3">
              <label for="thumb" class="form-label">Image URL</label>
              <input type="text" class="form-control" id="thumb"
              name="thumb"
              value="{{ old('title') ?? $comic->thumb }}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price"
                name="price"
                value="{{ old('title') ?? $comic->price }}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series"
                value="{{ old('title') ?? $comic->series }}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Date</label>
                <input type="date" class="form-control" id="sale_date"
                name="sale_date"
                value="{{ old('title') ?? $comic->sale_date }}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type"
                name="type"
                value="{{ old('title') ?? $comic->type }}">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
          </form>
    </main>
@endsection