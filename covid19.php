

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Info COVID-19</title>
    <link rel="shortcut icon" href="icon/covid19.ico" type="image/x-icon">
    <meta name="theme-color" content="#121212">
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <!-- JS, Popper.js, and jQuery -->
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--CSS only-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    

</head>

<body style="background: #101010; color: #ffffff;">
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
                      <li class="nav-item">
                          <a class="nav-link" href="feeds">Feeds</a>
                      </li>
                      <li class="nav-item active">
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




      <!--Launch corona Global-->
     <!--Launch corona Global-->
     <div class="container mt-4">
          <input type="checkbox" class="switchcheckglobal" id="labeluser">
          <label for="labeluser">Realtime Global Review COVID-19</label>
          <div class="rounded-sm contentglobal a">
              <h1 class="text-center">Global Hari ini</h1>
              <hr class="border-info">
              <h3 class="text-center" id="GlobalReport"><i class="fas fa-spinner fa-spin"></i></h3>
            <div class="row text-center">
                <!--New Data After Recovered Base 1-->
                <div class="col-md-4 mt-4">
                        <div class="bg-dark box rounded-sm text-white"  style="background: #086f81;">
                          <div class="row">
                                <div class="col-md-12 p-2">
                                    <h5 id="jblhkasustotal">Positif</h5>
                                    <h2 id="data-kasus">0</h2>
                                    <h5 id="add-kasus">Orang</h5>
                                </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                      <div class="bg-dark text-white box rounded-sm" style="background: #8f3e29;">
                          <div class="row">
                                <div class="col-md-12 p-2">
                                    <h5 id="jblhmeninggaltotal">Kematian</h5>
                                    <h2 id="data-mati">0</h2>
                                    <h5 id="add-mati">Orang</h5>
                                </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-4 mt-4">
                     <div class="bg-dark box text-white rounded-sm" style="background: #2d7531;">
                       <div class="row">
                            <div class="col-md-12 p-2">
                                <h5 id="jblhsembuhtotal">Sembuh</h5>
                                <h2 id="data-sembuh">0</h2>
                                <h5 id="add-sembuh">Orang</h5>
                            </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="bg-dark box text-white rounded-sm" style="background: #30497e;">
                      <div class="row ">
                            <div class="col-md-12 p-2">
                                <h5 id="jblhdirawattotal">Dirawat</h5>
                                <h2 id="data-aktif">0</h2>
                                <h5 id="jblhsemuadirawattotal">Orang</h5>
                            </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 mt-4 ">
                    <div class="bg-dark box rounded-sm text-white" style="background: #6a336d;">
                      <div class="row">
                            <div class="col-md-12 p-2">
                                <h5>Pasien Kritis</h5>
                                <h2 id="data-critical">0</h2>
                                <h5 id="addcritical">Orang</h5>
                            </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 mt-4 ">
                    <div class="bg-dark box rounded-sm text-white"  style="background: #215174;">
                      <div class="row">
                            <div class="col-md-12 p-2">
                                <h5 id="totalTestgblpop">Total Tes Dunia</h5>
                                <h2 id="data-test">0</h2>
                                <h5 id="add-tes">Orang</h5>
                            </div>
                      </div>
                  </div>
              </div>

              <div class="col-md-6 mt-4">
                    <div class="bg-dark box rounded-sm text-white"  style="background: #506631;">
                      <div class="row">
                            <div class="col-md-12 p-2">
                                <h5>Penduduk Dunia</h5>
                                <h2 id="data-population">0</h2>
                                <h5 id="jblhpopulasi">Orang</h5>
                            </div>
                      </div>
                  </div>
              </div>

              <div class="col-md-6 m  mt-4">
                    <div class="bg-dark box rounded-sm text-white" style="background: #327939;">
                      <div class="row" >
                            <div class="col-md-12 p-2">
                                <h5>Wilayah Terinfeksi</h5>
                                <h2 id="data-country">0</h2>
                                <h5 id="add-country">Orang</h5>
                            </div>
                      </div>
                  </div>
              </div> 
           </div>  
        </div><!--Historycal Global-->


              <div class="rounded-sm contentglobal b">
              <h1 class="text-center">Riwayat Global</h1>
              <hr class="border-info">
              <h3 class="text-center" id="globalyesterday"><i class="fas fa-spinner fa-spin"></i></h3>
            <div class="row text-center">
                <!--New Data After Recovered Base 1-->
                <div class="col-md-4 mt-4">
                        <div class="bg-dark box rounded-sm text-white"  style="background: #086f81;">
                          <div class="row">
                                <div class="col-md-12 p-2">
                                    <h5 id="Run1cases">Positif</h5>
                                    <h2 id="data-kasusYesterday">0</h2>
                                    <h5 id="add-kasusYesterday">Orang</h5>
                                </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                      <div class="bg-dark text-white box rounded-sm" style="background: #8f3e29;">
                          <div class="row">
                                <div class="col-md-12 p-2">
                                    <h5 id="Run1deaths">Kematian</h5>
                                    <h2 id="data-matiYesterday">0</h2>
                                    <h5 id="add-matiYesterday">Orang</h5>
                                </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-4 mt-4">
                     <div class="bg-dark box text-white rounded-sm" style="background: #2d7531;">
                       <div class="row">
                            <div class="col-md-12 p-2">
                                <h5 id="Run1recovered">Sembuh</h5>
                                <h2 id="data-sembuhYesterday">0</h2>
                                <h5 id="add-sembuhYesterday">Orang</h5>
                            </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="bg-dark box text-white rounded-sm" style="background: #30497e;">
                      <div class="row ">
                            <div class="col-md-12 p-2">
                                <h5 id="Run1active">Dirawat</h5>
                                <h2 id="data-aktifYesterday">0</h2>
                                <h5 id="runtotalactive">Orang</h5>
                            </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 mt-4 ">
                    <div class="bg-dark box rounded-sm text-white" style="background: #6a336d;">
                      <div class="row">
                            <div class="col-md-12 p-2">
                                <h5>Pasien Kritis</h5>
                                <h2 id="data-criticalYesterday">0</h2>
                                <h5 id="Run1critical">Orang</h5>
                            </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 mt-4 ">
                    <div class="bg-dark box rounded-sm text-white"  style="background: #215174;">
                      <div class="row">
                            <div class="col-md-12 p-2">
                                <h5 id="Run1test">Total Tes Dunia</h5>
                                <h2 id="data-testYesterday">0</h2>
                                <h5 id="add-tesYesterday">Orang</h5>
                            </div>
                      </div>
                  </div>
              </div>

              <div class="col-md-6 mt-4">
                    <div class="bg-dark box rounded-sm text-white"  style="background: #506631;">
                      <div class="row">
                            <div class="col-md-12 p-2">
                                <h5>Penduduk Dunia</h5>
                                <h2 id="data-populationYesterday">0</h2>
                                <h5 id="Run1population">Orang</h5>
                            </div>
                      </div>
                  </div>
              </div>

              <div class="col-md-6 m  mt-4">
                    <div class="bg-dark box rounded-sm text-white" style="background: #327939;">
                      <div class="row" >
                            <div class="col-md-12 p-2">
                                <h5>Wilayah Terinfeksi</h5>
                                <h2 id="data-countryYesterday">0</h2>
                                <h5 id="add-countryYesterday">Orang</h5>
                            </div>
                      </div>
                  </div>
              </div> 
              </div>  
            </div>  
            </div>
            
            <div class="container">
            <div class="Canvas">
                <canvas id="myChart" class="rowered"></canvas>
                
            </div>
            <br>
            <!--<a href="sebaran#redirectchart">Lihat Di sebaran grafik dari sumber kami</a>-->
            <p class="text-warning">Kami Tidak menemukan sumber grafik covid19.go.id indonesia <a href="https://covid19.go.id">Lihat Sumbernya Di covid19.go.id</a></p>
            </div>



            <br>
               <!--Launch corona Indonesia-->
     <!--Launch corona Indonesia-->
     <div class="container mt-4">
          <input type="checkbox" class="switchcheckindo" id="labeluserindo">
          <label for="labeluserindo">Realtime Indonesia Review COVID-19</label>
          <div class="rounded-sm contentindo a">
              <h1 class="text-center">Indonesia Hari ini</h1>
              <hr class="border-info">
              <h3 class="text-center" id="indonesiaDate"><i class="fas fa-spinner fa-spin"></i></h3>
            <div class="row text-center">
                <!--New Data After Recovered Base 1-->
                <div class="col-md-4 mt-4">
                        <div class="bg-dark box rounded-sm text-white"  style="background: #086f81;">
                          <div class="row">
                                <div class="col-md-12 p-2">
                                    <h5 id="allidpositive">Positif</h5>
                                    <h2 id="indoPositive">0</h2>
                                    <h5 id="indonesiaNewPositive">Orang</h5>
                                </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                      <div class="bg-dark text-white box rounded-sm" style="background: #8f3e29;">
                          <div class="row">
                                <div class="col-md-12 p-2">
                                    <h5 id="alliddeath">Kematian</h5>
                                    <h2 id="indoDeath">0</h2>
                                    <h5 id="indonesiaNewDeath">Orang</h5>
                                </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-4 mt-4">
                     <div class="bg-dark box text-white rounded-sm" style="background: #2d7531;">
                       <div class="row">
                            <div class="col-md-12 p-2">
                                <h5 id="allidrecovered">Sembuh</h5>
                                <h2 id="indoRecovered">0</h2>
                                <h5 id="indonesiaNewRecovered">Orang</h5>
                            </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="bg-dark box text-white rounded-sm" style="background: #30497e;">
                      <div class="row ">
                            <div class="col-md-12 p-2">
                                <h5 id="allidactive">Dirawat</h5>
                                <h2 id="indoActive">0</h2>
                                <h5 id="totalallidactive">Orang</h5>
                            </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 mt-4 ">
                    <div class="bg-dark box rounded-sm text-white" style="background: #6a336d;">
                      <div class="row">
                            <div class="col-md-12 p-2">
                                <h5 id="allidtestpcr">Total Tes PCR</h5>
                                <h2 id="indoTest">0</h2>
                                <h5 id="indoTestOneMilion">Orang</h5>
                            </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 mt-4 ">
                    <div class="bg-dark box rounded-sm text-white"  style="background: #215174;">
                      <div class="row">
                            <div class="col-md-12 p-2">
                                <h5>Penduduk Indonesia</h5>
                                <h2 id="indoPopulation">0</h2>
                                <h5 id="allidpopulation">Penduduk</h5>
                            </div>
                      </div>
                  </div>
              </div>
            </div>  <!--end row-->
        </div><!--end container-->



          <div class="rounded-sm contentindo b">
              <h1 class="text-center">Riwayat Indonesia</h1>
              <hr class="border-info">
              <h3 class="text-center" id="indonesiaYesterday"><i class="fas fa-spinner fa-spin"></i></h3>
            <div class="row text-center">
                <!--New Data After Recovered Base 1-->
                <div class="col-md-4 mt-4">
                        <div class="bg-dark box rounded-sm text-white"  style="background: #086f81;">
                          <div class="row">
                                <div class="col-md-12 p-2">
                                    <h5 id="pct1Positive">Positif</h5>
                                    <h2 id="indoPositiveYesterday">0</h2>
                                    <h5 id="indonesiaNewPositiveYesterday">Orang</h5>
                                </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                      <div class="bg-dark text-white box rounded-sm" style="background: #8f3e29;">
                          <div class="row">
                                <div class="col-md-12 p-2">
                                    <h5 id="pct1Death">Kematian</h5>
                                    <h2 id="indoDeathYesterday">0</h2>
                                    <h5 id="indonesiaNewDeathYesterday">Orang</h5>
                                </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-4 mt-4">
                     <div class="bg-dark box text-white rounded-sm" style="background: #2d7531;">
                       <div class="row">
                            <div class="col-md-12 p-2">
                                <h5 id="pct1Recovered">Sembuh</h5>
                                <h2 id="indoRecoveredYesterday">0</h2>
                                <h5 id="indonesiaNewRecoveredYesterday">Orang</h5>
                            </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="bg-dark box text-white rounded-sm" style="background: #30497e;">
                      <div class="row ">
                            <div class="col-md-12 p-2">
                                <h5 id="pct1Active">Dirawat</h5>
                                <h2 id="indoActiveYesterday">0</h2>
                                <h5 id="total1Active">Orang</h5>
                            </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 mt-4 ">
                    <div class="bg-dark box rounded-sm text-white" style="background: #6a336d;">
                      <div class="row">
                            <div class="col-md-12 p-2">
                                <h5 id="pct1testpcr">Total Tes PCR</h5>
                                <h2 id="indoTestYesterday">0</h2>
                                <h5 id="indoTestOneMilionYesterday">Orang</h5>
                            </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 mt-4 ">
                    <div class="bg-dark box rounded-sm text-white"  style="background: #215174;">
                      <div class="row">
                            <div class="col-md-12 p-2">
                                <h5>Penduduk Indonesia</h5>
                                <h2 id="indoPopulationYesterday">0</h2>
                                <h5 id="id1totalpop">Penduduk</h5>
                            </div>
                      </div>
                  </div>
              </div>
              </div> <!--end row-->
        </div> <!--End container-->

        <br><br>
        <div class="mapcontent">
        <input type="checkbox" class="switchmapindo" name="" id="mapchecklabel">
        <label for="mapchecklabel">Map Indonesia Dan global</label>
          <div class="mapindoandglobal a">
                <h1 class="text-center text-white">Map Indonesia</h1>
                <iframe src="mapdataprovince.php" style="width: 100%; height: 590px; border-radius: 3px; border: none;"></iframe>
                <a href="mapdataprovince" class="text-center text-warning">Muat versi penuh map provinsi</a>
          </div>
         <div class="mapindoandglobal b">
            <h1 class="text-center text-white">Map Global</h1>
            <iframe src="https://mapbox-covid19.netlify.app/" style="width: 100%; height: 590px; border-radius: 3px; border: none;"></iframe>
            <a href="https://mapbox-covid19.netlify.app/" class="text-center text-warning">Muat versi penuh map global</a>
            </div>
          </div>
        <br><br>
 



 
