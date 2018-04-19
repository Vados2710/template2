<?
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'skystream.vn@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'Обратный звонок'; //Загаловок сообщения
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['phone'].'</p>                        
                        <p>Населений пункт: '.$_POST['city'].'</p>                        
                        <p>Вулиця: '.$_POST['street'].'</p>                        
                        <p>Будинок: '.$_POST['house'].'</p>                        
                        <p>Квартира: '.$_POST['flat'].'</p>                        
                        <p>Пошта: '.$_POST['mail'].'</p>                        
                        <p>Коментар: '.$_POST['txt'].'</p>                        
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
    mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
	echo "<script>alert(\"Повідомлення відправлено.\");</script>"; 
	echo '<meta http-equiv="refresh" content="0; url=index.php">';
}
?>