<?php
 namespace app\controllers;
 use app\core\InitController;

 class UserController extends InitController
 {
     public function actionprofile(){
         echo 'Страница профиля';
         var_dump($this -> route);
     }
 }