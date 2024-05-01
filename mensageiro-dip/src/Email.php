<?php

namespace MensageiroDip;

use MensageiroDip\interfaces\IMensagemToken;

class Email implements IMensagemToken {

  public function enviar(): void {
    echo '<b>Email:</b> Seu token é: T0K3N';
  }

}