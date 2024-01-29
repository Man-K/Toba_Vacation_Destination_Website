<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('travel.travel', [
            'travel' => Travel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('travel.create', ["data" => new Travel()]);
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
            'nama_travel' => 'required|min:4',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'gambar' => 'required||mimes:jpg,jpeg,png,gif,svg'
        ]);

        $file = $request->file('gambar');
        $namaFile =$file->getClientOriginalName();
        $tujuanFile = 'travel';
        $file->move($tujuanFile,$namaFile);

        $hotel = new Travel();
        $hotel->user_id = Auth::user()->id;
        $hotel->lokasi = $request->lokasi;
        $hotel->nama_travel = $request->nama_travel;
        $hotel->deskripsi = $request->deskripsi;
        $hotel->gambar = $namaFile;
        
        $hotel->save();
        return redirect('tambahtravel');
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
        $data = Travel::findOrFail($id);
        return view('travel.travel')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Travel $tambahtravel)
    {
        return view('travel.edit', compact('tambahtravel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $travel)
    {
        $validatedData = $request->validate([
            // 'user_id' => Auth::user()->id,
            'user_id' => 'Auth::id()->id',
            'nama_travel' => 'required|min:4',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'gambar' => 'mimes:jpg,jpeg,png,gif,svg'
        ]);

        if($request->hasfile('gambar')){
            $file = $request->file('gambar');
            $namaFile = $file->getClientOriginalName();
            $tujuanFile = 'travel';
    
            $file->move($tujuanFile, $namaFile);
    
            Travel::where('id',$travel)->update([
                'nama_travel' => $request->nama_travel,
                'deskripsi' => $request->deskripsi,
                'lokasi' => $request->lokasi,
                'gambar' =>  $namaFile
            ]);
        }else{
            Travel::where('id',$travel)->update([
                'nama_travel' => $request->nama_travel,
                'deskripsi' => $request->deskripsi,
                'lokasi' => $request->lokasi,
            ]); 
        }
        
        // $clinic->update();
        return redirect('tambahtravel')->with('info', 'Fasilitas Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $travel=Travel::find($id);
        $travel->delete();
        return back();
    }
}
