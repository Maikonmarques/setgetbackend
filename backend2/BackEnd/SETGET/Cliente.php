<?php

require("Produto.php");

//instanciar o objeto

$objetoProduto = new cliente();

$objetoProduto->setCliente("10");
echo" <br><p><h4><fieldset> ". "Cliente:" . $objetoProduto->getCliente();
$objetoProduto->setCode("001");
echo" <br><p><h4> ". "Codigo: " . $objetoProduto->getCode();
$objetoProduto->setNome("Maikon l. Marques.");
echo" <br><p><h4> ". "Nome: " . $objetoProduto->getNome();
$objetoProduto->setCpf("333.333.333.33");
echo" <br><p><h4> ". "CPF: " . $objetoProduto->getCpf();
$objetoProduto->setEndereco("Rua 2-n° 176 Jardin Eldorado...");
echo" <br><p><h4> ". "Endereço: " . $objetoProduto->getEndereco();
$objetoProduto->setTelefone("(14)-996426714");
echo" <br><p><h4> ". "Telefone: " . $objetoProduto->getTelefone();
$objetoProduto->setEmail("maikonmarques@Outlook.com");
echo " <br><p><h4> "."E-mail: " . $objetoProduto->getEmail();
//--------------//--------//------------///----------------//-----///----//
$objetoProduto = new produto();

$objetoProduto->setProdutos("TV-smart,Sony");
echo" <br><p><h4><fieldset> ". "Produto:" . $objetoProduto->getProdutos();
$objetoProduto->setCodep("106463");
echo" <br><p><h4> ". "Codigo: " . $objetoProduto->getCodep();
$objetoProduto->setDescricao("4k,50,Ultra");
echo" <br><p><h4> ". "Sony: " . $objetoProduto->getDescricao();
$objetoProduto->setValorc("4.500,00");
echo" <br><p><h4> ". "Valor: " . $objetoProduto->getValorc();
$objetoProduto->setValorv("5.500,00");
echo" <br><p><h4> ". "Valor de venda: " . $objetoProduto->getValorv();
$objetoProduto->setQuantestoque("30 unidade");
echo" <br><p><h4><fieldset> ". "Quantidade em estoque: " . $objetoProduto->getQuantestoque();

//armazenar o código e o preço
//resgatar o codigo e o preço

/*$objetoProduto->nome = "Teclado";
$objetoProduto->codigo = 458;
$objetoProduto->preco = 54.89;

echo $objetoProduto->codigo;
echo " - " . $objetoProduto->nome;
echo " - " . $objetoProduto->preco;*/

//var_dump($objetoProduto);