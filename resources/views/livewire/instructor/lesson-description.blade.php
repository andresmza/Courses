<div>
    <article class="card mt-2" x-data="{open: false}">
        <div class="card-body bg-gray-100">
            <header>
                <h1 x-on:click="open = !open" class="cursor-pointer">Descripción de la lección</h1>
                <div x-show="open">
                    <hr class="my-2">

                    @if ($lesson->description)
                    <form wire:submit.prevent="update">
                        <textarea wire:model="description.name" class="form-input w-full"></textarea>

                        @error('description.name')
                        <span class="text-sm text-red-500">{{$message}}</span>
                        @enderror
                        <div class="flex justify-end">
                            <button wire:click="destroy" type="button" class="btn btn-red text-sm">Eliminar</button>
                            <button type="submit" class="btn btn-blue text-sm ml-2">Actualizar</button>
                        </div>
                    </form>
                    @else
                    <div>
                        <textarea wire:model="name" class="form-input w-full" placeholder="Agregue una descripción de la lección"></textarea>

                        @error('name')
                        <span class="text-sm text-red-500">{{$message}}</span>
                        @enderror
                        <div class="flex justify-end">
                            <button wire:click="store" class="btn btn-blue text-sm ml-2">Agregar</button>
                        </div>
                    </div>
                    @endif
                </div>
            </header>
        </div>
    </article>
</div>