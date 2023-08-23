<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Produk;
use App\Models\Kontak;
use App\Models\Profil;

class WelcomeController extends Controller
{
    public function index()
    {
        $berita1 = Berita::orderByRaw('created_at DESC')->paginate(1);
        $d = Berita::select('id')->orderByRaw('created_at DESC')->first();
        $berita = Berita::select("*")->whereNotIn('id',$d)->orderByRaw('created_at DESC')->paginate(3);
        $produk = Produk::all();
        // $produk1 = Produk::get()->last();
        $kontak = Kontak::all();
        $home = Profil::select("*")->where('judul','Home')->orderByRaw('created_at DESC')->paginate(1);
        $about = Profil::select("*")->where('judul','About')->orderByRaw('created_at DESC')->paginate(1);
        return view('welcome',compact('berita1','berita','produk','kontak','home','about'));
    }
    public function detail($id){
        $data = Berita::find($id);
        $kontak = Kontak::all();
        // var_dump($data);
        // die;
        return view('detail',compact('data','kontak'));
    }
    public function spesifikasi($id){
        $data = Produk::find($id);
        $kontak = Kontak::all();
        // var_dump($data);
        // die;
        return view('spesifikasi',compact('data','kontak'));
    }
    public function berita(){
        $data = Berita::all();
        $kontak = Kontak::all();
        // var_dump($data);
        // die;
        return view('berita',compact('data','kontak'));
    }
    public function produk(){
        $data = Produk::all();
        $kontak = Kontak::all();
        // var_dump($data);
        // die;
        return view('produk',compact('data','kontak'));
    }
    public function cari(Request $request)
	{
        $kontak = Kontak::all();
		$cari = $request->cari;
		$data = Berita::select("*")
		->where('judul','like',"%".$cari."%")
		->paginate();
		return view('berita',compact('kontak','data'));
	}
    public function carip(Request $request)
	{
        $kontak = Kontak::all();
		$cari = $request->cari;
		$data = Produk::select("*")
		->where('nama','like',"%".$cari."%")
		->paginate();
		return view('produk',compact('kontak','data'));
	}

    public function daniel()
    {
        $berita1 = Berita::orderByRaw('created_at DESC')->paginate(1);
        $d = Berita::select('id')->orderByRaw('created_at DESC')->first();
        $berita = Berita::select("*")->whereNotIn('id',$d)->orderByRaw('created_at DESC')->paginate(2);
        $produk = Produk::all();
        // $produk1 = Produk::get()->last();
        $kontak = Kontak::all();
        $brt = Berita::all();
        $home = Profil::select("*")->where('judul','Home')->orderByRaw('created_at DESC')->paginate(1);
        $about = Profil::select("*")->where('judul','About')->orderByRaw('created_at DESC')->paginate(1);
        return view('daniel.home',compact('berita1','berita','produk','kontak','home','about','brt'));
    }
    public function details($id){
        $data = Berita::find($id);
        $kontak = Kontak::all();
        // var_dump($data);
        // die;
        return view('daniel.detail',compact('data','kontak'));
    }
    public function spesifikasis($id){
        $data = Produk::find($id);
        $kontak = Kontak::all();
        // var_dump($data);
        // die;
        return view('daniel.spesifikasi',compact('data','kontak'));
    }
}
