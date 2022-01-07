<?php

    require_once("Conexao.php");

    class Cliente{
        //atributos
        //java private int idCLiente;
        //modificadores: public, protected, private 
        //encapsulamento: atributos são private; get e set para gravar e ler
        private $idCliente;
        private $nomeCliente;
        private $sobrenomeCliente;
        private $cpfCliente;
        private $telefoneCliente;

        //get no java: public int getIdCliente(){ return idCLiente;}
        public function getIdCliente(){
            return $this->idCliente;
        }
        
        public function getNomeCliente(){
            return $this->nomeCliente;
        }
        public function getSobrenomeCliente(){
            return $this->sobrenomeCliente;
        }

        public function getCpfCliente(){
            return $this->cpfCliente;
        }

        public function getTelefoneCliente(){
            return $this->telefoneCliente;
        }

        //set no java: public void setIdCliente(int idCliente){ this.idCliente = idCliente;}
        public function setIdCliente($idCliente){
            $this->idCliente = $idCliente;
        }

        public function setNomeCliente($nomeCliente){
            $this->nomeCliente = $nomeCliente;
        }

        public function setSobrenomeCliente($sobrenomeCliente){
            $this->sobrenomeCliente = $sobrenomeCliente;
        }

        public function setCpfCliente($cpfCliente){
            $this->cpfCliente = $cpfCliente;
        }

        public function setTelefoneCliente($telefoneCliente){
            $this->telefoneCliente = $telefoneCliente;
        }

        public function cadastrar($cliente){
            $conexao = Conexao::conectar();
            //prepare statement
            $stmt = $conexao->prepare("INSERT INTO tbcliente (nomeCliente, sobrenomeCliente, cpfCliente, telefoneCliente)
                                        VALUES(?, ?, ?, ?)");
            $stmt->bindValue(1, $cliente->getNomeCliente()); 
            $stmt->bindValue(2, $cliente->getSobrenomeCliente());
            $stmt->bindValue(3, $cliente->getCpfCliente());
            $stmt->bindValue(4, $cliente->getTelefoneCliente());


            $stmt->execute();

            // return "Cadastro realizado com sucesso";
        }

        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idCliente,nomeCliente, sobrenomeCliente, cpfCliente, telefoneCliente FROM tbcliente";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }
        public function getIdByName($nome){
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("SELECT idCliente FROM tbcliente WHERE nomeCliente=:nome");
            $stmt->execute(['nome' => $nome]);
            $lista = $stmt->fetch();
            return $lista;  
        }

        public function getNameById($id){
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("SELECT nomeCliente FROM tbcliente WHERE idCliente=:id");
            $stmt->execute(['id' => $id]);
            $lista = $stmt->fetch();
            return $lista['nomeCliente'];  
        }

    }
?>