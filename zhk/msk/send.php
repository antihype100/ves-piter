<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['name'])) {$phone = $_POST['name'];}
if (isset($_POST['phone'])) {$name = $_POST['phone'];}
if (isset($_POST['rooms'])) {$rooms = $_POST['rooms'];}
if (isset($_POST['oplata'])) {$oplata = $_POST['oplata'];}
if (isset($_POST['summ'])) {$summ = $_POST['summ'];}
 
/* Сюда впишите свою эл. почту */
$myaddres  = "ves-spb@ves-piter.ru"; // кому отправляем
 
/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: Заказ обратного звонка!\nИмя: $phone\nНомер телефона: $name\nКоличество комнат: $rooms\nВид оплаты: $oplata\nСтоимость квартиры: $summ";
 
/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заказ'; //сабж
$email='Заказ обратного звонка со страницы Московский'; // от кого
$send = mail ($myaddres,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
 
ini_set('short_open_tag', 'On');
header('Refresh: 1; URL=msk.html');
?>