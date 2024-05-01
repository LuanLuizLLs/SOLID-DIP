<?php

namespace Mensageiro;

class Mensageiro {

  private $canal;

  public function getCanal(): string {
    return $this->canal;
  }

  public function setCanal(string $canal): void {
    $this->canal = $canal;
  }
  
  public function enviarToken(): void {
    $classe = '\Mensageiro\\'.ucfirst($this->getCanal());

    $instancia = new $classe;
    $instancia->enviar();
  }

}