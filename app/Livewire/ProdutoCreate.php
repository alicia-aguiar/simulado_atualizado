<?php

namespace App\Livewire;

use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $preco;
    public $cor;
    public $textura;
    public $peso;
    public $unidade_medida;
    public $qtd_minima;
    public $qtd_estoque;

    public function salvar()
    {
        $this->validate([
            'nome' => 'required',
            'preco' => 'required|numeric',
            'cor' => 'required',
            'textura' => 'required',
            'peso' => 'required|numeric',
            'unidade_medida' => 'required|numeric',
            'qtd_minima' => 'required|numeric',
            'qtd_estoque' => 'required|numeric'
        ]);

        session()->flash(
            'sucess',
            'Produto cadastrado com sucesso!'
        );
        
        return redirect()->route('produtos-index');
    }

    public function render()
    {
        return view('livewire.prduto-create');
    }
}
