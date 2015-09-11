<?php
namespace Controllers;

use Core\View;
use Core\Controller;
/*
 * Welcome controller
 *
 * @author David Carr - dave@simplemvcframework.com
 * @version 2.2
 * @date June 27, 2014
 * @date updated May 18 2015
 */
class NewPortalController extends Controller{
    public function __constuct(){
        parent::__construct();

    }

    public function index(){
        $data = array();
        View::renderTemplate("NewPortalHeader", $data, 'MetroTemplate');
        View::render("portal/Portal", $data);
        View::renderTemplate("footer", $data, 'MetroTemplate');
    }
} 