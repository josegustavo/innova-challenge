@extends('layouts.app')

@section('content')
    <div class="container h-full max-w-4xl mx-auto p-2">
        <div class="py-4 sm:hidden">
            <h1 class="uppercase text-center font-open-sans-condensed text-lg text-gray-700">{{ $story->name }}</h1>
        </div>
        <div class="swiper-container grid grid-cols-1 xl:grid-cols-1 pb-6 gap-4">
            <article
                class="relative bg-white hover:shadow-lg sm:flex justify-end shadow rounded-lg z-0">
                <img class="-z-1 rounded-lg hidden sm:block w-full object-fill sm:h-full max-h-full sm:absolute"
                     src="/img/naylamp-1.png"/>
                <img class="-z-1 rounded-lg left-0 object-fill sm:h-full max-h-full sm:absolute"
                     src="/img/naylamp-1.png"/>
                <div class="flex flex-col justify-between sm:w-1/2 bg-white bg-opacity-80 p-2 m-2 rounded-lg z-0">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-lg"><p>Dicen los pobladores de Lambayeque que
                            en tiempos muy antiguos, que no saben en qué año fue, vino
                            al Perú con una gran flota de balsas un señor de mucho
                            valor y prestigio llamado Naylamp, y trajo consigo una
                            gran cantidad de gente.</p>
                        <p> Entre la multitud de personas,
                            quienes tenían mayor importancia eran sus cuarenta
                            oficiales, un trompetero que usaba unos grandes
                            caracoles, un hombre que cuidaba las andas y sillas de
                            Naylamp, otro que tenía a su cargo derramar polvo de
                            conchas marinas en la tierra que su señor había de pisar,
                            el cocinero, otro que tenía <span
                                class="hover:bg-primary-200 pointer bg-primary-30 relative highlighted-text">cuidado de las unciones<span
                                    class="teacher-avatar absolute -top-8 -right-8">
                                    <span data-custom-open="modal-3" class="relative cursor-pointer highlighted-pop">
                                        <img class="w-10 rounded-full bg-white border transition border-white shadow"
                                             src="/img/teacher1.svg"/>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="h-4 w-4 transition absolute left-8 top-0"
                                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                        </svg>
                                    </span>
                                </span></span> y
                            colores con que el señor adornaba su rostro y
                            otro que tenía la misión de bañar al señor,
                            lavar la vestimenta y preparar ropa
                            de pluma.
                        </p>
                        <p>También vino un príncipe
                            llamado Llapchiluli, quien había sido
                            enriquecido por su señor debido a su
                            gran destreza en la elaboración de ropas
                            de plumería, y con esta gente venían
                            infinitos oficiales y hombres de cuentas.</p></div>
                    <div class="text-xs flex flex-wrap justify-between font-open-sans-condensed text-gray-600 mt-2">
                        <div class="flex items-center py-1 px-2 rounded-md">
                            <div class="mr-1">
                                <img src="/img/kid1.svg"
                                     class="inline shadow -mr-4 bg-white rounded-full border border-white w-6 border-solid">
                                <img src="/img/kid3.svg"
                                     class="inline shadow -mr-4 bg-white rounded-full border border-white w-6 border-solid">
                                <img src="/img/kid2.svg"
                                     class="inline shadow -mr-4 bg-white rounded-full border border-white w-6 border-solid">
                                <img src="/img/kid4.svg"
                                     class="inline shadow bg-white rounded-full border border-white w-6 border-solid">
                            </div>
                            Completado
                        </div>
                        <button
                            data-custom-open="modal-5"
                            class="flex items-center bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                            Actividades
                        </button>
                        <a title="Has recibido 24 Claps" class="flex items-center py-1 px-2 rounded-md">
                            <svg width="29" height="29" aria-label="clap">
                                <g fill-rule="evenodd">
                                    <path
                                        d="M13.74 1l.76 2.97.76-2.97zM16.82 4.78l1.84-2.56-1.43-.47zM10.38 2.22l1.84 2.56-.41-3.03zM22.38 22.62a5.11 5.11 0 0 1-3.16 1.61l.49-.45c2.88-2.89 3.45-5.98 1.69-9.21l-1.1-1.94-.96-2.02c-.31-.67-.23-1.18.25-1.55a.84.84 0 0 1 .66-.16c.34.05.66.28.88.6l2.85 5.02c1.18 1.97 1.38 5.12-1.6 8.1M9.1 22.1l-5.02-5.02a1 1 0 0 1 .7-1.7 1 1 0 0 1 .72.3l2.6 2.6a.44.44 0 0 0 .63-.62L6.1 15.04l-1.75-1.75a1 1 0 1 1 1.41-1.41l4.15 4.15a.44.44 0 0 0 .63 0 .44.44 0 0 0 0-.62L6.4 11.26l-1.18-1.18a1 1 0 0 1 0-1.4 1.02 1.02 0 0 1 1.41 0l1.18 1.16L11.96 14a.44.44 0 0 0 .62 0 .44.44 0 0 0 0-.63L8.43 9.22a.99.99 0 0 1-.3-.7.99.99 0 0 1 .3-.7 1 1 0 0 1 1.41 0l7 6.98a.44.44 0 0 0 .7-.5l-1.35-2.85c-.31-.68-.23-1.19.25-1.56a.85.85 0 0 1 .66-.16c.34.06.66.28.88.6L20.63 15c1.57 2.88 1.07 5.54-1.55 8.16a5.62 5.62 0 0 1-5.06 1.65 9.35 9.35 0 0 1-4.93-2.72zM13 6.98l2.56 2.56c-.5.6-.56 1.41-.15 2.28l.26.56-4.25-4.25a.98.98 0 0 1-.12-.45 1 1 0 0 1 .29-.7 1.02 1.02 0 0 1 1.41 0zm8.89 2.06c-.38-.56-.9-.92-1.49-1.01a1.74 1.74 0 0 0-1.34.33c-.38.29-.61.65-.71 1.06a2.1 2.1 0 0 0-1.1-.56 1.78 1.78 0 0 0-.99.13l-2.64-2.64a1.88 1.88 0 0 0-2.65 0 1.86 1.86 0 0 0-.48.85 1.89 1.89 0 0 0-2.67-.01 1.87 1.87 0 0 0-.5.9c-.76-.75-2-.75-2.7-.04a1.88 1.88 0 0 0 0 2.66c-.3.12-.61.29-.87.55a1.88 1.88 0 0 0 0 2.66l.62.62a1.88 1.88 0 0 0-.9 3.16l5.01 5.02c1.6 1.6 3.52 2.64 5.4 2.96a7.16 7.16 0 0 0 1.18.1c1.03 0 2-.25 2.9-.7A5.9 5.9 0 0 0 23 23.24c3.34-3.34 3.08-6.93 1.74-9.17l-2.87-5.04z"></path>
                                </g>
                            </svg>
                            24 Claps
                        </a>
                    </div>
                </div>
            </article>

            <article
                class="relative overflow-hidden bg-white hover:shadow-lg sm:flex justify-start shadow rounded-lg z-0">
                <img class="-z-1 hidden sm:block w-full object-fill sm:h-full max-h-full sm:absolute"
                     src="/img/naylamp-2.png"/>
                <img class="-z-1 rounded-l-lg right-0 object-fill sm:h-full max-h-full sm:absolute"
                     src="/img/naylamp-2.png"/>
                <div class="flex flex-col justify-between sm:w-1/2 bg-white bg-opacity-80 p-2 m-2 rounded-lg z-0">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-lg"><p>Este señor Naylamp vino a tomar la
                            tierra
                            alrededor del río Faquisllanga (hoy conocido como río
                            Lambayeque) y luego de haber dejado allí sus balsas
                            se adentró en la tierra con deseos de asentarse en ella.
                            Avanzaron media legua y en ese punto Naylamp y sus
                            súbditos decidieron construir unos palacios donde poder
                            vivir. También crearon un ídolo con el rostro de su señor
                            Naylamp, el cual era labrado en una piedra verde, y se
                            le llamó Yampallec (que quiere decir figura y estatua
                            de Naylamp) en un lugar llamado Choc. Luego de vivir
                            muchos años de paz, le vino el tiempo de muerte al señor
                            Naylamp. Para que no se enteren los vasallos de que la
                            muerte le había llegado, lo sepultaron a escondidas en
                            el mismo aposento donde había vivido y avisaron por
                            toda la tierra que su señor había tomado alas y se había
                            desaparecido.</p>
                        <p>Fue tan triste su ausencia que aquellos que llegaron
                            con Naylamp en sus barcos, quienes tenían gran
                            cantidad de hijos y nietos por toda la fértil tierra
                            en ese momento, desampararon todo y salieron
                            a buscarlo por todas partes. Y así solo quedaron</p></div>
                    <div class="text-xs flex flex-wrap justify-between font-open-sans-condensed text-gray-600 mt-2">
                        <div class="flex items-center py-1 px-2 rounded-md">
                            <div class="mr-1">
                                <img src="/img/kid3.svg"
                                     class="inline shadow -mr-4 bg-white rounded-full border border-white w-6 border-solid">
                                <img src="/img/kid2.svg"
                                     class="inline shadow -mr-4 bg-white rounded-full border border-white w-6 border-solid">
                                <img src="/img/kid4.svg"
                                     class="inline bg-white rounded-full border border-white w-6 border-solid">
                            </div>
                            Han leido
                        </div>
                        <button
                            class="flex items-center bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 13l4 4L19 7"/>
                            </svg>
                            He leido
                        </button>
                        <a title="Has recibido 42 Claps" class="flex items-center py-1 px-2 rounded-md">
                            <svg width="29" height="29" aria-label="clap">
                                <g fill-rule="evenodd">
                                    <path
                                        d="M13.74 1l.76 2.97.76-2.97zM16.82 4.78l1.84-2.56-1.43-.47zM10.38 2.22l1.84 2.56-.41-3.03zM22.38 22.62a5.11 5.11 0 0 1-3.16 1.61l.49-.45c2.88-2.89 3.45-5.98 1.69-9.21l-1.1-1.94-.96-2.02c-.31-.67-.23-1.18.25-1.55a.84.84 0 0 1 .66-.16c.34.05.66.28.88.6l2.85 5.02c1.18 1.97 1.38 5.12-1.6 8.1M9.1 22.1l-5.02-5.02a1 1 0 0 1 .7-1.7 1 1 0 0 1 .72.3l2.6 2.6a.44.44 0 0 0 .63-.62L6.1 15.04l-1.75-1.75a1 1 0 1 1 1.41-1.41l4.15 4.15a.44.44 0 0 0 .63 0 .44.44 0 0 0 0-.62L6.4 11.26l-1.18-1.18a1 1 0 0 1 0-1.4 1.02 1.02 0 0 1 1.41 0l1.18 1.16L11.96 14a.44.44 0 0 0 .62 0 .44.44 0 0 0 0-.63L8.43 9.22a.99.99 0 0 1-.3-.7.99.99 0 0 1 .3-.7 1 1 0 0 1 1.41 0l7 6.98a.44.44 0 0 0 .7-.5l-1.35-2.85c-.31-.68-.23-1.19.25-1.56a.85.85 0 0 1 .66-.16c.34.06.66.28.88.6L20.63 15c1.57 2.88 1.07 5.54-1.55 8.16a5.62 5.62 0 0 1-5.06 1.65 9.35 9.35 0 0 1-4.93-2.72zM13 6.98l2.56 2.56c-.5.6-.56 1.41-.15 2.28l.26.56-4.25-4.25a.98.98 0 0 1-.12-.45 1 1 0 0 1 .29-.7 1.02 1.02 0 0 1 1.41 0zm8.89 2.06c-.38-.56-.9-.92-1.49-1.01a1.74 1.74 0 0 0-1.34.33c-.38.29-.61.65-.71 1.06a2.1 2.1 0 0 0-1.1-.56 1.78 1.78 0 0 0-.99.13l-2.64-2.64a1.88 1.88 0 0 0-2.65 0 1.86 1.86 0 0 0-.48.85 1.89 1.89 0 0 0-2.67-.01 1.87 1.87 0 0 0-.5.9c-.76-.75-2-.75-2.7-.04a1.88 1.88 0 0 0 0 2.66c-.3.12-.61.29-.87.55a1.88 1.88 0 0 0 0 2.66l.62.62a1.88 1.88 0 0 0-.9 3.16l5.01 5.02c1.6 1.6 3.52 2.64 5.4 2.96a7.16 7.16 0 0 0 1.18.1c1.03 0 2-.25 2.9-.7A5.9 5.9 0 0 0 23 23.24c3.34-3.34 3.08-6.93 1.74-9.17l-2.87-5.04z"></path>
                                </g>
                            </svg>
                            42 Claps
                        </a>
                    </div>
                </div>
            </article>

            <article
                class="relative overflow-hidden bg-white hover:shadow-lg sm:flex justify-end shadow rounded-lg z-0">
                <img class="-z-1 hidden sm:block w-full object-fill sm:h-full max-h-full sm:absolute"
                     src="/img/naylamp-3.png"/>
                <img class="-z-1 rounded-l-lg left-0 object-cover sm:h-full max-h-full sm:absolute"
                     src="/img/naylamp-3.png"/>
                <div class="flex flex-col justify-between sm:w-1/2 bg-white bg-opacity-80 p-2 m-2 rounded-lg z-0">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-lg"><p>
                            en la tierra aquellos que ahí mismo habían nacido.
                            Cium, el hijo mayor de Naylamp, quedó como
                            señor y tuvo una gran familia; sin embargo, luego de
                            muchos años se metió en una bóveda bajo el suelo
                            y allí se dejó morir para que en el futuro pueda ser
                            recordado como un ser divino.
                        </p>
                        <p>Durante la vida de Cium, segundo señor en estos
                            valles, se apartaron sus hijos a fundar otras familias
                            y poblaciones. Sus hijos se llevaron consigo mucha
                            gente y se dividieron por distintos territorios. Uno de
                            los hijos, llamado Norr, se fue al valle de Cinto, otro
                            llamado Cala fue a Túcume y otro a Collique y otros
                            a otras partes más lejanas. El príncipe Llapchiluli
                            se apartó con mucha gente que le quiso seguir y
                            halló su hogar en el valle llamado Jayanca, y allí
                            permaneció con todos sus acompañantes. A Cium le
                            sucedió su hijo mayor y así sucesivamente por
                            varias generaciones.</p></div>
                    <div class="text-xs flex justify-between font-open-sans-condensed text-gray-600 mt-2">
                        <button class="flex items-center hover:bg-gray-300 py-1 px-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg> {{rand(3,18)}} leyendo
                        </button>
                        <button class="flex items-center hover:bg-gray-300 py-1 px-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg> {{rand(10,18)}}
                        </button>
                    </div>
                </div>
            </article>

            <article
                class="relative overflow-hidden bg-white hover:shadow-lg sm:flex justify-end shadow rounded-lg z-0">
                <img class="-z-1 hidden sm:block w-full object-fill sm:h-full max-h-full sm:absolute"
                     src="/img/naylamp-4.png"/>
                <img class="-z-1 rounded-l-lg left-0 object-cover sm:h-full max-h-full sm:absolute"
                     src="/img/naylamp-4.png"/>
                <div class="flex flex-col justify-between sm:w-1/2 bg-white bg-opacity-80 p-2 m-2 rounded-lg z-0">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-lg"><p>Sucedió que un nuevo señor, llamado
                            Fempellec,
                            recordado como el más desdichado de los señores
                            del imperio, quiso mudar el ídolo que Naylamp
                            puso en el templo de Choc. Por querer cometer
                            esta deshonra a la memoria de Naylamp, se le
                            apareció un demonio en forma de mujer con
                            quien tuvo un romance.</p>
                        <p>
                            Como consecuencia, empezó
                            a llover (cosa que jamás se había visto en esas tierras)
                            y duró este diluvio treinta días, a los cuales sucedió
                            un año de mucha esterilidad en los suelos y hambre.
                            Los sacerdotes de los ídolos de la tierra notaron tan
                            grave delito cometido por su señor y entendieron
                            que el pueblo padecía por su culpa con hambre y
                            necesidades. Por tomar venganza, sin importar que
                            le debieran fidelidad a su señor por ser vasallos,
                            lo prendieron y ataron de las manos y pies, y lo
                            arrojaron a las profundidades del mar, y con él se
                            acabó la línea y descendencia de los señores naturales
                            del valle de Lambayeque que Naylamp trajo consigo.
                        </p></div>
                    <div class="text-xs flex justify-between font-open-sans-condensed text-gray-600 mt-2">
                        <button
                            class="flex items-center bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg> {{rand(3,18)}} leyendo
                        </button>
                        <button
                            class="flex items-center bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg> {{rand(10,18)}}
                        </button>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <footer class="sticky bg-white bottom-0 w-full">
        <div class="max-w-4xl mx-auto flex items-center justify-between text-gray-600">
            <a data-custom-open="modal-2"
               class="cursor-pointer flex flex-col items-center w-full block py-3 px-3 text-center hover:bg-blue-200 hover:text-blue-800 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
                <span class="block text-sm">Mi Grupo</span>
            </a>
            <a data-custom-open="modal-4" class="cursor-pointer flex flex-col items-center w-full block py-3 px-3 text-center hover:bg-blue-200 hover:text-blue-800 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
                <span>Notificaciones</span>
            </a>
        </div>
    </footer>

    <div class="modal micromodal-slide" id="modal-2" aria-hidden="true">
        <div class="fixed inset-0 bg-black bg-opacity-60 px-3 flex justify-center items-center z-50" tabindex="-1"
             data-micromodal-close>
            <div class="bg-gray-200 rounded-md w-full sm:w-80 max-w-full shadow" role="dialog" aria-modal="true"
                 aria-labelledby="modal-1-title">
                <header class="modal__header p-3 flex justify-between items-center">
                    <h2 class="font-open-sans-condensed uppercase text-xl" id="modal-1-title">
                        Mi Grupo
                    </h2>
                    <button class="modal__close ml-2" aria-label="Close modal" data-micromodal-close></button>
                </header>
                <main class="p-3 font-open-sans-condensed" id="modal-1-content">
                    <ul id="menu-interests-edit-items">
                        <li class="flex justify-between py-1 items-center text-gray-500">
                            <div class="relative mr-2">
                                <img src="/img/kid1.svg"
                                     class="rounded-full bg-white w-10 border-solid">
                                <i class="absolute border border-white bottom-0 right-0 w-2 h-2 rounded-full bg-green-400"></i>
                            </div>
                            <div class="w-full">Yo</div>
                            <a class="mr-2" title="Microfono Activado">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/>
                                </svg>
                            </a>
                        </li>
                        <li class="flex justify-between py-1 items-center text-gray-500">
                            <div class="relative mr-2">
                                <img src="/img/kid3.svg"
                                     class="rounded-full bg-white w-10 border-solid">
                                <i class="absolute border border-white bottom-0 right-0 w-2 h-2 rounded-full bg-red-500"></i>
                            </div>
                            <div class="w-full">Adelaida Prada Manzanares</div>
                        </li>
                        <li class="flex justify-between py-1 items-center text-gray-300">
                            <div class="relative mr-2">
                                <img src="/img/kid4.svg"
                                     class="rounded-full bg-white w-10 border-solid">
                                <i class="absolute border border-white bottom-0 right-0 w-2 h-2 rounded-full invisible"></i>
                            </div>
                            <div class="w-full">Julian Peralta Acedo</div>
                            <a class="mr-2" title="Invitación enviada">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </a>
                        </li>

                        <li class="flex justify-between py-1 items-center text-gray-500">
                            <div class="relative mr-2">
                                <img src="/img/kid2.svg"
                                     class="rounded-full bg-white w-10 border-solid">
                                <i class="absolute border border-white bottom-0 right-0 w-2 h-2 rounded-full bg-green-400"></i>
                            </div>
                            <div class="w-full">Maria Victoria Vidal Mellado</div>
                            <a class="mr-2 text-green-300" title="Microfono Activado">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </main>
                <footer class="modal__footer mt-3 font-open-sans-condensed w-full inline-flex">
                    <button
                        class="inline-flex justify-center uppercase items-center rounded-bl-md p-2 w-full border border-gray-300 hover:bg-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 mr-1" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                        </svg>
                        Agregar
                    </button>
                </footer>
            </div>
        </div>
    </div>
    <div class="modal micromodal-slide" id="modal-3" aria-hidden="true">
        <div class="fixed inset-0 bg-black bg-opacity-60 px-3 flex justify-center items-center z-50" tabindex="-1"
             data-micromodal-close>
            <div class="bg-gray-200 rounded-md w-full sm:w-80 max-w-full shadow" role="dialog" aria-modal="true"
                 aria-labelledby="modal-1-title">
                <header class="modal__header p-3 flex justify-between items-center">
                    <h2 class="font-open-sans-condensed uppercase text-xl" id="modal-1-title">
                        Discusión
                    </h2>
                    <button class="modal__close ml-2" aria-label="Close modal" data-micromodal-close></button>
                </header>
                <main class="p-3 font-open-sans-condensed" id="modal-1-content">
                    <div>
                        <span class="text-lg text-gray-600">"cuidado de las unciones"</span>
                    </div>
                    <div class="chat-message mt-3">
                        <div class="flex items-end justify-end">
                            <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-1 items-end">
                                <div><span
                                        class="px-4 py-2 rounded-lg inline-block rounded-br-none bg-blue-600 text-white ">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</span>
                                </div>
                            </div>
                            <img src="/img/kid1.svg" alt="me" class="w-6 h-6 rounded-full order-2 bg-white">
                        </div>
                    </div>
                    <div class="chat-message mt-2">
                        <div class="flex items-end">
                            <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-2 items-start">
                                <div><span class="px-4 py-2 rounded-lg inline-block bg-gray-300 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 😄</span>
                                </div>
                                <div><span
                                        class="px-4 py-2 rounded-lg inline-block rounded-bl-none bg-gray-300 text-gray-600">Ut enim ad minim veniam</span>
                                </div>
                            </div>
                            <img src="/img/teacher1.svg" alt="teacher" class="w-6 h-6 rounded-full order-1 bg-white">
                        </div>
                    </div>
                </main>
                <footer class="modal__footer mt-3 font-open-sans-condensed w-full border border-gray-300 ">
                    <div class="border-t-2 border-gray-200 p-2">
                        <div class="relative">
                            <div class="flex">

                                <input type="text" placeholder="Escribe algo"
                                       class="w-full focus:outline-none focus:placeholder-gray-400 text-gray-600 placeholder-gray-600 bg-gray-200 rounded-full py-3">
                                <div>
                                <button type="button"
                                        class="inline-flex items-center justify-center rounded-full h-12 w-12 transition duration-500 ease-in-out text-white bg-blue-500 hover:bg-blue-400 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         class="h-6 w-6 transform rotate-90">
                                        <path
                                            d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
                                    </svg>
                                </button>
                                </div>
                            </div>
                            <div class="items-center flex justify-between">
                                <span class="flex items-center">
                                    <button type="button"
                                            class="inline-flex items-center justify-center rounded-full h-12 w-12 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor"
                                             class="h-6 w-6 text-gray-600">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path>
                                        </svg>
                                    </button>
                                </span>
                                <button type="button"
                                        class="inline-flex items-center justify-center rounded-full h-10 w-10 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" class="h-6 w-6 text-gray-600">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path>
                                    </svg>
                                </button>
                                <button type="button"
                                        class="inline-flex items-center justify-center rounded-full h-10 w-10 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" class="h-6 w-6 text-gray-600">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </button>
                                <button type="button"
                                        class="inline-flex items-center justify-center rounded-full h-10 w-10 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" class="h-6 w-6 text-gray-600">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <div class="modal micromodal-slide" id="modal-4" aria-hidden="true">
        <div class="fixed inset-0 bg-black bg-opacity-60 px-3 flex justify-center items-center z-50" tabindex="-1"
             data-micromodal-close>
            <div class="bg-gray-200 rounded-md w-full sm:w-80 max-w-full shadow" role="dialog" aria-modal="true"
                 aria-labelledby="modal-1-title">
                <header class="modal__header p-3 flex justify-between items-center">
                    <h2 class="font-open-sans-condensed uppercase text-xl" id="modal-1-title">
                        Notificaciones
                    </h2>
                    <button class="modal__close ml-2" aria-label="Close modal" data-micromodal-close></button>
                </header>
                <main class="p-3 font-open-sans-condensed" id="modal-1-content">
                    <div class="py-2">
                        <a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                            <img class="h-8 w-8 rounded-full object-cover mx-1 bg-white" src="/img/kid1.svg" alt="avatar">
                            <p class="text-gray-600 text-sm mx-2">
                                <span class="font-bold" href="#">Sara Salah</span> replied on the <span class="font-bold text-blue-500" href="#">Upload Image</span> artical . 2m
                            </p>
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                            <img class="h-8 w-8 rounded-full object-cover mx-1 bg-white" src="/img/kid2.svg" alt="avatar">
                            <p class="text-gray-600 text-sm mx-2">
                                <span class="font-bold" href="#">Slick Net</span> start following you . 45m
                            </p>
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                            <img class="h-8 w-8 rounded-full object-cover mx-1 bg-white" src="/img/kid3.svg" alt="avatar">
                            <p class="text-gray-600 text-sm mx-2">
                                <span class="font-bold" href="#">Jane Doe</span> Like Your reply on <span class="font-bold text-blue-500" href="#">Test with TDD</span> artical . 1h
                            </p>
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 hover:bg-gray-100 -mx-2">
                            <img class="h-8 w-8 rounded-full object-cover mx-1 bg-white" src="/img/teacher1.svg" alt="avatar">
                            <p class="text-gray-600 text-sm mx-2">
                                <span class="font-bold" href="#">Abigail Bennett</span> start following you . 3h
                            </p>
                        </a>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <div class="modal micromodal-slide" id="modal-5" aria-hidden="true">
        <div class="fixed inset-0 bg-black bg-opacity-60 px-3 flex justify-center items-center z-50" tabindex="-1"
             data-micromodal-close>
            <div class="bg-gray-100 rounded-md w-full sm:w-80 max-w-full shadow" role="dialog" aria-modal="true"
                 aria-labelledby="modal-1-title">
                <header class="modal__header p-3 flex justify-between items-center">
                    <h2 class="font-open-sans-condensed uppercase text-xl" id="modal-1-title">
                        Actividades
                    </h2>
                    <button class="modal__close ml-2" aria-label="Close modal" data-micromodal-close></button>
                </header>
                <main class="p-3 font-open-sans-condensed" id="modal-1-content">
                    <div class="">
                        <label class="block text-sm text-gray-00" for="cus_name">¿Quién era Naylamp?</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Tu respuesta" aria-label="Name">
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-gray-00" for="cus_name">¿Qué desastre de la naturaleza ocurrió en esta historia?</label>
                        <div>
                            <div>
                            <label class="inline-flex items-center mt-2">
                                <input type="radio" class="form-radio h-5 w-5 text-gray-600"><span class="ml-2 text-gray-700">Terremoto</span>
                            </label>
                            </div>
                            <div>
                            <label class="inline-flex items-center mt-2">
                                <input type="radio" class="form-radio h-5 w-5 text-gray-600"><span class="ml-2 text-gray-700">Tsunami</span>
                            </label>
                            </div>
                            <div>
                            <label class="inline-flex items-center mt-2">
                                <input type="radio" class="form-radio h-5 w-5 text-gray-600"><span class="ml-2 text-gray-700">Huayco</span>
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-gray-00" for="cus_name">¿Qué nos trata de explicar este mito?</label>
                        <textarea class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Tu respuesta" aria-label="Name"></textarea>
                    </div>
                </main>
                <footer class="modal__footer mt-3 font-open-sans-condensed w-full inline-flex">
                    <button
                        class="inline-flex justify-center uppercase items-center rounded-bl-md p-2 w-full border border-gray-300 hover:bg-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-6 w-6 transform rotate-90">
                            <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
                        </svg>
                        Enviar respuestas
                    </button>
                </footer>
            </div>
        </div>
    </div>
@endsection
