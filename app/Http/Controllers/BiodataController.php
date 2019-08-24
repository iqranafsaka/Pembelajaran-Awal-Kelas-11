<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata;

class BiodataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $a = Biodata::all();
        return view('biodata.index', compact('a'));
    }

    public function show($id){
        $a = Biodata::findOrFail($id);
        return view('biodata.show', compact('a'));
    }
}
