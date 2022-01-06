<x-app-layout>
    <section class="bg-cover" style="background-image:url({{ asset('img/home/student.jpg') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-fulll md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold">Domina la tecnología web con CodersFree</h1>
                <p class="text-white text-lg mt-2 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit
                    ratione consectetur perspiciatis
                    numquam
                    qui possimus, pariatur accusantium sequi debitis eveniet, reprehenderit optio tempore, voluptate
                    exercitationem esse! Libero, quas autem. Ratione?</p>
                
                    @livewire('search')
            </div>

        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-10">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/img1.jpg') }}" alt="">
                </figure>
                <header>
                    <h1 class="text-center text-xl text-gray-700">Cursos y proyectos</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates
                    laudantium in harum quis eveniet, odio repudiandae facilis laboriosam sit.</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/img2.jpg') }}" alt="">
                </figure>
                <header>
                    <h1 class="text-center text-xl text-gray-700">Manual de Laravel</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates
                    laudantium in harum quis eveniet, odio repudiandae facilis laboriosam sit.</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/img3.jpg') }}" alt="">
                </figure>
                <header>
                    <h1 class="text-center text-xl text-gray-700">Blog</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates
                    laudantium in harum quis eveniet, odio repudiandae facilis laboriosam sit.</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/img4.jpg') }}" alt="">
                </figure>
                <header>
                    <h1 class="text-center text-xl text-gray-700">Desarrollo Web</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates
                    laudantium in harum quis eveniet, odio repudiandae facilis laboriosam sit.</p>
            </article>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">Video test</h1>
        <div>
            <video width="600" controls class="mx-auto">
                <source src="/storage/video.mp4" type="video/mp4">
            </video>
        </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl py-12">¿No sabes qué curso llevar?</h1>
        <p class="text-center text-white">Dirígete al catálogo de cursos y filtralos por categoría o nivel.</p>
        <div class="flex justify-center mt-4">
            <a href="{{ route('courses.index') }}" type="submit"
                class="bg-gray-500 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded">
                Lista de cursos
            </a>
        </div>
    </section>

    <section class="my-24 ">
        <h1 class="text-center text-3xl text-gray-600">
            ÚLTIMOS CURSOS
        </h1>
        <p class="text-center text-gray-500 text-sm mb-6">Trabajo duro para seguir subiendo cursos.</p>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($courses as $course)
                <x-course-card :course="$course"/>
            @endforeach
        </div>

    </section>

</x-app-layout>
