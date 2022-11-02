<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;
use App\Exports\ReservasiExport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ReservasidataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.reservasi.index', [
                    'title' => 'Reservasi',
                    'reservasi' => Reservasi::all()
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
            'nama_pemesan' => 'required|max:255',
            'tamu' => ['required'],
            'instansi' => '',
            'jumlah_tamu' => 'required',
            'lokasi_meja' => 'required',
            'tanggal_jam' => 'required',
        ]);
        $data[] = $validatedData;
        Reservasi::create($validatedData);
        $nama = $request->input('nama_pemesan');
        $tamu = $request->input('tamu');
        $instansi = $request->input('instansi');
        $jumlah_tamu = $request->input('jumlah_tamu');
        $lokasi_meja = $request->input('lokasi_meja');
        $tanggal_jam = $request->input('tanggal_jam');
        return redirect("https://wa.me/6285755674894?text=nama:%20$nama%0ATamu:%20$tamu%0AInstansi:%20$instansi%0Ajumlah_tamu:%20$jumlah_tamu%0Alokasi meja:%20$lokasi_meja%0ATanggal dan Jam:%20$tanggal_jam");
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
        return view('dashboard.reservasi.edit', [
            'title' => 'Edit Reservasi',
            'edit' => $shark = Reservasi::find($id),
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
        // return dd($request->all());
        $validatedData = $request->validate([
            'nama_pemesan' => 'required|max:255',
            'tamu' => 'required',
            'instansi' => '',
            'jumlah_tamu' => 'required',
            'lokasi_meja' => 'required',
            'tanggal_jam' => 'required',
        ]);
        // $post = Reservasi::find($edit)->update($request->all());
        Reservasi::where('id', $edit)->update($validatedData);
        return redirect('/reservasidata')->with('Success', 'Update Data Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = DB::table('Reservasis')
        ->where('id', $id)
        ->delete();

    return redirect('/reservasidata')->with('Success', 'Delete Data Successfull');
    }
}
