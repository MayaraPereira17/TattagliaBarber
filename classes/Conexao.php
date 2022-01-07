<?php

//senha do banco : programar17*

class Conexao
{
    public static function conectar()
    {
        /*
            $variavel = new PDO(
                tipo:host=local; 
                dbname=nome do banco,
                usuário de acesso ao banco, 
                senha de acesso ao banco
            )
        */
        //conexão local
        $conexao = new PDO("mysql:host=localhost;
                            dbname=bdbarbearia", 
                            "root",
                            "");
        
        //conexão on line - hospedado
         /*$conexao = new PDO("mysql:host=fdb34.awardspace.net;
                            dbname=3981192_barbearia", 
                             "3981192_barbearia",
                             "programar17*");*/

        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->exec("SET CHARACTER SET utf8");
        
        return $conexao;
    }
}