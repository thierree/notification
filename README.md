# Biblioteca de Notifica��o via e-mail utilizando o phpMailer

Essa biblioteca tem por fun��o enviar e-mail utilizando a biblioteca phpmailer. Fazer essa a��o de forma descomplicada � essencial para qualquer sistema.

Para fazer a instala��o da biblioteca, execute o seguinte comando:

```sh
composer require gustavoweb/composer_teste
```

Para fazer o uso da biblioteca, basta requerir o autoload do composer, invocar a classe e fazer a chamada do m�todo:

```sh
<?php

require __DIR__ . '/vendor/autoload.php';

USE Notification\Email;

$email = new Email(2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls/ssl)", "port (587)",
    "from@email.com", "From Name");

$email->sendEmail("SUbject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");
```

Note que toda a configura��o do envio do e-mail est� utilizando o m�todo m�gico construtor! Uma vez invocado o m�todo construtor dentro da sua aplica��o, seu sistema estar'� apto a efetuar os disparos.

### Developers
* [Gustavo Web] - Desenvolvedor desta biblioteca e tutor do curso Composer na Pr�tica!
* [Robson V. Leite] - CEO and Founder UpInside Treinamentos
* [UpInside Treinamentos] - Site oficial da sua escola de programa��o e marketing digital
* [phpMailer] - Lib to send E-mail

License
----

MIT

**Mais um curso da UpInside Treinamentos, fa�a bom uso!**

[//]:#
[Gustavo Web]: <mailto:gustavo@upinside.com.br>
[Robson V. Leite]: <mailto:robson@upinside.com.br>
[UpInside Treinamentos]: <https://www.upinside.com.br>
[phpMailer]: <https://github.com/PHPMailer/PHPMailer>