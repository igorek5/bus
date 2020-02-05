<?php
if (!empty($_post['name']) and !empty($_post['phone']) ){
  
  $theme = 'Новое сообщение';
  
  $letter = 'Имя: '.$_POST['name'].'\r\n';
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

