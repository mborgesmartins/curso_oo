<html>

<head>


</head>

<?php

    require_once("classes/ListaCliente.php");

    session_start();

    if (isset($_SESSION['lista_clientes'])) {

        $id = $_REQUEST["id"];

        $lista_clientes = $_SESSION['lista_clientes']->getClientes();

        $cliente = $_SESSION["lista_clientes"]->getCliente($id);
    }
?>

<body>

    <h2>Cliente ID: <?=$id ?> - Tipo --> <?=$cliente->getTipoPessoaNome() ?></h2>

    <p>Grau de Importancia: <?=$cliente->getGrauImportancia() ?> </p>

    <p>Nome: <?=$cliente->getNome()?> </p>
    <h3>Endereco</h3>
    <p>Endereco:<?=$cliente->getEndereco()->getEndereco()?></p>
    <p>Bairro:<?=$cliente->getEndereco()->getBairro()?></p>
    <p>Cidade:<?=$cliente->getEndereco()->getCidade()?></p>
    <p>UF:<?=$cliente->getEndereco()->getUf()?></p>
    <p>CEP:<?=$cliente->getEndereco()->getCep()?></p>

    <h3>Endereco Cobranca</h3>
    <p>Endereco:<?=($cliente->getEnderecoCobranca()? $cliente->getEnderecoCobranca()->getEndereco():"-x-")?></p>
    <p>Bairro:<?=($cliente->getEnderecoCobranca()? $cliente->getEnderecoCobranca()->getBairro():"-x-")?></p>
    <p>Cidade:<?=($cliente->getEnderecoCobranca()? $cliente->getEnderecoCobranca()->getCidade():"-x-")?></p>
    <p>UF:<?=($cliente->getEnderecoCobranca()? $cliente->getEnderecoCobranca()->getUf():"-x-")?></p>
    <p>CEP:<?=($cliente->getEnderecoCobranca()? $cliente->getEnderecoCobranca()->getCep():"-x-")?></p>

    <hr>

    <p>Limite Credito:<?=$cliente->getLimiteCredito()?></p>
    <p>Prazo Pagamento:<?=$cliente->getPrazoPagamento()?></p>
    <p>Total Compras:<?=$cliente->getTotalCompras()?></p>
    <p>Saldo:<?= ($cliente->getLimiteCredito() - $cliente->getTotalCompras())?></p>
    <p>Autorizacao:<?=( $cliente->VerificaLimite(0) ? "Compra Autorizada" : "Compra NAO autorizada") ?></p>

</body>
</html>
