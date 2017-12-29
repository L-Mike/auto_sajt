<?php

include 'db.php';
        
include 'pretraga.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Autosajt.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Autosajt.com - Sve za Vaš automobil, sigurno ćete pronaći kod nas. Od auto servisa, prodavnica auto delova, do ulepšavanja Vašeg ljubimca. Na našem sajtu u samo par koraka dobijate sve potrebne informacije. Mi se ne bavimo uslugama, već spajamo Vas sa ljudima koji profesionalno obavljaju svoj posao."/>
  <meta name="keywords" content="auto sajt, automobili, auto,  polovni delovi, perionica, auto servis, autoelektrika, polovni automobili, auto centar, osiguranje vozila, šlep služba, auto delovi, vulkanizer, auto stakla, reparirani delovi, limarija, otkup vozila, regisracija vozila, tuning, naplata stete, zatamljivanje stakala, navigacije, tapaciranje, polovni delovi, alarmi, navigacija, muzika, prodavnica auto delova"/>
  <meta name="robots" content="index, follow"/>
  <meta http-equiv="Content-Type" content="text/html; charaset=UTF-8"/>
  <meta name="google-site-verification" content="Yl8wrPGRPjk1R-jYC3C_TpH-hmbkn6GpW8mPporfT7U" />
  <meta name="author" content="Saša i Miloš">
  <meta property="og:title" content="Autosajt.com"/>
  <meta property="og:site_name" content="Autosajt.com"/>
  <meta property="og:description" content="Autosajt.com - Sve za Vaš automobil, sigurno ćete pronaći kod nas. Od auto servisa, prodavnica auto delova, do ulepšavanja Vašeg ljubimca. Na našem sajtu u samo par koraka dobijate sve potrebne informacije. Mi se ne bavimo uslugama, već spajamo Vas sa ljudima koji profesionalno obavljaju svoj posao.">
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="http://www.autosajt.com"/>
  <meta property="og:image" content="http://www.autosajt.com/images/autosajt_logo.jpg"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/responsiveslides.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Exo:700" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="manifest.json">
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#000">
  <meta name="msapplication-TileColor" content="#000">
  <meta name="msapplication-TileImage" content="mstile-150x150.png">
  <meta name="theme-color" content="#fff">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <script src="js/responsiveslides.js"></script>
</head>
<body>

<?php include_once("analyticstracking.php") ?>

<div class="fixed">
  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <!--<a class="navbar-brand" href="index.php"><img src="images/logo.png"></a>-->
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">POČETNA</a></li>
          <li><a href="popusti.php">POPUSTI</a></li>
          <li><a href="prijatelji-sajta.php">PRIJATELJI SAJTA</a></li>
          <li><a href="kontakt.php">KONTAKT</a></li>
        </ul>
      </div>
    </div>
  </nav>
</div> 
      
