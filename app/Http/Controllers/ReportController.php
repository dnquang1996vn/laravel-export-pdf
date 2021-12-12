<?php

namespace App\Http\Controllers;

use Nesk\Puphpeteer\Puppeteer;
use Nesk\Rialto\Data\JsFunction;
use PDF;

class ReportController extends Controller
{
    public function view()
    {
        return view('purchaseOrder.index');
    }

    public function test(): \Illuminate\Http\Response
    {
        $pdf = PDF::loadView('purchaseOrder.index');
        $pdf->getDomPDF()->set_option("enable_php", true);
        return $pdf->stream();

    }

    public function puppeteer()
    {
        $puppeteer = new Puppeteer;

        $browser = $puppeteer->launch();
        $page = $browser->newPage();
        $page->goto('https://stackoverflow.com/questions/1361925/how-to-enable-socket-in-php');

// Get the "viewport" of the page, as reported by the page.
        $dimensions = $page->evaluate(JsFunction::createWithBody("
    return {
        width: document.documentElement.clientWidth,
        height: document.documentElement.clientHeight,
        deviceScaleFactor: window.devicePixelRatio
    };
"));

        printf('Dimensions: %s', print_r($dimensions, true));

        $browser->close();
    }
}
