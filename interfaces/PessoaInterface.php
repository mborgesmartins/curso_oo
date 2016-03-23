<?php

/**
 * Created by PhpStorm.
 * User: borges
 * Date: 23/03/16
 * Time: 12:03
 */
interface PessoaInterface
{

    /**
     * @return mixed
     */
    public function getNome();

    /**
     * @param mixed $nome
     */
    public function setNome($nome);

    /**
     * @return mixed
     */
    public function getCpf();

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf);

    /**
     * @return mixed
     */
    public function getEndereco();

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco);

    /**
     * @return mixed
     */
    public function getBairro();

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro);

    /**
     * @return mixed
     */
    public function getCidade();

    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade);

    /**
     * @return mixed
     */
    public function getUf();

    /**
     * @param mixed $uf
     */
    public function setUf($uf);

    /**
     * @return mixed
     */
    public function getCep();

    /**
     * @param mixed $cep
     */
    public function setCep($cep);


}
?>