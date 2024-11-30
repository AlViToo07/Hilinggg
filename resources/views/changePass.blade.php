@extends('layout.master')

@section('title', '🚣‍♂️Traveling')

@section('content')
    <div class="flex items-center justify-center p-6">
        <div class="w-full max-w-xl p-6 bg-white rounded-md shadow-2xl">
            <form class="space-y-3" action="{{ route('update.password') }}" method="POST">
                @csrf
                <p class="text-center text-xl sm:text-2xl font-semibold text-[#0062DD]">Edit Profile</p>

                <div class="">
                    <label class="block">
                        <span class="text-sm text-[#0062DD]">Password Lama</span>
                        <div class="relative">
                            <input type="password" id="password_lama" name="password_lama" required placeholder="Masukkan Password Lama"
                            class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg shadow-sm form-control focus:border-[#0062DD] focus:ring-[#0062DD] focus:outline-none focus:shadow-outline">
                        <i id="eye_icon_current" class="fas fa-eye absolute top-1/2 right-3 transform -translate-y-1/2 cursor-pointer"></i>
                        </div>
                        @error('password_lama')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </label>
                </div>
                
                <div class="">
                    <label class="block relative">
                        <span class="text-sm text-[#0062DD]">Password Baru</span>
                        <div class="relative">
                        <input type="password" id="password_baru" name="password_baru" required placeholder="Masukkan Password Baru"
                        class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg shadow-sm form-control focus:border-[#0062DD] focus:ring-[#0062DD] focus:outline-none focus:shadow-outline">
                        <i id="eye_icon_new" class="fas fa-eye absolute top-1/2 right-3 transform -translate-y-1/2 cursor-pointer"></i>
                        </div>
                            @error('password_baru')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </label>
                </div>
                
                <div class="">
                    <label class="block">
                        <span class="text-sm text-[#0062DD]">Konfirmasi Password Baru</span>
                        <div class="relative">
                            <input type="password" id="password_baru_confirmation" name="password_baru_confirmation" required placeholder="Konfirmasi Password Baru"
                            class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg shadow-sm form-control focus:border-[#0062DD] focus:ring-[#0062DD] focus:outline-none focus:shadow-outline">
                        <i id="eye_icon_confirm" class="fas fa-eye absolute top-1/2 right-3 transform -translate-y-1/2 cursor-pointer"></i>
                        </div>
                        @error('password_baru_confirmation')
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

@section('scripts')
<script>
    // Toggle the visibility of the new password
    document.getElementById('eye_icon_current').addEventListener('click', function () {
        var passwordField = document.getElementById('password_lama');
        var icon = document.getElementById('eye_icon_current');
        if (passwordField.type === 'password') {
            passwordField.type = 'text'; // Show password
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password'; // Hide password
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });

    // Toggle the visibility of the new password
    document.getElementById('eye_icon_new').addEventListener('click', function () {
        var passwordField = document.getElementById('password_baru');
        var icon = document.getElementById('eye_icon_new');
        if (passwordField.type === 'password') {
            passwordField.type = 'text'; // Show password
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password'; // Hide password
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });

    // Toggle the visibility of the confirm new password
    document.getElementById('eye_icon_confirm').addEventListener('click', function () {
        var confirmPasswordField = document.getElementById('password_baru_confirmation');
        var icon = document.getElementById('eye_icon_confirm');
        if (confirmPasswordField.type === 'password') {
            confirmPasswordField.type = 'text'; // Show password
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            confirmPasswordField.type = 'password'; // Hide password
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });
</script>
@endsection
