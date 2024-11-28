<!-- Navbar Start -->
<nav
    class="flex flex-row max-w-6xl mx-auto justify-between items-center mt-3 bg-indigo-950 rounded-3xl sticky top-3 z-50">
    <a href={{ route('home') }}><img src="{{ asset('img/pasawat-removebg-preview.png') }}" class="ms-5 mt-2" width="85px"
            alt="Logo"></a>
    <ul class="flex flex-row gap-7  font-semibold">
        <li>
            <a href="#Home" class=" text-base text-white  hover:text-violet-600">
                Home
            </a>
        </li>
        <li>
            <a href="#city" class="text-base  text-white  hover:text-violet-600">
                City
            </a>
        </li>
        <li>
            <a href="#Tourism" class="text-base text-white  hover:text-violet-600">
                Tourist
            </a>
        </li>
        <li>
            <a href="#event" class="text-base text-white  hover:text-violet-600">
                Attraction
            </a>
        </li>
    </ul>
    <div class="flex flex-row items-center mr-2">
        <div class="bg-white py-2 px-4 rounded-full ">
            <input type="search" name="search" id="search" class="text-sm text-black outline-none font-semibold"
                placeholder="Search">
            <button class="bg-violet-600 text-white  px-3 py-1 rounded-full hover:bg-neutral-200 text-base "><img
                    src="{{ asset('img/cari-removebg-preview.png') }}" width="18px" alt=""></button>
        </div>
        @auth
        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
            class="text-white bg-violet-600 hover:bg-neutral-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mx-3 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">Profile
        </button>

        <!-- Dropdown menu -->
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                    <div href="#"
                        class="block px-4 py-2 text-black w-full">{{ auth()->user()->customer->first_name }}</div>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-black w-full">Pengaturan Profile</a>
                </li>
                <li>
                    <a href="{{ route('bookmarks.show', auth()->user()->customer->id) }}"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-black w-full">Bookmarks</a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit"
                        class="flex px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-black w-full justify-start">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
        @else
        <div class="p-[8px]">
            <a href="{{ route('login') }}"
                class="bg-violet-600 text-white py-2 px-3 rounded-full hover:bg-neutral-200 hover:text-black text-base font-semibold">Sign
                In</a>
        </div>
        <div>
            <a href="{{ route('register') }}"
                class="bg-violet-600 text-white py-2 px-3 rounded-full hover:bg-neutral-200 hover:text-black text-base font-semibold ">Register</a>
        </div>
        @endauth
    </div>
</nav>
<!-- Navbar End -->
