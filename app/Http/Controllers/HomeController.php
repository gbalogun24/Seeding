<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about',['test'=>'Gafar']);
    }
    public function profile()
    {
       // $users = User::all();
        $user = Auth::user();
        $posts = $user->posts;
       // dd($posts);
        return view('profile',['posts'=>$posts]);
    }
}
