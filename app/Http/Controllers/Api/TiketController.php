<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tiket;
use Illuminate\Support\Facades\Storage;

class TiketController extends Controller
{
    /**
     * Menampilkan daftar tiket (Dilengkapi fitur SEARCH & FILTER)
     */
    public function index(Request $request)
    {
        // Panggil relasi kategori agar namanya ikut tampil
        $query = Tiket::with('kategori');

        // Logika SEARCH: Cari berdasarkan nama tiket
        if ($request->has('search')) {
            $query->where('nama_tiket', 'like', '%' . $request->search . '%');
        }

        // Logika FILTER: Saring berdasarkan kategori
        if ($request->has('kategori_id')) {
            $query->where('kategori_id', $request->kategori_id);
        }

        $tikets = $query->get();

        return response()->json([
            'success' => true,
            'message' => 'Daftar Tiket Tari Kecak',
            'data'    => $tikets
        ], 200);
    }

    /**
     * Menambahkan tiket baru (Dilengkapi fitur UPLOAD FILE)
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_tiket'  => 'required|string|max:150',
            'kategori_id' => 'required|exists:kategoris,id',
            'harga'       => 'required|numeric',
            'img'         => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validasi file gambar
            'slug'        => 'required|string|unique:tikets,slug',
        ]);

        // Logika UPLOAD FILE
        $imagePath = null;
        if ($request->hasFile('img')) {
            // Simpan gambar ke folder 'public/tiket_images'
            $imagePath = $request->file('img')->store('tiket_images', 'public');
        }

        // Simpan data ke database
        $tiket = Tiket::create([
            'nama_tiket'  => $request->nama_tiket,
            'deskripsi'   => $request->deskripsi,
            'kategori_id' => $request->kategori_id,
            'harga'       => $request->harga,
            'stok'        => $request->stok ?? 0,
            'slug'        => $request->slug,
            'img'         => $imagePath,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Tiket berhasil ditambahkan',
            'data'    => $tiket
        ], 201);
    }

    /**
     * Menampilkan detail satu tiket
     */
    public function show(string $id)
    {
        $tiket = Tiket::with('kategori')->find($id);

        if (!$tiket) {
            return response()->json(['success' => false, 'message' => 'Tiket tidak ditemukan'], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail Tiket',
            'data'    => $tiket
        ], 200);
    }

    /**
     * Menghapus tiket
     */
    public function destroy(string $id)
    {
        $tiket = Tiket::find($id);

        if (!$tiket) {
            return response()->json(['success' => false, 'message' => 'Tiket tidak ditemukan'], 404);
        }

        // Hapus gambar lama jika ada
        if ($tiket->img) {
            Storage::disk('public')->delete($tiket->img);
        }

        $tiket->delete();

        return response()->json([
            'success' => true,
            'message' => 'Tiket berhasil dihapus'
        ], 200);
    }
}