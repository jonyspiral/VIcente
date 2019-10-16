<?php

abstract class Cuenta{
  Private $CBU;
  Private $balance;
  Private $fechaDeUM;

  public function __construct($CBU){
   $this->CBU = $CBU;
    $this->balance = 0;
     $this->fechaDeUM = date('y-m-d');
  }

  public function setCBU($CBU){
    $this->CBU = $CBU;
  }
  public function getCBU(){
    return $this->CBU;
  }
  public function setBalance($balance){
    $this->balance = $balance;
  }
  public function getBalance($balance){
    $this->balance = $balance;
  }
  public function getFechaDeUltimoMovimiento(){
    return $this->fechaDeUltimoMovimiento;
  }
  public function setFechaDeUltimoMovimiento($fechaDeUM){
    $this->$fechaDeUM = $fechaDeUM;
  }

  public function acreditar(int $monto){
    $this->balance = $this->balance + $monto;
    $this->fechaDeUltimoMovimiento = date('y-m-d');
  }

  public abstract function debitar(float $monto,string $origen){
    $this->balance = $this->balance -$monto;
     $this->fechaDeUltimoMovimiento = date('y-m-d');
  }

}


 ?>
