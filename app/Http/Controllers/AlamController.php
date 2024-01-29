<?php

namespace App\Http\Controllers;

use App\Models\Alam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('alam.alam', [
            'alam' => Alam::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alam.create', ["data" => new Alam()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // 'user_id' => Auth::user()->id,
            'user_id' => 'Auth::id()->id',
            'nama_alam' => 'required|min:4',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'tempat' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required||mimes:jpg,jpeg,png,gif,svg'
        ]);

        $file = $request->file('gambar');
        $namaFile =$file->getClientOriginalName();
        $tujuanFile = 'alam';
        $file->move($tujuanFile,$namaFile);

        $alam = new Alam();
        $alam->user_id = Auth::user()->id;
        $alam->lokasi = $request->lokasi;
        $alam->nama_alam = $request->nama_alam;
        $alam->deskripsi = $request->deskripsi;
        $alam->tempat = $request->tempat;
        $alam->keterangan = $request->keterangan;
        $alam->gambar = $namaFile;
        
        $alam->save();
        // return redirect('wisata');
        dd($request->all());
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel=Alam::find($id);
        $hotel->delete();
        return back();
    }
}
