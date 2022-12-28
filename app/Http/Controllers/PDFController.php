<?php

namespace App\Http\Controllers;

use PDF;

class PDFController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $pdf = PDF::loadView('user-dashboard');
    
    return $pdf->download('tutsmake.pdf');
  }
}
