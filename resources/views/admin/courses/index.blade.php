@extends('adminlte::page')

@section('title', 'Courses')

@section('content_header')
    <h1>Cursos pendientes de aprobación</h1>
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
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Categoría</th>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{$course->id}}</td>
                        <td>{{$course->title}}</td>
                        <td>{{$course->category->name}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('admin.courses.show', $course)}}">Revisar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$courses->links('vendor.pagination.bootstrap-4')}}
        {{-- console: php artisan vendor:publish --tag=laravel-pagination  // para ver los links de paginacion de bootstrap--}}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop