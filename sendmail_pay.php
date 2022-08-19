<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language');
$mail->IsHTML(true);

//Автор та адресат
$mail->setFrom('kovalenko.olexandra@gmail.co', 'Новий учень');
$mail->addAddress('kovalenko.olexandra@gmail.com');
$mail->Subjest = 'Привіт! Курс купив новий учень!';

//Mail body
$body = '<h1>Новий учень оплатив навчання на курсі</h1>';

if(trim(!empty($_POST['name']))){
    $body.="<p><strong>Ім'я:</strong> ".$_POST['name']."</p>";
}
if(trim(!empty($_POST['email']))){
    $body.="<p><strong>E-mail:</strong> ".$_POST['email']."</p>";
}
if(trim(!empty($_POST['contact']))){
    $body.="<p><strong>Контакт:</strong> ".$_POST['contact']."</p>";
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