</div><!--end responsive web-->
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
             /*Canvas*/
            .Canvas h2{
                text-align: center;
                font-size: 45px;
            }
            .Canvas{
                width: 100%;
                height: 85vh;
            }
            .rowered{
                text-align: center;
                box-shadow: 0px 10px 20px #000000;
                background: #1a1a1a;
                border-radius: 10px;
                margin: 50px 0px;
            }
            /*Phone using Desktop Version*/
            @media(max-width: 1030px){ 
                .Canvas{
                    width: 100%; 
                    height: 30vh;
                }
            }

            /*Phone Responsive*/
            @media(max-width: 780px){
                .Canvas{
                    width: 100%; 
                    height: 130vmin;
                }
            }


             /*Switch checkbox*/
            .contentglobal{
                display: none;
            }
            .contentglobal.a{
                display: block;
            }

            .switchcheckglobal:checked ~ .contentglobal.a{
                display: none;
            }
            .switchcheckglobal:checked ~ .contentglobal.b{
                display: block;
            }
            label{
                user-select: none;
            }
            
            .contentindo{
                display: none;
            }
            .contentindo.a{
                display: block;
            }
            .switchcheckindo:checked ~ .contentindo.a{
                display: none;
            }
            .switchcheckindo:checked ~ .contentindo.b{
                display: block;
            }
            label{
                user-select: none;
            }



            .mapindoandglobal{
                display: none;
            }
            .mapindoandglobal.a{
                display: block;
            }
            .switchmapindo:checked ~ .mapindoandglobal.a{
                display: none;
            }
            .switchmapindo:checked ~ .mapindoandglobal.b{
                display: block;
            }
            label{
                user-select: none;
            }
