<!DOCTYPE html>
<html>
<head>

<title>Habranyi Klíma - Kapcsolat</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "icon" href = "images/laci_logo3.png"  type = "image/x-icon">
<meta name="description" content="Klíma szerelés, forgalmazás és karbantartás - teljeskörű segítséget nyújtunk Budapesten és országszerte. Gyors, rugalmas munkavégzés - tapasztalt csapattal - maximális odafigyeléssel. -Habranyi Klíma - Habrányi László - Habranyiklima.hu - habranyiklima" />
 <link href="style.css" type="text/css" rel="stylesheet" />
 
 <style>
 .image-container {
  background-image: url("images/slide1.jpg"); /* The image used - important! */
  background-size: cover;
  position: relative; /* Needed to position the cutout text in the middle of the image */
  height: 300px; /* Some height */
}

.text2 {
  background-color: white;
  color: black;
  font-size: 5vw; /* Responsive font size */
  font-weight: bold;
  margin: 0 auto; /* Center the text container */
  padding: 5px;
  width: 60%;
  text-align: center; /* Center text */
  position: absolute; /* Position text */
  top: 50%; /* Position text in the middle */
  left: 50%; /* Position text in the middle */
  transform: translate(-50%, -50%); /* Position text in the middle */
  mix-blend-mode: screen; /* This makes the cutout text possible */
}

* {
  box-sizing:border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

.container {
  padding: 64px;
}

.row:after {
  content: "";
  display: table;
  clear: both
}

.column-66 {
  float: left;
  width: 66.66666%;
  padding: 20px;
}

.column-33 {
  float: left;
  width: 33.33333%;
  padding: 20px;
}

.large-font {
  font-size: 48px;
}

.xlarge-font {
  font-size: 64px
}

.button {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  background-color: #04AA6D;
}

.img {
  display: block;
  height: auto;
  max-width: 100%;
}

@media screen and (max-width: 1000px) {
  .column-66,
  .column-33 {
    width: 100%;
    text-align: center;
  }
  
  .large-font {
  font-size: 28px;
}

.xlarge-font {
  font-size: 34px
}

.button {

  font-size: 26px;

}

.container {
  padding: 34px;
}
  
  .img {
    margin: auto;
  }
}


 </style>
</head>
<body>

<div class="header">
  <img class="header-logo2" src="images/laci_logo3.png" width="100" alt="Logo"/>  <a  class="head-tel"> Beszerelés, javítás, szervízelés.</a>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
      <li><a class="menutext" href="index.php"> Főoldal</a></li>
      <li><a class="menutext" href="product.php"> Termékeink</a></li>
      <li><a class="menutext" href="intro.php"> Rólunk</a></li>
      <li><a class="menutext" href="contact.php"> Kapcsolat</a></li>
	  <li><a class="menutext" href="gallery.php"> Munkáink</a></li>
	  <li><a class="menutext" href="allami.php"> Állami Támogatás</a></li>
	  	  <div class="fbdiv">
	  	  </br>
	  	  </br>
    <ul>
		<!--  Facebook doboz 		 -->
					<div class="card2">
  <img class="avatarlogo" src="images/avatar2.jpg" alt="Avatar" style="width:100%">
  <div class="container5">
    <h3><b>Habrányi László</b></h3> 
    <h3><b>Klíma és hőszivattyú berendezés-szerelő</b></h3>
  </div>
</div>
	</ul></div>
    </ul>
  </div>





  <div class="col-6 col-s-9">
    <div class="image-container">
  <div class="text2">Kapcsolat</div>
  </div>


<div style="text-align:center">
  <h2>Lépjen velünk kapcsolatba</h2>
</div>

<!-- The App Section -->
<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"><b>Telefonon</b></h1>
      <h1 class="large-font" style="color:MediumSeaGreen;"><b>+36 (70) 411 9656</b></h1>
      <p><span style="font-size:36px">Hétköznap 08:00-18:00</span></p>
      <button onclick="window.location.href='tel:06704119656';" class="button">Hívás Most!</button>
    </div>
    <div class="column-33">
        <img class="img" src="images/phone.png" width="335" height="471">
    </div>
  </div>
</div>

<!-- Clarity Section -->
<div class="container" style="background-color:#f1f1f1">
  <div class="row">
    <div class="column-33">
      <img class="img" src="images/email.png" alt="App" width="335" height="471">
    </div>
    <div class="column-66">
      <h1 class="xlarge-font"><b>E-mailben</b></h1>
      <h1 class="large-font" style="color:red;"><b>info@habranyiklima.hu</b></h1>
      <p><span style="font-size:24px">Írjon bármikor, és egy munkanapon belűl felvesszük önnel a kapcsolatot.</span></p>
    </div>
  </div>
</div>

<!-- The App Section -->
<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"><b>Facebookon</b></h1>
      <h1 class="large-font" style="color:MediumSeaGreen;"><b>Kövessen bennünket!</b></h1>
      <p><span style="font-size:36px">Írjon bármikor, és egy munkanapon belűl felvesszük önnel a kapcsolatot.</span></p>
      <button onclick="window.location.href='https://www.facebook.com/habranyiklima';" class="button">Ugrás a Facebook-ra</button>
    </div>
    <div class="column-33">
        <img class="img" src="images/fblogo.png" width="335" height="471" >
    </div>
  </div>
</div>

<!-- The App Section -->
<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"><b>Instagram</b></h1>
      <h1 class="large-font" style="color:MediumSeaGreen;"><b>Kövessen bennünket itt is!</b></h1>
      <p><span style="font-size:36px">Kövesse nyomon az aktuális munkáinkat.</span></p>
      <button onclick="window.location.href='https://instagram.com/habranyi_klima?utm_medium=copy_link';" class="button">Ugrás az Instagramra</button>
    </div>
    <div class="column-33">
        <img class="img" src="images/iglogo.png" width="335" height="471" >
    </div>
  </div>
</div>



  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2>Telefonszám?</h2>
      <p>+36 (70) 411 9656</p>
      <h2>E-mail?</h2>
      <p>info@habranyiklima.hu</p>
      <h2>Hol?</h2>
      <p>Az ország egész területére kiterjednek a szolgáltatásaink.</p>
    </div>
  </div>
</div>

<div class="footer">
<div>
			</div>
				<div class="footer-content">
				<ul>
					<a href="https://www.facebook.com/habranyiklima" class="link"> Facebook</a>
				
				</ul>
				</div>
				<div class="footer-content">
				<ul>
					<a href="faq.php" class="link"> GY.I.K.</a>
				
				</ul>
				</div>				
				<div class="footer-content">
				<ul>
				
					<a href="selfinfo.php"  class="link"> Lemler Márk &copy 2021 </a>
				</ul>
				</div>
</div>
</div>

</body>
</html>
