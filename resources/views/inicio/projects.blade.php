@extends('layouts.inicio')

@section('content')
    <div class="container-fluid banner">
        <div class="container py-5">
            <div class="d-flex flex-column align-items-center text-center my-3 py-5">
                <div class="title mb-4">
                    <h2 class="text-blue-800 font-weight-bold">Mira mi trabajo</h2>
                </div>
                <div class="buttons">
                    <a href="#" class="btn btn-light text-blue-800">Trabajemos Juntos</a>
                    <a href="#" class="btn btn-link text-blue-700">Mira mis otros proyectos</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container py-5">
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-md-6">
                        <div class="m-1">
                            <div class="project">
                                <img src="{{ asset('storage/' . $project->image) }}" class="img-fluid rounded" alt="" />
                            </div>
                            <h4 class="font-weight-bold my-3">{{ $project->name }}</h4>
                            <p class="my-1">
                                <span>{{ Str::limit($project->description, 50) }}</span>
                            </p>
                            <a href="" class="btn btn-primary">Ver Proyecto</a>
                        </div>
                        <br />
                        <br />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
