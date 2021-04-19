<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('home');
    }
}
