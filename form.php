<?php
if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['text'])){
    $headers = 'From: Девяткин Вадим\r\n'.
                'Reply-To: progervadim@gmail.com\r\n'.
                'X-Mailer: PHP/'. phpversion();
    $theme = 'Новое сообщение';
    $letter = 'Данные сообщения:\r\n';
    $letter .= 'Имя:'.$_POST['name'].'\r\n';
    $letter .= 'Email:'.$_POST['email'].'\r\n';
    $letter .= 'Сообщение:'.$_POST['text'].'\r\n';
    if (mail('progervadim@gmail.com', $theme, $letter, $headers)){

    } else {
        header('Location: active.html');
    }
} else {
    header('Location:/');
}
?>