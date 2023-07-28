<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Produk;
use App\Models\Kontak;

class WelcomeController extends Controller
{
    public function index()
    {
        $berita1 = Berita::orderByRaw('created_at DESC')->paginate(1);
        $d = Berita::select('id')->orderByRaw('created_at DESC')->first();
        $berita = Berita::select("*")->whereNotIn('id',$d)->orderByRaw('created_at DESC')->paginate(2);
        $produk = Produk::all();
        // $produk1 = Produk::get()->last();
        $kontak = Kontak::all();
        return view('welcome',compact('berita1','berita','produk','kontak'));
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
    public function cari(Request $request)
	{
        $kontak = Kontak::all();

		$cari = $request->cari;
		$data = Berita::select("*")
		->where('judul','like',"%".$cari."%")
		->paginate();

		return view('berita',compact('kontak','data'));

	}
}
