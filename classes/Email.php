<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email
{

    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }


    public function enviarConfirmacion()
    {
        // Crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = $_ENV['EMAIL_PORT'];
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->Password = $_ENV['EMAIL_PASS'];
        $mail->Username = $_ENV['EMAIL_USER'];

        $mail->setFrom('cuentas@uptask.com');
        $mail->addAddress('cuentas@uptask.com', 'UpTask.com');
        $mail->Subject = 'Confirma tu Cuenta';

        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p>Hola <strong>" . $this->nombre . "</strong>,</p>";
        $contenido .= "<p>Confirma tu cuenta haciendo clic en el siguiente enlace:</p>";
        $contenido .= "<a href='http://localhost:3000/confirmar?token=" . $this->token . "'>Confirmar Cuenta</a>";
        $contenido .= '<p>Si no solicitaste esta cuenta, puedes ignorar este mensaje.</p>';
        $contenido .= "</html>";

        $mail->Body = $contenido;
        $mail->send();
    }

    public function enviarInstrucciones()
    {
        // Crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = $_ENV['EMAIL_PORT'];
        $mail->Host = $_ENV['EMAIL_HOST'];
        $mail->Password = $_ENV['EMAIL_PASS'];
        $mail->Username = $_ENV['EMAIL_USER'];

        $mail->setFrom('cuentas@uptask.com');
        $mail->addAddress('cuentas@uptask.com', 'UpTask.com');
        $mail->Subject = 'Reestablece tu password';

        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p>Hola <strong>" . $this->nombre . "</strong>,</p>";
        $contenido .= "<p>Has solicitado reestablecer tu password, sigue el siguiente enlace para hacerlo:</p>";
        $contenido .= "<a href='http://localhost:3000/reestablecer?token=" . $this->token . "'>Reestablecer Password</a>";
        $contenido .= '<p>Si no solicitaste este cambio, puedes ignorar este mensaje.</p>';
        $contenido .= "</html>";

        $mail->Body = $contenido;
        $mail->send();
    }
}
