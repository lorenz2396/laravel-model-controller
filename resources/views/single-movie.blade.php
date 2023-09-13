@extends('layouts.main')

@section('page-title', 'Single Movie')

{{-- @section('page-title')
Homepage
@endsection --}}

@section('main-content')
    <main>
        <h1 class="text-center">
            {{ $movie->title }}
        </h1>
        <div class="comic-container py-4">
            <div class="container">
                <div class="row row-cols-5 g-3">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        {{ $movie->original_title }}
                                    </li>
                                    <li>
                                        {{ $movie->date }}
                                    </li>
                                    <li>
                                        {{ $movie->nationality }}
                                    </li>
                                    <li>
                                        {{ $movie->vote }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
        
@endsection