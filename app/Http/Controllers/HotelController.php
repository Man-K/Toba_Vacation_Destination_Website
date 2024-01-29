<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hotel.hotel', [
            'hotel' => Hotel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotel.create', ["data" => new Hotel()]);
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
            'nama_hotel' => 'required|min:4',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'tempat' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required||mimes:jpg,jpeg,png,gif,svg'
        ]);

        $file = $request->file('gambar');
        $namaFile =$file->getClientOriginalName();
        $tujuanFile = 'travel';
        $file->move($tujuanFile,$namaFile);

        $hotel = new Hotel();
        $hotel->user_id = Auth::user()->id;
        $hotel->lokasi = $request->lokasi;
        $hotel->nama_hotel = $request->nama_hotel;
        $hotel->deskripsi = $request->deskripsi;
        $hotel->tempat = $request->tempat;
        $hotel->keterangan = $request->keterangan;
        $hotel->gambar = $namaFile;
        
        $hotel->save();
        return redirect('tambahhotel');
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
        $data = Hotel::findOrFail($id);
        return view('hotel.hotel')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $tambahhotel)
    {
        return view('hotel.edit', compact('tambahhotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $hotel)
    {
        $validatedData = $request->validate([
            // 'user_id' => Auth::user()->id,
            'user_id' => 'Auth::id()->id',
            'nama_hotel' => 'required|min:4',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'tempat' => 'required',
            'keterangan' => 'required',
            'gambar' => 'mimes:jpg,jpeg,png,gif,svg'
        ]);

        if($request->hasfile('gambar')){
            $file = $request->file('gambar');
            $namaFile = $file->getClientOriginalName();
            $tujuanFile = 'hotel';
    
            $file->move($tujuanFile, $namaFile);
    
            Hotel::where('id',$hotel)->update([
                'nama_hotel' => $request->nama_hotel,
                'deskripsi' => $request->deskripsi,
                'lokasi' => $request->lokasi,
                'tempat' => $request->tempat,
                'keterangan' => $request->keterangan,
                'gambar' =>  $namaFile
            ]);
        }else{
            Hotel::where('id',$hotel)->update([
                'nama_hotel' => $request->nama_hotel,
                'deskripsi' => $request->deskripsi,
                'lokasi' => $request->lokasi,
                'tempat' => $request->tempat,
                'keterangan' => $request->keterangan,
            ]); 
        }
        
        // $clinic->update();
        return redirect('tambahhotel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel=Hotel::find($id);
        $hotel->delete();
        return back();
    }
}
