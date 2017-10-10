<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$mail = new Email(2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls / ssl)", "port (587)", "from@email.com", "From Name");

$email->sendEmail("Subject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");

var_dump($novoEmail);