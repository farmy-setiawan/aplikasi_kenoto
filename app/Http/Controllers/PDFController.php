<?php
  
namespace App\Http\Controllers;

use App\Models\Keluarga;
use Illuminate\Http\Request;
use App\Models\User;
use PDF;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    
    }

    public function generatePDF()
    { 
        $user = Auth()->id();
        // $datas = Keluarga::sum('jumlah');
        // $jum = Keluarga::count();

        $datas = Keluarga::where('id_user', $user)->sum('jumlah');
        $jum = Keluarga::where('id_user', $user)->count();

        $users = Keluarga::where('id_user', $user)->latest()->get();
        // $users = Keluarga::get();
  
        $data = [
            'title' => 'Daftar Kumpul Keluarga',
            'date' => date('m/d/Y'),
            'users' => $users,
            'datas' => $datas
        ]; 
            
        $pdf = PDF::loadView('myPDF', $data);
     
        return $pdf->download('daftar_kumpul_keluarga.pdf');
    }
}