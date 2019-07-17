<?php

class Connection{
  
    public function conectar(){
         try{
             //$conexao = new PDO("mysql:host=10.150.150.30;dbname=divida_ativa","sdivida_ativa","divida2019");
             $conexao = new PDO("mysql:host=10.150.150.30;dbname=historico_atendimento","cdp_user","cdp2019@");
             return $conexao;
             
         }catch(PDOException $erro){
             echo "Erro na conexao com o banco de dados".$erro->getMessage();
 
         }catch(Exception $erro){
             echo "Erro genérico".$erro->getMessage();
             
         }
     }
 
 }
 
?>