<html>

<head>


</head>

<?php

    require_once('classes/ListaCliente.php');
    session_start();

    if (isset($_REQUEST["order"]))
        $order = $_REQUEST["order"];
     else {
        $order = "asc";
        session_unset();
     }

    require_once('init_lista.php');

    $_SESSION['lista_clientes']->ordena($order);

    $lista_clientes = $_SESSION['lista_clientes'];

    if ($order == 'asc') $order = 'desc'; else $order = 'asc';

?>
<body>

    <table border="1">
    <tr>
    <td width="3%"><a href="index.php?order=<?=$order?>">ID</a></td>
    <td width="5%">Tipo</td>
    <td width="30%">Nome</td>
    </tr>

    <?php

        foreach($lista_clientes->getClientes() as $id=>$cliente) {

            echo '<tr>';
            echo '<td>' . $id . '</td>';
            echo '<td>' . $cliente->getTipoPessoaNome() . '</td>';
            echo '<td><a href="exibe_cliente.php?id=' .$id . '">' . $cliente->getNome() . '</a></td>';
            echo '</tr>';

        }

    ?>
    </table>

</body>
</html>
