<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['name'])) {$phone = $_POST['name'];}
if (isset($_POST['phone'])) {$name = $_POST['phone'];}
 
/* Сюда впишите свою эл. почту */
$myaddres  = "ves-spb@ves-piter.ru"; // кому отправляем
 
/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: Заказ обратного звонка!\nТелефон: $phone\nИмя: $name";
 
/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заказ'; //сабж
$email='Заказ обратного звонка со страницы Граф Орлов'; // от кого
$send = mail ($myaddres,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
 
ini_set('short_open_tag', 'On');
header('Refresh: 1; URL=orlov.html');
?>