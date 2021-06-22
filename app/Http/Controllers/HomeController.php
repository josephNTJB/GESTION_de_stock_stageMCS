<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $qte=0;
        $magasins=DB::table('magasins')->get();
        $stocks=DB::table('stock')->get();
        return view('dashboard')
        ->with(compact('magasins'))
        ->with(compact('qte'))
		->with(compact('stocks'));
    }
}
