<?php

namespace App\Http\Controllers;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function home()
    {
        return view('home');
    }
    public function cursos()
    {
        return view('cursos');
    }
    public function turmas()
    {
        return view('turmas');
    }
    public function professores()
    {
        return view('professores');
    }
    public function disciplinas()
    {
        return view('disciplinas');
    }
}
