
<?php 

require 'includes/userhead.php'; 

 ?>
<div class="conteiner">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assests/img/image1.jpg" class="d-block w-100" alt="..." height="700">
          <div class="carousel-caption d-none d-md-block">
            <h2>Prof. Dr. Uğur Duymuş</h2>
            <p>Beyin, Sinir ve Omurilik Cerrahisi Uzmanı</p>
            <a href="hakkımda.html" target="_blank" class="btn btn-dark">Detay</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assests/img/image3.jpg" class="d-block w-100" alt="..." height="700">
          <div class="carousel-caption d-none d-md-block">
            <h2>Hastalıklar</h2>
            <p>Kifoz, Skolyoz, Bel Fıtığı...</p>
            <a href="hastalıklar.html" target="_blank" class="btn btn-dark">Detay</a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="conteiner2">

    <div class="row">
    <form action="./index.php?route=Home@Addhasta" method="post">
        <div class="user-details">
          <div class="col">
            <div class="input-box">
              <span class="details">İsim Soyisim</span>
              <input type="text" name="HastaIsimsoyisim" placeholder="" required value="<?php   ?>">
            </div>
          </div>
          <div class="col">
            <div class="input-box">
              <span class="details">E-Posta</span>
              <input type="email" class="form-control" name="HastaEposta" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php  ?> ">
              <small id="emailHelp" class="form-text text-muted">E-postanızı asla başka biriyle paylaşmayacağız.</small>
            </div>
          </div>
          <div class="w-100"></div>
          <div class="col">
            <div class="input-box">
              <span class="details">Telefon</span>
              <input type="text" class="form-control" name="HastaTelefon" id="telefonNumarasi" value="<?php ?>">

            </div>
          </div>
          <div class="col">
            <div class="input-box">
              <span class="details"></span>
              <select class="form-control" name="HastaRandevuturu" id="exampleFormControlSelect1">
                <option value="0">Randevu Almak İstediğiniz Bölümü Seçiniz</option>
                <option value="1">Kifoz</option>
                <option value="2">Skolyoz</option>
                <option value="3">Bel Fıtığı</option>
                <option value="4">Boyun Fıtığı</option>
                <option value="5">Bel Kayması</option>
                <option value="6">Omurga Kırıkları</option>
                <option value="7">Omurga ve Omurilik Tümörleri</option>
                <option value="8">Servikal Dar Kanal</option>
              </select>
            </div>
          </div>
          <div class="w-100"></div>
          <div class="col">
            <div class="input-box">
              <span class="details">Doğum Tarihi</span>
              <input type="date" name="HastaDogumtarihi" placeholder="" required value="">
            </div>
          </div>
          <div class="col">
            <div class="input-box">
              <label for="id_message">Mesaj</label>
              <textarea id="id_message" name="HastaMesaji" name=" HastaMesaji" rows="4" class="form-control form-textarea"></textarea>
            </div>
          </div>
        </div>
        <div class="w-100"></div>
        <div class="col">
          <div class="gender-details">
            <input type="radio" name="HastaCinsiyeti" id="dot-1" value="Erkek">
            <input type="radio" name="HastaCinsiyeti" id="dot-2" value="Kadın">
            <input type="radio" name="HastaCinsiyeti" id="dot-3" value="Diğer">
            <span class="gender-tittle">Cinsiyet</span>
            <div class="category">
              <label for="dot-1">
                <span class="dot one"></span>
                <span class="gender">Erkek</span>
                <input type="radio" name="HastaCinsiyeti" value="Erkek" id="dot-1">
        
              </label>
              <label for="dot-2">
                <span class="dot two"></span>
                <span class="gender">Kız</span>
                <input type="radio" name="HastaCinsiyeti" value="Kız" id="dot-2">
        
              </label>
              <label for="dot-3">
                <span class="dot three"></span>
                <span class="gender">Söylemek İstemiyorum</span>
                <input type="radio" name="HastaCinsiyeti" value="Diger" id="dot-3">
        
              </label>
            </div>
          </div>
        </div>
        <div  class="button">
          <input type="submit" value="RANDEVU TALEP ET">
        </div>
      </form>
    </div>
  </div>
  <div class="container">
    <div class="col-lg-3 col-sm-6 col-12 float-left">
      <div class="card" style="height: 40rem;">
        <img class="card-img-top resim1 bgsec" data-bgsec="#b7c439" src="assests/img/skolyoz.png" alt="Card image cap">
        <div class="card-body bgsec" data-bgsec="#b7c439">
          <h5 class="card-title">Skolyoz</h5>
          <p class="card-text">Eğriliğin 50 derecenin üzerinde olduğu hastalarda cerrahi tedavi düşünülmelidir.</p>
          <a href="skolyoz.html" class="btn btn-primary">Detay</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12 float-left">
      <div class="card" style="height: 40rem;">
        <img class="card-img-top resim2 bgsec" data-bgsec="#f04e4e" src="assests/img/kifoz.png" alt="Card image cap">
        <div class="card-body bgsec" data-bgsec="#f04e4e">
          <h5 class="card-title">Kifoz (Kamburluk)</h5>
          <p class="card-text">Kifoz genellikle travma, gelişim anomalileri, dejeneratif disk hastalığı, enfeksiyon gibi
            nedenlere bağlı olarak ortaya çıkar.</p>
          <a href="kifoz.html" class="btn btn-primary">Detay</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12 float-left">
      <div class="card" style="height: 40rem;">
        <img class="card-img-top resim3 bgsec" data-bgsec="#38cadb" src="assests/img/omurga-kiriklari.png" alt="Card image cap">
        <div class="card-body bgsec" data-bgsec="#38cadb">
          <h5 class="card-title">Omurga Kırıkları</h5>
          <p class="card-text">Ufak travmalar sonrası bile omurga kırıkları ortaya çıkabilir. Bu kırıkların büyük bir
            kısmı cerrahi müdahaleye ihtiyaç duymaz. Ancak yüksek enerjili travma sonucu ortaya çıkan omurga kırıkları
            cerrahi müdahaleye ihtiyaç duyabilir.</p>
          <a href="omurgakırıkları.html" class="btn btn-primary">Detay</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12 float-left">
      <div class="card" style="height: 40rem;">
        <img class="card-img-top resim4 bgsec" data-bgsec="#d4ca60" src="assests/img/bel-fitigi.png" alt="Card image cap">
        <div class="card-body bgsec" data-bgsec="#d4ca60">
          <h5 class="card-title">Bel Fıtığı</h5>
          <p class="card-text">Erkeklerde kadınlardan daha sık görülür. Genelde orta yaşlarda görülmekle beraber her yaş
            grubunda görülebilir. Obezite, ağır işlerde çalışma ve sigara kullanımı bel fıtığı oluşma olasılığını
            arttırır. </p>
          <a href="belfıtığı.html" class="btn btn-primary">Detay</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12 float-left">
      <div class="card" style="height: 40rem;">
        <img class="card-img-top resim1 bgsec" data-bgsec="#b7c439" src="assests/img/boyun-fitigi.png" alt="Card image cap">
        <div class="card-body bgsec" data-bgsec="#b7c439">
          <h5 class="card-title">Boyun Fıtığı</h5>
          <p class="card-text">Boyun fıtığında dış kılıfın zayıflaması veya yırtılması ile iç kısımdaki jel yapının
            dışarıya doğru kayarak yer değiştirmesiyle oluşur ve bu durum sinirlere bası yapar.</p>
          <a href="boyunfıtığı.html" class="btn btn-primary">Detay</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12 float-left">
      <div class="card" style="height: 40rem;">
        <img class="card-img-top resim2 bgsec" data-bgsec="#f04e4e" src="assests/img/bel-kaymasi.png" alt="Card image cap">
        <div class="card-body bgsec" data-bgsec="#f04e4e">
          <h5 class="card-title">Bel Kayması</h5>
          <p class="card-text">Bel kayması tıp dilindeki adı spondilolisteziste iki komşu omurdan üsttekinin alttaki
            omura göre öne veya arkaya doğru yer değiştirmesi suretiyle oluşur.</p>
          <a href="belkayması.html" class="btn btn-primary">Detay</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12 float-left">
      <div class="card" style="height: 40rem;">
        <img class="card-img-top resim3 bgsec" data-bgsec="#38cadb" src="assests/img/servikal-dar-kanal.png"
          alt="Card image cap">
        <div class="card-body bgsec" data-bgsec="#38cadb">
          <h5 class="card-title">Servikal Dar Kanal</h5>
          <p class="card-text">Omurilik kanal daralması sıklıkla 50 yaşın üstündeki kişilerde görülür. Omurilik
            kanalındaki daralma nedeni ile omurilik ve kollara giden sinirlerde bası ve basıya bağlı olarak hasar ortaya
            çıkabilir.</p>
          <a href="servikaldarkanal.html" class="btn btn-primary">Detay</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12 float-left">
      <div class="card" style="height: 40rem;">
        <img class="card-img-top resim4 bgsec" data-bgsec="#d4ca60" src="assests/img/omurga-tumorleri.png" alt="Card image cap">
        <div class="card-body bgsec" data-bgsec="#d4ca60">
          <h5 class="card-title">Omurga ve Omurilik Tümörleri</h5>
          <p class="card-text">Omuriliğin kendisinden kaynaklanan tümörler astrositom, glioblastom, ependimom vs.
            seçilmiş vakalarda tümörün cerrahi olarak çıkarılması gerekir.</p>
          <a href="omuriliktümörleri.html" class="btn btn-primary">Detay</a>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-5 ">
        <h3>UZMANLIK ALANLARI</h3>
        <p>Aşağıdaki hastalıklarla ilgili tüm soru ve randevu talepleriniz için iletişim sayfasından veya sosyal medya
          hesaplarımdan benimle iletişime geçebilirsiniz.</p>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <ul>
                <li>Skolyoz</li>
                <li>Ankilozan Spondilit (AS)</li>
                <li>Bel fıtığı</li>
                <li>Boyun Fıtığı</li>
                <li>Sırt Ağrısı</li>
                <li>Boyun Ağrısı</li>
                <li>Bel Kayması</li>
                <li>Omurga Tümörleri</li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul>
                <li>Omurga Kırığı</li>
                <li>Omurilik Kanal Darlığ</li>
                <li>Kifoz (Kamburluk)</li>
                <li>Bel ağrısı</li>
                <li>Omurga Eğrilikleri</li>
                <li>Omurilik Tümörleri</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7 ">
        <img src="assests/img/uzmanlik-alanlari-kolaj.jpg" alt="">
      </div>
    </div>
  </div>
  <div class="container">
    <h2>Hastalarımız Hakkımızda Ne Dedi?</h2>
    <button class="accordion">A.. K..</button>
    <div class="panel">
      <p>Hasta yorumlarını inceleyip, araştırarak tercih ettik Uğur Bey’i. Annemin belinde kırık vardı, bunun için bir
        ameliyat geçirdi. Kırıklar yerine vidalar takıldı. Ameliyat sonrasında normal yaşantısına döndü. Tüm
        hizmetlerinden çok memnun kaldık. Çok samimi ve çok güleryüzlü bir hekim.</p>
    </div>
    <button class="accordion">U.. D..</button>
    <div class="panel">
      <p>Bacak ağrısı ve uyuşukluk şikayeti için gittim Uğur Bey’e. Şikayetlerim üzerine bir ameliyat süreci geçirdim.
        Kendisinden ve herşeyinden çok memnunum, güleryüzlü ve samimi bir doktor. Bende anestezi hemşiresiyim, kendisini
        tanıyordum ve başarılarını biliyorum bundan dolayı tercih ettim.</p>
    </div>
    <button class="accordion">R..E..</button>
    <div class="panel">
      <p>Kızımın skolyoz şikayeti üzerine gittik. Cerrahi işlem geçekleştirildi. Kızım 10 yaşında, ameliyatı çok
        başarılı geçti. Henüz 10 gün olmasına rağmen kısa sürede toparladı, şu an oldukça iyi durumda. Bugün kontrole
        gideceğiz, dikişleri alınacak. Ekibi de kendisi de çok ilgili ve işinde uzmanlar.</p>
    </div>
<?php 
 require 'includes/footer.php'; 
 require 'includes/script.php'; 

?>