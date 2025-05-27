<?php

//criado utilizando o --resource após o nome do Controller

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LabsExames;

class LabsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exames = LabsExames::all(); //lista tudo da tabela
        return view('exames.index', compact('exames')); //redireciona para a blade Index.
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('exames.create'); //redireciona para blade Create
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:100',    //limita o numero de caracteres
            'tipo_exame' => 'required|string',
            'data_coleta' => 'required|date|before_or_equal:today', //before or equal == =<
            'laudo' => 'nullable|string|max:500'
        ]);

        LabsExames::create($request->all());

        return redirect()->route('exames.index')->with('sucesso', 'Exame cadastrado com sucesso!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LabsExames $exames)
    {
        return view('exames.edit', compact('exames'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LabsExames $exames)
    {
        $request->validate([
            'nome' => 'required|string|max:100',    
            'tipo_exame' => 'required|string',
            'data_coleta' => 'required|date|before_or_equal:today',
            'laudo' => 'nullable|string|max:500',
        ]);

        $exames->update($request->all());
        return redirect()->route('exames.index')->with('sucesso','Exame Alterado!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LabsExames $exames)
    {
        $exames->delete();
        return redirect()->route('exames.index')->with('sucesso','Exame removido.');
    }
}
