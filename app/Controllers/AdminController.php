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
class AdminController extends Controller{
    public function __constuct(){
        parent::__construct();

    }

    public function index(){

        View::renderTemplate("AdminHeader", $data, 'MetroTemplate');
        View::render("admin/admin", $data);
        View::renderTemplate("footer", $data, 'MetroTemplate');
    }
} 