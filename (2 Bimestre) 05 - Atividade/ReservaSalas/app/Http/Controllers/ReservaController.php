namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sala;
use App\Models\Reserva;

class ReservaController extends Controller
{
    public function create()
    {
        $salas = Sala::all(); // Carrega todas as salas para o select
        return view('reservas.create', compact('salas'));
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
