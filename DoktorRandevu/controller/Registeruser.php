<?php
namespace DoktorRandevu\controller;
use DoktorRandevu\config\Baglanti;


class Register
{
    
    public $db;
    
    public function __construct() {
        $this->db = Baglanti::getDbConnection();
    }

    public function index(){
        require 'view/Registeruser.php';
    }
    public function AddHasta()
    {


    
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {   
            
            $Username         = $_POST["Username"];
            $Userpassword     = $_POST["Userpassword"];
            $HastaIsimsoyisim = $_POST["HastaIsimsoyisim"];
            $HastaEposta      = $_POST["HastaEposta"];
            $HastaTelefon     = $_POST["HastaTelefon"];            
            $HastaDogumtarihi = $_POST["HastaDogumtarihi"];
            $HastaCinsiyeti   = $_POST["HastaCinsiyeti"];
                      

            // $sql = 'INSERT INTO hastalar (HastaIsimsoyisim, HastaEposta, HastaTelefon, HastaRandevuturu, HastaDogumtarihi, HastaMesaji, HastaCinsiyeti)
            // VALUES (:isim_soyisim, :eposta, :telefon, :randevu_turu, :dogum_tarihi, :mesaj, :cinsiyet)';

            $sql = "INSERT INTO hastalar SET 
            Username            = ?,
            Userpassword        = ?,
            HastaIsimsoyisim    = ?,
            HastaEposta         = ?,
            HastaTelefon        = ?,
            HastaDogumtarihi    = ?,                       
            HastaCinsiyeti      = ?         

            ";

            $stmt   = $this->db->prepare($sql);
            $sonuc  = $stmt->execute(array($Username, $Userpassword, $HastaIsimsoyisim, $HastaEposta, $HastaTelefon,  $HastaDogumtarihi, $HastaCinsiyeti));


            // // // //  $stmt->bindParam(':isim_soyisim', $HastaIsimsoyisim);
            // // // //  $stmt->bindParam(':eposta', $HastaEposta);
            // // // //  $stmt->bindParam(':telefon', $HastaTelefon);
            // // // //  $stmt->bindParam(':randevu_turu', $HastaRandevuturu);
            // // // //  $stmt->bindParam(':dogum_tarihi', $HastaDogumtarihi);
            // // // //  $stmt->bindParam(':mesaj', $HastaMesaji);
            // // // //  $stmt->bindParam(':cinsiyet', $HastaCinsiyeti);

            if ($sonuc) {
                $_SESSION["mesajVer"]       = "success";
                $_SESSION["mesajIcerik"]    = "Eklendi";
                $_SESSION["mesajbaslik"]    = "Başarılı";
            } else {
                $_SESSION["mesajVer"]       = "error";
                $_SESSION["mesajIcerik"]    = "Eklenirken Sorun yaşandı";
                $_SESSION["mesajbaslik"]    = "Başarısız";
            }
            header('Location:http://localhost/phpstarting/DoktorRandevu/');

            

        } 
        
    }
}
?>