<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promo = Promo::all();
        $sorted = $promo->SortBy('urutan');
        return view('dashboard.promo.promo', [
            'title' => 'Promo',
            'promo' => $sorted
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
            'urutan'    => 'required'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('promo-image');
        }

        Promo::create($validatedData);
        return redirect('/promo')->with('Success', 'Data Berhasil Di Simpan');
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
        return view('dashboard.promo.edit', [
            'title' => 'Edit Promo',
            'edit' => $shark = Promo::find($id),
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
            $validatedData['image'] = $request->file('image')->store('promo-image');
        }

        Promo::where('id', $edit)->update($validatedData);
        return redirect('/promo')->with('Success', 'Update Data Successfull');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if ($request->image) {
        //     Storage::delete($pro->image);
        // }
        // return dd($request->image);
        $gambar = Promo::where('id',$id)->first();
		Storage::delete($gambar->image);
        // Storage::delete($id);
        Promo::destroy($id);

        return redirect('/promo')->with('Success', 'Delete Data Successfull');
    }

    public function urutan(Request $request)
    {
            $validatedData = $request->validate([
                'urutandata' => 'required|unique:promos,urutan'
            ]);

        DB::table('promos')
        ->where('id', $request->input('id'))
        ->update([
                'urutan' => $request->input('urutandata')
            ]);
            return redirect('/promo')->with('Success', 'Data Berhasil Di Simpan');
    }
}
