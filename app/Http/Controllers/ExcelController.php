<?php

namespace App\Http\Controllers;

use App\Exports\OrderExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    //
    public function export(Request $request)
    {
        $status = $request->get('status');
        return (new OrderExport(1))->download("orders.xlsx");
    }

}
