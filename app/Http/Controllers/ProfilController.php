<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profil;
use Spatie\Permission\Models\Role;
use Hash;
use Illuminate\Support\Arr;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Image;

class ProfilController extends Controller
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
        $data = Profil::all();
        return view('profil.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profil.create');
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
            'isi' => 'required',
            ]);

            $image = $request->file('gambar');
            $name = time().'.'.$image->getClientOriginalExtension();
            // $img = Image::make($image);
            // if (Image::make($image)->height() > 720) {
            //     $img->resize(null, 720, function ($constraint) {
            //         $constraint->aspectRatio();
            //     });
            // }
            // dd($img);
            $image->move(public_path('foto/profil/gambar1'),$name);

            $data = Profil::create([
            'gambar' => $name,
            'judul' => $request->judul,
            'isi' => $request->isi,
            ]);
            if($data){
                Alert::success('Success', 'Data Berhasil Ditambahkan');
                return redirect()->route('profil.index');
            }else{
                Alert::error('Gagal', 'Data Gagal Ditambahkan');
                return redirect()->route('profil.index');
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
        $data = Profil::find($id);
        return view('profil.edit', compact('data'));
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
        $pesan = [
            'required' => ':attribute wajib diisi !',
            'min' => ':attribute harus diisi minimal :min karakter !',
            'max' => ':attribute harus diisi maksimal :max kilobytes atau 1 MB !',
            'numeric' => ':attribute harus diisi angka !',
            ];
            $this->validate($request, [
            'judul' => 'required',
            'gambar' => 'required|image|file|max:1024',
            'isi' => 'required',
            ],$pesan);

            $data = Profil::findOrFail($id);

            if($request->file('gambar') == "") {
            $data->update([
                'gambar' => $request->gambar,
                'judul' => $request->judul,
                'isi' => $request->isi,
            ]);

            } else {
            Storage::disk('local')->delete('foto/profil/gambar1/'.$data->gambar);

            $image = $request->file('gambar');
            $name = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('foto/profil/gambar1'),$name);

            $data->update([
            'gambar' => $name,
            'judul' => $request->judul,
            'isi' => $request->isi,
            ]);
            }

            if($data){
            Alert::success('Success', 'Data Berhasil Dirubah');
            return redirect()->route('profil.index');
            }else{
            Alert::error('Gagal', 'Data Gagal Dirubah');
            return redirect()->route('profil.index');
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
        //
    }
}
