<?php

    require_once("Conexao.php");

    require_once("Cliente.php");
    
    require_once("Servico.php");
    class Agenda{
        //atributos
        //java private int idAgenda;
        //modificadores: public, protected, private 
        //encapsulamento: atributos são private; get e set para gravar e ler
        private $idAgenda;
        private $dataAgenda;
        private $idServico;
        private $idCliente;

        //get no java: public int getIdCliente(){ return idCLiente;}
        public function getIdAgenda(){
            return $this->idAgenda;
        }
        
        public function getDataAgenda(){
            return $this->dataAgenda;
        }

        public function getCliente(){
            return $this->cliente;
        }

        public function getServico(){
            return $this->servico;
        }
        //set no java: public void setidAgenda(int idAgenda){ this.idAgenda = idAgenda;}
        public function setIdAgenda($idAgenda){
            $this->idAgenda = $idAgenda;
        }

        public function setDataAgenda($dataAgenda){
            $this->dataAgenda = $dataAgenda;
        }

        public function setCliente($cliente){
            $this->cliente = $cliente;
        }

        public function setServico($servico){
            $this->servico = $servico;
        }
      

        public function cadastrar($agenda, $cliente, $servico){
            $conexao = Conexao::conectar();
            //prepare statement
            $stmt = $conexao->prepare("INSERT INTO tbagenda (dataAgenda, idCliente, idServico) VALUES(?, ?, ?)");
            $stmt->bindValue(1, $agenda->getDataAgenda()); 
            $stmt->bindValue(2, $cliente['idCliente']);
            $stmt->bindValue(3, $servico['idServico']);



            $stmt->execute();

            // return "Cadastro realizado com sucesso";
        }

        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idAgenda,dataAgenda,idServico,idCliente  FROM tbagenda";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }


    }
?>