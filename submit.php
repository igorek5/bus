<?php
if (!empty($_POST['name']) AND !empty($_POST['phone']) ){
  
$name = $_POST['name'];
$phone = $_POST['phone']; 
$message = $_POST['message']; 

// $zakaz = "Заказ с сайты XXX";

$token = "910847660:AAGcqPzqs9R1GtPR9MWMnEYLfBtJVvJ_uSE"; // Это ТОКЕН
$chat_id = "918924559"; // Это ИД группы

$arr = array(

// 'Заказ с сайты: ' => $zakaz,
  
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Сообщение: ' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
  
  if ($sendToTelegram){
   echo "Сообщение отправлено!";
} else {
  echo "Ошибка при отправке!";
}
} else {
  echo "Ошибка: введите все поля!";
}

