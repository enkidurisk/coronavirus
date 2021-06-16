<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feeds COVID-19</title>
    <link rel="shortcut icon" href="icon/covid19.ico" type="image/x-icon">


    <meta name="theme-color" content="#121212"/>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <!-- JS, Popper.js, and jQuery -->
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <!--CSS only-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body style="background: #101010; color: #ffffff;" >
            <!--navbar-expand-lg to config responsive-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
              <a class="navbar-brand text-info" href="about">COVID-19 Enkidu</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <!--Start navbar item-->
                        <li class="nav-item">
                            <a class="nav-link" href="beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sebaran">Data Sebaran</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="feeds">Feeds</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="covid19">Detail info</a>
                      </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0" action="https://www.bing.com/" method="GET">
                      <input class="form-control mr-sm-2" type="search" required name="q" placeholder="Pencarian bing.com" value="corona">
                      <button class="btn btn-outline-info my-2 my-sm-0" type="submit" data-toggle="tooltip" data-placement="bottom">Search Bing</button>
                    </form>
                </div>
          </nav>
          <br><br><br>

   <?php //&category=health&
   error_reporting(0); //if error network connections
                      
   $feeds = $_GET['feeds']; //Get Category CURL

   $curl = curl_init();
   curl_setopt($curl, CURLOPT_URL, "http://newsapi.org/v2/top-headlines?country=id&category=".$feeds."&apiKey=fc057b6fa9994decb4fe70b0d7d6044a");
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   $output = curl_exec($curl);
   curl_close($curl);
                      
   $newsData = json_decode($output, true);
    /*newsAPI key open access NO PURCHASE
    * me ba98b202c56b4956b1fb107d12a765c2
    * other fc057b6fa9994decb4fe70b0d7d6044a failed request http
    * other d2f3e838f7a44185bb9dcf19e047474c
    * other f463419c4e4c4ebd96549c95688e979b
    * other 12357179c684489daf9cc58df3e7e372
    * other 3964c57788ee4edcad4038d6bc318c18
    */
  
  ?>
<div class="container news">
<!--Start-->
<h1 class=" text-center">Feeds indonesia</h1>
<h5 class=" text-center">Rekomendasi Berita Lokal Populer Hari ini</h5>

        <div class="buttonhorizon">
              <a href="feeds">Rekomendasi</a>   <!--Error reporting (0) no samp log-->
              <a href="feeds?feeds=business">Bisnis</a>
              <a href="feeds?feeds=entertainment">Tren&nbspArtis</a>
              <a href="feeds?feeds=health">Kesehatan</a>
              <a href="feeds?feeds=science">Sains</a>
              <a href="feeds?feeds=sports">Olahraga</a>
              <a href="feeds?feeds=technology">Teknologi</a>
        </div>
        
<?php 
    date_default_timezone_set('Asia/Jakarta');
      //->articles from API get
    foreach ($newsData['articles'] as $News) 
      {
  ?>


<div class="card mb-3 bg-dark" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">                        <!--Type="image/jpg" for support add jpg if url not refused connect-->
      <embed src="<?php echo $News['urlToImage']; ?>" type="image/jpg" alt="<?php echo md5($News['title']); ?>" style="background: url('icon/breakingnews.jpg'); background-size: cover; background-repeat: no-repeat; color: transparent;" id="cardResponsive">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h6 class="card-title"><a <?php echo $News['title']; ?> href="<?php echo $News['url']; ?>" class="text-white" title="<?php echo ($News['title']);?>"><?php echo substr($News['title'],0,80).' ...Load more'; ?></a></h6> <!--substr($News['title'],0,35).'...';-->
        <p class="card-text mb-4"><?php echo $News['source']['name']; ?></p>
        
        <p class="card-text"><small class="text-white" id="BottomResponsive"><?php echo date('d F Y - H:i:s', strtotime($News['publishedAt'])). ' WIB'; ?></small></p>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<!--Ending foreach php-->
</div>
</div><!--Ending container-->


</div><!--ending responsive-->
</div>
<style>
.buttonhorizon{
  text-align: center;
  margin-top: 2%;
  margin-bottom: 2%;
  position: -webkit-sticky;
  position: sticky;
  top: 70px;
  z-index: 1000;
  

}
.buttonhorizon a{
  border: 2px solid #3d3d3d;
  padding: 10px;
  margin: 10px;
  margin-bottom: 20px;
  right: 20px;
  width: auto;
  color: #ffffff;
  font-size: 20px;
  text-decoration: none;
  border-radius: 30px;
  background: #202020;
  transition: .2s;
  
}
.buttonhorizon a:hover{
  background: #cacaca;  
  transform: scale(1);
  color: #0f0f0f;
}

  #cardResponsive{
    width: 100%; 
    height: 17vmax;
  }

  @media(max-width: 992px){
    #cardResponsive{
      height: 250px;
      
    }
    .buttonhorizon{
      display: flex;
      justify-content: baseline;
      overflow-x: auto;
      top: 50px;
    }
  }
  #BottomResponsive{
    position: absolute;
    bottom: 20px;
  }
</style>

<!--Warning for browser mobile is recomenndation country location your phone
that bug news API not working-->
    <!-- Footer -->
<footer class="page-footer font-small blue mt-4 pt-4 bg-dark text-white">

    <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">
    <!-- Grid row -->
    <div class="row">
        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">
        <!-- Content -->
        <h5 class="text-uppercase">Tentang Halaman Ini</h5>
        <p>Hanya Referensi Pembelajaran COVID-19 Yang dapat dilihat tanpa iklan dan popup</p>
        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none pb-3">
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
        <!-- Links -->
        <h5 class="text-uppercase">Sosial Media</h5>

        <ul class="list-unstyled">
            <li>
            <a href="https://www.instagram.com/srokhsb/" class="text-white">Instagram</a>
            </li>
            <li>
            <a href="https://www.facebook.com/enkidurisk/" class="text-white">Facebook</a>
            </li>
        </ul>
        </div>
        <!-- Grid column -->
        <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">FAQ</h5>

        <ul class="list-unstyled">
            <li>
            <a href="about" class="text-white">Tentang Kami</a>
            </li>
            <li>
            <a href="report" class="text-white">Laporkan Masalah</a>
            </li>
        </ul>
        </div>
        <!-- Grid column -->
    </div>
    <!-- Grid row -->
    </div>
    <!-- Footer Links -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 bg-secondary" id="CopyrightUser"><script>document.getElementById("CopyrightUser").innerHTML ='&copy ' + new Date().getFullYear() + "&nbspCopyright:";</script>
    <a href="https://github.com/EnkiduRisk" class="text-white"> enkidurisk</a>
  </div>
    <!-- Copyright -->

</footer>
    <!-- Footer -->
</body>
</html>
<style>
   /*Scrollbar*/
            ::-webkit-scrollbar{
                width: 5px;
                height: 0px;
                background: #0f0f0f;
                border-radius: 15px;
            }
            ::-webkit-scrollbar-thumb{
                width: 5px;
                height: 0px;
                background: #004430;
                border-radius: 15px;
            }
            ::-webkit-scrollbar-thumb:hover{
                width: 5px;
                height: 0px;
                background: #383838;
                border-radius: 15px;
            }
            /*body*/
            body{
                margin: 0;
                padding: 0;
                font-family: sans-serif;
            }
            html{
                scroll-behavior: smooth;
            }
</style>
     
<!--ending-->
