<?php

namespace App\Http\Controllers;

use PDF;

class ReportController extends Controller
{
    public function purchaseOrder(): \Illuminate\Http\Response
    {
        $pdf = PDF::loadView('pdf.order-purchase');
        $pdf->getDomPDF();
        return $pdf->stream();

    }

    public function invoice(): \Illuminate\Http\Response
    {
        $pdf = PDF::loadView('pdf.invoice');
        $pdf->getDomPDF();
        return $pdf->stream();

    }

}
