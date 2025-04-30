<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sala;
use App\Models\Reserva;

class ReservaController extends Controller
{
    public function create()
    {
        $salas = Sala::all();
        return view('reservas.create', compact('salas'));
    }

    public function index()
    {
        $reservas = Reserva::with('sala')->get();
        return view('reservas.index', compact('reservas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sala_id' => 'required|exists:salas,id',
            'usuario' => 'required|string|max:255',
            'data' => 'required|date',
            'horario' => 'required'
        ]);

        Reserva::create($request->all());

        return redirect()->route('reservas.create')->with('success', 'Reserva criada com sucesso!');
    }
}

