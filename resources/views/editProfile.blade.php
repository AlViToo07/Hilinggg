@extends('layout.master')

@section('title', '🚣‍♂️Traveling')

@section('content')
    <div class="flex items-center justify-center p-6">
        <div class="w-full max-w-xl p-6 bg-white rounded-md shadow-2xl">
            <form class="space-y-3" action="{{ route('update.profile') }}" method="POST">
                @csrf
                <p class="text-center text-xl sm:text-2xl font-semibold text-[#0062DD]">Edit Profile</p>

                <div class="">
                    <label class="block">
                        <span class="text-sm text-[#0062DD]">Nama Depan</span>
                        <input type="text" name="first_name" value="{{ $user->customer->first_name }}" required placeholder="Nama depan"
                            class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg shadow-sm form-control focus:border-[#0062DD] focus:ring-[#0062DD] focus:outline-none focus:shadow-outline">
                        @error('first_name')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </label>
                </div>

                <div class="">
                    <label class="block">
                        <span class="text-sm text-[#0062DD]">Nama Belakang</span>
                        <input type="text" name="last_name" value="{{ $user->customer->last_name }}" required placeholder="Nama belakang"
                            class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg shadow-sm form-control focus:border-[#0062DD] focus:ring-[#0062DD] focus:outline-none focus:shadow-outline">
                        @error('last_name')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </label>
                </div>

                <div>
                    <label class="block">
                        <span class="text-sm text-[#0062DD]">Telepon</span>
                        <input type="number" name="telephone" value="{{ $user->customer->telephone }}" required placeholder="Telepon"
                            class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg shadow-sm form-control focus:border-[#0062DD] focus:ring-[#0062DD] focus:outline-none focus:shadow-outline">
                        @error('telephone')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </label>
                </div>

                <div class="">
                    <label class="block">
                        <span class="text-sm text-[#0062DD]">Username</span>
                        <input type="text" name="username" value="{{ $user->username }}" required placeholder="Username"
                            class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg shadow-sm form-control focus:border-[#0062DD] focus:ring-[#0062DD] focus:outline-none focus:shadow-outline">
                        @error('username')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </label>
                </div>

                <div class="">
                    <label class="block">
                        <span class="text-sm text-[#0062DD]">Email</span>
                        <input type="email" name="email" value="{{ $user->email }}" placeholder="Email" disabled
                            class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg shadow-sm form-control focus:border-[#0062DD] focus:ring-[#0062DD] focus:outline-none focus:shadow-outline">
                        @error('email')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </label>
                </div>

                <button type="submit"
                    class="w-full px-4 py-2 mt-3 text-sm text-center text-white bg-[#0062DD] rounded-md font-semibold hover:bg-[#3f88e1]">
                    Simpan
                </button>

        </div>
    </div>
@endsection
