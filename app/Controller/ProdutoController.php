<?php

class ProdutoController{

   public function index() {
    $dados = [
        'titulo_pagina' => 'Cardápio de Hot-dogs',
        'produtos' => [
            ['nome' => 'Hot-dog Pizza', 'preco' => 18, 'qtd' => 100],
            ['nome' => 'Hot-dog Especial', 'preco' => 22, 'qtd' => 50],
            ['nome' => 'Hot-dog Veggie', 'preco' => 20, 'qtd' => 30],
        ]
    ];

    $this->carregarview('produto', $dados);
}

    public function carregarview($nomeView , $dados = []){

        extract($dados);

        require_once ("../views/{$nomeView}.php");

    }



}

?>