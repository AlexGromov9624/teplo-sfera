<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Создание формы обратной связи</title>
<meta http-equiv="Refresh" content="4; URL=http://teplo-sfera.com"/>
</head>
<body>

<?php
$sendto   = "teplosffera@gmail.com"; // почта, на которую будет приходить письмо teplosffera@gmail.com
$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем
$usertel = $_POST['telephone']; // сохраняем в переменную данные полученные из поля c телефонным номером
$usermail = $_POST['email']; // сохраняем в переменную данные полученные из поля c адресом электронной почты
$userppu = $_POST['ppu'];
$usercoast = $_POST['coast'];
$userrat = $_POST['rat'];
$usertext = $_POST['text'];

// Формирование заголовка письма
$subject  = "Закакз услуги";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта Тепло-Сфера</h2>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Почта:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$usertel."</p>\r\n";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Опрос:</h2>\r\n";
$msg .= "<p><strong>Вы знали что такое ППУ:</strong> ".$userppu."</p>\r\n";
$msg .= "<p><strong>Вас устраивает цена на услуги:</strong> ".$usercoast."</p>\r\n";
$msg .= "<p><strong>Оцнка сайта:</strong> ".$userrat."</p>\r\n";
$msg .= "<p><strong>Замечание к сайту:</strong> ".$usertext."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
	echo "<center><img src='img/spasibo.png'></center>";
} else {
	echo "<center><img src='img/ne-otpravleno.png'></center>";
}
?>

</body>
</html>