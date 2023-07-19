<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Berita;
use App\Models\Produk;
use App\Models\Kontak;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $auth = auth()->user();
        $berita = Berita::count();
        $produk = Produk::count();
        $kontak = Kontak::count();
        $user = User::count();
        return view('home',compact('berita','produk','kontak','user'));
    }
}
