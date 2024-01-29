<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KulinerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kuliner.kuliner', [
            'kuliner' => Kuliner::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kuliner.create', ["data" => new Kuliner()]);
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
            'nama_kuliner' => 'required|min:4',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'tempat' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required||mimes:jpg,jpeg,png,gif,svg'
        ]);

        $file = $request->file('gambar');
        $namaFile =$file->getClientOriginalName();
        $tujuanFile = 'kuliner';
        $file->move($tujuanFile,$namaFile);

        $hotel = new Kuliner();
        $hotel->user_id = Auth::user()->id;
        $hotel->lokasi = $request->lokasi;
        $hotel->nama_kuliner = $request->nama_kuliner;
        $hotel->deskripsi = $request->deskripsi;
        $hotel->tempat = $request->tempat;
        $hotel->keterangan = $request->keterangan;
        $hotel->gambar = $namaFile;
        
        $hotel->save();
        return redirect('tambahkuliner');
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Kuliner::findOrFail($id);
        return view('kuliner.kuliner')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kuliner $tambahkuliner)
    {
        return view('kuliner.edit', compact('tambahkuliner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kuliner)
    {
        $validatedData = $request->validate([
            // 'user_id' => Auth::user()->id,
            'user_id' => 'Auth::id()->id',
            'nama_kuliner' => 'required|min:4',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'tempat' => 'required',
            'keterangan' => 'required',
            'gambar' => 'mimes:jpg,jpeg,png,gif,svg'
        ]);

        if($request->hasfile('gambar')){
            $file = $request->file('gambar');
            $namaFile = $file->getClientOriginalName();
            $tujuanFile = 'fasilitas';
    
            $file->move($tujuanFile, $namaFile);
    
            Kuliner::where('id',$kuliner)->update([
                'nama_kuliner' => $request->nama_kuliner,
                'deskripsi' => $request->deskripsi,
                'lokasi' => $request->lokasi,
                'tempat' => $request->tempat,
                'keterangan' => $request->keterangan,
                'gambar' =>  $namaFile
            ]);
        }else{
            Kuliner::where('id',$kuliner)->update([
                'nama_kuliner' => $request->nama_kuliner,
                'deskripsi' => $request->deskripsi,
                'lokasi' => $request->lokasi,
                'tempat' => $request->tempat,
                'keterangan' => $request->keterangan,
            ]); 
        }
        
        // $clinic->update();
        return redirect('tambahkuliner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kuliner=Kuliner::find($id);
        $kuliner->delete();
        return back();
    }
}
