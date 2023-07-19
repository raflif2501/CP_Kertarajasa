<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Spatie\Permission\Models\Role;
use Hash;
use Illuminate\Support\Arr;
use RealRashid\SweetAlert\Facades\Alert;

class KontakController extends Controller
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
        $data = Kontak::all();
        return view('kontak.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kontak.create');
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
        'jenis' => 'required',
        'isi' => 'required',
        'alamat' => 'required',
        ]);

        $input = $request->all();
        $data = Kontak::create($input);
        // var_dump($input);die;
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('kontak.index');
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
        $data = Kontak::find($id);
        return view('kontak.edit',compact('data'));
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
        'max' => ':attribute harus diisi maksimal :max karakter !',
        'numeric' => ':attribute harus diisi angka !',
        ];
        $this->validate($request, [
        'jenis' => 'required',
        'isi' => 'required',
        'alamat' => 'required',
        ]);

        $input = $request->all();
        $user = Kontak::find($id);
        $user->update($input);
        // var_dump($input);die;
        Alert::success('Success', 'Data Berhasil Dirubah');
        return redirect()->route('kontak.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kontak::find($id)->delete();
        Alert::success('Success', 'Data Admin Berhasil Dihapus');
        return redirect()->route('kontak.index');
    }
}
