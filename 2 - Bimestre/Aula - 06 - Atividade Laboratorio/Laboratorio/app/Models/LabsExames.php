<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;

class LabsExames extends Model
{
    use HasFactory;

    protected $table = "labs_exames"; //indica qual tabela que vai armazenar os dados
    protected $primaryKey = "exame_id"; //chave primaria da tabela (permite a edição e remoção de itens)

    protected $fillable = ['nome', 'tipo_exame', 'data_coleta', 'laudo'];
}
