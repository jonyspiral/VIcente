<?php
include_once('cuenta.php');

class Classics extends Cuenta{

  public  function debitar(float $monto,string $origen){
    //if $origen ="link"

    $this->balance = $this->balance -$monto;

     $this->fechaDeUltimoMovimiento = date('y-m-d');

  }
  }
 ?>
