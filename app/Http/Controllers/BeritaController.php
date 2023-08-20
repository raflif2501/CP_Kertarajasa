<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Berita;
use Spatie\Permission\Models\Role;
use Hash;
use Illuminate\Support\Arr;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Image;
use Carbon\Carbon;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:superadmin|admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Berita::all();
        $data = Berita::select("*")->orderByRaw('tanggal DESC')->paginate();
        return view('berita.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $today = Carbon::now()->format('Y-m-d');
        // dd($today);die;
        return view('berita.create',compact('today'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pesan = [
            'required' => ':attribute wajib diisi !',
            'min' => ':attribute harus diisi minimal :min karakter !',
            'max' => ':attribute harus diisi maksimal :max karakter !',
            'numeric' => ':attribute harus diisi angka !',
            ];
            $this->validate($request, [
            'judul' => 'required',
            'gambar' => 'required|image|file|max:1024',
            'tanggal' => 'required',
            // 'pembelian' => 'required',
            'isi' => 'required',
            ]);
            $name2 = '';
            $name3 = '';
            $name4 = '';
            $name5 = '';

            $image = $request->file('gambar');
            $name = time().'.'.$image->getClientOriginalExtension();
            // $img = Image::make($image);
            // if (Image::make($image)->height() > 720) {
            //     $img->resize(null, 720, function ($constraint) {
            //         $constraint->aspectRatio();
            //     });
            // }
            // dd($img);
            $image->move(public_path('foto/berita/gambar1'),$name);

            $image2 = $request->file('gambar2');
            if($image2 != null){
            $name2 = time().'.'.$image2->getClientOriginalExtension();
            $image2->move(public_path('foto/berita/gambar2'),$name2);
            }

            $image3 = $request->file('gambar3');
            if($image3 != null){
            $name3 = time().'.'.$image3->getClientOriginalExtension();
            $image3->move(public_path('foto/berita/gambar3'),$name3);
            }

            $image4 = $request->file('gambar4');
            if($image4 != null){
            $name4 = time().'.'.$image4->getClientOriginalExtension();
            $image4->move(public_path('foto/berita/gambar4'),$name4);
            }

            $image5 = $request->file('gambar5');
            if($image5 != null){
            $name5 = time().'.'.$image5->getClientOriginalExtension();
            $image5->move(public_path('foto/berita/gambar5'),$name5);
            }

            $data = Berita::create([
            'gambar' => $name,
            'gambar2' => $name2,
            'gambar3' => $name3,
            'gambar4' => $name4,
            'gambar5' => $name5,
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'isi' => $request->isi,
            ]);
            if($data){
                Alert::success('Success', 'Data Berhasil Ditambahkan');
                return redirect()->route('berita.index');
            }else{
                Alert::error('Gagal', 'Data Gagal Ditambahkan');
                return redirect()->route('berita.index');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Berita::find($id);
        return view('berita.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $today = Carbon::now()->format('Y-m-d');
        $pesan = [
            'required' => ':attribute wajib diisi !',
            'min' => ':attribute harus diisi minimal :min karakter !',
            'max' => ':attribute harus diisi maksimal :max kilobytes atau 1 MB !',
            'numeric' => ':attribute harus diisi angka !',
            ];
            $this->validate($request, [
            'judul' => 'required',
            'gambar' => 'required|image|file|max:1024',
            // 'tanggal' => 'required',
            // 'pembelian' => 'required',
            'isi' => 'required',
            ],$pesan);
            $name2 = '';
            $name3 = '';
            $name4 = '';
            $name5 = '';

            $data = Berita::findOrFail($id);

            if($request->file('gambar','gambar2','gambar3','gambar4','gambar5') == "") {
            $data->update([
                'judul' => $request->judul,
                'tanggal' => $today,
                'isi' => $request->isi,
            ]);

            } else {

            Storage::disk('local')->delete('foto/berita/gambar1/'.$data->gambar);
            Storage::disk('local')->delete('foto/berita/gambar2/'.$data->gambar2);
            Storage::disk('local')->delete('foto/berita/gambar3/'.$data->gambar3);
            Storage::disk('local')->delete('foto/berita/gambar4/'.$data->gambar4);
            Storage::disk('local')->delete('foto/berita/gambar5/'.$data->gambar5);

            $image = $request->file('gambar');
            $name = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('foto/berita/gambar1'),$name);

            $image2 = $request->file('gambar2');
            if($image2 != null){
            $name2 = time().'.'.$image2->getClientOriginalExtension();
            $image2->move(public_path('foto/berita/gambar2'),$name2);
            }

            $image3 = $request->file('gambar3');
            if($image3 != null){
            $name3 = time().'.'.$image3->getClientOriginalExtension();
            $image3->move(public_path('foto/berita/gambar3'),$name3);
            }

            $image4 = $request->file('gambar4');
            if($image4 != null){
            $name4 = time().'.'.$image4->getClientOriginalExtension();
            $image4->move(public_path('foto/berita/gambar4'),$name4);
            }

            $image5 = $request->file('gambar5');
            if($image5 != null){
            $name5 = time().'.'.$image5->getClientOriginalExtension();
            $image5->move(public_path('foto/berita/gambar5'),$name5);
            }

            $data->update([
            'gambar' => $name,
            'gambar2' => $name2,
            'gambar3' => $name3,
            'gambar4' => $name4,
            'gambar5' => $name5,
            'judul' => $request->judul,
            'tanggal' => $today,
            'isi' => $request->isi,
            ]);
            }

            if($data){
            Alert::success('Success', 'Data Berhasil Dirubah');
            return redirect()->route('berita.index');
            }else{
            Alert::error('Gagal', 'Data Gagal Dirubah');
            return redirect()->route('berita.index');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Berita::find($id)->delete();
        Alert::success('Success', 'Data Berhasil Dihapus');
        return redirect()->route('berita.index');
    }

    public function cari(Request $request)
	{
		$cari = $request->cari;
		$data = Berita::select("*")
		->where('judul','like',"%".$cari."%")
		->paginate();
		return view('berita.index',compact('data'));
	}
}
