@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="card-title">Crear proyecto</div>
                            <div class="button">
                                <a href="{{ route('projects.index') }}" class="btn btn-primary">Regresar</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="name">Nombre del Proyecto</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description">Descripcion</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="url" name="link" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="image">Imagen</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" value="Guardar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
