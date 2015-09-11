<?php
namespace Controllers;

use Core\View;
use Core\Controller;
use Models\User;
/*
 * Welcome controller
 *
 * @author David Carr - dave@simplemvcframework.com
 * @version 2.2
 * @date June 27, 2014
 * @date updated May 18 2015
 */
class LoginController extends Controller{
    public function __constuct(){
        parent::__construct();

    }

    public function login(){
        $data = array();
        if(isset($_POST['username']) && isset($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = User::getUser($username, $password);
            var_dump($user );
        }
        View::renderTemplate("header", $data, 'MetroTemplate');
        View::render("login/form_login", $data);
        View::renderTemplate("footer", $data, 'MetroTemplate');
    }
} 