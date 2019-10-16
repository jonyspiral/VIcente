<?php
requiere_once ('autoload.php');

class Black extends Cuenta{




public  function debitar(float $monto,string $origen){
  $this->balance = $this->balance -$monto;
   $this->fechaDeUltimoMovimiento = date('y-m-d');
}
}
 ?>
