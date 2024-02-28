<?php
    // IMPORTANT FUNCTION
    if(!function_exists('get_formatted_date')){
        function get_formatted_date($date){
            $formattedDate = date('d-M-Y',strtotime($date));
            return $formattedDate;
        }
    }
    if(!function_exists('setActive')){
        function setActive($path){
            return Request::is($path,'*') ? 'class=active' : '';
        }
    }