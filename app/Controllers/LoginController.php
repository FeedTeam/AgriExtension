<?php
namespace Controllers;

use Core\View;
use Core\Controller;
use Helpers\Form;
use Helpers\Session;
use Models\User;
/*
 * Welcome controller
 *
 * @author David Carr - dave@simplemvcframework.com
 * @version 2.2
 * @date June 27, 2014
 * @date updated May 18 2015
 */
class LoginController extends Controller
{
    public function __constuct()
    {
        parent::__construct();

    }

    public function login()
    {
        $data = array();
        Session::init();
        var_dump(Session::get('user_name'));
        if (!Session::get('user_name')) {
            if (isset($_POST['username']) && isset($_POST['password'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $users = User::getUser($username, $password);
                // Vaildation user
                if($users != null){
                    // Set session
                    Session::set('user_name', $users);
                    $this->render($data, $users);

                } else {
                    echo "Login false";
                    echo "<a href='login'> Login Again </a>";
                }
            } else $this->renderLoginForm($data);
        } else {
            $this->render($data, Session::get('user_name'));
        }
    }

    private function render($data, $users){
        View::renderTemplate("header", $data, 'MetroTemplate');
        echo "<h1>";
        echo "Hello " . $users->fname;
        echo "</h1>";
        Session::set('user_name', $users->user_name);
        $o = "";
        $o .= Form::open(array(
            'action' => 'logout',
            'method' => 'post'));
        $o .= Form::hidden(array(
            'id' => 'username',
            'name' => 'username',
            'value' => Session::get('user_name')
        ));
        $o .= Form::submit(array());
        $o .= Form::close();
        echo $o;
        View::renderTemplate("footer", $data, 'MetroTemplate');
    }

    private function renderLoginForm($data){
        View::renderTemplate("header", $data, 'MetroTemplate');
        View::render("login/form_login", $data);
        View::renderTemplate("footer", $data, 'MetroTemplate');
    }
}