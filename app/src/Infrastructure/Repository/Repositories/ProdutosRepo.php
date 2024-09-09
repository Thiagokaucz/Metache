<?php
namespace Metache\Thiago\Infrastructure\Repository\Repositories;
use Metache\Thiago\Model\Produto;

use PDO;
use Metache\Thiago\Infrastructure\Repository\InterfaceRepositorio;

class ProdutosRepo implements InterfaceRepositorio{

    public function __construct(protected PDO $executa){
    }

    public function trazerTodosProdutos():array|false{
        $consulta   = 'SELECT * FROM `Produto`';
        $declaroQue = $this->executa->prepare($consulta);
        $declaroQue->execute();
        return $declaroQue->fetch(PDO::FETCH_ASSOC)??false;
    }

    public function consultarProdEspecifico(int $prodId):Produto|false{
        $consulta   = 'SELECT * FROM `Produto` WHERE produtoID = :prodId';
        $declaroQue = $this->executa->prepare($consulta);
        $declaroQue->bindValue(':prodId', $prodId);
        $declaroQue->execute();
        return $this->hidratarProduto($declaroQue->fetch(PDO::FETCH_ASSOC))??false;
    }

    private function hidratarProduto(array $produtoDados):Produto{
        $produto = new Produto(
            $produtoDados['nome'],
            $produtoDados['descricao'],
            $produtoDados['preco'],
            $produtoDados['condicao'],
            $produtoDados['disponibilidade'],
            $produtoDados['categoriaID'],
            $produtoDados['userID'],
            $produtoDados['imagem']
        );
        $produto->definirId($produtoDados['produtoID']);
        $produto->definirDt($produtoDados['dt_criado']);
        
        return $produto;
    }
}