<?php
    $result = false;
    if(isset($_POST['action'])):

        if($_POST['action'] == 'form_send'):

            if($_POST['form'] == 'sertificate'):

                $email_to = 'shop@silk-way.ru';
                $subject = 'Заявка попап с сайта (получить купон)';
                $message = 'Телефон: '. $_POST['phone'];
                mail($email_to, $subject, $message);

                $roistatData = array(
                    'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : 'nocookie',
                    'key'     => 'YWU2N2M0MTNhNTA1MDcyNzBhZTk3NjVmN2E0NjFkN2Y6MjA1MDQ5', // Ключ для интеграции с CRM, указывается в настройках интеграции с CRM.
                    'title'   => 'Заявка попап с сайта (получить купон)', // Название сделки
        //        'comment' => '', // Комментарий к сделке
        //        'name'    => '', // Имя клиента
        //        'email'   => '', // Email клиента
                    'phone'   => strval($_POST['phone']), // Номер телефона клиента
        //                'order_creation_method' => '', // Способ создания сделки (необязательный параметр). Укажите то значение, которое затем должно отображаться в аналитике в группировке "Способ создания заявки"
                    'is_need_callback' => '0', // Если указано значение '1', на номер клиента будет инициироваться обратный звонок после создания заявки в Roistat (независимо от того, включен ли обратный звонок в Ловце лидов). Если указано значение '0', для данной формы обратный звонок инициироваться не будет (даже если в Ловце лидов включен обратный звонок).
                );
                $result = file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));

            elseif($_POST['form'] == 'fitting'):

                $email_to = 'shop@silk-way.ru';
                $subject = 'Заявка попап с сайта (запись на примерку)';
                $message = 'Телефон: '. $_POST['phone'];
                mail($email_to, $subject, $message);

                $roistatData = array(
                    'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : 'nocookie',
                    'key'     => 'YWU2N2M0MTNhNTA1MDcyNzBhZTk3NjVmN2E0NjFkN2Y6MjA1MDQ5', // Ключ для интеграции с CRM, указывается в настройках интеграции с CRM.
                    'title'   => 'Заявка попап с сайта (запись на примерку)', // Название сделки
                    'phone'   => strval($_POST['phone']), // Номер телефона клиента
                    'is_need_callback' => '0', // Если указано значение '1', на номер клиента будет инициироваться обратный звонок после создания заявки в Roistat (независимо от того, включен ли обратный звонок в Ловце лидов). Если указано значение '0', для данной формы обратный звонок инициироваться не будет (даже если в Ловце лидов включен обратный звонок).
                );
                $result = file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));

            elseif($_POST['form'] == 'getConsultation'):

                $email_to = 'shop@silk-way.ru';
                $subject = 'Консультация с сайта';
                $message = 'Телефон: '. $_POST['phone'];
                mail($email_to, $subject, $message);

                $roistatData = array(
                    'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : 'nocookie',
                    'key'     => 'YWU2N2M0MTNhNTA1MDcyNzBhZTk3NjVmN2E0NjFkN2Y6MjA1MDQ5', // Ключ для интеграции с CRM, указывается в настройках интеграции с CRM.
                    'title'   => 'Консультация с сайта', // Название сделки
                    //        'comment' => '', // Комментарий к сделке
                    //        'name'    => '', // Имя клиента
                    //        'email'   => '', // Email клиента
                    'phone'   => strval($_POST['phone']), // Номер телефона клиента
                    //                'order_creation_method' => '', // Способ создания сделки (необязательный параметр). Укажите то значение, которое затем должно отображаться в аналитике в группировке "Способ создания заявки"
                    'is_need_callback' => '0', // Если указано значение '1', на номер клиента будет инициироваться обратный звонок после создания заявки в Roistat (независимо от того, включен ли обратный звонок в Ловце лидов). Если указано значение '0', для данной формы обратный звонок инициироваться не будет (даже если в Ловце лидов включен обратный звонок).
                );
                $result = file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));

            elseif($_POST['form'] == 'firstDisplay'):

                $email_to = 'shop@silk-way.ru';
                $subject = 'Заявка с формы первый экран';
                $message = 'Телефон: '. $_POST['phone'];
                mail($email_to, $subject, $message);

                $title = 'Заявка с формы первый экран (' . $_POST['site'] . ')'; // Название сделки

                $roistatData = array(
                    'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : 'nocookie',
                    'key'     => 'YWU2N2M0MTNhNTA1MDcyNzBhZTk3NjVmN2E0NjFkN2Y6MjA1MDQ5', // Ключ для интеграции с CRM, указывается в настройках интеграции с CRM.
                    'title'   => $title,
                    //        'comment' => '', // Комментарий к сделке
                    //        'name'    => '', // Имя клиента
                    //        'email'   => '', // Email клиента
                    'phone'   => strval($_POST['phone']), // Номер телефона клиента
                    //                'order_creation_method' => '', // Способ создания сделки (необязательный параметр). Укажите то значение, которое затем должно отображаться в аналитике в группировке "Способ создания заявки"
                    'is_need_callback' => '0', // Если указано значение '1', на номер клиента будет инициироваться обратный звонок после создания заявки в Roistat (независимо от того, включен ли обратный звонок в Ловце лидов). Если указано значение '0', для данной формы обратный звонок инициироваться не будет (даже если в Ловце лидов включен обратный звонок).
                );
                $result = file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));

            endif;

        endif;

    endif;

    echo $result;
    die();

?>
