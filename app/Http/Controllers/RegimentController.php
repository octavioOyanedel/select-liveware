<?php

namespace App\Http\Controllers;

use App\Models\Regiment;
use Illuminate\Http\Request;
use App\Exports\RegimientoExport;
use Maatwebsite\Excel\Facades\Excel;

class RegimentController extends Controller
{
    public function export() 
    {
        return Excel::download(new RegimientoExport, 'regimientos.xlsx');
    }
}
