<?php
    $name = $_POST['name'];
	$nomer = $_POST['phone'];
    $email = $_POST['email'];
  

	$to = "v-olekhnovich@mail.ru"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name /n
    Телефон: $phone /n
    Почта: $email"; 	
	mail($to, $subject, $msg, "From: $to ");

?>

<p>Отправлено</p>
