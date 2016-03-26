
<?php

/**
 * Created by PhpStorm.
 * User: borges
 * Date: 23/03/16
 * Time: 12:25
 */

require_once('classes/Cliente.php');
require_once('Endereco.php');

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

            $endereco = new Endereco();
            $endereco->setEndereco('RUA DO CLIENTE' . $id);
            $endereco->setBairro('BAIRRO DO CLIENTE' . $id);
            $endereco->setCidade('CIDADE DO CLIENTE' . $id);
            $endereco->setUf('RJ');
            $endereco->setCep('CEP ' . (230000 + $id));
            $cliente->setEndereco($endereco);

            $cliente->setLimiteCredito(rand(200,2000));
            $cliente->setPrazoPagamento(rand(15,45));
            $cliente->RegistraCompra(rand(100,1000));

            if (rand(1,10) < 5) {
                $endereco = new Endereco();
                $endereco->setEndereco('RUA DE COBRANCA CLIENTE' . $id);
                $endereco->setBairro('BAIRRO DE COBRANCA CLIENTE' . $id);
                $endereco->setCidade('CIDADE DE COBRANCA CLIENTE' . $id);
                $endereco->setUf('RJ');
                $endereco->setCep('CEP ' . (230000 + $id));
                $cliente->setEnderecoCobranca($endereco);
            }

            if (rand(1,10) < 5) $cliente->setTipoPessoa('F'); else $cliente->setTipoPessoa('J');
            $cliente->RegistraCompra(rand(100,1000));

            $cliente->setGrauImportancia(rand(1,5));

        }

    }

}

?>