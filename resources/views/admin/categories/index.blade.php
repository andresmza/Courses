@extends('adminlte::page')

@section('title', 'Courses')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.categories.create')}}">Nueva categoría</a>
    <h1>Lista de categorías</h1>
@stop

@section('content')

    @if (session('info'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Éxito!</strong> {{session('info')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div> 
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>
                            {{$category->id}}
                        </td>
                    
                        <td>
                            {{$category->name}}
                        </td>
                    
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.categories.edit', $category)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
                                @csrf
                                @method('DELETE ')

                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

