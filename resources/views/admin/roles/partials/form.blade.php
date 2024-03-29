<div class="form-group">
    {!! Form::label('name', 'nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control ' . ($errors->has('name') ? 'is-invalid' : ''),
    'placeholder' => 'Escriba un nombre', 'autofocus']) !!}
    @error('name')
    <span class="invalid-feedback">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</div>

<strong>Permisos</strong>

@error('permissions')
<br>
<small class="text-danger">
    <strong>{{$message}}</strong>
</small>
@enderror

@foreach ($permissions as $permission)
<div>
    <label>
        {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-2']) !!}
        {{$permission->name}}
    </label>
</div>
@endforeach