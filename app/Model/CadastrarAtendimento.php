<?php
class CadastrarAtendimento{
    private $descricao;
    private $tipo_cliente;
    private $registro;
    private $tipo_solicitacao;
    private $tipo_atendimento;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        return $this->$atributo = $valor;
    }
    public function __construct($descricao, $tipo_cliente, $registro, $tipo_solicitacao, $tipo_atendimento){
        $this->descricao = $descricao;
        $this->tipo_cliente = $tipo_cliente;
        $this->registro = $registro;
        $this->tipo_solicitacao = $tipo_solicitacao;
        $this->tipo_atendimento = $tipos_atendimento;
   
    }
}
?>