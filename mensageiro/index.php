<?php

use Mensageiro\Mensageiro;

require __DIR__.'/vendor/autoload.php';

echo '<h2>Sem o Princípio da Inversão de Depêndencia</h2>';

echo '<h3>Mensageiro via Email</h3>';

$mensageiro = new Mensageiro();
$mensageiro->setCanal('email');
$mensageiro->enviarToken();

echo '<pre>';
print_r($mensageiro);
echo '</pre>';

echo '<h3>Mensageiro via Sms</h3>';

$mensageiro = new Mensageiro();
$mensageiro->setCanal('sms');
$mensageiro->enviarToken();

echo '<pre>';
print_r($mensageiro);
echo '</pre>';