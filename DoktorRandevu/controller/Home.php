<?php
namespace DoktorRandevu\controller;
use DoktorRandevu\config\Baglanti;


class Home
{
    
    public $db;
    
    public function __construct() {
        $this->db = Baglanti::getDbConnection();
    }

    public function index(){
        require 'view/home.php';
    }
    public function AddHasta()
    {


    
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {   
           
            $HastaIsimsoyisim = $_POST["HastaIsimsoyisim"];
            $HastaEposta      = $_POST["HastaEposta"];
            $HastaTelefon     = $_POST["HastaTelefon"];
            $HastaRandevuturu = $_POST["HastaRandevuturu"];
            $HastaDogumtarihi = $_POST["HastaDogumtarihi"];
            $HastaMesaji      = $_POST["HastaMesaji"];
            $HastaCinsiyeti   = $_POST["HastaCinsiyeti"];
            

            

            // $sql = 'INSERT INTO hastalar (HastaIsimsoyisim, HastaEposta, HastaTelefon, HastaRandevuturu, HastaDogumtarihi, HastaMesaji, HastaCinsiyeti)
            // VALUES (:isim_soyisim, :eposta, :telefon, :randevu_turu, :dogum_tarihi, :mesaj, :cinsiyet)';

            $sql = "INSERT INTO randevular SET 
            HastaIsimsoyisim    = ?,
            HastaEposta         = ?,
            HastaTelefon        = ?,
            HastaRandevuturu    = ?,
            HastaDogumtarihi    = ?,
            HastaMesaji         = ?,
            HastaCinsiyeti      = ?
          

            ";

            $stmt   = $this->db->prepare($sql);
            $sonuc  = $stmt->execute(array($HastaIsimsoyisim, $HastaEposta, $HastaTelefon, $HastaRandevuturu, $HastaDogumtarihi, $HastaMesaji, $HastaCinsiyeti));


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