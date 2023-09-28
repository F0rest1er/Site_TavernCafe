<?php
require 'php/phpmailer/PHPMailer.php';
require 'php/phpmailer/SMTP.php';
require 'php/phpmailer/Exception.php';

$name = $_POST['senderName'];
$email = $_POST['senderEmail'];
$phone = $_POST['sendPhone'];
$people = $_POST['sendPeople'];
$date = $_POST['sendDate'];
$file = $_FILES['myfile'];

$title = "Таверна";
$body = "
<h2>Новое письмо</h2>
<b>Имя:</b> $name<br>
<b>Почта:</b> $email<br><br>
<b>Номер телефона:</b>$phone<br>
<b>Заказал столик на $people человек и на $date</b><br>
";

$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    $mail->Host       = 'smtp.mail.ru';
    $mail->Username   = 'rsf.13@bk.ru';
    $mail->Password   = 'PRMQaXGeA1nKur0gx2jJ';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('rsf.13@bk.ru', 'Таверна');

    $mail->addAddress('rsf.13@bk.ru');  

if (!empty($file['name'][0])) {
    for ($ct = 0; $ct < count($file['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($file['name'][$ct]));
        $filename = $file['name'][$ct];
        if (move_uploaded_file($file['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
            $rfile[] = "Файл $filename прикреплён";
        } else {
            $rfile[] = "Не удалось прикрепить файл $filename";
        }
    }   
}
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);
