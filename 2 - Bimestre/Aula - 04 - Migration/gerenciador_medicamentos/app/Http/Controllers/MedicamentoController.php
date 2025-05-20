<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicamento;

class MedicamentoController extends Controller
{
    public function index()
    {
        $medicamentos = Medicamento::orderBy('nome')->get();  // Filtrar medicamentos por nome. (Alfabéticamente)
        return view('medicamentos.index', compact('medicamentos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome'=>'required|min:3',
            'quantidade'=>'required|integer',
            'descricao'=>'nullable|string',
        ]);

        Medicamento::create([
            'nome'=>$request->nome,
            'descricao'=>$request->descricao,
            'quantidade'=>$request->quantidade
        ]);

            return redirect()->route('medicamentos.index')->with('sucesso', 'Medicamento Adicionado!');
    }

    public function edit(Medicamento $medicamento) // Adicionar um botão para atualizar a quantidade de um medicamento.
    {
        return view('medicamentos.edit', compact('medicamento')); 
    }

    public function update(Request $request, Medicamento $medicamento)
    {
        $request->validate([
            'nome'=>'required|min:3',
            'quantidade'=>'required|integer',
            'descricao'=>'nullable|string',
        ]);

        $medicamento->update($request->all());

        return redirect()->route('medicamentos.index')->with('sucesso', 'Medicamento Atualizado!');
    }

    public function destroy(Medicamento $medicamento)
    {
        $medicamento->delete();
        return redirect()->route('medicamentos.index')->with('sucesso', 'Medicamento Removido!');
    }
}
