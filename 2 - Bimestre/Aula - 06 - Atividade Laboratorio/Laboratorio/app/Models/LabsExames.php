<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;

class LabsExames extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'tipo_exame', 'data_coleta', 'laudo'];
}
