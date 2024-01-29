<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('event.event', [
            'event' => Event::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create', ["data" => new Event()]);
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
            'nama_event' => 'required|min:4',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'tanggal' => 'required',
            'gambar' => 'required||mimes:jpg,jpeg,png,gif,svg'
        ]);

        $file = $request->file('gambar');
        $namaFile =$file->getClientOriginalName();
        $tujuanFile = 'event';
        $file->move($tujuanFile,$namaFile);

        $hotel = new Event();
        $hotel->user_id = Auth::user()->id;
        $hotel->lokasi = $request->lokasi;
        $hotel->nama_event = $request->nama_event;
        $hotel->deskripsi = $request->deskripsi;
        $hotel->tanggal = $request->tanggal;
        $hotel->gambar = $namaFile;
        
        $hotel->save();
        return redirect('tambahevent');
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
        $data = Event::findOrFail($id);
        return view('event.event')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $tambahevent)
    {
        return view('event.edit', compact('tambahevent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $event)
    {
        $validatedData = $request->validate([
            // 'user_id' => Auth::user()->id,
            'user_id' => 'Auth::id()->id',
            'nama_event' => 'required|min:4',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'tanggal' => 'required',
            'gambar' => 'mimes:jpg,jpeg,png,gif,svg'
        ]);

        if($request->hasfile('gambar')){
            $file = $request->file('gambar');
            $namaFile = $file->getClientOriginalName();
            $tujuanFile = 'event';
    
            $file->move($tujuanFile, $namaFile);
    
            Event::where('id',$event)->update([
                'nama_event' => $request->nama_event,
                'deskripsi' => $request->deskripsi,
                'lokasi' => $request->lokasi,
                'tanggal' => $request->tanggal,
                'gambar' =>  $namaFile
            ]);
        }else{
            Event::where('id',$event)->update([
                'nama_event' => $request->nama_event,
                'deskripsi' => $request->deskripsi,
                'lokasi' => $request->lokasi,
                'tanggal' => $request->tanggal,
            ]); 
        }
        
        // $clinic->update();
        return redirect('tambahevent');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event=Event::find($id);
        $event->delete();
        return back();
    }
}
