<nav class="absolute top-0 left-0 z-10 flex items-center w-full p-4 bg-transparent md:flex-row md:flex-nowrap md:justify-start">
    <div class="flex flex-wrap items-center justify-between w-full px-4 mx-autp md:flex-nowrap">
        <a class="hidden text-sm font-semibold text-white uppercase lg:inline-block" href="#pablo">Dashboard</a>
        <form class="flex-row flex-wrap items-center hidden mr-3 md:flex lg:ml-auto">
            <div class="relative flex flex-wrap items-stretch w-full"><span
                    class="absolute z-10 items-center justify-center w-8 h-full py-3 pl-3 text-base font-normal leading-snug text-center bg-transparent rounded text-bluegray-300"><i
                        class="fas fa-search"></i></span><input type="text" placeholder="Search here..."
                    class="relative w-full px-3 py-3 pl-10 text-sm bg-white border-0 rounded shadow outline-none placeholder-bluegray-300 text-bluegray-600 focus:outline-none focus:ring">
            </div>
        </form>
        <ul class="flex-col items-center hidden list-none md:flex-row md:flex"><a class="block text-bluegray-500" href="#pablo">
                <div class="flex items-center"><span class="inline-flex items-center justify-center w-12 h-12 text-sm text-white rounded-full bg-bluegray-200"><img alt="..."
                            class="w-full align-middle border-none rounded-full shadow-lg" src="{{ asset(auth()->user()->avatar )}}"></span></div>
            </a>
            <div class="z-50 hidden float-left py-2 text-base text-left list-none bg-white rounded shadow-lg min-w-48"><a href="#pablo"
                    class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-bluegray-700">Action</a><a href="#pablo"
                    class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-bluegray-700">Another action</a><a href="#pablo"
                    class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-bluegray-700">Something else here</a>
                <div class="h-0 my-2 border border-solid border-bluegray-100"></div><a href="#pablo"
                    class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-bluegray-700">Seprated link</a>
            </div>
        </ul>
    </div>
</nav>
