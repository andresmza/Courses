<div>
    <div class="bg-gray-200 py-4">
        <div class="container flex">
            <button class="bg-white shadow h-12 px-4 rounded-lg text-gray-700 mr-4 focus:outline-none" wire:click="resetFilters">
                <i class="fas fa-book mr-2"></i>
                Todos los cursos
            </button>

            <!-- Dropdown categorías -->
            <div class="relative mr-4" x-data="{open: false}">
                <button class="px-4 text-gray-700 block h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow" x-on:click="open = true">                   <i class="fas fa-tags text-sm mr-2"></i>
                    Categoría
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="ml-4 absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" wire:click="resetPage" x-show="open" x-on:click.away="open = false">
                    @foreach ($categories as $category)
                        <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-500 hover:text-white" wire:click="$set('category_id', {{$category->id}})" x-on:click="open = false">
                            {{$category->name}}
                        </a>
                        <div class="py-2">
                            <hr>
                        </div>
                    @endforeach
                </div>
                <!-- // Dropdown categorías -->
            </div>

            <!-- Dropdown Niveles -->
            <div class="relative" x-data="{open: false}">
                <button class="px-4 text-gray-700 block h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow" x-on:click="open = true">
                    <i class="fas fa-layer-group text-sm mr-2"></i>
                    Nivel
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="ml-4 absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" wire:click="resetPage" x-show="open" x-on:click.away="open = false">
                    @foreach ($levels as $level)
                        <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-500 hover:text-white" wire:click="$set('level_id', {{$level->id}})" x-on:click="open = false">
                            {{$level->name}}
                        </a>
                        <div class="py-2">
                            <hr>
                        </div>
                    @endforeach
                </div>
                <!-- // Dropdown Niveles -->
            </div>
            <!-- // Dropdown -->

        </div>
    </div>

{{--     <p>Category_id: {{$category_id}}</p>
    <p>Level id: {{$level_id}}</p> --}}

    {{-- listado de cursos --}}
    <div class="mt-8 container grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
        @foreach ($courses as $course)
            <x-course-card :course="$course"/>
        @endforeach
    </div>

    <div class="mt-4 container">
        {{$courses->links()}}
    </div>

</div>
