<?php
require_once ('Usuario.php');

$usuario= new Usuario("sasa","s@s.com","sasa");
$usuario1= new Usuario("sasa2","s2@s2.com","sasa2");

echo $usuario->getEmail();
echo'<br>';
echo $usuario1->getEmail();
