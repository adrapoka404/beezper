<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body class="antialiased">
    <div class="min-h-screen bg-gray-100">
        <livewire:header />
        <livewire:funciones />
        <div class=" max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8  mt-20 ">
            <div class="text-purple-200 font-semibold text-center text-2xl w-full" id="proyectos">Interconectamos</div>
            <div class="w-full md:flex ">
                <x-funcion-section-dos>
                    <x-slot name="img">
                        https://picsum.photos/seed/picsum/300/300
                    </x-slot>
                    <x-slot name="title">
                        Negocios exitosos
                    </x-slot>
                </x-funcion-section-dos>
                <x-funcion-section-dos>
                    <x-slot name="img">
                        https://picsum.photos/seed/picsum/300/300
                    </x-slot>
                    <x-slot name="title">
                        Inversionistas inteligentes
                    </x-slot>
                </x-funcion-section-dos>
            </div>
        </div>
        <x-no-solo-ladrillos />
        <div class=" text-center text-blue-300 font-semibold text-xl my-16" id="enqueinvierte">
            Conoce los negocios en los que puedes invertir

            <div class="md:flex md:justify-center my-16 ">
                <div class=" h-52 w-96   bg-blue-300 rounded-3xl my-10 md:my-auto grid mx-auto md:mx-5">
                    <div class="font-extralight text-2xl w-32 mx-auto my-auto right-0 h-20">

                    </div>
                </div>
                <div class=" h-52 w-96 bg-blue-300 rounded-3xl my-10 md:my-auto grid mx-auto md:mx-0">
                    <div class="font-extralight text-2xl w-32 mx-auto my-auto right-0 h-20">

                    </div>
                </div>
            </div>
            <div class=" max-w-screen-md mx-auto">
                <div class=" text-left text-purple-200 my-20">
                    Invertir es muy sencillo
                </div>
                <div class="grid grid-cols-2 grid-rows-2">
                    <div class="w-1/2 mx-auto ">
                        <div class="text-purple-200 font-light">1. Registrate</div>
                        <div class="my-10 bg-fondo-home-registrate w-40 h-40 bg-contain bg-no-repeat"></div>
                    </div>
                    <div class="w-1/2 mx-auto ">
                        <div class="text-purple-200 font-light">2. Elige un proyecto</div>
                        <div class="my-10 bg-fondo-home-elegir w-40 h-40 bg-contain bg-no-repeat"></div>
                    </div>
                    <div class="w-1/2 mx-auto ">
                        <div class="text-purple-200 font-light">3. Invierte</div>
                        <div class="my-10 bg-fondo-home-invierte w-40 h-40 bg-contain bg-no-repeat"></div>
                    </div>
                    <div class="w-1/2 mx-auto  mt-10">
                        <div class="text-purple-200 font-light">4. Empieza a ganar</div>
                        <div class="my-10 bg-fondo-home-gana w-40 h-40 bg-contain bg-no-repeat"></div>
                    </div>
                </div>
            </div>
        </div>
        <livewire:footer />

        @livewireScripts
</body>

</html>