</style>

        
<script>


       /* window.oncontextmenu = function () {
        return false;
        }
        document.onkeydown = function (e) { 
            if (window.event.keyCode == 123 ||  e.button==2)    
            return false;
        }*/


                 
        $(document).ready(function () {
                    semuaData();
                    dataNegara();
                    semuaDatayesterday();
                    dataNegaraYesterday();
                });
            setInterval(function() {
                    semuaData();
                    dataNegara();
                    semuaDatayesterday();
                    dataNegaraYesterday();
                }, 15000);



                function semuaData(params) {
           $.ajax({
               //https://disease.sh/v2/all sedang bug   https://corona.lmao.ninja/v2/all
               url:'  https://corona.lmao.ninja/v2/all',
               success : function (data) {
                   try {

                       document.getElementById("GlobalReport").innerHTML = new Date().toLocaleString('en-GB');
                       var json = data;
                       var kasus = new Number(data.cases).toLocaleString('en-US');
                       var kasusbaru = new Number(data.todayCases).toLocaleString('en-US');
                       var Meninggal = new Number(data.deaths).toLocaleString('en-US');
                       var meninggalbaru = new Number(data.todayDeaths).toLocaleString('en-US');
                       var Sembuh = new Number(data.recovered).toLocaleString('en-US');
                       var SembuhBaru = new Number(data.todayRecovered).toLocaleString('en-US');
                       var kasusaktif = new Number(data.active).toLocaleString('en-US');
                       var kritis = new Number(data.critical).toLocaleString('en-US');
                       var totaltes = new Number(data.tests).toLocaleString('en-US');
                       var tes1jutapopulasi = new Number(data.testsPerOneMillion).toLocaleString('en-US');
                       var populasi = new Number(data.population).toLocaleString('en-US');
                       var wilayahterinfeksi = new Number(data.affectedCountries).toLocaleString('en-US');

                        
                       var gblkasus = data.cases;
                       var gblmeninggal = data.deaths;
                       var gblsembuh = data.recovered;
                       var gbldirawat = data.active;
                       var newgblkasus = data.todayCases;
                       var newgblmeninggal = data.todayDeaths;
                       var newgblsembuh = data.todayRecovered;
                       var newgblpopulation = data.population;
                       var newgbltestpop = data.tests;
                       var newcriticalgbl = data.critical;


                       var jblhkasus = ((gblkasus/gblkasus) * 100).toFixed(0) + "%";
                       var jblhmeninggal = ((gblmeninggal/gblkasus) * 100).toFixed(2) + "%";
                       var jblhsembuh = ((gblsembuh/gblkasus) * 100).toFixed(2) + "%";
                       var jblhdirawat = ((gbldirawat/gblkasus) * 100).toFixed(2) + "%";
                       var totalgbldirawat = new Number(newgblkasus - newgblmeninggal - newgblsembuh).toLocaleString('en-US');
                       var jblhpopulasi = ((gblkasus/newgblpopulation) * 100).toFixed(2);
                       var totalTestpopulation = ((newgbltestpop/newgblpopulation) * 100).toFixed(2) + "%";
                       var totalcriticalglobal = ((newcriticalgbl/gbldirawat) * 100).toFixed(2) + "%";


                       $("#data-kasus").html(kasus);
                       $("#data-mati").html(Meninggal);
                       $("#data-sembuh").html(Sembuh);
                       $("#data-aktif").html(kasusaktif);
                       $("#data-critical").html(kritis);
                       $("#data-test").html(totaltes);
                       $("#add-tes").html(tes1jutapopulasi + " Tes 1 jt populasi");
                       $("#data-population").html(populasi);
                       $("#data-country").html(wilayahterinfeksi);
                       $("#gblAktif").html(totalgbldirawat + "Dirawat");
                       $("#add-kritis").html("Kritis COVID-19");
                       $("#jblhpopulasi").html("Sekitar " + jblhpopulasi+"% " + "Terinfeksi");
                       $("#add-country").html("Terinfeksi COVID-19");

                       $("#jblhkasustotal").html('Positif ' + jblhkasus);
                       $("#jblhmeninggaltotal").html('Kematian ' + jblhmeninggal);
                       $("#jblhsembuhtotal").html('Sembuh ' + jblhsembuh);
                       $("#jblhdirawattotal").html('Dirawat ' + jblhdirawat);
                       $("#addcritical").html(totalcriticalglobal + " Dari total Dirawat");
                       $("#jblhsemuadirawattotal").html(totalgbldirawat + ' Dirawat');
                       $("#totalTestgblpop").html('Total Tes Dunia ' + totalTestpopulation);
                       

                       $("#add-kasus").html("+" + kasusbaru +" Positif Baru");
                       $("#add-mati").html("+" + meninggalbaru + " Kematian Baru");
                       $("#add-sembuh").html("+" + SembuhBaru + " Sembuh Baru");
                       

                   } catch (error) {
                       alert("Gagal mendapatkan data global");
                   }
               }
           });
       }

       function dataNegara(params) {
           $.ajax({
               // https://corona.lmao.ninja/v2/countries?sort=country bug https://corona.lmao.ninja/v2/countries
                url:'https://corona.lmao.ninja/v2/countries',
                success: function (data) {
                    try {
                        var json = data;
                        var html = [];
                        

                        if (json.length > 0) {

                            var i;
                            for (i = 0; i < json.length; i++) {
                                var dataNegara = json[i];
                                var namaNegara = dataNegara.country;

                                if (namaNegara === 'Indonesia') {
                                    document.getElementById("indonesiaDate").innerHTML = new Date().toLocaleString("en-GB");
                                    var kasus = new Number(dataNegara.cases).toLocaleString('en-US');
                                    var mati = new Number(dataNegara.deaths).toLocaleString('en-US');
                                    var Sembuh = new Number(dataNegara.recovered).toLocaleString('en-US');
                                    var aktif = new Number(dataNegara.active).toLocaleString('en-US');
                                    var dites = new Number(dataNegara.tests).toLocaleString('en-US');
                                    var tesper1juta = new Number(dataNegara.testsPerOneMillion).toLocaleString('en-US');
                                    var populasi = new Number(dataNegara.population).toLocaleString('en-US');
                                    var PositifBaruIndonesia = new Number(dataNegara.todayCases).toLocaleString('en-US');
                                    var KematianBaruIndonesia = new Number(dataNegara.todayDeaths).toLocaleString('en-US');
                                    var PasienSembuhIndonesia = new Number(dataNegara.todayRecovered).toLocaleString('en-US');


                                    //COVID-19 indonesia Now
                                    var idpositive = dataNegara.cases;
                                    var iddeath = dataNegara.deaths;
                                    var idrecovered = dataNegara.recovered;
                                    var idactive = dataNegara.active;
                                    var idtest = dataNegara.tests;
                                    var idnewpositive = dataNegara.todayCases;
                                    var idnewdeath = dataNegara.todayDeaths;
                                    var idnewrecovered = dataNegara.todayRecovered;
                                    var idnewtesttest = dataNegara.test;
                                    var idnewpopulation = dataNegara.population;
                                    

                                    var pctidpositive = ((idpositive/idpositive) * 100).toFixed(0) + "%";
                                    var pctiddeath = ((iddeath/idpositive) * 100).toFixed(2) + "%";
                                    var pctidrecovered = ((idrecovered/idpositive) * 100).toFixed(2) + "%";
                                    var pctidactive = ((idactive/idpositive) * 100).toFixed(2) + "%";
                                    var totalidactive = new Number(idnewpositive - idnewdeath - idnewrecovered).toLocaleString('en-US');
                                    var pctidtestpcr = ((idtest/idnewpopulation) * 100).toFixed(2) + "%";
                                    var pctidpopulation = ((idpositive/idnewpopulation) * 100).toFixed(2) + "%";
                                    

                                    $("#indoPositive").html(kasus);
                                    $("#indoDeath").html(mati);
                                    $("#indoRecovered").html(Sembuh);
                                    $("#indoDescactive").html("Total Pasien Dirawat");
                                    $("#indoDescpopulaton").html("Penduduk");
                                    $("#indoActive").html(aktif);
                                    $("#indoTest").html(dites);
                                    $("#indoTestOneMilion").html("= " + tesper1juta + " tes 1 juta populasi");
                                    $("#indoPopulation").html(populasi);
                                    $("#indonesiaNewPositive").html("+" +PositifBaruIndonesia + " Positif Baru");
                                    $("#indonesiaNewDeath").html("+" +KematianBaruIndonesia + " Kematian Baru");
                                    $("#indonesiaNewRecovered").html("+" +PasienSembuhIndonesia + "  Sembuh Baru");

                                    //Run COVID-19 Math
                                    $("#allidpositive").html("Positif " + pctidpositive);
                                    $("#alliddeath").html("Kematian " + pctiddeath);
                                    $("#allidrecovered").html("Sembuh " + pctidrecovered);
                                    $("#allidactive").html("Dirawat " + pctidactive);
                                    $("#totalallidactive").html(totalidactive + " Dirawat")
                                    $("#allidtestpcr").html("Total Tes PCR " + pctidtestpcr);
                                    $("#allidpopulation").html(pctidpopulation + " Terinfeksi");

                                }
                            }
                        }
                        
                    } catch (error) {
                        alert("gagal Mendapatkan Info Negara Indonesia");
                    }
                }
           });
       }






       function semuaDatayesterday(params) {
           $.ajax({
               //https://disease.sh/v2/all sedang bug   https://corona.lmao.ninja/v2/all
               url:'  https://disease.sh/v3/covid-19/all?yesterday=true&twoDaysAgo=false&allowNull=true',
               success : function (datayesterday) {
                   try {

                       
                       var json = datayesterday;
                       var dataglobalsebelumnya = new Date(datayesterday.updated).toLocaleString('en-GB');
                       var kasus = new Number(datayesterday.cases).toLocaleString('en-US');
                       var kasusbaru = new Number(datayesterday.todayCases).toLocaleString('en-US');
                       var Meninggal = new Number(datayesterday.deaths).toLocaleString('en-US');
                       var meninggalbaru = new Number(datayesterday.todayDeaths).toLocaleString('en-US');
                       var Sembuh = new Number(datayesterday.recovered).toLocaleString('en-US');
                       var SembuhBaru = new Number(datayesterday.todayRecovered).toLocaleString('en-US');
                       var kasusaktif = new Number(datayesterday.active).toLocaleString('en-US');
                       var kritis = new Number(datayesterday.critical).toLocaleString('en-US');
                       var totaltes = new Number(datayesterday.tests).toLocaleString('en-US');
                       var tes1jutapopulasi = new Number(datayesterday.testsPerOneMillion).toLocaleString('en-US');
                       var populasi = new Number(datayesterday.population).toLocaleString('en-US');
                       var wilayahterinfeksi = new Number(datayesterday.affectedCountries).toLocaleString('en-US');

                       var lastcases = datayesterday.cases;
                       var lastdeaths = datayesterday.deaths;
                       var lastrecovered = datayesterday.recovered;
                       var lastactive = datayesterday.active;
                       var lastnewcases = datayesterday.todayCases;
                       var lastnewdeaths = datayesterday.todayDeaths;
                       var lastnewrecovered = datayesterday.todayRecovered;
                       var criticallastago = datayesterday.critical;
                       var lastagotestpop = datayesterday.tests;
                       var lastagopopulation = datayesterday.population;
                       


                       var runlastcases = ((lastcases/lastcases) * 100).toFixed(0) + "%";
                       var runlastdeaths = ((lastdeaths/lastcases) * 100).toFixed(2) + "%";
                       var lasttotalactive = new Number(lastnewcases - lastnewdeaths - lastnewrecovered).toLocaleString('en-US');
                       var runlastrecovered = ((lastrecovered/lastcases) * 100).toFixed(2) + "%";
                       var runlastactive = ((lastactive/lastcases) * 100).toFixed(2) + "%";
                       var lastcritical = ((criticallastago/lastactive) * 100).toFixed(2) + "%";
                       var runlastpopinfected = ((lastcases/lastagopopulation) * 100).toFixed(2) + "%";
                       var runlasttest = ((lastagotestpop/lastagopopulation) * 100).toFixed(2) + "%";

                       

                       $("#data-kasusYesterday").html(kasus);
                       $("#data-matiYesterday").html(Meninggal);
                       $("#data-sembuhYesterday").html(Sembuh);
                       $("#data-aktifYesterday").html(kasusaktif);
                       $("#data-criticalYesterday").html(kritis);
                       $("#data-testYesterday").html(totaltes);
                       $("#add-tesYesterday").html(tes1jutapopulasi + " Tes 1 jt populasi");
                       $("#data-populationYesterday").html(populasi);
                       $("#data-countryYesterday").html(wilayahterinfeksi);
                       $("#globalyesterday").html(dataglobalsebelumnya);
                       $("#add-aktifYesterday").html("Pasien Dirawat Global");
                       $("#add-kritisYesterday").html("Kritis COVID-19");
                       $("#add-populationYesterday").html("Jumlah Populasi Dunia");
                       $("#add-countryYesterday").html("Terinfeksi COVID-19");

                       $("#add-kasusYesterday").html("+" + kasusbaru +" Positif");
                       $("#add-matiYesterday").html("+" + meninggalbaru + " Kematian");
                       $("#add-sembuhYesterday").html("+" + SembuhBaru + " Sembuh");



                       $("#Run1cases").html('Positif ' + runlastcases);
                       $("#Run1deaths").html('Kematian ' + runlastdeaths);
                       $("#Run1recovered").html('Sembuh ' + runlastrecovered);
                       $("#Run1active").html('Dirawat ' + runlastactive);
                       $("#runtotalactive").html(lasttotalactive + ' Dirawat');
                       $("#Run1critical").html(lastcritical + ' Dari Sebelumnya');
                       $("#Run1test").html("Total Tes Dunia " + runlasttest);
                       $("#Run1population").html("Sekitar " + runlastpopinfected + " Sebelumnya");
                       

                   } catch (error) {
                       alert("Gagal mendapatkan data global Di hari Sebelumnya");
                   }
               }
           });
       }



       function dataNegaraYesterday(params) {
           $.ajax({
               // https://corona.lmao.ninja/v2/countries?sort=country bug https://corona.lmao.ninja/v2/countries
                url:'https://disease.sh/v3/covid-19/countries/indonesia?yesterday=true&twoDaysAgo=false&strict=false&allowNull=true',
                success: function (data) {
                    try {

                                    var dataNegaraYesterday = data; 
                                    var dataindoyesterday = new Date(dataNegaraYesterday.updated).toLocaleString("en-GB");
                                    var kasus = new Number(dataNegaraYesterday.cases).toLocaleString('en-US');
                                    var mati = new Number(dataNegaraYesterday.deaths).toLocaleString('en-US');
                                    var Sembuh = new Number(dataNegaraYesterday.recovered).toLocaleString('en-US');

                                    var aktif = new Number(dataNegaraYesterday.active).toLocaleString('en-US');
                                    var dites = new Number(dataNegaraYesterday.tests).toLocaleString('en-US');
                                    var tesper1juta = new Number(dataNegaraYesterday.testsPerOneMillion).toLocaleString('en-US');
                                    var populasi = new Number(dataNegaraYesterday.population).toLocaleString('en-US');

                                    var PositifBaruIndonesia = new Number(dataNegaraYesterday.todayCases).toLocaleString('en-US');
                                    var KematianBaruIndonesia = new Number(dataNegaraYesterday.todayDeaths).toLocaleString('en-US');
                                    var PasienSembuhIndonesia = new Number(dataNegaraYesterday.todayRecovered).toLocaleString('en-US');

                                    //covid-19 Indonesia
                                    var idInfection = dataNegaraYesterday.cases;
                                    var idDeath = dataNegaraYesterday.deaths;
                                    var idRecover = dataNegaraYesterday.recovered;
                                    var idActive = dataNegaraYesterday.active;
                                    var newInfection = dataNegaraYesterday.todayCases;
                                    var newDeath = dataNegaraYesterday.todayDeaths;
                                    var newRecover = dataNegaraYesterday.todayRecovered;
                                    var newidtestpcr = dataNegaraYesterday.tests;
                                    var idpopulation = dataNegaraYesterday.population;

                                    var idRunPositive = ((idInfection/idInfection) * 100).toFixed(0) + "%";
                                    var idRunDeath = ((idDeath/idInfection) * 100).toFixed(2) + "%";
                                    var idRunRecovered = ((idRecover/idInfection) * 100).toFixed(2) + "%";
                                    var idRunActive = ((idActive/idInfection) * 100).toFixed(2) + "%";
                                    var testidpcr = ((newidtestpcr/idpopulation) * 100).toFixed(2) + "%";
                                    var idinfectedtotal = ((idInfection/idpopulation) * 100).toFixed(2) + "%";
                                    var totalActive = new Number(newInfection - newDeath - newRecover).toLocaleString('en-US');

                                    $("#indoPositiveYesterday").html(kasus);
                                    $("#indoDeathYesterday").html(mati);
                                    $("#indoRecoveredYesterday").html(Sembuh);
                                    $("#indoDescactiveYesterday").html("Total Pasien Dirawat");
                                    $("#indoDescpopulatonYesterday").html("Penduduk");
                                    $("#indonesiaYesterday").html(dataindoyesterday);
                                    $("#indoActiveYesterday").html(aktif);
                                    $("#indoTestYesterday").html(dites);
                                    $("#indoTestOneMilionYesterday").html("= " + tesper1juta + " tes 1 juta populasi");
                                    $("#indoPopulationYesterday").html(populasi);
                                    $("#indonesiaNewPositiveYesterday").html("+" +PositifBaruIndonesia + " Positif");
                                    $("#indonesiaNewDeathYesterday").html("+" +KematianBaruIndonesia + " Kematian");
                                    $("#indonesiaNewRecoveredYesterday").html("+" +PasienSembuhIndonesia + " Sembuh");

                                    $("#pct1Positive").html('Positif ' + idRunPositive);
                                    $("#pct1Death").html('Kematian ' + idRunDeath);
                                    $("#pct1Recovered").html('Sembuh ' + idRunRecovered);
                                    $("#pct1Active").html('Dirawat ' + idRunActive);
                                    $("#total1Active").html(totalActive + ' Dirawat');
                                    $("#pct1testpcr").html("Total Tes PCR " + testidpcr);
                                    $("#id1totalpop").html(idinfectedtotal + " Terinfeksi");

                    
                        
                    } catch (error) {
                        alert("gagal Mendapatkan Info Negara Indonesia Di hari Sebelumnya");
                    }
                }
           });
       }

     


