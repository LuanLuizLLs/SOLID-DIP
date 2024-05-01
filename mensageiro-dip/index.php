<?php

use YesDIP\Email;
use YesDIP\Mensageiro;
use YesDIP\Sms;
use YesDIP\WhatsApp;

require __DIR__.'/vendor/autoload.php';

echo '<h2>Com o Princípio da Inversão de Depêndencia</h2>';

echo '<h3>Mensageiro via Email</h3>';

$mensageiro = new Mensageiro(new Email());
$mensageiro->enviarToken();

echo '<pre>';
var_dump($mensageiro);
echo '</pre>';

echo '<h3>Mensageiro via Sms</h3>';

$mensageiro = new Mensageiro(new Sms());
$mensageiro->enviarToken();

echo '<pre>';
var_dump($mensageiro);
echo '</pre>';

echo '<h3>Mensageiro via WhatsApp</h3>';

$mensageiro = new Mensageiro(new WhatsApp());
$mensageiro->enviarToken();

echo '<pre>';
var_dump($mensageiro);
echo '</pre>';