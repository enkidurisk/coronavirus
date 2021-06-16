<?php 
  $db = mysqli_connect('localhost','root','','coronavirus');
  $slider = mysqli_query($db, "SELECT * from slider LIMIT 5");
  $cardslide = mysqli_query($db, "SELECT * from cardpoint LIMIT 4");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Utama Coronavirus</title>
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

    <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon" href="image/covid256.png">
    <script src="serviceworker/index.js"></script>
</head>
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
            @media(max-width: 780px){
              #kopingGambar{
                width: 100%;
              }
            }
            #carousel-example-2{
              
              height: 90vh;
            }
          .view img{
            height: 92vh;
          } 
          #responsiveImg img{
            width: 60%;
          }
        @media(max-width: 1030px){
          #carousel-example-2{
              height: 30vh;
            }
            .view img{
              height: 30vh;
            }
        }
        @media(max-width: 780px){
            #carousel-example-2{
              height: 300px;
            }
            .view img{
              height: 310px;
            }
              #responsiveImg img{
              width: 100%;
            }
            .card img{
            height: 220px;
          }
          }


</style>
<body style="background: #101010;">
            <!--navbar-expand-lg to config responsive-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
              <a class="navbar-brand text-info" href="about">COVID-19 Enkidu</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <!--Start navbar item-->
                      <li class="nav-item active">
                          <a class="nav-link" href="beranda">Beranda</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="sebaran">Data Sebaran</a>
                      </li>
                      <li class="nav-item">
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

        <br><br>
                  
           <!--Launch corona indonesia-->
   <div class="container rounded-sm mt-4">
  <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">
  <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
      <!--Indicators-->
      <ol class="carousel-indicators">
        <?php 
          $no = 0;
          for ($no=0; $no < 5; $no++) { 
        ?>
          <li data-target="#carousel-example-2" data-slide-to="<?php echo $no; ?>" class="<?php if ($no == 0) {
            echo 'active';
          }else {
            echo 'notactive';
          } ?>"></li>
        <?php } ?>
      </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <?php 
          $no = 0;
          while ($OpenRow = mysqli_fetch_array($slider)) { 
            ?>
            <div class="carousel-item <?php if ($no == 0) {
              echo 'active';
            }else {
              echo 'notactive';} ?>">
              <div class="view"><!--View Slider start-->
                <img class="d-block w-100 rounded-sm" src="<?php echo $OpenRow['picture']; ?>">
                  <div class="carousel-caption caption">
                  <a class="h3-responsive text-white" onclick="Javascript: return confirm('Pergi Ke <?php echo $OpenRow['title']; ?>');"href="<?php echo $OpenRow['link'] ?>" style="cursor: pointer; font-size: 23px;"><?php echo $OpenRow['title']; ?></a>
                    <p><?php echo $OpenRow['description']; ?></p>
                </div>
              </div><!--View Slider end-->
            </div>
            <div class="mask rgba-black-light"></div>

          <?php $no++;} ?>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
<!--/.Carousel Wrapper-->
</div><!--Lock-->


<br><br><br>
            <h1 class="text-center text-white">Live Indonesia</h1>
            <hr class="border-info">
            <h3 class="text-center text-white" id="indonesiaReportCorona"><i class="fas fa-spinner fa-spin"></i></h3>
          <div class="row text-center">
              <!--New Data After Recovered Base 1-->
                  <div class="col-md-3  mt-4">
                      <div class="bg-dark box text-white rounded-sm" style="background: #086f81;">
                        <div class="row">
                              <div class="col-md-12 p-2">
                                  <h5 id="PersentPositif">Positif</h5>
                                  <h2 id="lokal-negara-positif">0</h2>
                                  <h5 id="Kasus-baru-di-indonesia">Orang</h5>
                              </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-3 mt-4">
                    <div class="bg-dark box text-white rounded-sm" style="background: #8f3e29;">
                        <div class="row" >
                              <div class="col-md-12 p-2">
                                  <h5 id="persentaseKematian">Kematian</h5>
                                  <h2 id="lokal-negara-kematian">0</h2>
                                  <h5 id="Kasus-kematian-di-indonesia">Orang</h5>
                              </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                   <div class="bg-dark box text-white rounded-sm" style="background: #2d7531;">
                     <div class="row">
                          <div class="col-md-12 p-2">
                              <h5 id="persentaseSembuh">Sembuh</h5>
                              <h2 id="lokal-negara-sembuh">0</h2>
                              <h5 id="Sembuh-indonesia">Orang</h5>
                          </div>
                    </div>
                  </div>
              </div>
              <div class="col-md-3 mt-4 mb-4">
                  <div class="bg-dark box text-white rounded-sm" style="background: #30497e;">
                    <div class="row ">
                          <div class="col-md-12 p-2">
                              <h5 id="persentDirawat">Dirawat</h5>
                              <h2 id="lokal-negara-aktif">0</h2>
                              <h5 id="PasienIndoDirawat">Orang</h5>
                          </div>
                    </div>
                </div>
            </div>
            </div>


