<?php

namespace App\Http\Controllers;

use App\Models\ItemCarrinho;
use Illuminate\Http\Request;

class ItemCarrinhoController extends Controller
{
    public function index()
    {
        $itensCarrinho = ItemCarrinho::all();
        return view('itens-carrinho.index', compact('itensCarrinho'));
    }

    public function create()
    {
        return view('itens-carrinho.create');
    }

    public function store(Request $request)
    {
        ItemCarrinho::create($request->all());
        return redirect('/itens-carrinho');
    }

    public function show(ItemCarrinho $itemCarrinho)
    {
        return view('itens-carrinho.show', compact('itemCarrinho'));
    }

    public function edit(ItemCarrinho $itemCarrinho)
    {
        return view('itens-carrinho.edit', compact('itemCarrinho'));
    }

    public function update(Request $request, ItemCarrinho $itemCarrinho)
    {
        $itemCarrinho->update($request->all());
        return redirect('/itens-carrinho');
    }

    public function destroy(ItemCarrinho $itemCarrinho)
    {
        $itemCarrinho->delete();
        return redirect('/itens-carrinho');
    }
}