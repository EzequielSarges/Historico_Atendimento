<?php
session_start();
include (dirname(__FILE__) . "/../../lib/adLDAP/adLDAP.php");
//include (dirname(__FILE__) ."/var/www/html/CreaDF-Divida_Ativa/lib/adLDAP/adLDAP.php");
use adLDAP\adLDAP;

$json = $_GET['dados'];
$usuario = $json['usuario'];
$senha = $json['pass'];
$option = ['10.150.151.10'];
$adldap = new adLDAP(array('domain_controllers'=>$option,'base_dn'=>'DC=CREA-DF,DC=ORG,DC=BR', 'account_suffix'=>'@CREA-DF.ORG.BR'));

 
$authUser = $adldap->user()->authenticate($usuario, $senha);
if ($authUser == true) {
  echo json_encode($_SESSION['autenticado'] = 'SIM');
}
else {
  echo json_encode($_SESSION['autenticado'] = 'NAO');
}