const api = 'https://disease.sh/v3/covid-19/historical/all?lastdays=25';
const getData = async () => {
  const response = await fetch(`${api}`);
  if (response.ok) {
    return await response.json();
  } else {
    return Promise.reject(response.status);
  }
};

const result = getData();
result
  .then((data) => {
    let date = Object.keys(data.cases);
    let total = Object.values(data.cases);
    let deaths = Object.values(data.deaths);
    let recovered = Object.values(data.recovered);
    
    Chart.defaults.global.defaultFontSize = 15;
    var ctx = document.getElementById('myChart').getContext('2d');
    let myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: date,
        datasets: [
          {
            label: 'Positif',
            data: total,
            borderColor: '#fce308',
            fontSize: '30',
            borderWidth: '5',
            hitRadius: '1',
            hoverBorderWidth: '10',
            fill: false,
          },
          {
            label: 'Kematian',
            data: deaths,
            borderColor: '#fc4108',
            borderWidth: '5',
            hitRadius: '1',
            hoverBorderWidth: '10',
            fill: false
          },
          {
            label: 'Sembuh',
            data: recovered,
            borderColor: '#08fcab',
            borderWidth: '5',
            hitRadius: '1',
            hoverBorderWidth: '10',
            fill: false,
          },
          
        ],
      },
      options: {
        responsive: true,
            maintainAspectRatio: false,
            title: {
                display: true,
                text: 'Laporan Corona Global 25 hari terakhir',
                fontColor: 'white',
                fontSize: '26'
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem , data) {
                        return tooltipItem.yLabel.toLocaleString('en-US').replace(/\d(?=(\d{3})+\.)/g, '$&.');
                    }
                },
                //Execution all Point = index perfect
                mode: 'index',
                axis: 'y',
                titleFontFamily: 'Arial, Helvetica, sans-serif',
                titleFontColor: '#00ff00',  
            },
            legend: {
                labels: {
                    //bagian atas bar
                    fontColor: 'white',

                    
                }
            },
            scales: {
              xAxes: [
                {
                  scaleLabel: {
                    display: true,
                    labelString: 'Total Dan Tanggal Laporan',
                  },
                },
              ],//end xAxes
              
            },//end Scales
        },
    })
  })
                 
</script>
<!--ending-->