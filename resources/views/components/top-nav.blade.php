<!-- header -->
<nav class="z-10 border-b top-0 w-full bg-gray-100 bg-opacity-80 flex items-center justify-between px-3 sm:px-4 md:px-6 py-3 font-bold uppercase font-open-sans-condensed">
    <div class="text-2xl">
        <a href="{{ url('/home') }}" class="text-gray-900">
            <svg viewBox="0 -.11376601 49.74245785 51.31690859" class="text-primary-600 w-8" xmlns="http://www.w3.org/2000/svg"><path d="m49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1 -.402.694l-9.209 5.302v10.509c0 .286-.152.55-.4.694l-19.223 11.066c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1 -.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054l-19.219-11.066a.801.801 0 0 1 -.402-.694v-32.916c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216zm-36.84-31.068v31.068l17.618 10.143v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-21.483l-4.645-2.676-3.363-1.934zm8.81-5.994-8.007 4.609 8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764 4.645-2.674v-20.096l-3.363 1.936-4.646 2.675v20.096zm24.667-23.325-8.006 4.609 8.006 4.609 8.005-4.61zm-.801 10.605-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937zm-18.422 20.561 11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833z" fill="currentColor"/></svg>
        </a>
    </div>
    <div class="hidden sm:flex text-gray-500 text-lg">
        @if($title)
            <a href="{{ url('/') }}" class="ml-2 border-primary-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg></a>
            <a class="ml-2 border-primary-400 text-gray-800">{{ $title }}</a>
        @else
            @foreach($menus as $menu)
                <a href="{{ url('/'.$menu['slug']) }}" class="ml-2 border-primary-400 {{$menu['id'] == $active['id']?'border-b-4 text-gray-800 ':''}}">{{ $menu['name'] }}</a>
            @endforeach
            <a data-custom-open="modal-1" class="ml-2 border-primary-400 cursor-pointer">Más</a>
        @endif
    </div>
    <div class="flex items-center">
        <a href="#search" class="ml-2">
            <svg role="img" aria-labelledby="search-icon-title" class="search-icon h-6" viewBox="0 0 22 22"><title
                    id="search-icon-title">Buscar</title>
                <g transform="translate(2.000000, 2.000000)" stroke="#999" stroke-width="1.5" fill="none">
                    <circle cx="7" cy="7" r="7"></circle>
                    <path d="M12,13 L17,18" stroke-linecap="square"></path>
                </g>
            </svg>
        </a>
        <a href="#dashboard" class="ml-2">
            <svg role="img" aria-labelledby="following-icon-title" class="following-icon h-6" viewBox="0 0 22 22">
                <title id="following-icon-title">Siguiendo</title>
                <g stroke="#999" stroke-width="1.5" fill="none" fill-rule="evenodd">
                    <rect x="0.75" y="0.75" width="8.5" height="8.5" rx="1.5"></rect>
                    <rect x="0.75" y="11.75" width="8.5" height="8.5" rx="1.5"></rect>
                    <rect x="11.75" y="0.75" width="8.5" height="8.5" rx="1.5"></rect>
                    <rect x="11.75" y="11.75" width="8.5" height="8.5" rx="1.5"></rect>
                </g>
            </svg>
        </a>
        <a href="#account" class="ml-2 w-6">
            <img loading="lazy" src="/img/kid1.svg" class="rounded-full shadow bg-white w-6"/>
        </a>
    </div>
</nav>
<!-- end header -->
<div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
    <div class="fixed inset-0 bg-black bg-opacity-60 px-3 flex justify-center items-center z-50" tabindex="-1" data-micromodal-close>
        <div class="bg-white rounded-md w-full sm:w-72 max-w-full shadow" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
            <header class="modal__header p-3 flex justify-between items-center">
                <h2 class="font-open-sans-condensed uppercase text-xl" id="modal-1-title">
                    Mis intereses
                </h2>
                <button class="modal__close ml-2" aria-label="Close modal" data-micromodal-close></button>
            </header>
            <main class="p-3 font-open-sans-condensed" id="modal-1-content">
                <ul id="menu-interests-edit-items">
                    @foreach($menus as $menu)
                    <li class="flex justify-between py-1 items-center">
                        <button class="cursor-move">
                            <svg role="img" aria-labelledby="move-icon-title" class="sortable-list__move-icon move-icon" width="24" height="24" viewBox="0 0 24 24"><title id="move-icon-title">Mover</title><g class="move-icon__fill" transform="translate(7.000000, 5.000000)" stroke="none" fill="#999" fill-rule="evenodd"><path d="M1.5,3 C0.671572875,3 0,2.32842712 0,1.5 C0,0.671572875 0.671572875,0 1.5,0 C2.32842712,0 3,0.671572875 3,1.5 C3,2.32842712 2.32842712,3 1.5,3 Z M1.5,9 C0.671572875,9 0,8.32842712 0,7.5 C0,6.67157288 0.671572875,6 1.5,6 C2.32842712,6 3,6.67157288 3,7.5 C3,8.32842712 2.32842712,9 1.5,9 Z M1.5,15 C0.671572875,15 0,14.3284271 0,13.5 C0,12.6715729 0.671572875,12 1.5,12 C2.32842712,12 3,12.6715729 3,13.5 C3,14.3284271 2.32842712,15 1.5,15 Z"></path><path d="M8.5,3 C7.67157288,3 7,2.32842712 7,1.5 C7,0.671572875 7.67157288,0 8.5,0 C9.32842712,0 10,0.671572875 10,1.5 C10,2.32842712 9.32842712,3 8.5,3 Z M8.5,9 C7.67157288,9 7,8.32842712 7,7.5 C7,6.67157288 7.67157288,6 8.5,6 C9.32842712,6 10,6.67157288 10,7.5 C10,8.32842712 9.32842712,9 8.5,9 Z M8.5,15 C7.67157288,15 7,14.3284271 7,13.5 C7,12.6715729 7.67157288,12 8.5,12 C9.32842712,12 10,12.6715729 10,13.5 C10,14.3284271 9.32842712,15 8.5,15 Z"></path></g></svg>
                        </button>
                        <div class="w-full">{{ $menu['name'] }}</div>
                        <button>
                            <svg role="img" aria-labelledby="clear-icon-title" class="w-5" viewBox="0 0 21 21"><title id="clear-icon-title">clear</title><g transform="translate(-16.000000, -16.000000)" fill="#999" fill-rule="evenodd" stroke="none"><path d="M26.5,16 C32.2989899,16 37,20.7010101 37,26.5 C37,32.2989899 32.2989899,37 26.5,37 C20.7010101,37 16,32.2989899 16,26.5 C16,20.7010101 20.7010101,16 26.5,16 Z M30.25,22 L26.5,25.75 L22.75,22 L22,22.75 L25.75,26.5 L22,30.25 L22.75,31 L26.5,27.25 L30.25,31 L31,30.25 L27.25,26.5 L31,22.75 L30.25,22 Z"></path></g></svg>
                        </button>
                    </li>
                    @endforeach
                </ul>
                <button class="ml-4 rounded-sm p-1 hover:bg-gray-300">Añadir interés</button>
            </main>
            <footer class="px-3 py-2 modal__footer border-gray-500 border-t">
                <button class="rounded-sm p-1 w-full hover:bg-gray-400" data-micromodal-close aria-label="Close this dialog window">Cerrar</button>
            </footer>
        </div>
    </div>
</div>
