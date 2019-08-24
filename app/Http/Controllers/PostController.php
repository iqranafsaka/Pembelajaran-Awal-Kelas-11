<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $a = Post::all();
        return view('post.index', compact('a'));
    }
    
    public function detail($id){
        $a = Post::findOrFail($id); //findOrFail untuk mengecek gagalnya atau errornya codingan
        return view('post.show', compact('a'));
    }
}
