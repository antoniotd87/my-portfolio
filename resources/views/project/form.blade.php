<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css"
    integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"
integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $project->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''),'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description_corta') }}
            {{ Form::text('description_corta', $project->description_corta, ['class' => 'form-control' . ($errors->has('description_corta') ? ' is-invalid' : ''),'placeholder' => 'Description Corta']) }}
            {!! $errors->first('description_corta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="images">
                Imagenes del proyecto
            </label>
            <div id="dropzoneItems" class="dropzone form-control text-center" style="height: auto;"></div>
            <input type="hidden" name="images" id="images" value="{{ old('images') }}">
            <p id="error" class="text-danger"></p>
            @error('images')
                <span class="block">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            {{ Form::label('link') }}
            {{ Form::text('link', $project->link, ['class' => 'form-control' . ($errors->has('link') ? ' is-invalid' : ''),'placeholder' => 'Link']) }}
            {!! $errors->first('link', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('github') }}
            {{ Form::text('github', $project->github, ['class' => 'form-control' . ($errors->has('github') ? ' is-invalid' : ''),'placeholder' => 'Github']) }}
            {!! $errors->first('github', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('customer') }}
            {{ Form::text('customer', $project->customer, ['class' => 'form-control' . ($errors->has('customer') ? ' is-invalid' : ''),'placeholder' => 'Customer']) }}
            {!! $errors->first('customer', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date') }}
            {!! Form::date('date',$project->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''),'placeholder' => 'Date']) !!}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Categoria') }}
            <select name="category_id" class="form-control">
                <option value="">Seleccione</option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            <input id="descrip" type="hidden" name="description" value="{{old('description')}}">
            <trix-editor input="descrip"></trix-editor>
            @error('description')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
<style>
    .dropzone {
        border: 2px dashed #b3abab9c;
        display: flex;
        flex-wrap: wrap;
    }

    .dropzone .dz-error {
        display: none;
    }

    .dropzone .dz-message .dz-button {
        color: #666;
    }

</style>
