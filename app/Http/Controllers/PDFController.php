<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laundry;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generateInvoicePDF()
    {
        $pdf = PDF::loadView('myPDF', [
            'laundry' => Laundry::latest('updated_at')->first()
        ]);
        return $pdf->download('invoice-laundries.pdf');
    }
}