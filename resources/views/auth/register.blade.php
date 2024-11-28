@extends('layout.master')

@section('title', '🚣‍♂️Traveling')

@section('content')
    <div class="flex items-center justify-center p-6">
        <div class="w-full max-w-xl p-6 bg-white rounded-md shadow-2xl">
            <form class="space-y-3" action="{{ route('register.store') }}" method="POST">
                @csrf
                <p class="text-center text-xl sm:text-2xl font-semibold text-[#0062DD]">Daftar</p>

                <div class="">
                    <label class="block">
                        <span class="text-sm text-[#0062DD]">Nama Depan</span>
                        <input type="text" name="first_name" value="{{ old('first_name') }}" required placeholder="Nama depan"
                            class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg shadow-sm form-control focus:border-[#0062DD] focus:ring-[#0062DD] focus:outline-none focus:shadow-outline">
                        @error('first_name')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </label>
                </div>

                <div class="">
                    <label class="block">
                        <span class="text-sm text-[#0062DD]">Nama Belakang</span>
                        <input type="text" name="last_name" value="{{ old('last_name') }}" required placeholder="Nama belakang"
                            class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg shadow-sm form-control focus:border-[#0062DD] focus:ring-[#0062DD] focus:outline-none focus:shadow-outline">
                        @error('last_name')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </label>
                </div>

                <div>
                    <label class="block">
                        <span class="text-sm text-[#0062DD]">Telepon</span>
                        <input type="number" name="telephone" value="{{ old('telephone') }}" required placeholder="Telepon"
                            class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg shadow-sm form-control focus:border-[#0062DD] focus:ring-[#0062DD] focus:outline-none focus:shadow-outline">
                        @error('telephone')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </label>
                </div>

                <div class="">
                    <label class="block">
                        <span class="text-sm text-[#0062DD]">Username</span>
                        <input type="text" name="username" value="{{ old('username') }}" required placeholder="Username"
                            class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg shadow-sm form-control focus:border-[#0062DD] focus:ring-[#0062DD] focus:outline-none focus:shadow-outline">
                        @error('username')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </label>
                </div>

                <div class="">
                    <label class="block">
                        <span class="text-sm text-[#0062DD]">Email</span>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                            class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg shadow-sm form-control focus:border-[#0062DD] focus:ring-[#0062DD] focus:outline-none focus:shadow-outline">
                        @error('email')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </label>
                </div>

                <div class="grid grid-cols-1 gap-4">
                    <label class="block">
                        <span class="text-sm text-[#0062DD]">Password</span>
                        <input type="password" name="password" required placeholder="Password"
                            class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg shadow-sm form-control focus:border-[#0062DD] focus:ring-[#0062DD] focus:outline-none focus:shadow-outline">
                        @error('password')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </label>
                </div>

                <button type="submit"
                    class="w-full px-4 py-2 mt-3 text-sm text-center text-white bg-[#0062DD] rounded-md font-semibold hover:bg-[#3f88e1]">
                    Daftar
                </button>

                <hr class="border-solid border-[#9E9E9E] my-3 grow">

                <a href="{{ route('login') }}">
                    <div
                        class="text-[#0062DD] my-3 border border-[#0062DD] w-full bg-white hover:bg-[#0062DD] hover:text-white focus:ring-4 focus:outline-none focus:ring-[#0062DD]/50 font-medium rounded-md text-xs sm:text-sm px-5 py-2 sm:py-2.5 text-center flex justify-center gap-2 items-center me-2 mb-2">
                        Sudah punya akun? Login </div>
                </a>

        </div>
    </div>
@endsection
