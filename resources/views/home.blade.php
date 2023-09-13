@extends('layouts.main')

@section('page-title', 'Homepage')

{{-- @section('page-title')
Homepage
@endsection --}}

@section('main-content')
    <main>
        <h1 class="text-center m-4">
            Movies
        </h1>
        <div class="comic-container py-4">
            <div class="container">
                <div class="row row-cols-5 g-3">
                    @foreach ($movies as $movie)
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{ $movie->image }}" alt="">
                                    <h5 class="card-title">{{ $movie->title }}</h5>
                                    <a href="{{ route('movie.show', ['id' => $movie->id] ) }}" class="btn btn-primary">
                                        Check single film
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
        
@endsection