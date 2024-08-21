<?php

class Filme {
    public int $id;
    public string $titulo;
    public string $diretor;
    public int $quantidade;
    public int $classificacao;

    public function __construct(
        string $titulo,
        string $diretor,
        int $classificacao,
        int $quantidade
    )
    {
        $this->titulo = $titulo;
        $this->diretor = $diretor;
        $this->classificacao = $classificacao;
        $this->quantidade = $quantidade;
    }
}

class Cliente{
    public int $id;
    public string $nome;
    public string $telefone;
    public string $cpf;
    public float $saldo_devedor;
    public string $endereco;

    public function __construct(
        string $nome,
        string $telefone,
        string $cpf,
        float $saldo_devedor,
        string $endereco
    )
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->cpf = $cpf;
        $this->saldo_devedor = $saldo_devedor;
        $this->endereco = $endereco;
    }
}
class Locacao{
    public int $id;
    public string $data;
    public string $data_devolucao;
    public float $valor;
    public int $cliente_id;

    public function __construct(
        string $data,
        string $data_devolucao,
        float $valor,
    )
    {
        $this->data = $data;
        $this->data_devolucao = $data_devolucao;
        $this->valor = $valor;
    }
}
class Filme_locacao{
    public int $id_filme;
    public int $id_locacao;
    public int $quantidade_locada;

    public function __construct(
        int $quantidade_locada
    )
    {
        $this->quantidade_locada = $quantidade_locada;
    }
}

echo "<pre>";
$filme = new Filme("Um sonho de Liberdade", "Anderson", 10, 4);
var_dump($filme);

$cliente = new Cliente("Anderson Bauer", "(51)998145931", "054.807.310-41", 150.50, "TV Faxinal 171");
var_dump($cliente);

$locacao = new Locacao("28/09/2004", "28/10/2004", 50.0);
var_dump($locacao);

$filme_locacao = new Filme_Locacao(2);
var_dump($filme_locacao);