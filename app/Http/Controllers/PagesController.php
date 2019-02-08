<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function djiz()
    {
        return view('djiz');
    }

    public function djsyah()
    {
        return view('djsyah');
    }

    public function djelly()
    {
        return view('djelly');
    }

    public function djzam()
    {
        return view('djzam');
    }

    public function djisz()
    {
        return view('djisz');
    }

    public function djfaz()
    {
        return view('djfaz');
    }

    public function djmil()
    {
        return view('djmil');
    }

    public function jadual()
    {
        return view('jadualdj');
    }

    public function teknikal()
    {
        return view('teknikal');
    }

    public function testimoni()
    {
        return view('testimoni');
    }
    
    public function temuramah()
    {
        return view('temuramah');
    }
    
    public function tentang()
    {
        return view('tentang');
    }
    
}