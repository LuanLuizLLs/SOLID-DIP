<?php

namespace YesDIP;

use YesDIP\interfaces\IMensagemToken;

class WhatsApp implements IMensagemToken {

  public function enviar(): void {
    echo '<b>WhatsApp:</b> Seu token é: T0K3N';
  }

}