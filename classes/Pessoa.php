
<?php

/**
 * Created by PhpStorm.
 * User: borges
 * Date: 23/03/16
 * Time: 11:59
 */
require_once('interfaces/PessoaInterface.php');
require_once('classes/Endereco.php');


class Pessoa implements PessoaInterface
{

    private $nome;
    private $cpf;
    private $endereco;

    private $tipo_pessoa;

    public function __construct() {

        $this->endereco = new Endereco();
    }

    /**
     * @return mixed
     */
    public function getTipoPessoa()
    {
        return $this->tipo_pessoa;
    }

    /**
     * @return mixed
     */
    public function getTipoPessoaNome()
    {
        return ($this->tipo_pessoa == 'F'? "Pessoa Fisica":"Pessoa Juridica");
    }

    /**
     * @param mixed $tipo_pessoa
     */
    public function setTipoPessoa($tipo_pessoa)
    {
        $this->tipo_pessoa = $tipo_pessoa;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

}
?>