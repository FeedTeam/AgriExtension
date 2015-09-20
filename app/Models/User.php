<?php
namespace Models;

use Core\Model;
use Helpers\Database;

/**
 * Created by PhpStorm.
 * User: Phuc
 * Date: 10/09/2015
 * Time: 00:03
 */
 class  User extends Model{
     protected $data;

     protected $user_name;
     protected $fname;
     protected $password;

     public function __construct(){
         parent::__construct();
         //$data = $this->db->select("desc `users`");
     }
     public function getData(){
         $this->data = "hello";
         $this->data = $this->db->select("desc `user`");

         return $this->data;
     }

     public static function getUser(string $user_name, string $pw){
         $db = Database::get();

         $result  = $db->select("select * from `user` WHERE user_name = :un",
             array(':un' => $user_name));
         if(count($result) != 1)
             return null;
         else
             return $result[0];
     }
 }
?>
