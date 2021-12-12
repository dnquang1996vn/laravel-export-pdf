<?php

namespace App\Http\Controllers;

use PDF;

class ReportController extends Controller
{
    public function test(): \Illuminate\Http\Response
    {
        $pdf = PDF::loadView('pdf.order-purchase');
        $pdf->getDomPDF()->set_option("enable_php", true);
        return $pdf->stream();

    }
}
