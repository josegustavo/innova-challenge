@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="flex justify-center py-4 sm:py-20">
        <div class="text-center">
            <h1 class="uppercase font-open-sans-condensed text-3xl font-bold">{{$current_page['name']}}</h1>
            <p class="text-sm font-roboto">{{Arr::get($current_page, 'subtitle')}}</p>
        </div>
    </div>
    <div class="mt-8">
        <div class="grid grid-cols-1 md:grid-cols-2 pb-6 gap-4">

            @foreach ($stories as $_story)
            <article class="relative overflow-hidden bg-white hover:shadow-lg flex justify-end shadow rounded-lg z-0">

                <img class="-z-2 filter blur-sm rounded-l-lg object-fill w-full max-h-full absolute" src="{{$_story->image_url}}"/>
                <img class="-z-2 rounded-l-lg left-0 object-contain max-h-full absolute" src="{{$_story->image_url}}"/>
                <div class="-z-1 w-full h-full absolute card-gradient rounded-lg"></div>
                <div class="flex flex-col justify-between w-4/5 bg-white bg-opacity-80 p-2 m-2 rounded-lg z-0">
                    <div class="flex justify-between">
                        <div>
                            <a href="/stories/{{$_story->slug}}"
                               class="text-gray-900 text-lg hover:underline hover:font-bold
                               leading-7 font-semibold dark:text-white up">{{$_story->name}}
                            </a>
                            <a href="#author" class="hover:underline text-xs block font-light text-gray-500">Mitos y leyendas del antiguo Perú</a>
                        </div>
                        <div class="text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="transform rotate-90 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">{{$_story->intro}}</div>
                    <div class="text-xs flex justify-between font-open-sans-condensed text-gray-600 mt-2">
                        <button class="flex items-center hover:bg-gray-300 py-1 px-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg> {{rand(3,18)}} leyendo
                        </button>
                        <button class="flex items-center hover:bg-gray-300 py-1 px-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg> {{rand(10,18)}}
                        </button>
                    </div>
                </div>
                @if(rand(0, 1))
                <div class="absolute w-full left-0 bottom-0 h-1 flex rounded bg-primary-30">
                    <div class="shadow-none w-{{rand(1,11)}}/12 flex flex-col text-center whitespace-nowrap text-white justify-center bg-primary-300"></div>
                </div>
                @endif
            </article>
            @endforeach

        </div>
    </div>
    <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
        <div class="text-center text-sm text-gray-500 sm:text-left">
            <div class="flex items-center">
                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                     stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                    <path
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>

                <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                    Shop
                </a>

                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                    <path
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>

                <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                    Sponsor
                </a>
            </div>
        </div>

        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
    </div>
</div>

@endsection
