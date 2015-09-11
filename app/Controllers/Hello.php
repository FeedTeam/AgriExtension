<?php
namespace Controllers;

use Core\View;
use Core\Controller;
use Models\User;

/*
 * Welcome controller
 *
 * @author Phuc
 * @version 2.2
 * @date June 27, 2014
 * @date updated May 18 2015
 */
class Hello extends Controller
{
    public function __construct(){
        parent::__construct();
        $this->language->load('Home');

    }

    public function index(){
        $data['title'] = $this->language->get('title');
        $user = new User();
        var_dump($user->getData());
        View::renderTemplate('header', $data);
        View::render('welcome/welcome', $data);
        View::renderTemplate('footer', $data);
    }
}