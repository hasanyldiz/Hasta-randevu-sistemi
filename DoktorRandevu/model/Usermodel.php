<?php
namespace DoktorRandevu\model;
use DoktorRandevu\config\Baglanti;

use PDO;
class Usermodel
{

    public $db;
    public function __construct()
    {

        $this->db = Baglanti::getDbConnection();

        
    }
    public  function listuser()
    {
        $q=$this->db->query('select * from  hastalar'); 

        return $q->fetchAll(pdo::FETCH_ASSOC);
    }
    public function getuser($where=array())
    {
        $q=$this->db->prepare("select * from  hastalar 
            where Username   = ? 
            and Userpassword = ?"
        );
        $q->execute($where);

        return $q->rowCount();
    }
    
 }
    
?>

