<?php
require __DIR__ . "/lib_ext/autoload.php";

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendEmail("Assunto de teste", "<p>Esse é um email de <b>teste</b>!</p>", "welton@tagpage.com.br", "Welton", "welton.thierre@gmail.com.br", "Thierree");

var_dump($novoEmail);