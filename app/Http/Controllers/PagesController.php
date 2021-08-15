<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;
use App\Categorias;
use App\Http\Requests\ProdutosRequest;
use App\User;

class PagesController extends Controller
{
    public function index()
    {
        //return view('public.index');
        $produtos = Produtos::all();
        return view('public.index', compact('produtos'));
    }
}
