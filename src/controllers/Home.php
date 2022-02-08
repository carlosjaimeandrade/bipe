<?php

namespace src\controllers;

session_start();


use src\config\Loader;
use src\Models\Home as HomeModel;



class Home extends Loader
{

    public function index()
    {
       $encontrou = new HomeModel('encontrou');
       $dados =  $encontrou->selectAll();

       $this->loadTemplateView('home',$dados);
    }
    
}