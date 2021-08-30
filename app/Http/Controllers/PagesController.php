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
        $produtos = Produtos::all();
        return view('public.index', compact('produtos'));
    }
    public function show($id)
    {
               
        $produto = Produtos::where('id',$id)->firstOrFail();
        $user = User::where('id',$produto->user_id)->firstOrFail();

        if (!$id)
        {
            abort(404);
        }
    
        return view ('public.produto',[
            'produto' => $produto,
            'user' => $user
        ]);
    
    } 
}
