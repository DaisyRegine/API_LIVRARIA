<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function index()
    {
        $carrinhos = Carrinho::all();
        return view('carrinhos.index', compact('carrinhos'));
    }

    public function create()
    {
        return view('carrinhos.create');
    }

    public function store(Request $request)
    {
        Carrinho::create($request->all());
        return redirect('/carrinhos');
    }

    public function show(Carrinho $carrinho)
    {
        return view('carrinhos.show', compact('carrinho'));
    }

    public function edit(Carrinho $carrinho)
    {
        return view('carrinhos.edit', compact('carrinho'));
    }

    public function update(Request $request, Carrinho $carrinho)
    {
        $carrinho->update($request->all());
        return redirect('/carrinhos');
    }

    public function destroy(Carrinho $carrinho)
    {
        $carrinho->delete();
        return redirect('/carrinhos');
    }
}