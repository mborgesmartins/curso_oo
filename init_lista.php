<?php

/**
 * Created by PhpStorm.
 * User: borges
 * Date: 23/03/16
 * Time: 14:09
 */


    /*session is started if you don't write this line can't use $_Session  global variable*/


    if (!isset($_SESSION['lista_clientes'])) {

        $_SESSION['lista_clientes'] = new ListaCliente();

        $_SESSION['lista_clientes']->GeraLista();

    } else {
    }

?>