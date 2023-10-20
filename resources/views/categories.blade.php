@extends('layouts.main')

@section('container')
    <h2 class="mb-5">Post Categories</h2>

    <div class="container">
        <div class="row">
          @foreach ($categories as $category)
            <div class="col-md-4">
              <a href="/posts?category={{ $category->slug }}">
                <div class="card text-bg-dark">
                  <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img-top"
                  alt="{{ $category->name }}">
                  <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-3 fs-3" style="background-color: rgba(22, 22, 22, 0.8)">{{ $category->name }}</h5>
                  </div>
                </div>
              </a>
            </div>
            @endforeach
        </div>
    </div>

@endsection
