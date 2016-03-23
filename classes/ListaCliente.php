
<?php

/**
 * Created by PhpStorm.
 * User: borges
 * Date: 23/03/16
 * Time: 12:25
 */

require_once('classes/Cliente.php');

class ListaCliente
{

    private $clientes;

    public function __constructor() {

        $clientes = [];

    }

    public function Novo($id) {

        return $this->clientes[$id] = new Cliente($id);
    }

    public function ordena($order = 'asc') {

        if ($order == 'asc')
            ksort($this->clientes);
        else
            krsort($this->clientes);

        return true;
    }

    public function getClientes() {

        return $this->clientes;
    }

    public function getCliente($id) {

        return $this->clientes[$id];
    }

    public function GeraLista() {

        for ($id=1; $id<=10;$id++) {

            $cliente = $this->Novo($id);

            $cliente->setNome('NOME DO CLIENTE ' . $id);
            $cliente->setEndereco('RUA DO CLIENTE' . $id);
            $cliente->setBairro('BAIRRO DO CLIENTE' . $id);
            $cliente->setCidade('CIDADE DO CLIENTE' . $id);
            $cliente->setUf('RJ');
            $cliente->setCep('CEP ' . (230000 + $id));
            $cliente->setLimiteCredito(rand(200,2000));
            $cliente->setPrazoPagamento(rand(15,45));
            $cliente->RegistraCompra(rand(100,1000));

        }

    }

}

?>