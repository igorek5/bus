<?php
if (!empty($_POST['name']) AND !empty($_POST['phone']) ){
  
  $theme = 'Новое сообщение';
  
  $letter = 'Данные сообщения:\r\n';
  $letter .= 'Имя: '.$_POST['name'].'\r\n';
  $letter .= 'Телефон: '.$_POST['phone'].'\r\n';
  $letter .= 'Сообщение: '.$_POST['message'].'\r\n';
  
 if (mail('igorbautin101@gmail.com', $theme, $letter)){
   echo "Сообщение отправлено!";
} else {
  echo "Ошибка при отправке!";
}
} else {
  echo "Ошибка: введите все поля!";
}

