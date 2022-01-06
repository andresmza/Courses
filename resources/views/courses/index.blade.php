<x-app-layout>
    <section class="bg-cover" style="background-image:url({{ asset('img/cursos/portada.cursos.jpg') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-fulll md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold">Aquí podrás ver el listado de cursos</h1>
                <p class="text-white text-lg mt-2 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit
                    ratione consectetur perspiciatis
                    numquam
                    qui possimus, pariatur accusantium sequi debitis eveniet, reprehenderit optio tempore, voluptate
                    exercitationem esse! Libero, quas autem. Ratione</p>
                
                    @livewire('search')
            </div>

        </div>

    </section>

    @livewire('courses-index')
    
</x-app-layout>