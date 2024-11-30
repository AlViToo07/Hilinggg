<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Destination;

class CityController extends Controller
{
    public function index()  
    {  
        $cities = City::all(); // Mengambil semua data dari tabel city  
        return view('cities.index', compact('cities')); // Mengirim data ke view  
    }  

    public function show($slug)  
    {  
        // Ambil data city berdasarkan ID  
        $city = City::where('slug', $slug)->first();  

        // Cek jika city tidak ditemukan  
        if (!$city) {  
            return redirect()->back()->with('error', 'City not found');  
        }
        
        $destinations = $city->destinations;

        // Tampilkan view dengan data city  
        return view('city', compact('city', 'destinations'));  
    }  
}
