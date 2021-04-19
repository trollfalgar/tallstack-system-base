<nav
    class="relative z-10 flex flex-wrap items-center justify-between px-6 py-4 bg-white shadow-xl md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden md:w-64">
    <div class="flex flex-wrap items-center justify-between w-full px-0 mx-auto md:flex-col md:items-stretch md:min-h-full md:flex-nowrap">
        <button class="px-3 py-1 text-xl leading-none text-black bg-transparent border border-transparent border-solid rounded opacity-50 cursor-pointer md:hidden" type="button">
            <i class="fas fa-bars"></i>
        </button>
        <a class="inline-block p-4 px-0 mr-0 text-sm font-bold text-left uppercase md:block md:pb-2 text-bluegray-600 whitespace-nowrap" href="#/">
            {{ config('app.name') }}
        </a>
        <ul class="flex flex-wrap items-center list-none md:hidden">
            <li class="relative inline-block"><a class="block px-3 py-1 text-bluegray-500" href="#pablo"><i class="fas fa-bell"></i></a>
                <div class="z-50 hidden float-left py-2 mt-1 text-base text-left list-none bg-white rounded shadow-lg min-w-48"><a href="#pablo"
                        class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-bluegray-700">Action</a><a href="#pablo"
                        class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-bluegray-700">Another action</a><a href="#pablo"
                        class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-bluegray-700">Something else here</a>
                    <div class="h-0 my-2 border border-solid border-bluegray-100"></div><a href="#pablo"
                        class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-bluegray-700">Seprated link</a>
                </div>
            </li>
            <li class="relative inline-block">
                <a class="block text-bluegray-500" href="#pablo">
                    <div class="flex items-center">
                        <div class="inline-flex items-center justify-center w-12 h-12 text-sm text-white rounded-full bg-bluegray-200">
                            <img alt="..." class="w-full align-middle bg-cover border-none rounded-full shadow-lg" src="{{ asset(auth()->user()->avatar) }}">
                        </div>
                    </div>
                </a>
                <div class="z-50 float-left py-2 text-base text-left list-none bg-white rounded shadow-lg min-w-48"><a href="#pablo"
                        class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-bluegray-700">Action</a><a href="#pablo"
                        class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-bluegray-700">Another action</a><a href="#pablo"
                        class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-bluegray-700">Something else here</a>
                    <div class="h-0 my-2 border border-solid border-bluegray-100"></div><a href="#pablo"
                        class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-bluegray-700">Seprated link</a>
                </div>
            </li>
        </ul>

        <div
            class="absolute top-0 left-0 right-0 z-40 items-center flex-1 hidden h-auto overflow-x-hidden overflow-y-auto rounded shadow md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none">
            <div class="block pb-4 mb-4 border-b border-solid md:min-w-full md:hidden border-bluegray-200">
                <div class="flex flex-wrap">
                    <div class="w-6/12"><a class="inline-block p-4 px-0 mr-0 text-sm font-bold text-left uppercase md:block md:pb-2 text-bluegray-600 whitespace-nowrap"
                            href="#/">Notus React</a></div>
                    <div class="flex justify-end w-6/12"><button type="button"
                            class="px-3 py-1 text-xl leading-none text-black bg-transparent border border-transparent border-solid rounded opacity-50 cursor-pointer md:hidden"><i
                                class="fas fa-times"></i></button></div>
                </div>
            </div>
            <form class="mt-6 mb-4 md:hidden">
                <div class="pt-0 mb-3"><input type="text" placeholder="Search"
                        class="w-full h-12 px-3 py-2 text-base font-normal leading-snug bg-white border border-0 border-solid rounded shadow-none outline-none border-bluegray-500 placeholder-bluegray-300 text-bluegray-600 focus:outline-none">
                </div>
            </form>
            <hr class="my-4 md:min-w-full">
            <h6 class="block pt-1 pb-4 text-xs font-bold no-underline uppercase md:min-w-full text-bluegray-500">Admin Layout Pages</h6>
            <ul class="flex flex-col list-none md:flex-col md:min-w-full">
                <li class="items-center transition duration-150 rounded text-lightblue-500 hover:text-bluegray-100 hover:bg-lightblue-600">
                    <a class="block py-3 text-xs font-bold uppercase transition duration-300 transform hover:translate-x-4"
                        href="#/admin/dashboard">
                        <i class="mr-2 text-sm opacity-75 fas fa-tv"></i> Dashboard
                    </a>
                </li>
            </ul>
            <hr class="my-4 md:min-w-full">
            <h6 class="block pt-1 pb-4 text-xs font-bold no-underline uppercase md:min-w-full text-bluegray-500">Auth Layout Pages</h6>
            <ul class="flex flex-col list-none md:flex-col md:min-w-full md:mb-4">
                <li class="items-center"><a class="block py-3 text-xs font-bold uppercase text-bluegray-700 hover:text-bluegray-500" href="#/auth/login"><i
                            class="mr-2 text-sm fas fa-fingerprint text-bluegray-400"></i> Login</a></li>
                <li class="items-center"><a class="block py-3 text-xs font-bold uppercase text-bluegray-700 hover:text-bluegray-500" href="#/auth/register"><i
                            class="mr-2 text-sm fas fa-clipboard-list text-bluegray-300"></i> Register</a></li>
            </ul>
            <hr class="my-4 md:min-w-full">
            <h6 class="block pt-1 pb-4 text-xs font-bold no-underline uppercase md:min-w-full text-bluegray-500">No Layout Pages</h6>
            <ul class="flex flex-col list-none md:flex-col md:min-w-full md:mb-4">
                <li class="items-center"><a class="block py-3 text-xs font-bold uppercase text-bluegray-700 hover:text-bluegray-500" href="#/landing"><i
                            class="mr-2 text-sm fas fa-newspaper text-bluegray-400"></i> Landing Page</a></li>
                <li class="items-center"><a class="block py-3 text-xs font-bold uppercase text-bluegray-700 hover:text-bluegray-500" href="#/profile"><i
                            class="mr-2 text-sm fas fa-user-circle text-bluegray-400"></i> Profile Page</a></li>
            </ul>
            <hr class="my-4 md:min-w-full">
            <h6 class="block pt-1 pb-4 text-xs font-bold no-underline uppercase md:min-w-full text-bluegray-500">Documentation</h6>
            <ul class="flex flex-col list-none md:flex-col md:min-w-full md:mb-4">
                <li class="inline-flex"><a href="https://www.creative-tim.com/learning-lab/tailwind/react/colors/notus" target="_blank"
                        class="block mb-4 text-sm font-semibold no-underline text-bluegray-700 hover:text-bluegray-500"><i
                            class="mr-2 text-base fas fa-paint-brush text-bluegray-300"></i>Styles</a></li>
                <li class="inline-flex"><a href="https://www.creative-tim.com/learning-lab/tailwind/react/alerts/notus" target="_blank"
                        class="block mb-4 text-sm font-semibold no-underline text-bluegray-700 hover:text-bluegray-500"><i
                            class="mr-2 text-base fab fa-css3-alt text-bluegray-300"></i>CSS Components</a></li>
                <li class="inline-flex"><a href="https://www.creative-tim.com/learning-lab/tailwind/angular/overview/notus" target="_blank"
                        class="block mb-4 text-sm font-semibold no-underline text-bluegray-700 hover:text-bluegray-500"><i
                            class="mr-2 text-base fab fa-angular text-bluegray-300"></i>Angular</a></li>
                <li class="inline-flex"><a href="https://www.creative-tim.com/learning-lab/tailwind/js/overview/notus" target="_blank"
                        class="block mb-4 text-sm font-semibold no-underline text-bluegray-700 hover:text-bluegray-500"><i
                            class="mr-2 text-base fab fa-js-square text-bluegray-300"></i>Javascript</a></li>
                <li class="inline-flex"><a href="https://www.creative-tim.com/learning-lab/tailwind/nextjs/overview/notus" target="_blank"
                        class="block mb-4 text-sm font-semibold no-underline text-bluegray-700 hover:text-bluegray-500"><i
                            class="mr-2 text-base fab fa-react text-bluegray-300"></i>NextJS</a></li>
                <li class="inline-flex"><a href="https://www.creative-tim.com/learning-lab/tailwind/react/overview/notus" target="_blank"
                        class="block mb-4 text-sm font-semibold no-underline text-bluegray-700 hover:text-bluegray-500"><i
                            class="mr-2 text-base fab fa-react text-bluegray-300"></i>React</a></li>
                <li class="inline-flex"><a href="https://www.creative-tim.com/learning-lab/tailwind/svelte/overview/notus" target="_blank"
                        class="block mb-4 text-sm font-semibold no-underline text-bluegray-700 hover:text-bluegray-500"><i
                            class="mr-2 text-base fas fa-link text-bluegray-300"></i>Svelte</a></li>
                <li class="inline-flex"><a href="https://www.creative-tim.com/learning-lab/tailwind/vue/overview/notus?_ga=2.20493816.1375394089.1618795941-22328174.1618551107"
                        target="_blank" class="block mb-4 text-sm font-semibold no-underline text-bluegray-700 hover:text-bluegray-500"><i
                            class="mr-2 text-base fab fa-vuejs text-bluegray-300"></i>VueJS</a></li>
            </ul>
        </div>
    </div>
</nav>
