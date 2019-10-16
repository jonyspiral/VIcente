<?php
requiere_once ('autoload.php');

class Pyme extends cliente{
    protected $cuit;
    protected $razonSocial;




    public function __construct($nombre,$apellido,$cuit,$razonSocial,$email,$pass){
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->cuit = $cuit;
      $this->razonSocial = $razonSocial;
      parent::__construct($email,$password);
    }



    public function setNombre($nombre){
      $this->nombre = $nombre;
    }
    public function getNombre(){
      return $this->nombre;
    }
    public function setApellido($apellido){
      $this->apellido = $apellido;
    }
    public function getApellido(){
      return $this->apellido;
    }
    public function setCuit($cuit){
      $this->cuit = $cuit;
    }
    public function getCuit(){
      return $this->cuit;
    }
    public function setRazonSocial($razonSocial){
      $this->razonSocial = $razonSocial;
    }
    public function getRazonSocial(){
      return $this->razonSocial;
    }
    public function setEmail($email){
      $this->email = $email;
    }
    public function getEmail(){
      return $this->email;
    }
    public function setPass($pass){
      $this->pass = $pass;
    }
    public function getPass(){
      return $this->pass;
    }

    }

 ?>
