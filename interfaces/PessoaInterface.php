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
    public function getTipoPessoa();
    public function getTipoPessoaNome();

    /**
     * @param mixed $tipo_pessoa
     */
    public function setTipoPessoa($tipo_pessoa);

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


}
?>