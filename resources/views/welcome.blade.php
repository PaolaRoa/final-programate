@extends('layouts.templatebase')



@section('content')


    <livewire:job-list>

        <!--Hero-->

        <section class="py-8 my-8 bg-white border-b rounded-2xl">
            <div class="container max-w-5xl m-8 mx-auto">
                <h1 class="w-full my-2 text-3xl font-bold leading-tight text-center text-gray-800 ">
                    Esto es lo que puedes hacer con nosotros
                </h1>
                <div class="w-full mb-4">
                    <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
                </div>
                <div class="flex flex-wrap text-center">
                    <div class="w-full p-6 sm:w-1/2">
                        <!--ventajas para empresas-->
                        <h3 class="mb-3 text-2xl font-bold leading-none text-gray-800">
                            Obtén empleo
                        </h3>
                        <!--una imagen de beneficios-->
                        <img class="shadow-lg rounded-3xl" width="100%"
                            src="img/programmer.jpg"
                            alt="programmer"
                        <p class="mb-8 text-gray-600">

                        </p>
                        <a href="{{ url('register') }}">
                            <button
                                class="px-8 py-4 mx-auto my-6 font-bold text-white transition duration-300 ease-in-out transform rounded-full shadow-lg lg:mx-0 hover:underline gradient focus:outline-none focus:shadow-outline hover:scale-105">
                                Regístrame como desarrollador
                            </button>
                        </a>

                    </div>
                    <div class="w-full p-6 sm:w-1/2">
                        <!--ventajas para empresas-->
                        <h3 class="mb-3 text-2xl font-bold leading-none text-gray-800">
                            Contrata el mejor talento
                        </h3>
                        <!--una imagen de beneficios-->
                        <img class="shadow-lg rounded-3xl" width="100%"
                            src="img/office.jpg"
                            alt="office">

                        <a href="{{ url('register') }}">
                            <button
                                class="px-8 py-4 mx-auto my-6 font-bold text-white transition duration-300 ease-in-out transform rounded-full shadow-lg lg:mx-0 hover:underline gradient focus:outline-none focus:shadow-outline hover:scale-105">
                                Regístrame como empresa
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="py-8 bg-white border-none">
            <div class="container flex flex-wrap pt-4 pb-12 mx-auto">
                <h1 class="w-full my-2 text-3xl font-bold leading-tight text-center text-gray-800">
                    Testimonios
                </h1>
                <div class="w-full mb-4">
                    <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
                </div>
                <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3">
                    <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow">
                      
                            <p class="w-full px-6 text-xs text-gray-600 md:text-sm">
                                Desarrollador Frontend
                            </p>
                            <div class="w-full px-6 text-xl font-bold text-gray-800">
                                Paula Rodriguez
                            </div>
                            <img class="w-2/4 mx-auto my-8 rounded-full shadow-lg"
                                src="https://media-exp1.licdn.com/dms/image/C5603AQGVkr9xrmKuuA/profile-displayphoto-shrink_800_800/0/1616168065115?e=1627516800&v=beta&t=br4ZGBAy8L1el5AmVpGS_VssQMPM1zsGEUObXkfhaM0"
                                alt="Juliana fajardo">
                            <br />
                            <br />
                            <p class="px-6 mx-auto my-5 text-center text-gray-800">
                                Esta plataforma me ayudo a acercarme a las posibilidades de empleo que estaba buscando
                                ,agilizando el proceso de selección
                            </p>
                        
                    </div>
                </div>
                <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3">
                    <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow">
                        
                            <p class="w-full px-6 text-xs text-gray-600 md:text-sm">
                                Desarrollador FullStack
                            </p>
                            <div class="w-full px-6 text-xl font-bold text-gray-800">
                                Juliana Fajardo
                            </div>
                            <img class="w-2/4 mx-auto my-8 rounded-full shadow-lg"
                                src="https://media-exp1.licdn.com/dms/image/C4D03AQGPEbNsb0aAyA/profile-displayphoto-shrink_800_800/0/1616090681447?e=1629331200&v=beta&t=Ff66kXb611DnzlZx_mD0Hy6A5WsH5Ux3PGxkKI-fXJU"
                                alt="Juliana fajardo">
                            <br />
                            <br />
                            <p class="px-6 mx-auto my-5 text-center text-gray-800">
                                Despues de aplicar en multiples plataformas de empleo officium me brindo una forma facil y
                                agil de aplicar a las vacantes que se ajustaban a mi perfil profesional.
                            </p>
                        
                    </div>

                </div>
                <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3">
                    <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow">
                      
                            <p class="w-full px-6 text-xs text-gray-600 md:text-sm">
                                Desarrolladora de software
                            </p>
                            <div class="w-full px-6 text-xl font-bold text-gray-800">
                                Paola roa
                            </div>
                            <img class="w-2/4 mx-auto my-8 rounded-full shadow-lg"
                                src="https://media-exp1.licdn.com/dms/image/C4E03AQEg2-Fs4-3o3Q/profile-displayphoto-shrink_800_800/0/1604375333655?e=1626912000&v=beta&t=bYcLc34bH8fKV7fmpOxVz2p7moJJoeJ4xcgJ7jEl_dU"
                                alt="Juliana fajardo">
                            <br />
                            <br />
                            <p class="px-6 mx-auto my-5 text-center text-gray-800">
                                Haber encontrado a Officium fue lo mejor que me pudo haber pasado , despues de intentar en otras plataformas sin encontrar resultados efectivos.
                            </p>
                       
                    </div>
                </div>
                
            </div>
        </section>

        {{-- Empresas --}}
        <section>
            <div class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800 ">
                <h1 class="mt-4 text-center text-white">
                    Empresas que confían en nosotros
                </h1>
                <p class="py-2 my-4 mt-4 text-center text-white">
                    Tu próximo empleo podría estar aca.
                </p>
                <img class="hero container max-w-screen-lg mx-auto pb-10 flex rounded-3xl"
                    src="https://i.ibb.co/K2bkFWK/ejemplo.png" alt="">
            </div>
        </section>

        <!-- Contacto -->

        <section class="w-full max-w-2xl px-6 py-4 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
            <h2 class="text-3xl font-semibold text-center text-gray-800 dark:text-white">Contacto</h2>
            <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
            <p class="mt-3 text-center text-gray-600 dark:text-gray-400">Para cualquier tipo de solicitud, queja o reclamo
                escribenos</p>

            <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 md:grid-cols-3">
                <!-- agregar un link a google maps o quitar el href -->
                <a href="#"
                    class="flex flex-col items-center px-4 py-3 text-gray-700 rounded-md dark:text-gray-200 hover:bg-indigo-200 dark:hover:bg-indigo-500">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd" />
                    </svg>

                    <span class="mt-2">121 Bogota D.C, Colombia</span>
                </a>
                <!-- agregar un link a whatsapp o quitar el href -->
                <a href="#"
                    class="flex flex-col items-center px-4 py-3 text-gray-700 rounded-md dark:text-gray-200 hover:bg-indigo-200 dark:hover:bg-indigo-500">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>

                    <span class="mt-2">+2499999666600</span>
                </a>

                <!-- agregar un link al correo o quitar el href -->
                <a href="#"
                    class="flex flex-col items-center px-4 py-3 text-gray-700 rounded-md dark:text-gray-200 hover:bg-indigo-200 dark:hover:bg-indigo-500">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>

                    <span class="mt-2">ejemplo@ejemplo.com</span>
                </a>
            </div>

            <div class="mt-6 ">
                <div class="items-center -mx-2 md:flex">
                    <div class="w-full mx-2">
                        <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Nombre</label>

                        <input
                            class="block w-full mt-1 border-blue-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="text" placeholder="Eje. Paola">
                    </div>

                    <div class="w-full mx-2 mt-4 md:mt-0">
                        <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">E-mail</label>

                        <input
                            class="block w-full mt-1 border-blue-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="email" placeholder="Eje. Paola@gmail.com">
                    </div>
                </div>

                <div class="w-full mt-4">
                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Mensaje</label>

                    <textarea
                        class="block w-full mt-1 border-blue-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        placeholder="Ingresa tú mensaje"></textarea>
                </div>

                <div class="flex justify-center mt-6">
                    <button
                        class="px-4 py-2 text-white transition-colors duration-200 transform bg-indigo-300 rounded-md hover:bg-yellow-500 focus:outline-none focus:bg-gray-600">enviar</button>
                </div>
            </div>
        </section>

    @endsection
