@extends('adminlte::page')



@section('title', 'Dashboard')


@section('content')
    </head>

    <body class=" w-auto  leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">



        <div class="pt-24 w-full" >
            <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
                <!--Left Col-->
                <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">


                    @if (Auth::user()->hasRole('Developer'))


                        <h1 class='text-center'>¡Bienvenido!</h1>
                        <p class=" text-centerleading-normal text-2xl mb-8">
                            Estas en el mejor lugar para tu futuro laboral
                        </p>

                </div>

            </div>
        </div>

        <section class="bg-white border-b py-8">
            <div class="container max-w-5xl mx-auto m-8">
                <div class="w-full mb-4">
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>
                <div class="flex flex-wrap">
                    <div class="w-5/6 sm:w-1/2 p-6">
                        <h3 class="text-center text-2xl text-indigo-800 font-bold leading-none mb-3">
                            Si aún no haz completado tu perfil puedes hacerlo 
                            <a href="/user/profile">aquí</a>
                            , de esta manera podras acceder y aplicar
                            a las mejores ofertas
                        
                    @elseif (Auth::user()->hasRole('Recruiter'))

                        <div class="overflow-y-hidden">

                            <h1>¡Bienvenido!</h1>
                            <p class="leading-normal text-2xl mb-8 ">
                                Estas en el mejor lugar para encontrar el talento que requiere tu empresa.
                            </p>
                            <p>Si no has completado tu perfil puedes hacerlo ahora para empezar a contratar el mejor talento
                            </p>
                        </div>

                    </div>

                </div>
            </div>


        @elseif (Auth::user()->hasRole('Admin'))
            <h1>¡Hola Querido admin!</h1>
            @endif<a class="text-pink-500 underline" href="https://undraw.co/"></a>

            <div class="w-full object-center text-center">
                <img src="/img/person.svg" height="500px" width="60%" alt="panel-main">
            </div>

            <!-- Calendar Icon -->


        @stop



        @section('css')
            <link rel="stylesheet" href="/css/admin_custom.css">
            

        @stop

        @section('js')
            <script>
                console.log('Hi!');
            </script>
        @stop
