<html lang="en">
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("/w3images/coffeehouse.jpg");
  min-height: 75%;
}

.menu {
  display: none;
}
</style>
</head>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-black">ULTAH</a>
    </div>
    <div class="w3-col s3">
      <a href="#menu" class="w3-button w3-block w3-black">JALAN</a>
    </div>
    <div class="w3-col s3">
      <a href="#where" class="w3-button w3-block w3-black">21</a>
    </div>
  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:90px">the<br>Cafe</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">15 Adr street, 5015</span>
  </div>
</header>


<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">Wiii Ultah</span></h5>
    <p>selamat ulang tahun sayangku semoga di tahun ini apa yang kamu mau kamu capai bisa terwujud.
         Ngga usah banyak banyak, ngga udah besar besar yang kecapai, cukup bisa tidur teratur sama lebih bisa jaga dirimu sendiri udah bagus itu.
         Sama harus masih sayang sama aku juga xixixi.
         Mungkin banyak impian besarmu. Tapi kamu bisa capai hal kecil aja udah bagus.
        Yang penting udah lebih dari tahun kemarin. Mungkin tahun kemarin banyak hal yang ngga bisa kamu capai,
        tapi aku yakin kamu udah berusaha. Kamu aja berani buat masuk organisasi, daftar kerja. Aku ngga bisa gitu
        , aku bangga sama kamu. semangat ya sayangku
    </p>
    <p>Aku pengin ada di tiap kamu memulai sampai bisa jadi yang kamu mau, jangan sungkan buat cerita apa aja.
        Mungkin aku emang gampang nesu tapi aku sayang kamu. Aku mau kamu puas sama hidupmu. enjoy kehidupanmu.
    </p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>Noted. maaf ini webnya dadakan wkwkw</i></p>
    </div>
  </div>
</div>

<!-- Menu Container -->
<div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:700px">
 
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">Jalan</span></h5>
  
    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
        <div class="w3-col s6 tablink">seru</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
        <div class="w3-col s6 tablink">xixixi</div>
      </a>
    </div>

    <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
      <h5>Yey brangkat</h5>
      <p class="w3-text-grey">Happy happy pertama kali kita ke solo</p><br>
      <img src="3.jpg" style="width:100%;max-width:400px;margin-top:32px;">
    
      <h5>Pulangnya bedmod wkwkw</h5>
      <p class="w3-text-grey">Aku yang salah sih wkwkwk, tapi seru kok kapan kapan lagi ya</p><br>
      <img src="4.jpg" style="width:100%;max-width:400px;margin-top:32px;">
    
    </div>

    <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
      <h5><img src="1.jpg" style="width:100%;max-width:400px;margin-top:32px;"></h5>
      <h5>makananya mahalll tapi view bagus sih</h5>

    
      <h5><img src="2.jpg" style="width:100%;max-width:400px;margin-top:32px;"></h5>
      <h5>Ini the best sih</h5>

      <h5><img src="5.jpg" style="width:100%;max-width:400px;margin-top:32px;"></h5>
      <h5>Seneng banget keliatannya dapet tiket gratis</h5>

      <h5><img src="6.jpg" style="width:100%;max-width:400px;margin-top:32px;"></h5>
      <h5>Penghuni kos seram ter sksksksk</h5>

      <h5><img src="7.jpg" style="width:100%;max-width:400px;margin-top:32px;"></h5>
      <h5>aduhai galaknya ya kadang galak sih tapi lucu kamu</h5>

      <h5><img src="8.jpg" style="width:100%;max-width:400px;margin-top:32px;"></h5>
      <h5>ssebelum tragedi awokwkwkwk</h5>

      <h5><img src="9.jpg" style="width:100%;max-width:400px;margin-top:32px;"></h5>
      <h5>mbak mbak pembuat kopi mantap</h5>
    
    </div>  
 
  </div>
</div>

<!-- Contact/Area Container -->
<div class="w3-container" id="where" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">Udah 21 yah</span></h5>
    <p>Banyak hal yang harus kita capai, mungkin kedepannya kita bakal jarang ketemu. Aku sibuk ngonten.
        Mungkin kamu sibuk organisasi. Mungkin kita bakal sulit ketemu tapi aku sayang kamu kok. Aku suka liat
        kamu usaha kerja keras, kagum aku sama kamu semoga aku bisa se berani kamu. Yok kita mulai bareng
        capai mimpi kita. Mungkin kita sama sama cape kedepannya entah aku yang bedmod atau kamu, tapi aku masih sayang kamu dan bakal begitu terus
        . Maaf kalo aku banyak salah sama kamu. Semangat terus ya biar nanti kita bisa hidup enak. Aku pengin berusaha buat kamu Seneng
        . Lov u
    <p> Udah mau setahun kita udah banyak lika liku nya wkwkwk, semoga kita bisa terus barengan. Jujur, aku pingin kita kaya gini terus
        bisa keluar hepi hepi ketawa tawa, ini zona paling nyaman. Tapi waktu terus jalan, jadi banyak hal yang harus berubah juga kedepannya.
        Aku sayang kamu, apapun masalah kita nanti, yok sama sama kita pertahanin hubungan ini. Aku ngga bakal nyerah sama kamu. LOv UUu
    </p>
   

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>

</body>
</html>
