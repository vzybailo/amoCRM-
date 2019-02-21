<<<<<<< HEAD
<?php
    $name = $_POST['user-name'];
    $phone = $_POST['user-phone'];
    $email = $_POST['user-email'];
    
   

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

    $headers = "From: Администратор сайта <crm4u@list.ru>\r\n".
    "MIME-Version: 1.0" . "\r\n" .
    "Content-type: text/html; charset=UTF-8" . "\r\n";
    $mail = mail('vental@bk.ru', 'Заказ', $mail_message, $headers);
    $data = [];
    if ($mail) {
        $data['status'] = "OK";
        $data['mes'] = "Письмо успешно отправлено";
    }else{
        $data['status'] = "NO";
        $data['mes'] = "На сервере произошла ошибка";
    }
    echo json_encode($data);
=======
<?php
    $name = $_POST['user-name'];
    $phone = $_POST['user-phone'];
    $email = $_POST['user-email'];
    
   

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

    $headers = "From: Администратор сайта <crm4u@list.ru>\r\n".
    "MIME-Version: 1.0" . "\r\n" .
    "Content-type: text/html; charset=UTF-8" . "\r\n";
    $mail = mail('vental@bk.ru', 'Заказ', $mail_message, $headers);
    $data = [];
    if ($mail) {
        $data['status'] = "OK";
        $data['mes'] = "Письмо успешно отправлено";
    }else{
        $data['status'] = "NO";
        $data['mes'] = "На сервере произошла ошибка";
    }
    echo json_encode($data);
>>>>>>> 2e3367e8ec6bd52a74de93a4e8901d3ea125a887
?>