<?php

namespace App\Http\Controllers;

use App\Models\Bukumenu;
use App\Models\Promo;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        $buku = Bukumenu::all();
        $bukuu = $buku->SortBy('urutan');
        $promo = Promo::all();
        $promoo = $promo->SortBy('id');
        $count = Promo::all()->count();
        return view('pengunjung/menu', [
            'title' => 'Buku Menu',
            'buku' => $bukuu,
            'promo' => $promoo,
            'count' => $count
        ]);
    }
}
