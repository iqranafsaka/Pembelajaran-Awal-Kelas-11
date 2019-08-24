<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $a = Guru::all();
        return view('guru.index', compact('a'));
    }

    public function detail($id){
        $a = Guru::findOrFail($id);
        return view('guru.show',compact('a'));
    }
}
