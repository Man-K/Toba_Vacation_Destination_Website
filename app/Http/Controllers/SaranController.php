<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index', [
            'saran' => Saran::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.index', ["data" => new Saran()]);
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
            'user_id' => 'Auth::id()->id',
            'email' => 'required|email:dns',
            'saran' => 'required'
        ],[
            'email.required' => 'Email field is required.',
            'saran.required' => 'Saran field is required.'
        ]);

        $saran = new Saran();
        $saran->user_id = Auth::user()->id;
        $saran->email =$request->email;
        $saran->saran = $request->saran;

        $saran->save();
        return redirect('dashboard')->with('success', 'Saran Berhasil dibuat');
        // dd($request->all());
        // return redirect('da')->with('success', 'saran Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Saran::findOrFail($id);
        return view('dashboard.index')->with([
            'data' => $data
        ]);
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
    public function destroy(Saran $saran)
    {
        $saran->delete();
        // saran::destroy($saran->id);
        // return redirect('saran')->with('status','Berhasil di hapus');
        return back();
    }
}
