<div class="mt-8">
    <div class="container grid lg:grid-cols-3">
        <div class="lg:col-span-2 mr-4">
            <div class="embed-responsive">
                {!!$current->iframe!!}
            </div>
            <div class="flex items-center mt-4 cursor-pointer" wire:click="completed">
                @if ($current->completed)
                <i class="fas fa-toggle-on text-2xl text-blue-500"></i>
                @else
                <i class="fas fa-toggle-off text-2xl text-gray-600"></i>
                @endif

                <p class="text-sm ml-2">Marcar esta unidad como culminada</p>
            </div>

            <div class="card mt-2">
                <div class="card-body flex text-gray-500 font-bolf">
                    @if ($this->previous)
                    <a wire:click="changeLesson({{$this->previous}})" class="cursor-pointer">Tema anterior</a>
                    @endif
                    @if ($this->next)
                    <a wire:click="changeLesson({{$this->next}})" class="ml-auto cursor-pointer">Siguiente tema</a>
                    @endif
                </div>
            </div>

            <h1 class="text-3xl text-gray-600 font-bold mt-4">
                {{$current->name}}
            </h1>

            @if ($current->description)
            <div class="text-grat-600">
                {{$current->description->name}}
            </div>
            @endif



        </div>
        <div class="card">
            <div class="card-body">
                <h1 class="text-2xl leading-8 text-center mb-4">{{$course->title}}</h1>
                <div class="flex items-center">
                    <figure>
                        <img class="w-12 h-12 obkect-cover rounded-full mr-4"
                            src="{{$course->teacher->profile_photo_url}}" alt="">
                    </figure>
                    <div>
                        <p>{{$course->teacher->name}}</p>
                        <a class="text-sm text-blue-500" href="">{{'@' . Str::slug($course->teacher->name, '')}}</a>
                    </div>
                </div>

                <p class="text-gray-600 text-sm mt-2">{{$this->advance}}% completado</p>

                <div class="relative pt-1">
                    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-blue-200">
                        <div style="width:{{$this->advance}}%"
                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500 transition-all duration-500">
                        </div>
                    </div>
                </div>

                <ul>
                    @foreach ($course->sections as $section)
                    <li class="text-gray-600 mb-4">
                        <a class="font-bold text-base inline-block mb-2">{{$section->name}}</a>

                        <ul>
                            @foreach ($section->lessons as $lesson)
                            <li class="flex mb-1">
                                <div>
                                    @if ($lesson->completed)
                                    @if ($current->id == $lesson->id)
                                    <span
                                        class="inline-block w-4 h-4 border-2 border-yellow-300 rounded-full mr-2 mt-1"></span>
                                    @else
                                    <span class="inline-block w-4 h-4 bg-yellow-300 rounded-full mr-2 mt-1"></span>
                                    @endif
                                    @else
                                    @if ($current->id == $lesson->id)
                                    <span
                                        class="inline-block w-4 h-4 border-2 border-gray-500 rounded-full mr-2 mt-1"></span>
                                    @else
                                    <span class="inline-block w-4 h-4 bg-gray-500 rounded-full mr-2 mt-1"></span>
                                    @endif
                                    @endif
                                </div>




                                <a class="cursor-pointer" wire:click="changeLesson({{$lesson}})">{{$lesson->name}}
                                    {{-- @if ($lesson->completed)
                                    <i class="fas fa-check ml-1"></i>
                                    @endif --}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>