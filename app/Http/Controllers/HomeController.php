<?php

namespace App\Http\Controllers;

use App\Models\Keluarga;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Dashboard (){
        $user = Auth()->id();
        $datas = Keluarga::where('id_user', $user)->sum('jumlah');
        $jum = Keluarga::where('id_user', $user)->count();
        return view ('dashboard', compact('datas', 'jum'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
