<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public $nome;
    public $preco;
    public $cor;
    public $textura;
    public $peso;
    public $unidade_medida;
    public $qtd_minima;
    public $qtd_maxima;

    public function salvar(){
        Produto::create({
            'nome' => $this->nome;
            'preco' => $this->preco;
            'cor' => $this->cor;
            'textura' => $this->textura;
            'peso' => $this->peso;
            'unidade_medida' => $this->unidade_medida;
            'qtd_minima' => $this->qtd_minima;
            'qtd_estoque' => $this->qtd_estoque
        });
    }

    $this->salvar();
    
    
}
