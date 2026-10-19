<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        return view('frontpage.landingpage', ['title' => "Landing Page"]);
    }

    public function dashboard() 
    {
        return view('frontpage.dashboard', ['title' => "Dashboard"]);
    }

    public function promo() 
    {
        return view('frontpage.promo', ['title' => "Promo Tiket"]);
    }

    public function booking() 
    {
        return view('frontpage.booking', ['title' => "Form Pemesanan"]);
    }

    public function storeBooking(Request $request) 
    {
        return "Terima kasih, " . $request->name . "! Pesanan tiket " . $request->show_name . " untuk " . $request->quantity . " orang berhasil dikonfirmasi.";
    }
}