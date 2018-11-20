<?php
     $name = $_POST['name'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     
     $mail_message = '
    <html>
        <head>
            <title>Заявка</title>
        </head>
        <body>
            <h2>Заказ</h2>
            <ul>
                <li>Имя: ' . $name . '</li>
                <li>Телефон: ' . $phone . '</li>
                <li>Email: ' . $email . '</li>
            </ul>
        </body>
    </html>    
    ';

?>