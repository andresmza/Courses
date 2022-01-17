<div>
    {{-- <x-slot name='course'>
        {{$course->slug}}
    </x-slot> --}}

    <h1 class="text-2xl font-bold">LECCIONES DEL CURSO</h1>
    <hr class="mt-2 mb-6">

    @foreach ($course->sections as $item)

    <article class="card mb-6" x-data="{open: true}">
        <div class="card-body bg-gray-100">

            @if ($section->id == $item->id)
            <form wire:submit.prevent="update">
                <input wire:model="section.name" class="form-input w-full"
                    placeholder="Ingrese el nombre de la sección">

                @error('section.name')
                <span class="text-xs text-red-500">{{$message}}</span>
                @enderror
            </form>
            @else
            <header class="flex justify-between items-center">
                <h1 class="cursor-pointer" x-on:click="open = !open"><strong>Sección: </strong>{{$item->name}}</h1>

                <div>
                    <i class="fas fa-edit cursor-pointer text-blue-500" wire:click="edit({{$item}})"></i>
                    <i class="fas fa-eraser cursor-pointer text-red-500" wire:click="destroy({{$item}})"></i>
                </div>
            </header>

            <div x-show="open">
                @livewire('instructor.courses-lesson', ['section' => $item], key($item->id))
            </div>

            @endif

        </div>
    </article>

    @endforeach
    <div x-data="{open: false}">
        <a x-show="!open" x-on:click="open = true" class="flex items-center cursor-pointer">
            <i class="fas fa-plus-square text-2xl text-red-500 mr-2"></i>
            Agregar nueva sección
        </a>

        <article class="card" x-show="open">
            <div class="card-body bg-gray-100">
                <h1 class="text-xl font-bold mb-4">Agregar nueva sección</h1>

                <div mb-4>
                    <input wire:model="name" class="form-input w-full"
                        palceholder="Escriba el nombre de la sección">
                    @error('name')
                    <span class="text-xs tedt-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="flex justify-end mt-4">
                    <button x-on:click="open = false" class="btn btn-red">Cancelar</button>
                    <button class="btn btn-blue ml-2" wire:click="store">Agregar</button>
                </div>
            </div>
        </article>

    </div>
</div>