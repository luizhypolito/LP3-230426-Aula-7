<?php
require_once "Livro.php";
$l1 = new Livro();
$l1->nome = "KKKK";
$l1->anodeLan = "1989";

$l2 = new Livro();
$l2->nome = "gdfgfg";

echo "<pre>";
print_r($l1);
print_r($l2);

$l1->abrir();
$l2->cair();
$l2->fechar();
?>