<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmeController extends Controller
{
    public function index()
    {
        //Criamos uma lsita de filmes fictícios
        $filmes= session('filmes', []);

        //Passamos os filmes para a view
        return view('filmes.index', compact('filmes'));
    }

    public function store(Request $request)
    {
        //Validação simples: título e gênero são obrigatórios
        $request->validate([
            'titulo'=>'required',
            'genero'=>'required',
            'avaliacao'=>'required'
        ]);


        //Criando uma lista nova de filmes para ser adicionados pelo user
        $novo_Filme = [
            'titulo' => $request->input('titulo'),
            'genero' => $request->input('genero'),
            'avaliacao' => $request->input('avaliacao'),
        ];

        //Valor inicial que a lista terá
        $filmes = session('filmes', [
            ['titulo'=>'O Podereso Chefão','genero'=>'Drama','avaliacao'=>'9.2'],
            ['titulo'=>'Interestelar','genero'=>'Ficção Cientifica','avaliacao'=>'8.6'],
            ['titulo'=>'Toy Story','genero'=>'Animação','avaliacao'=>'8.3'],
        ]);

        //Adiciona o novo filme para a lista
        $filmes[] = $novo_Filme;

        //Salva na sessão
        session(['filmes' => $filmes]);

        //Redireciona de volta com mensagem de sucesso
        return redirect()->route('filmes.index')->with('sucesso', 'Filme adicionado com sucesso!');
    }
    
    //Função para a exclusão dos Filmes da lista + desafio
    public function destroy($titulo)
    {
        //Puxa os itens atuais da lista
        $filmes = session('filmes', []);

        //Remove o filme usando o titulo do filme
        $filmes = array_filter($filmes, function ($filme) use ($titulo){
            return $filme['titulo'] !== $titulo;
        });
            
        session(['filmes' => array_values($filmes)]);

        return redirect()->route('filmes.index');
    }
}
