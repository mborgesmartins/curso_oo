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

    <h3>Cliente ID: <?=$id ?></h3>

    <p>Nome: <?=$cliente->getNome()?> </p>
    <p>Endereco:<?=$cliente->getEndereco()?></p>
    <p>Bairro:<?=$cliente->getBairro()?></p>
    <p>Cidade:<?=$cliente->getCidade()?></p>
    <p>UF:<?=$cliente->getUf()?></p>
    <p>CEP:<?=$cliente->getCep()?></p>
    <hr>
    <p>Limite Credito:<?=$cliente->getLimiteCredito()?></p>
    <p>Prazo Pagamento:<?=$cliente->getPrazoPagamento()?></p>
    <p>Total Compras:<?=$cliente->getTotalCompras()?></p>
    <p>Saldo:<?= ($cliente->getLimiteCredito() - $cliente->getTotalCompras())?></p>
    <p>Autorizacao:<?=( $cliente->VerificaLimite(0) ? "Compra Autorizada" : "Compra NAO autorizada") ?></p>

</body>
</html>
