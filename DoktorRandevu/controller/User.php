<?php
namespace DoktorRandevu\controller;
use DoktorRandevu\config\Baglanti;
use DoktorRandevu\model\Usermodel;


class user{
    public $db;
    
    public function __construct()
    {
        $this->db = Baglanti::getDbConnection();
    }
    
public function List()
{
    $usermodel=new Usermodel();
    $data=$usermodel->listuser();

    require 'view/userlist.php';

}

public function Hastalist()
{
    $usermodel=new Usermodel();
    $data=$usermodel->listuser();

}




}
?>