<?php

namespace YesDIP;

use YesDIP\interfaces\IMensagemToken;

class Sms implements IMensagemToken {

  public function enviar(): void {
    echo '<b>Sms:</b> Seu token é: T0K3N';
  }

}