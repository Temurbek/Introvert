<?php

class client {
    public static function auth(){
        #Массив с параметрами, которые нужно передать методом POST к API системы
        $user=array(
            'USER_LOGIN' => USER_LOGIN,
            'USER_HASH' => USER_HASH
        );

        $subdomain = SUBDOMAIN;

        #Формируем ссылку для запроса
        $link = "https://".$subdomain.".amocrm.ru/private/api/auth.php?type=json";

        $Response = load::data($link,"post",$user);

        if(isset($Response['auth'])) #Флаг авторизации доступен в свойстве "auth"
            return 'Авторизация прошла успешно';
        return 'Авторизация не удалась';

    }
} 