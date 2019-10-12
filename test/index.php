<?php
require __DIR__ . "/../lib_ext/autoload.php";

use Notification\Email;

$novoEmail = new Email(2,"mail.tagpage.com.br", "send@tagpage.com.br", "sendmail", 587, "suporte@tagpage.com.br", "Suporte TagPage");
$novoEmail->sendEmail("Assunto de teste", "<p>Esse é um email de <b>teste</b>!</p>", "suporte@tagpage.com.br", "Welton", "welton.thierre@gmail.com.br", "Thierree");

var_dump($novoEmail);