<div class="container-fluid">    
    <div class="col-sm-2 sidenav">
      <a href="http://www.centars.rs" target="_blank">
       <img src="images/baner.jpg" class="left-banner">
      </a>
    </div>
    
    <div class="col-sm-8">
      <div class="row content">
          <div class="col-sm-12">
              <h5>Sve što Vam treba za Vaš automobil!</h5>
          </div>
          <div class="col-sm-12">
             <ul class="rslides" id="slider1">
               <li><a href="harli.php"><img src="images/slider_images/harli_baner.jpg"></a></li>
               <li><a href="http://www.automatskimenjacibeograd.com" target="_blank"><img src="images/slider_images/slavko_baner.jpg"></a></li>
             </ul>
          </div>
          <div class="col-sm-12">
              <hr class="line">
          </div>
          <div class="col-sm-3 text-center">
             <form action="lista.php" method="post">
                  <select class="form-control select" name="city_name" id="gradovi">
                    <option value="">-GRAD-</option>
                   
                    <?php
                
                    while($row = mysqli_fetch_array($result2)) {
                
                    ?>
                    
                    <option value="<?php echo $row['city_name'];?>"><?php echo $row['city_name'];?></option>
                    
                    <?php
                        
                    }
    
                    ?>
                    
                  </select>
          </div>
          <div class="col-sm-3 text-center">
                  <select class="form-control select" name="delatnost_name" id="delatnosti">
                    <option value="">-DELATNOST-</option>
                    <optgroup label="SERVISI:">
                    
                    <?php
                
                    while($row = mysqli_fetch_array($result3)) {
                
                    ?>
                    
                    <option value="<?php echo $row['delatnost_name'];?>"><?php echo $row['delatnost_name'];?></option>
                    
                    <?php
                        
                    }
    
                    ?>
                    
                    </optgroup>
                    <optgroup label="DELOVI:">
                      
                    <?php
                
                    while($row = mysqli_fetch_array($result4)) {
                
                    ?>
                    
                    <option value="<?php echo $row['delatnost_name'];?>"><?php echo $row['delatnost_name'];?></option>
                    
                    <?php
                        
                    }
    
                    ?> 
                    </optgroup>
                    <optgroup label="PLACEVI:">
                    
                    <?php
                
                    while($row = mysqli_fetch_array($result5)) {
                
                    ?>
                    
                    <option value="<?php echo $row['delatnost_name'];?>"><?php echo $row['delatnost_name'];?></option>
                    
                    <?php
                        
                    }
    
                    ?> 
                    
                    </optgroup>
                    <optgroup label="ESTETIKA:">
                        
                    <?php
                
                    while($row = mysqli_fetch_array($result6)) {
                
                    ?>
                    
                    <option value="<?php echo $row['delatnost_name'];?>"><?php echo $row['delatnost_name'];?></option>
                    
                    <?php
                        
                    }
    
                    ?>
                     
                    </optgroup>
                    <optgroup label="OSTALO:">
                        
                    <?php
                
                    while($row = mysqli_fetch_array($result7)) {
                
                    ?>
                    
                    <option value="<?php echo $row['delatnost_name'];?>"><?php echo $row['delatnost_name'];?></option>
                    
                    <?php
                        
                    }
    
                    ?>
                     
                    </optgroup>
                  </select>
          </div>
          <div class="col-sm-3 text-center">
              <select class="form-control select" name="marka_name" id="marke_vozila">
                  <option value="">-MARKA VOZILA-</option>
                  
                  <?php
                  
                  while($row = mysqli_fetch_array($result8)) {
                
                    ?>
                    
                    <option value="<?php echo $row['marka_name'];?>"><?php echo $row['marka_name'];?></option>
                    
                    <?php
                        
                    }
    
                    ?>
                  
              </select>
          </div>
          <div class="col-sm-3">
             <br>
              <button class="btn btn-block" type="submit" name="submit"><span class="fa fa-search"></span> Pretraga</button>
              </form>
          </div>
          <div class="col-sm-12">
              <img src="images/pretraga.jpg" class="line2">
          </div>                  
                           
          <div class="col-sm-12 col-md-12 col-lg-12">
          <br>
          <br>
           <div class="col-sm-12 col-md-4 col-lg-4" style="padding-top: 20px;">
             <a href="reno-paunovic.php">
               <img src="images/paunovic_logo.PNG" class="img-responsive">
             </a>  
           </div>
           <div class="col-sm-12 col-md-4 col-lg-4" style="padding-top: 20px;">
             <a href="car-rental-studio.php">
               <img src="images/car-rental-studio_logo.png" class="img-responsive">
             </a>  
           </div>
           <div class="col-sm-12 col-md-4 col-lg-4" style="padding-top: 20px;">
             <a href="ristic.php">
               <img src="images/ristic_logo.jpg" class="img-responsive">
             </a>
           </div>
           <div class="col-sm-12 col-md-4 col-lg-4" style="padding-top: 20px;">
            <br>
             <a href="fiat-delovi-indjija.php">
               <img src="images/fiat-delovi_logo.jpg" class="img-responsive">
             </a>  
           </div>
           <div class="col-sm-12 col-md-4 col-lg-4" style="padding-top: 20px;">
            <br>
             <a href="savin.php">
               <img src="images/savin_logo.jpg" class="img-responsive">
             </a>  
           </div>
           <div class="col-sm-12 col-md-4 col-lg-4" style="padding-top: 20px;">
            <br>
             <a href="autostikeri.php">
               <img src="images/autostikeri_logo.jpg" class="img-responsive">
             </a>  
           </div>
           <div class="col-sm-12 col-md-4 col-lg-4" style="padding-top: 20px;">
            <br>
             <a href="polovni-delovi-mercedes.php">
               <img src="images/pdm_logo.jpg" class="img-responsive">
             </a>  
           </div>
           <div class="col-sm-12 col-md-4 col-lg-4" style="padding-top: 20px;">
            <br>
             <a href="online-delovi.php">
               <img src="images/online_delovi_logo.jpg" class="img-responsive">
             </a>  
           </div>
           <div class="col-sm-12 col-md-4 col-lg-4" style="padding-top: 20px;">
            <br>
             <a href="dare.php">
               <img src="images/dare_logo.jpg" class="img-responsive">
             </a>  
           </div>
           <div class="col-sm-12 col-md-4 col-lg-4" style="padding-top: 20px;">
            <br>
             <a href="vag-delovi.php">
               <img src="images/vag-delovi_logo.jpg" class="img-responsive">
             </a>  
           </div>
          </div>
         </div>
        </div>   
    
    <div class="col-sm-2 sidenav">
      <a href="http://www.centars.rs" target="_blank">
        <img src="images/baner.jpg" class="right-banner">
      </a>
    </div>
  </div> 

<div class="fixed">
  <footer class="footer footer-bar">
    <div class="row display-tbl">
            <div class="col-xs-4 display-cell"><strong>&copy; 2017 Autosajt.com</strong></div>
            <div class="col-xs-4 display-cell"><img src="images/logo.png" class="img-responsive" style="height: 32px; width: 135px;"></div>
            <div class="col-xs-4 display-cell">
              <span><a href="https://www.facebook.com/autosajt" target="_blank"><img src="images/facebook_logo.png" style="height: 32px; width: 32px;"></a></span>
              <span><a href="https://www.instagram.com/autosajt" target="_blank"><img src="images/instagram_logo.png" style="height: 32px; width: 32px;"></a></span>
            </div>
    </div>
  </footer>
</div>

<script>   

elements = document.getElementsByTagName("select");
for(i=0; i < elements.length ; i++) {
 elements[i].selectedIndex= 0;
} 
    
</script>

<script>

    $(function () {
      $("#slider1").responsiveSlides({
        maxwidth: 1920,  
        speed: 800
      });
    });
        
</script>        

</body>
</html>