<script>
        function tab_1(params) {
                    var slide_2 = window.open("https://sports.sindonews.com/read/74214/51/10-olahraga-favorit-saat-new-normal-1592485617",'_blank');
                    slide_2.focus();
                  }

                  function tab_2(params) {
                    var slide_5 = window.open("https://www.pikiran-rakyat.com/teknologi/pr-011177122/kaleidoskop-2020-ini-10-game-terlaris-dan-paling-banyak-dimainkan-di-steam-among-us-masuk-daftar",'_blank');
                    slide_5.focus();
                  }

    </script>
  
  <br><br>
  <h3 class="text-white text-center">Informasi Seputar Virus corona</h3>
  <hr class="border-info">
  <div class="card-deck">
    <?php while ($OpenCard = mysqli_fetch_array($cardslide)) { ?>
        <div class="card bg-dark text-white">
        <img src="<?php echo $OpenCard['picture']; ?>" class="card-img-top" alt="..." height="170">
          <div class="card-body">
            <h5 class="card-title"><?php echo $OpenCard['title']; ?></h5>
            <p class="card-text"><?php echo $OpenCard['description']; ?></p>
          </div>
      </div>
      <?php } ?>
</div>
                  
<br><br>
    <hr class="border-info" style="margin-top: 2rem;">
            <div class="card text-white bg-dark mb-3">
              <h2 class="card-header text-center">Informasi lebih Lanjut</h2>
              <div class="card-body">
                <h4 class="card-title">Jelajahi Sumber lainnya</h4>
                <p class="card-text">Agar tidak ketinggalan informasi mengenai COVID-19</p>
                
                <a onclick="worldometers();" class="text-info">worldometers</a>,
                <a onclick="covid19();" class="text-info">covid19.go.id</a>,
                <a onclick="google();" class="text-info">Google COVID-19</a>

              </div>
            </div>




          </div>
            <script>
                function worldometers(params) {
                    var Launch = window.open("https://www.worldometers.info/coronavirus/","_blank");
                    Launch.focus();
                }
                function google(params) {
                    var newTab = window.open("https://www.google.com/search?safe=strict&sxsrf=ALeKk00eEdjJGfZNA5tosj2EOPcma--fzw%3A1604584041699&ei=aQKkX6eRKsTLrQGL0bSoCg&q=COVID-19&oq=COVID-19&gs_lcp=CgZwc3ktYWIQAzIECCMQJzIECCMQJzIECCMQJzIFCAAQsQMyAggAMgQIABBDMgUIABDLATICCAAyAggAMgUIABDLAToHCAAQsQMQQ1D_Wlj5ZGDuZ2gAcAB4AIAB_gGIAeAKkgEFMC41LjOYAQCgAQGqAQdnd3Mtd2l6wAEB&sclient=psy-ab&ved=0ahUKEwjn6cSuxevsAhXEZSsKHYsoDaUQ4dUDCAw&uact=5","_blank");
                    newTab.focus();
                    }
                function covid19(params) {
                    var Launch = window.open("https://covid19.go.id","_blank");
                    Launch.focus();
                }
            </script>

</div>

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

