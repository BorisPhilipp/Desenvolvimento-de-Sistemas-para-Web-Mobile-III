<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardFilme extends Component
{
    public $titulo;
    public $genero;
    public $avaliacao;

    public function __construct($titulo, $genero, $avaliacao)
    {
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->avaliacao = $avaliacao;
    }

    public function render(): View|Closure|string
    {
        return view('components.card-filme');
    }
}
