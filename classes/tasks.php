<?php

class tasks {

    public static function setTask($text, $leads_id){

        $tasks['request']['tasks']['add'] = [];
        foreach($leads_id as $id){
            $tasks['request']['tasks']['add'][] =[
                'element_id' => $id, #ID сделки
                'element_type' => 2, #Показываем, что это - сделка, а не контакт
                'text' => $text,
            ];
        }
        $link="https://".SUBDOMAIN.".amocrm.ru/private/api/v2/json/tasks/set";

        load::data($link,'post',$tasks);

    }
} 