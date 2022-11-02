<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ReservasiExport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function export()
    {
       $date = date('Y-m-d H:i');
        return Excel::download(new ReservasiExport, "Reservasi $date.xlsx");
    }
}