<script>
        setInterval(function() {
          getLocalInfo();
        }, 15000);

        $(document).ready(function(){
          getLocalInfo();
        });
        function getLocalInfo(params) {
                      //https://corona.lmao.ninja/v2/all
                        $.ajax({
                            url: 'https://corona.lmao.ninja/v2/countries',
                            success: function (data) {

                                    //Transfer Data from Barhome to LocalIndo   
                                
                                try {
                                    var json = data;
                                    var html = [];

                                    if(json.length > 0) {
                                        var i;
                                        for (i = 0; i < json.length; i++) {
                                            var localIndo = json[i];
                                            var namaNegara = localIndo.country;

                                        if (namaNegara === 'Indonesia') {
                                            document.getElementById("indonesiaReportCorona").innerHTML = new Date().toLocaleString('en-GB');
                                    var pasienPositif = new Number(localIndo.cases).toLocaleString('en-US');
                                    var pasienMeninggal = new Number(localIndo.deaths).toLocaleString('en-US');
                                    var pasienSembuh = new Number(localIndo.recovered).toLocaleString('en-US');
                                    var pasienDirawat = new Number(localIndo.active).toLocaleString('en-US');

                                    

                                    var kasusPositifBaru = new Number(localIndo.todayCases).toLocaleString('en-US');
                                    var kasusKematianBaru = new Number(localIndo.todayDeaths).toLocaleString('en-US');
                                    var pasienSembuhBaru = new Number(localIndo.todayRecovered).toLocaleString('en-US');
                                    
                                    //mathes percent
                                    var PercentCases = localIndo.cases;
                                    var PercentDeaths = localIndo.deaths;
                                    var PercentRecovered = localIndo.recovered;
                                    var PercentActive = localIndo.active;

                                    var newCases = localIndo.todayCases;
                                    var newDeaths = localIndo.todayDeaths;
                                    var newRecovered = localIndo.todayRecovered;
                                    
                                    var PercentCasesTotal = ((PercentCases/PercentCases) * 100).toFixed(0) + '%';
                                    var PercentDeathTotal = ((PercentDeaths/PercentCases) * 100).toFixed(2) + '%';
                                    var PercentRecoveredTotal = ((PercentRecovered/PercentCases) * 100).toFixed(2) + '%';
                                    var PercentActiveTotal = ((PercentActive/PercentCases) * 100).toFixed(2) + '%';

                                    var PasienBaruDirawat = new Number(newCases - newDeaths - newRecovered).toLocaleString("en-US");
                              

                                    $("#lokal-negara-positif").html(pasienPositif);
                                    $("#lokal-negara-kematian").html(pasienMeninggal);
                                    $("#lokal-negara-sembuh").html(pasienSembuh);
                                    $("#lokal-negara-aktif").html(pasienDirawat);
                                    $("#Pasien-negara-dirawat").html("Pasien Pemulihan");
                                    $("#pasien-berhasil-sembuh").html("Pasien Dirawat");
                                    $("#Kasus-baru-di-indonesia").html("+" + kasusPositifBaru + " Positif Baru");
                                    $("#Kasus-kematian-di-indonesia").html("+" + kasusKematianBaru + " Kematian Baru");
                                    $("#Sembuh-indonesia").html("+" + pasienSembuhBaru + "&nbspSembuh&nbspBaru");

                                    //Percent
                                    $("#PersentPositif").html('Positif ' + PercentCasesTotal);
                                    $("#persentaseKematian").html('Kematian ' + PercentDeathTotal);
                                    $("#persentaseSembuh").html('Sembuh ' + PercentRecoveredTotal);
                                    $("#persentDirawat").html('Dirawat ' + PercentActiveTotal);
                                    

                                    $("#PasienIndoDirawat").html(PasienBaruDirawat + ' Dirawat');
                                    
                                    


                                        }
                                        }
                                    }
                                   

                                } catch (error) {
                                    alert("Gagal mendapatkan Data Terinfeksi Coronavirus | COVID-19 Dari indonesia");
                                }
                            }
                        });
                    }


</script>
<!--ending-->