<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    // Menampilkan halaman edit profil
    public function index()
    {
        $user = Auth::user(); // Mendapatkan data pengguna yang sedang login
        return view('profile', compact('user')); // Mengarahkan ke view dengan data pengguna
    }
    public function edit()
    {
        $user = Auth::user(); // Mendapatkan data pengguna yang sedang login
        return view('editProfile', compact('user')); // Mengarahkan ke view dengan data pengguna
    }

    // Memproses pembaruan data profil
    public function update(Request $request)
    {
        $user = Auth::user(); // Mendapatkan pengguna yang sedang login

        // Validasi data
        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'telephone' => 'required|regex:/(0)[0-9]{9,12}/|unique:customers,telephone,' . $user->customer->id,
            'username' => 'required|unique:users,username,' . $user->id . '|max:255',
        ]);


        $user->username = $request->username;
        $user->save();

        // Update data customer
        $user->customer->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'telephone' => $request->telephone,
        ]);

        return redirect(route('login'))->with('success', 'Profil berhasil diperbarui!');
    }

    public function editPass()
    {
        $user = Auth::user(); // Mendapatkan data pengguna yang sedang login
        return view('changePass', compact('user')); // Mengarahkan ke view dengan data pengguna
    }

    public function updatePass(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'password_lama' => 'required|string',
            'password_baru' => 'required|string|min:8|confirmed',  // Memastikan bahwa password_baru dan password_baru_confirmation cocok
            'password_baru_confirmation' => 'required|string|min:8',
        ]);

        // Jika validasi gagal, kembalikan error
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = Auth::user(); // Mendapatkan pengguna yang sedang login

        // Memeriksa apakah password yang dimasukkan sesuai dengan password yang ada
        if (!Hash::check($request->password_lama, $user->password)) {
            return back()->withErrors(['password_lama' => 'The current password is incorrect.']);
        }

        // Jika password saat ini benar, lanjutkan untuk mengubah password
        $user->password = Hash::make($request->password_baru); // Mengubah password menjadi password baru yang sudah dienkripsi
        $user->save(); // Simpan perubahan

        return redirect()->route('index.profile')->with('success', 'Password changed successfully!');
    }

    public function deleteAccount(){
        $user = Auth::user();

        // Delete the user and associated customer
        $user->customer()->delete(); // If the user has a related customer, delete it too
        $user->delete(); // Delete the user

        // Log the user out and redirect to the homepage
        Auth::logout();

        return redirect('/')->with('success', 'Your account has been deleted successfully.');
    }
}
