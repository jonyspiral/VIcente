<?php
class Usuario{
  /** @var string */
  private $nombre;
  /** @var string */
  private $email;
  /** @var string */
  private $contrasena;

  function __construct($nombre,$email,$contrasena){
   $this->setNombre($nombre);
   $this->setEmail($email);
   $this->setContrasena($contrasena);
  }

public function getNombre():string{
  return $this->nombre;
}

public function setNombre(string $nombre){
  $this->nombre = $nombre;
}

public function getContrasena():string{
  return $this->contrasena;
}

public function setContrasena(string $contrasena){
  $this->contrasena = password_hash($contrasena, PASSWORD_DEFAULT);
}

public function getEmail():string{
  return $this->email;
}

public function setEmail(string $Email){
  $this->email = $Email;
}
public function saludar(){
  echo "hola ". $this->email = $Email;
}

}
