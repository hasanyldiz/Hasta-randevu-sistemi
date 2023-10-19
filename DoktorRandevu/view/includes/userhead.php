<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <?php 
     require 'style.php'; 
  
  ?>
  <style>
    .btn-submit {
      position: relative;
      padding-left: 30px;
      background-color: #3498db; /* Düğme arkaplan rengi */
      color: #fff; /* Düğme metin rengi */
      border: none;
      padding: 10px 30px;
      border-radius: 10px;
      text-decoration: none;
    }
    .btn-succes {
      position: relative;
      padding-left: 30px;
      background-color:green;
      color: #fff; /* Düğme metin rengi */
      border: none;
      padding: 10px 30px;
      border-radius: 10px;
      text-decoration: none;
    }
   
  </style>
</head>

<body>
  <div class="menu-bar">
    <ul>
      <li ><a href="Anasayfa.html"><i class="fa-solid fa-house"></i>Ana Sayfa</a></li>
      <li><a href="hakkımda.html"><i class="fa-solid fa-user"></i>Hakkımda</a></li>
      <li><a href="hastalıklar.html"><i class="fa-solid fa-stethoscope"></i>Hastalıklar</a></li>
     
        <div class="sub-menu-1">
          <ul>
            <li><a href="kifoz.html">Kifoz</a></li>
            <li><a href="skolyoz.html">Skolyoz</a></li>
            <li><a href="belfıtığı.html">Bel Fıtığı</a></li>
            <li><a href="boyunfıtığı.html">Boyun Fıtığı</a></li>
            <li><a href="belkayması.html">Bel Kayması</a></li>
            <li><a href="omurgakırıkları.html">Omurga Kırıkları</a></li>
            <li><a href="omuriliktümörleri.html">Omurga ve Omrilik tümörleri</a></li>
            <li><a href="servikaldarkanal.html">Servikal Dar Kanal</a></li>
            <li><a href="erişkinskolyoz.html">Erişkin Yaş Grubunda Skolyoz</a></li>
          </ul>
        </div>
      </li>
      <li><a href="iletişim.html"><i class="fa-solid fa-phone"></i>İletişim</a></li>
      <li>
      <form method="post" action="index.php">
            <button class="form-button" style="background-color: #dc3545;">Çıkış Yap</button>
        </form>
     </li>
    </ul>
    
   
  </div>