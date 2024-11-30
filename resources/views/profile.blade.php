@extends('layout.master')

@section('title', '🚣‍♂️Traveling')

@section('content')
    <div class="flex items-center justify-center p-6">
        <div class="w-full max-w-4xl p-6 bg-white rounded-md shadow-2xl">
            <div class="flex flex-row gap-6">
                <div class="flex flex-col">
                    <img src={{ asset('img/' . (auth()->user()->customer->img_profile ?? 'default-profile.jpg') ) }} alt=""
                        class="w-48 h-48 rounded-full object-cover">

                    <a href="{{ route('bookmarks.show', $user->customer->user_id) }}"
                        class="w-full px-4 py-2 mt-3 text-sm text-center text-white bg-[#0062DD] rounded-md font-semibold hover:bg-[#3f88e1]">
                        My Bookmark</a>
                    <a href=""
                        class="w-full px-4 py-2 mt-3 text-sm text-center text-white bg-[#0062DD] rounded-md font-semibold hover:bg-[#3f88e1]">
                        My Reviews</a>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit"
                            class="w-full px-4 py-2 mt-3 text-sm text-center text-white bg-[#0062DD] rounded-md font-semibold hover:bg-[#3f88e1]">Logout</button>
                    </form>
                    <button type="button" data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                        class="w-full px-4 py-2 mt-3 text-sm text-center text-white bg-red-600 rounded-md font-semibold hover:bg-red-500">
                        Hapus Akun</button>
                </div>
                <div class="bg-[#0062dd] w-[3px] h-96 rounded-full my-auto"></div>
                <div class="flex flex-col flex-1">
                    <p class="text-center text-xl sm:text-2xl font-semibold text-[#0062DD]">Profile</p>

                    <div class="">
                        <label class="block">
                            <span class="text-sm text-[#0062DD]">Nama Depan</span>
                            <div
                                class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg shadow-sm form-control focus:border-[#0062DD] focus:ring-[#0062DD] focus:outline-none focus:shadow-outline">
                                {{ $user->customer->first_name }}
                            </div>
                        </label>
                    </div>

                    <div class="">
                        <label class="block">
                            <span class="text-sm text-[#0062DD]">Nama Belakang</span>
                            <div
                                class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg shadow-sm form-control focus:border-[#0062DD] focus:ring-[#0062DD] focus:outline-none focus:shadow-outline">
                                {{ $user->customer->last_name }}
                            </div>
                        </label>
                    </div>

                    <div>
                        <label class="block">
                            <span class="text-sm text-[#0062DD]">Telepon</span>
                            <div
                                class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg shadow-sm form-control focus:border-[#0062DD] focus:ring-[#0062DD] focus:outline-none focus:shadow-outline">
                                {{ $user->customer->telephone }}
                            </div>
                        </label>
                    </div>

                    <div class="">
                        <label class="block">
                            <span class="text-sm text-[#0062DD]">Username</span>
                            <div
                                class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg shadow-sm form-control focus:border-[#0062DD] focus:ring-[#0062DD] focus:outline-none focus:shadow-outline">
                                {{ $user->username }}
                            </div>
                        </label>
                    </div>

                    <div class="">
                        <label class="block">
                            <span class="text-sm text-[#0062DD]">Email</span>
                            <div
                                class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg shadow-sm form-control focus:border-[#0062DD] focus:ring-[#0062DD] focus:outline-none focus:shadow-outline">
                                {{ $user->email }}
                            </div>
                        </label>
                    </div>

                    <div class="grid grid-cols-2 gap-3">
                        <a href="{{ route('edit.profile') }}"
                            class="w-full px-4 py-2 mt-3 text-sm text-center text-white bg-[#0062DD] rounded-md font-semibold hover:bg-[#3f88e1]">
                            Edit Profil</a>
                        <a href="{{ route('edit.password') }}"
                            class="w-full px-4 py-2 mt-3 text-sm text-center text-white bg-[#0062DD] rounded-md font-semibold hover:bg-[#3f88e1]">
                            Ganti Password</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div id="popup-modal" tabindex="-1"
        class="overflow-y-auto overflow-x-hidden fixed inset-0 z-50 justify-center items-center w-full h-full bg-black/40 hidden">
        <div class="relative p-4 w-full max-w-md max-h-full bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button"
                class="absolute top-3 right-3 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <form action="{{ route('account.delete') }}" method="POST" class="p-4 md:p-5 text-center mx-auto">
                @csrf
                @method('DELETE')
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Anda yakin ingin menghapus akun ?</h3>
                <button data-modal-hide="popup-modal" type="submit"
                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                    Ya
                </button>
                <button data-modal-hide="popup-modal" type="button"
                    class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tidak</button>
            </form>
        </div>
    </div>


@endsection
