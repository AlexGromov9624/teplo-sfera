<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Создание формы обратной связи</title>
<meta http-equiv="Refresh" content="4; URL=http://teplo-sfera.com">
</head>
<body>

<?php 

$sendto   = "teplosffera@gmail.com"; // почта, на которую будет приходить письмо teplosffera@gmail.com
$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем
$usertel = $_POST['telephone']; // сохраняем в переменную данные полученные из поля c телефонным номером
$usermail = $_POST['email']; // сохраняем в переменную данные полученные из поля c адресом электронной почты

$userppu_yes = $_POST['ppu_yes']; // сохраняем в переменную данные полученные из поля c адресом электронной почты
$userppu_no = $_POST['ppu_no']; // сохраняем в переменную данные полученные из поля c адресом электронной почты
$usercoast_yes = $_POST['coast_yes']; // сохраняем в переменную данные полученные из поля c адресом электронной почты
$usercoast_no = $_POST['coast_no']; // сохраняем в переменную данные полученные из поля c адресом электронной почты
$userrat_one = $_POST['rat_one']; // сохраняем в переменную данные полученные из поля c адресом электронной почты
$userrat_two = $_POST['rat_two']; // сохраняем в переменную данные полученные из поля c адресом электронной почты
$userrat_three = $_POST['rat_three']; // сохраняем в переменную данные полученные из поля c адресом электронной почты
$userrat_four = $_POST['rat_four']; // сохраняем в переменную данные полученные из поля c адресом электронной почты
$userrat_five = $_POST['rat_five']; // сохраняем в переменную данные полученные из поля c адресом электронной почты
$usertext = $_POST['text']; // сохраняем в переменную данные полученные из поля c адресом электронной почты


// Формирование заголовка письма
$subject  = "Новое сообщение";
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
$msg .= "<p><strong>Вы знали что такое ППУ:</strong> ".$userppu_yes."</p>\r\n";
$msg .= "<p><strong>Вы знали что такое ППУ:</strong> ".$userppu_no."</p>\r\n";
$msg .= "<p><strong>Вас устраивает цена на услуги:</strong> ".$usercoast_yes."</p>\r\n";
$msg .= "<p><strong>Вас устраивает цена на услуги:</strong> ".$usercoast_no."</p>\r\n";
$msg .= "<p><strong>Оцнка сайта 1:</strong> ".$userrat_one."</p>\r\n";
$msg .= "<p><strong>Оцнка сайта 2:</strong> ".$userrat_two."</p>\r\n";
$msg .= "<p><strong>Оцнка сайта 3:</strong> ".$userrat_three."</p>\r\n";
$msg .= "<p><strong>Оцнка сайта 4:</strong> ".$userrat_four."</p>\r\n";
$msg .= "<p><strong>Оцнка сайта 5:</strong> ".$userrat_five."</p>\r\n";
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