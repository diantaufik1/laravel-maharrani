<?php

namespace App\Http\Controllers;

use App\Models\Bukumenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BukumenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Bukumenu::all();
        $sorted = $buku->SortBy('urutan');
        return view('dashboard.bukumenu.bukumenu', [
            'title' => 'Buku Menu',
            'buku' => $sorted,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'image' => 'image|file|max:10000',
            'keterangan' => 'required',
            'urutan' => 'required'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('bukumenu-image');
        }

        Bukumenu::create($validatedData);
        return redirect('/bukumenudata')->with('Success', 'Data Berhasil Di Simpan');
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
        return view('dashboard.bukumenu.edit', [
            'title' => 'Edit Buku Menu',
            'edit' => $shark = Bukumenu::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $edit)
    {
        $validatedData = $request->validate([
            'image' => 'image|file|max:10000',
            'keterangan' => 'required',
            'urutan'    => 'required'
        ]);

        if($request->file('image')){
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('bukumenu-image');
        }

        Bukumenu::where('id', $edit)->update($validatedData);
        return redirect('/bukumenudata')->with('Success', 'Update Data Successfull');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $gambar = Bukumenu::where('id',$id)->first();
		Storage::delete($gambar->image);
        // Storage::delete($id);
        Bukumenu::destroy($id);
        // $delete = DB::table('bukumenus')
        //     ->where('id', $id)
        //     ->delete();

        return redirect('/bukumenudata')->with('Success', 'Delete Data Successfull');
    }

    public function urutan(Request $request)
    {
            $validatedData = $request->validate([
                'urutandata' => 'required|unique:bukumenus,urutan'
            ]);

        DB::table('bukumenus')
        ->where('id', $request->input('id'))
        ->update([
                'urutan' => $request->input('urutandata')
            ]);
        return redirect('/bukumenudata')->with('Success', 'Data Updated Successfully');
    }
}
