<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um e-mail de <b>teste</b>!</p>", "gustavo@gustavoweb.me",
    "Gustavo Web", "gustavo@upinside.com.br", "Gustavo");

var_dump($novoEmail);