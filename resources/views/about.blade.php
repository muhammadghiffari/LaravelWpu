@extends('layouts.main')

@section('container')
<h1 class="mb-4">Halaman About</h1>
<h4>{{ $name }}</h4>
<p>{{ $email }}</p>
<img src="{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
@endsection