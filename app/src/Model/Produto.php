<?php
namespace Metache\Thiago\Model;

readonly class Produto{
    public int $produtoId;
    public string $dtCriado;

    public function __construct(
        public string   $nome,
        public string   $descricao,
        public float    $preco,
        public string   $condicao,
        public string   $disponibilidade,
        public int      $categoriaID,
        public int      $userID,
        public ?string  $imagem
    ){
        
    }

    public function definirId(int $produtoId):void{
        $this->produtoId = $produtoId;
    }

    public function definirDt(string $dtCriado):void{
        $this->dtCriado = $dtCriado;
    }
}