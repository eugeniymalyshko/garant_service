<?php

function debug($arr, $die = false ){
    echo '<pre>' .print_r($arr, true) . '</pre>';
    if ($die) die;
}

function load($data){
    foreach ($_POST as $k => $v){
        if (array_key_exists($k, $data)){
            $data[$k]['value'] = trim($v);
        }
    }
    return $data;
}

function validate($data){
    $errors = '';
    foreach($data as $k => $v){
        if ($data[$k]['required'] && empty($data[$k]['value'])) {
            $errors .= "<li>Поле {$data[$k]['field_name']} є обов'язковим для заповнення</li>";
        }
    }
    return $errors;
}

function redirect($https = false){
    if($https){
        $redirect = $https;
    }else{
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location: $redirect");
    exit;
}

function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}
