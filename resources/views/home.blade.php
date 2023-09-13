@extends('layouts.main')

@section('page-title', 'Homepage')

{{-- @section('page-title')
Homepage
@endsection --}}

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            Movie
        </div>
    </div>

    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-12 col-sm-4 col-md-3 col-lg-2">
            <div class="card">
                <div class="card-body">
                    <h2>
                        {{ $movies->title }}
                    </h2>

                    <a href="{{ route('show.movie', ['id' => $movies->id]) }}" class="btn btn-primary">
                        Check Single Movie
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
