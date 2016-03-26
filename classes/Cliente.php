<?php

/**
 * Created by PhpStorm.
 * User: borges
 * Date: 23/03/16
 * Time: 12:06
 */
require_once('classes/Pessoa.php');
require_once('interfaces/ClienteInterface.php');

class Cliente extends Pessoa implements ClienteInterface
{
    private $id;
    private $limite_credito;
    private $prazo_pagamento;
    private $total_compras;
    private $grau_importancia;
    private $endereco_cobranca;

    /**
     * Cliente constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
        $this->endereco_cobranca = new Endereco();
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getLimiteCredito()
    {
        return $this->limite_credito;
    }

    /**
     * @param mixed $limite_credito
     */
    public function setLimiteCredito($limite_credito)
    {
        $this->limite_credito = $limite_credito;
    }

    /**
     * @return mixed
     */
    public function getPrazoPagamento()
    {
        return $this->prazo_pagamento;
    }

    /**
     * @param mixed $prazo_pagamento
     */

    public function setPrazoPagamento($prazo_pagamento)
    {
        $this->prazo_pagamento = $prazo_pagamento;
    }

    /**
     * @return mixed
     */
    public function getTotalCompras()
    {
        return $this->total_compras;
    }

    public function VerificaLimite($valor) {

        return ($this->limite_credito > ($this->total_compras + $valor));
    }

    public function RegistraCompra($valor) {

        $this->total_compras = $this->total_compras + $valor;
    }

    public function RegistraPagamento($valor) {

        $this->total_compras = $this->total_compras - $valor;
    }

    /**
     * @return mixed
     */
    public function getGrauImportancia()
    {
        return $this->grau_importancia;
    }

    /**
     * @param mixed $grau_importancia
     */
    public function setGrauImportancia($grau_importancia)
    {
        $this->grau_importancia = $grau_importancia;
    }

    /**
     * @return mixed
     */
    public function getEnderecoCobranca()
    {
        return $this->endereco_cobranca;
    }

    /**
     * @return mixed
     */
    public function setEnderecoCobranca($endereco)
    {
        $this->endereco_cobranca = $endereco;
    }

}
?>