@extends('layouts.inicio')

@section('content')
    <!-- single portfolio -->
    <section class="single-portfolio background-white rounded padding-50 shadow-blue mt-0">
        <h2 class="archive-header">{{ $project->name }}</h2>
        <!-- portfolio info -->
        <ul class="list-inline portfolio-info mb-0 mt-4">
            <li class="list-inline-item"><i class="icon-user"></i>{{ $project->customer }}</li>
            <li class="list-inline-item"><i class="icon-calendar"></i>{{ $project->date }}</li>
            <li class="list-inline-item"><i class="icon-link"></i><a href="{{ $project->link }}"
                    target="_blank">{{ $project->link }}</a></li>
        </ul>
        <div class="spacer" data-height="40"></div>

        <!-- portfolio image -->
        <div class="row justify-content-center">

            @foreach (explode(',', $project->images) as $item)
                <div class="col-md-6">
                    <img src="{{ asset('storage/projects/' . $item) }}" alt="Portfolio-title" class="rounded shadow-sm">
                </div>
            @endforeach
        </div>

        <!-- portfolio content -->
        <div class="portfolio-content mt-5">
            <h3>Informacion</h3>
            {!! $project->description !!}
        </div>
    </section>
@endsection
