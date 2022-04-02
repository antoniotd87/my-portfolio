@extends('layouts.inicio')

@section('content')
    <section class="shadow-blue white-bg padding mt-0">
        <h3 class="section-title">Todos mis proyectos</h3>
        <div class="spacer" data-height="80"></div>

        <!-- portfolio filter (desktop) -->
        <ul class="portfolio-filter list-inline">
            <li class="current list-inline-item" data-filter="*">Todos</li>
            @foreach ($categories as $item)
                <li class="list-inline-item" data-filter=".{{ $item->slug }}">{{ $item->name }}</li>
            @endforeach
        </ul>

        <!-- portfolio filter (mobile) -->
        <div class="pf-filter-wrapper mb-4">
            <select class="portfolio-filter-mobile">
                <option value="*">Todos</option>
                @foreach ($categories as $item)
                    <option value=".{{ $item->slug }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- portolio wrapper -->
        <div class="row portfolio-wrapper">
            @foreach ($projects as $project)
                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item {{ $project->category->slug }}">
                    <a href="{{ route('show.projectFront', ['project' => $project->id]) }}">
                        <div class="portfolio-item">
                            <div class="details">
                                <h4 class="title">{{ $project->name }}</h4>
                                <span class="term">{{ $project->description_corta }}</span>
                            </div>
                            <span class="plus-icon">+</span>
                            <div class="thumb">
                                <img src="{{ asset('storage/projects/' . explode(',', $project->images)[0]) }}"
                                    alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </section>
@endsection
