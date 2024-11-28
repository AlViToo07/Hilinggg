@extends('layout.master')

@section('title', '🚣‍♂️Traveling')

@section('content')
    <div class="flex flex-col items-center justify-center">
        @if (session()->has('success'))
            <div>{{ session('success') }}</div>
        @endif
        @if (session()->has('loginError'))
            <div>{{ session('loginError') }}</div>
        @endif
        <div class="w-full max-w-sm p-6 bg-white rounded-md shadow-2xl">
            <div class="flex items-center">
                <span class="text-2xl font-semibold text-[#0062DD]">Masuk</span>
            </div>
            <form class="mt-4" action="{{ route('login.in') }}" method="POST">
                @csrf
                <label class="block">
                    <span class="text-sm text-[#0062DD]">Email</span>
                    <input type="email" name="email" autofocus required value="{{ old('email') }}"
                        class="block w-full px-4 py-2 mt-1 transition duration-200 ease-in-out border border-gray-300 rounded-lg shadow-sm form-control focus:border-[#0062DD] focus:ring-[#0062DD] focus:outline-none focus:shadow-outline">
                    <div class="invalid-feedback">
                    </div>
                    @error('email')
                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </label>

                <label class="block mt-3">
                    <span class="text-sm text-[#0062DD]">Password</span>
                    <input type="password" name="password" required
                        class="block w-full px-4 py-2 mt-1 transition duration-200 ease-in-out border border-gray-300 rounded-lg shadow-sm form-control focus:border-[#0062DD] focus:ring-[#0062DD] focus:outline-none focus:shadow-outline">
                </label>
                <button
                    class="w-full px-4 py-2 mt-3 text-sm text-center text-white bg-[#0062DD] rounded-md font-semibold hover:bg-[#3f88e1]">
                    Masuk
                </button>
                <div
                    class="text-[#0062DD] my-3 border border-[#0062DD] w-full bg-white hover:bg-[#0062DD] hover:text-white focus:ring-4 focus:outline-none focus:ring-[#0062DD]/50 font-medium rounded-md text-xs sm:text-sm px-5 py-2 sm:py-2.5 text-center  flex justify-center gap-2  items-center  me-2 mb-2">
                    Belum punya akun ? Daftar </div>
                </a>
            </form>
        </div>


        

    </div>
@endsection
