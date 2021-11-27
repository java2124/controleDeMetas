<?php
class cliente
{
    private $id;
    private $nome;
    private $empresa;
    private $email;
    private $telefone;
    private $senha;
    private $hregistro;

    function __construct($id, $nome, $empresa, $email, $telefone, $senha)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->empresa = $empresa;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->senha = $senha;
    }
    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set the value of id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }
    /**
     * Set the value of nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
    /**
     * Get the value of empresa
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }
    /**
     * Set the value of empresa
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }
    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set the value of email
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
    /**
     * Get the value of telefone
     */
    public function getTelefone()
    {
        return $this->telefone;
    }
    /**
     * Set the value of telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }
    /**
     * Get the value of senha
     */
    public function getSenha()
    {
        return $this->senha;
    }
    /**
     * Set the value of senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }
    /**
     * Get the value of hregistro
     */
    public function getHregistro()
    {
        return $this->hregistro;
    }
    /**
     * Set the value of hregistro
     */
    public function setHregistro($hregistro)
    {
        $this->hregistro = $hregistro;

        return $this;
    }
}
