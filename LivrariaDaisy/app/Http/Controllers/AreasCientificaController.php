<?php

namespace App\Http\Controllers;

use App\Models\AreasCientifica;
use Illuminate\Http\Request;

class AreasCientificaController extends Controller
{
    public function index()
    {
        $areasCientificas = AreasCientifica::all();
        return view('areas_cientificas.index', compact('areasCientificas'));
    }

    public function create()
    {
        return view('areas-cientificas.create');
    }

    public function store(Request $request)
    {
        AreasCientifica::create($request->all());
        return redirect('/areas-cientificas');
    }

    public function show(AreasCientifica $areaCientifica)
    {
        return view('areas-cientificas.show', compact('areaCientifica'));
    }

    public function edit(AreasCientifica $areaCientifica)
    {
        return view('areas-cientificas.edit', compact('areaCientifica'));
    }

    public function update(Request $request, AreasCientifica $areaCientifica)
    {
        $areaCientifica->update($request->all());
        return redirect('/areas-cientificas');
    }

    public function destroy(AreasCientifica $areaCientifica)
    {
        $areaCientifica->delete();
        return redirect('/areas-cientificas');
    }
}