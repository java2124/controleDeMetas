<?php
class metas
{
    private $id_meta;
    private $nome_meta;
    private $tipo_meta;
    private $valor_meta;
    private $desc_meta;
    private $id_cliente;

    function __construct($id_meta, $nome_meta, $tipo_meta, $valor_meta, $desc_meta, $id_cliente)
    {
        $this->id_meta = $id_meta;
        $this->nome_meta = $nome_meta;
        $this->tipo_meta = $tipo_meta;
        $this->valor_meta = $valor_meta;
        $this->desc_meta = $desc_meta;
        $this->id_cliente = $id_cliente;
    }

    /**
     * Get the value of id_meta
     */
    public function getId_meta()
    {
        return $this->id_meta;
    }

    /**
     * Set the value of id_meta
     *
     */
    public function setId_meta($id_meta)
    {
        $this->id_meta = $id_meta;

        return $this;
    }

    /**
     * Get the value of nome_meta
     */
    public function getNome_meta()
    {
        return $this->nome_meta;
    }

    /**
     * Set the value of nome_meta
     *
     */
    public function setNome_meta($nome_meta)
    {
        $this->nome_meta = $nome_meta;

        return $this;
    }

    /**
     * Get the value of tipo_meta
     */
    public function getTipo_meta()
    {
        return $this->tipo_meta;
    }

    /**
     * Set the value of tipo_meta
     *
     */
    public function setTipo_meta($tipo_meta)
    {
        $this->tipo_meta = $tipo_meta;

        return $this;
    }

    /**
     * Get the value of valor_meta
     */
    public function getValor_meta()
    {
        return $this->valor_meta;
    }

    /**
     * Set the value of valor_meta
     *
     */
    public function setValor_meta($valor_meta)
    {
        $this->valor_meta = $valor_meta;

        return $this;
    }

    /**
     * Get the value of desc_meta
     */
    public function getDesc_meta()
    {
        return $this->desc_meta;
    }

    /**
     * Set the value of desc_meta
     *
     */
    public function setDesc_meta($desc_meta)
    {
        $this->desc_meta = $desc_meta;

        return $this;
    }

    /**
     * Get the value of id_cliente
     */
    public function getId_cliente()
    {
        return $this->id_cliente;
    }

    /**
     * Set the value of id_cliente
     *
     */
    public function setId_cliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;

        return $this;
    }
}
