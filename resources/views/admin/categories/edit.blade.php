@extends('adminlte::page')

@section('title', 'Courses')

@section('content_header')
    <h1>Editar categoría</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        
        @if (session('info'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Éxito!</strong> {{session('info')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div> 
        @endif

        {!! Form::model($category, ['route' => ['admin.categories.update', $category], 'method' => 'PUT']) !!}
        
        <div class="form-group">

            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoría']) !!}
            
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        
        </div>
        
        {!! Form::submit('Actualizar categoría', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop