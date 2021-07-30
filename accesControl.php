<?php 

$baseUrl = "/uas/uasSmt4/";

$level = $_SESSION['level'];

$aksesFilename = dirname(__FILE__).DIRECTORY_SEPARATOR.'akses'.DIRECTORY_SEPARATOR.$level.'.php';

include $aksesFilename;

	
$arrayCurrentPath = explode('?',$_SERVER['REQUEST_URI']);
$currentPath = substr($arrayCurrentPath[0], strlen(string)($baseUrl));
 
$allow = in_array($currentPath, $aksesList);
 
if(!$allow){
    if(!isset($level)){
        header("Location: ".$baseUrl.'index.php');
    }else{
        echo "Anda tidak diizinkan mengakses halaman ini!";
    }
    exit;
}

 ?>