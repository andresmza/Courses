<div class="mb-4">
    {!! Form::label('title', 'Título del curso') !!}
    {!! Form::text('title', null, ['class' => 'form-input block w-full mt-1' . ($errors->has('title') ? ' border-red-600' : '')]) !!}
    @error('title')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('slug', 'Slug del curso') !!}
    {!! Form::text('slug', null, ['class' => 'form-input shadow block w-full mt-1' . ($errors->has('slug') ? ' border-red-600' : ''), 'readonly']) !!}
    @error('slug')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('subtitle', 'Subtítulo del curso') !!}
    {!! Form::text('subtitle', null, ['class' => 'form-input block w-full mt-1 ' . ($errors->has('subtitle') ? ' border-red-600' : '')]) !!}
    @error('subtitle')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('description', 'Descripción del curso') !!}
    {!! Form::textarea('description', null, ['class' => 'form-input block w-full mt-1 !important ' . ($errors->has('description') ? ' border-red-600' : '')]) !!}
    @error('description')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>

<div class="grid grid-cols-3 gap-4">
    <div>
        {!! Form::label('category_id', 'Categoría') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-input']) !!}
        @error('category_id')
            <strong class="text-xs text-red-600">{{$message}}</strong>
        @enderror
    </div>
    <div>
        {!! Form::label('level_id', 'Nivel') !!}
        {!! Form::select('level_id', $levels, null, ['class' => 'form-input']) !!}
        @error('level_id')
            <strong class="text-xs text-red-600">{{$message}}</strong>
        @enderror
    </div>
    <div>
        {!! Form::label('price_id', 'Precio') !!}
        {!! Form::select('price_id', $prices, null, ['class' => 'form-input']) !!}
        @error('price_id')
            <strong class="text-xs text-red-600">{{$message}}</strong>
        @enderror
    </div>

</div>

<h1 class="text-2xl font-bold mt-8 mb-2 ">Imagen del curso</h1>

<div class="grid grid-cols-2 gap-4">


    <figure>
        @isset($course->image)
            <img id="picture" class="w-full h-64 object-cover object-center" src="{{Storage::url($course->image->url)}}" alt="">
        @else
            <img id="picture" class="w-full h-64 object-cover object-center" src="https://cdn.pixabay.com/photo/2020/05/05/12/12/coffee-5132832_960_720.jpg" alt="">
        @endisset
    </figure>


    <div>

        <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius dicta delectus soluta hic at.</p>
        {!! Form::file('file', ['class' => 'align-middle w-full'. ($errors->has('file') ? ' border-red-600' : ''), 'id' => 'file', 'accept' => 'image/*']) !!}

        @error('file')
            <strong class="text-xs text-red-600">{{$message}}</strong>
        @enderror

    </div>

</div>