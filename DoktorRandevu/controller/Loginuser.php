<?php
namespace DoktorRandevu\controller;
use DoktorRandevu\config\Baglanti;
use DoktorRandevu\model\Usermodel;

class Login
{
    public $db;
    public $Usermodel;
    public function __construct()
    {
        $this->db = Baglanti::getDbConnection();
        $this->Usermodel=new Usermodel();
        
    }
    public function Loginuser()
    {
        if($_SESSION["loggedin"]==1)
        {
            header("Location:http://localhost/phpstarting/DoktorRandevu");
    
        }


        // Kullanıcı girişi kontrolü
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $Username = $_POST["Username"];
            $Userpassword = $_POST["Userpassword"];
            // Kullanıcı adı ve parola doğruysa oturum değişkenlerini ayarla
            $kullanici=$this->Usermodel->getuser(array($Username,$Userpassword));
            


            if ( $kullanici > 0 ) {
                $_SESSION["loggedin"]       = true;
                $_SESSION["Username"]       = $Username;
                $_SESSION["mesajVer"]       = "success";
                $_SESSION["mesajIcerik"]    = "Giriş BAşarılı";
                $_SESSION["mesajbaslik"]    = "Başarılı";
            } else {
                $_SESSION["mesajVer"]       = "error";
                $_SESSION["mesajIcerik"]    = "Kullanıcı adı veya şifre yanlış!";
                $_SESSION["mesajbaslik"]    = "Başarısız";

            }
        }  
        // Kullanıcı giriş yapmışsa hoş geldin mesajını göster
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
         {
            $welcomeMessage = "Hoş geldin, " . $_SESSION["Username"] . "!";
        } else {
            $welcomeMessage = "Lütfen giriş yapın.";
        }
        if($kullanici>0)
        {
        require 'view/userhome.php';
        }
        else
        {
            require "view/home.php";
        }


    }
    public function Logout()
    {
        $_SESSION["loggedin"]=0;
        header("Location:http://localhost/phpstarting/DoktorRandevu");
    }
    

}

?>