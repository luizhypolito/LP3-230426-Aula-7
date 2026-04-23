<?php
class Livro
{
    public int $qtdePag;
    public int $anodeLan;
    public float $comprimento;
    public float $largura;
    public string $autor;
    public string $editora;
    public string $fontedasPag;
    public string $personagemPrinc;

    public function folhear(){}
    public function cair(){
        echo "Bummmmm! <br>";
    }
    public function abrir(){
        echo "Abriu! <br>";
    }
    public function fechar(){
        echo $this->nome ." Fechou! <br>";
    }
    public function desdobrar(){
        echo "Desdobrouuu!";
    }
}
?>