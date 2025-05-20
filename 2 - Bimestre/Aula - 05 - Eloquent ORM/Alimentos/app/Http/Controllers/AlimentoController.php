<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alimento;

class AlimentoController extends Controller
{
    public function index()
    {
        $alimentos = Alimento::all();
        return view('alimentos.index', compact('alimentos'));
    }

    public function create()
    {
        return view('alimentos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome'=>'required',
            'quantidade'=>'required|integer',
            'validade'=>'nullable|date',
            'categoria'=>'nullable',
        ]);

        Alimento::create($request->all());

        return redirect()->route('alimentos.index')->with('sucesso', 'Alimentos adicionado!');
    }

    public function edit(Alimento $alimento)
    {
        return view('alimentos.edit', compact('alimento'));
    }

    public function update(Request $request, Alimento $alimento)
    {
        $request->validate([
            'nome'=>'required',
            'quantidade'=>'required|integer',
            'validade'=>'nullable|date',
            'categoria'=>'nullable',
        ]);

        $alimento->update($request->all());

        return redirect()->route('alimentos.index')->with('sucesso','Alimento Atualizado!');
    }

    public function destroy(Alimento $alimento)
    {
        $alimento->delete();
        return redirect()->route('alimentos.index')->with('sucesso','Alimento removido!');
    }
}
