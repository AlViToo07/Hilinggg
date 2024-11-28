<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Bookmark;
use App\Models\Destination;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function show($customerId)  
    {  
        // Ambil customer berdasarkan ID  
        $customer = Customer::with('bookmarks.destination')->findOrFail($customerId);
        

        // Kirim data ke view  
        return view('bookmarks', compact('customer'));  
    }  

    public function store($destinationId)
    {
        $destination = Destination::findOrFail($destinationId);

        // Pastikan user sudah login
        $customer = Auth::user()->customer;



        // Cek apakah destinasi sudah ada di bookmark
        $exists = Bookmark::where('customer_id', $customer->id)
            ->where('item_type', 'Wisata')
            ->where('item_id', $destination->id)
            ->exists();

        if ($exists) {
            return redirect()->back()->with('message', 'Destinasi sudah ada di bookmark.');
        }

        // Tambahkan ke bookmark
        Bookmark::create([
            'customer_id' => $customer->id,
            'item_type' => 'Wisata',
            'item_id' => $destination->id,
        ]);

        return redirect()->back()->with('message', 'Destinasi berhasil ditambahkan ke bookmark.');
    }

    public function destroy($destinationId)
    {
        $destination = Destination::findOrFail($destinationId);

        // Pastikan user sudah login
        $customer = Auth::user()->customer;

        // Cari dan hapus bookmark
        $bookmark = Bookmark::where('customer_id', $customer->id)
            ->where('item_type', 'Wisata')
            ->where('item_id', $destination->id)
            ->first();

        if ($bookmark) {
            $bookmark->delete();
            return redirect()->back()->with('message', 'Destinasi berhasil dihapus dari bookmark.');
        }

        return redirect()->back()->with('message', 'Destinasi tidak ditemukan di bookmark.');
    }
}
