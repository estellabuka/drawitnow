<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('uk', 'phpmailer/language/');
$mail->IsHTML(true);

//Автор та адресат
$mail->setFrom('kovalenko.olexandra@gmail.com', 'Новий учень');
$mail->addAddress('kovalenko.olexandra@gmail.com');
$mail->Subjest = 'Привіт! Курс купив новий учень!';

//Mail body
$body = '<h1>Новий учень хоче на курс</h1>';

if(trim(!empty($_POST['name']))){
    $body.="<p><strong>Ім'я:</strong> ".$_POST['name']."</p>";
}
if(trim(!empty($_POST['e-mail']))){
    $body.="<p><strong>E-mail:</strong> ".$_POST['e-mail']."</p>";
}
if(trim(!empty($_POST['telegram']))){
    $body.="<p><strong>Контакт:</strong> ".$_POST['telegram']."</p>";
}

//File load
if (!empty($_FILES['image']['tmp_name'])) {
    $filePath = __DIR__ . "/files" . $_FILES['image']['name'];
    if (copy($_FILES['image']['tmp_name'], $filePath)){
        $fileAttach = $filePath;
        $body.='<p><strong>Фото у прикріпленні</strong></p>';
        $mail->addAttachment($fileAttach);
    }
}

$mail->Body = $body;

if (!$mail->send()) {
    $message = 'Помилка';
} else {
    $message = 'Дані відправлені!';
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);
?>
