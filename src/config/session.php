<?php

function requireValidSession() {
    if(!isset($_SESSION['id'])){
        header('Location: login');
    }
}

function nivelAdm(){
    $nivel = $_SESSION['nivel'];
    if ($nivel !=1){
        header('Location:' . BASEURL. "home");
    }
}

function nivelCliente(){
    $nivel = $_SESSION['nivel'];
    if ($nivel !=3){
        header('Location:' . BASEURL. "home");
    }
}


function staCliente(){
    $nivel = $_SESSION['nivel'];
    if ($nivel !=2){
        header('Location:' . BASEURL. "home");
    }
}