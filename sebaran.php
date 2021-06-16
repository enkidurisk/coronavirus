<?php 
$connect = mysqli_connect('localhost','root','','coronavirus');
$setQuery = mysqli_query($connect, "SELECT timeDate, positive, death, recovered, active, p_high, d_high, r_high, a_high FROM global_corona");
$SetQueryindo = mysqli_query($connect, "SELECT indoTime, id_positive, id_death, id_recovered, id_active, id_high_p, id_high_d, id_high_r, id_high_a FROM indonesia_corona");


//Create database and query JSON
while ($system = mysqli_fetch_array($setQuery)) {
    $setTimedate[] = date('d M Y', strtotime($system['timeDate']));

    $positive[] = $system['positive'];
    $death[] = $system['death'];
    $recovered[] = $system['recovered'];
    $active[] = $system['active'];

    $p_high[] = $system['p_high']; 
    $d_high[] = $system['d_high'];
    $r_high[] = $system['r_high'];
    $a_high[] = $system['a_high'];

}

//New database and query JSON
while ($idn = mysqli_fetch_array($SetQueryindo)) {
    $SetTime[] = date('d M Y', strtotime($idn['indoTime']));

    $id_positive[] = $idn['id_positive'];
    $id_death[] = $idn['id_death'];
    $id_recovered[] = $idn['id_recovered'];
    $id_active[] = $idn['id_active'];

    $id_high_p[] = $idn['id_high_p'];
    $id_high_d[] = $idn['id_high_d'];
    $id_high_r[] = $idn['id_high_r'];
    $id_high_a[] = $idn['id_high_a'];
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sebaran COVID-19</title>
    <link rel="shortcut icon" href="icon/covid19.ico" type="image/x-icon">

    
    <meta name="theme-color" content="#121212"/>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <!-- JS, Popper.js, and jQuery -->
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--CSS only-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">

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
            /*Table*/
            .tableData{
                margin: 40px 30px;
                display: flex;
                justify-content: center;
            }
            /*Chatbot*/
            iframe{
                width: 100%;
                height: 68vh;
                border: 3px solid #01c5bb;
                border-radius: 10px;
                z-index: 1000;
            }
            #setBar{
                
                background: #186c81;
                position: fixed;
                bottom: 1vmax;
                right: 1vmax;
            }
            @media(max-width: 600px){
                #imageBar{
                    width: 20px;
                }
            }
            

    tr, th{
        padding: 10px;
        background: #045a20;
        font-size: 20px;
        text-align: center;
        border: 2px solid #000000;
    }
    td{
        text-align: center;
        font-size: 22px;
        background: #0c2b35;
        padding: 18px;
        border: 2px solid #000000;
    }
    @media(max-width: 780px){

        tr, th{
            font-size: 15px;
            padding: 5px;
        }
        td{
            font-size: 16px;
            padding: 13px;
        }
    }
    td:nth-child(2){
        background: #045468;
    }
    td:nth-child(3){
        background: #615304;
    }
    td:nth-child(4){
        background: #4f5c04;
    }
    td:nth-child(5){
        background: #5e1a1a;
    }
    td:nth-child(6){
        background: #58200e;
    }
    td:nth-child(7){
        background: #025826;
    }
    td:nth-child(8){
        background: #2a0c52;
    }
    td:nth-child(9){
        background: #640c4a;
    }
       
            /*Launch table*/
            #responsive_table{
              overflow-x: auto;
            }

            details summary{
                padding: 16px 10px;
                font-size: 24px;
                outline: none;
                cursor: pointer;
            }
            #ConfigSearch{
                color: #d3d3d3;
                font-family: sans-serif;
                letter-spacing: 1px;
                background: transparent;
            }
            #ConfigSearchIndo{
                color: #d3d3d3;
                font-family: sans-serif;
                letter-spacing: 1px;
                background: transparent;
            }
            label{
                user-select: none;
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

            .contentindo{
                display: none;
            }
            .contentindo.a{
                display: block;
            }
            .switchindocheck:checked ~ .contentindo.a{
                display: none;
            }
            .switchindocheck:checked ~ .contentindo.b{
                display: block;
            }
         

            label{
                user-select: none;
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
            #alertReport{
                display: none;
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
     
</style>

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
                      <li class="nav-item active">
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
          <!--Launch corona Global-->
          <div class="container mt-4">
          <input type="checkbox" class="switchcheckglobal" id="labeluser">
          <label for="labeluser">Realtime Global Review COVID-19</label>
          <div class="rounded-sm contentglobal a">      
              <h1 class="text-center">Global Hari ini</h1>
              <hr class="border-info">
              <h3 class="text-center" id="globalDate"><i class="fas fa-spinner fa-spin"></i></h3>
            <div class="row text-center">
                <!--New Data After Recovered Base 1-->
                    <div class="col-md-3 mt-4">
                        <div class="bg-dark box text-white rounded-sm" style="background: #086f81;">
                          <div class="row">
                                <div class="col-md-12 p-2">
                                    <h5 id="persentinfeksiglobal">Positif</h5>
                                    <h2 id="Kasus-all-positif">0</h2>
                                    <h5 id="Kasus-all-day-baru">Orang</h5>
                                </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-4">
                      <div class="bg-dark box text-white rounded-sm" style="background: #8f3e29;">
                          <div class="row">
                                <div class="col-md-12 p-2">
                                    <h5 id="persentkematianglobal">Kematian</h5>
                                    <h2 id="Kasus-all-kematian">0</h2>
                                    <h5 id="Kasus-all-day-kematian">Orang</h5>
                                </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-3 mt-4">
                     <div class="bg-dark box text-white rounded-sm" style="background: #2d7531;">
                       <div class="row ">
                            <div class="col-md-12 p-2">
                                <h5 id="persentsembuhglobal">Sembuh</h5>
                                <h2 id="Pasien-all-sembuh">0</h2>
                                <h5 id="Pasien-all-day-sembuh">Orang</h5>
                            </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-3 mt-4 mb-4">
                    <div class="bg-dark box text-white rounded-sm" style="background: #30497e;">
                      <div class="row">
                            <div class="col-md-12 p-2">
                                <h5 id="persentrawatglobal">Dirawat</h5>
                                <h2 id="Pasien-all-dirawat">0</h2>
                                <h5 id="RunglobalActive">Orang</h5>
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
                    <div class="col-md-3 mt-4">
                        <div class="bg-dark box text-white rounded-sm" style="background: #086f81;">
                          <div class="row">
                                <div class="col-md-12 p-2">
                                    <h5 id="persentinfeksiglobal1dayago">Positif</h5>
                                    <h2 id="Kasus-yesterday-positif">0</h2>
                                    <h5 id="Kasus-yesterday-baru-positif">Orang</h5>
                                </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-4">
                      <div class="bg-dark box text-white rounded-sm" style="background: #8f3e29;">
                          <div class="row">
                                <div class="col-md-12 p-2">
                                    <h5 id="persentkematianglobal1dayago">Kematian</h5>
                                    <h2 id="Kasus-yesterday-kematian">0</h2>
                                    <h5 id="Kasus-yesterday-baru-kematian">Orang</h5>
                                </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-3 mt-4">
                     <div class="bg-dark box text-white rounded-sm" style="background: #2d7531;">
                       <div class="row ">
                            <div class="col-md-12 p-2">
                                <h5 id="persentsembuhglobal1dayago">Sembuh</h5>
                                <h2 id="Pasien-yesterday-sembuh">0</h2>
                                <h5 id="Pasien-yesterday-baru-sembuh">Orang</h5>
                            </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-3 mt-4 mb-4">
                    <div class="bg-dark box text-white rounded-sm" style="background: #30497e;">
                      <div class="row">
                            <div class="col-md-12 p-2">
                                <h5 id="persentrawatglobal1dayago">Dirawat</h5>
                                <h2 id="Pasien-yesterday-dirawat">0</h2>
                                <h5 id="RunglobalActive1dayago">Orang</h5>
                            </div>
                      </div>
                  </div>
              </div>
              </div>  
            </div>  

              
              <details class="text-white" >
              <summary class="text-center bg-dark rounded-sm mb-3">Data Global Coronavirus</summary>
              <input type="text" class="form-control mb-3 mt-1 border-dark text-center" id="ConfigSearch" autocomplete="off" placeholder="Cari Negara yang ingin anda lihat">
              <div class="table-responsive-sm" id="responsive_table">
                <table class="table text-white">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Negara terinfeksi</th>
                        <th>Total Kasus</th>
                        <th>Kasus Baru</th>
                        <th>Total Kematian</th>
                        <th>Kematian Baru</th>
                        <th>Total Pemulihan</th>
                        <th>Pasien Dirawat</th>
                        <th>Pasien Kritis</th>
                    </tr>
                </thead>
                <tbody id="Data-Negara-Global"></tbody>
                </table>
                <br>
              </div>
            </details>
          </div>
          <!--Launch corona indonesia-->
          <br>
        <div class="container mt-4">
        <input type="checkbox" name="" class="switchindocheck" id="indonesiacheck">
        <label for="indonesiacheck">Realtime Indonesia Review COVID-19</label>
          <div class="rounded-sm contentindo a">
            <h1 class="text-center ">Indonesia hari ini</h1>
            <hr class="border-info">
            <h3 class="text-center" id="indonesiaDate"><i class="fas fa-spinner fa-spin"></i></h3>
          <div class="row text-center">
              <!--New Data After Recovered Base 1-->
                  <div class="col-md-3  mt-4">
                      <div class="bg-dark box text-white rounded-sm" style="background: #086f81;">
                        <div class="row">
                              <div class="col-md-12 p-2">
                                  <h5 id="pctPositive">Positif</h5>
                                  <h2 id="lokal-negara-positif">0</h2>
                                  <h5 id="Kasus-baru-di-indonesia">Orang</h5>
                              </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-3 mt-4">
                    <div class="bg-dark box text-white rounded-sm" style="background: #8f3e29;">
                        <div class="row">
                              <div class="col-md-12 p-2">
                                  <h5 id="pctDeath">Kematian</h5>
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
                              <h5 id="pctRecovered">Sembuh</h5>
                              <h2 id="lokal-negara-sembuh">0</h2>
                              <h5 id="Sembuh-indonesia">Orang</h5>
                          </div>
                    </div>
                  </div>
              </div>
              <div class="col-md-3 mt-4 mb-4">
                  <div class="bg-dark box text-white rounded-sm" style="background: #30497e;">
                    <div class="row">
                          <div class="col-md-12 p-2">
                              <h5 id="pctActive">Dirawat</h5>
                              <h2 id="lokal-negara-aktif">0</h2>
                              <h5 id="totalActive">Orang</h5>
                          </div>
                    </div>
                </div>
            </div>
            </div>
            </div><!--Historycal indo-->

            <div class="rounded-sm contentindo b">
            <h1 class="text-center ">Riwayat Indonesia</h1>
            <hr class="border-info">
            <h3 class="text-center" id="indonesiayesterday"><i class="fas fa-spinner fa-spin"></i></h3>
          <div class="row text-center">
              <!--New Data After Recovered Base 1-->
                  <div class="col-md-3  mt-4">
                      <div class="bg-dark box text-white rounded-sm" style="background: #086f81;">
                        <div class="row">
                              <div class="col-md-12 p-2">
                                  <h5 id="pct1agoPositive">Positif</h5>
                                  <h2 id="lokal-yesterday-positif">0</h2>
                                  <h5 id="Kasus-yesterday-di-indonesia">Orang</h5>
                              </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-3 mt-4">
                    <div class="bg-dark box text-white rounded-sm" style="background: #8f3e29;">
                        <div class="row">
                              <div class="col-md-12 p-2">
                                  <h5 id="pct1agoDeath">Kematian</h5>
                                  <h2 id="lokal-yesterday-kematian">0</h2>
                                  <h5 id="Kasus-kematian-yesterday-di-indonesia">Orang</h5>
                              </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                   <div class="bg-dark box text-white rounded-sm" style="background: #2d7531;">
                     <div class="row">
                          <div class="col-md-12 p-2">
                              <h5 id="pct1agoRecovered">Sembuh</h5>
                              <h2 id="lokal-yesterday-sembuh">0</h2>
                              <h5 id="Sembuh-yesterday-indonesia">Orang</h5>
                          </div>
                    </div>
                  </div>
              </div>
              <div class="col-md-3 mt-4 mb-4">
                  <div class="bg-dark box text-white rounded-sm" style="background: #30497e;">
                    <div class="row">
                          <div class="col-md-12 p-2">
                              <h5 id="pct1agoActive">Dirawat</h5>
                              <h2 id="lokal-yesterday-aktif">0</h2>
                              <h5 id="total1agoActive">Orang</h5>
                          </div>
                    </div>
                </div>
            </div>
            </div>

        </div><!--container room-->
         
                <details class="text-white mb-3 ">
                    <summary class="text-center bg-dark rounded-sm mb-3">Data Nasional / Indonesia</summary>
                    <input type="text" class="form-control mb-3 mt-1 border-dark text-center" id="ConfigSearchIndo" autocomplete="off" placeholder="Cari Provinsi yang ingin Anda lihat">
                    <div class="table-responsive-sm">
                    <table class="table text-white"
                    style="
                            font-size: 22px;
                            text-align: center;
                            border: 2px solid #000000;
                    ">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Provinsi</th>
                                <th>Positif</th>
                                <th>Meninggal</th>
                                <th>Sembuh</th>
                            </tr>
                        </thead>
                        <tbody id="table-data"></tbody>       
                    </table>

                    <a onclick="covid19();" class="text-info">covid19.go.id</a>
                    </div>
                </details>
                <details class="text-white" id="redirectchart">
                <br>
                <summary class="text-center bg-dark rounded-sm">Grafik Coronavirus</summary>
                <div class="Canvas">
                    <h2>Grafik global</h2>
                    <canvas id="myChart" class="rowered"></canvas>
                </div>
                <br><br><br><br>
                <div class="Canvas">
                <canvas id="myChart-data" class="rowered"></canvas>
                </div>
                <br><br><br>
                <div class="Canvas">
                    <h2>Grafik indonesia</h2>
                    <canvas id="chart-ID" class="rowered"></canvas>
                </div>
                <br><br><br><br>
                <div class="Canvas">
                    <canvas id="chart-ID-add" class="rowered"></canvas>
                    <a onclick="dataStats();" class="text-primary ">Sarankan pengeditan dan pembaharuan</a>
                </div>
            </details>
            
            <script>
                function dataStats(params) {
                    var Launch = window.open("changeData/dataStats","_blank");
                    Launch.focus();
                }
                function covid19(params) {
                    var Launch = window.open("https://covid19.go.id","_blank");
                    Launch.focus();
                }

            </script>

        

            
            <!--Graphic Corona-->
  
                <br><br><br><br>
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
            
                //Configuration Search State / (Negara pencarian)
                    $(document).ready(function(){
                        $("#ConfigSearch").on("keyup", function(){
                            var value = $(this).val().toLowerCase();
                                $("#Data-Negara-Global tr").filter(function(){
                                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                });
                        })
                    }); 

                //Configuration Search Province / (Provinsi Pencarian)
                    $(document).ready(function(){
                        $("#ConfigSearchIndo").on("keyup", function() {
                            var value = $(this).val().toLowerCase();
                                $("#table-data tr").filter(function(){
                                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                });
                        })
                    });



                $(document).ready(function(){
                        getGlobalInfo();
                        getLocalInfo();
                        getCountryInfo();
                        DataProvinsi();
                        getGlobalYesterdayinfo();
                        getIndonesiaYesterdayInfo();
                    });

                    setInterval(function() {
                        getGlobalInfo();
                        getLocalInfo(); 
                        getGlobalYesterdayinfo();
                        getIndonesiaYesterdayInfo();
                  }, 15000);




                  function DataProvinsi() {
                    $.ajax({
                        url:'provinceOpenSource.php',
                        type: 'GET',
                        success: function (data) {
                            try {
                                $('#table-data').html(data);
                            } catch (error) {
                                alert('Gagal Mendapatkan Data Provinsi Dari Indonesia');
                            }
                        }
                    });
                }
                    //https://coronavirus-19-api.herokuapp.com/countries/
                  function getCountryInfo(params) {
                        $.ajax({
                            url:' https://coronavirus-19-api.herokuapp.com/countries/',
                            success: function (data) {
                                try {
                                    var tool = data;

                                    if (tool.length > 0) {
                                        var i;

                                        for (i = 0; i < tool.length; i++) {
                                            var html = [];

                                            var NegaraSemua = tool[i];

                                            
                                            //GetCountryInfomation
                                            var no = i+0;
                                            var namaNegara = NegaraSemua.country;
                                            var kasus = new Number(NegaraSemua.cases).toLocaleString("en-US");
                                            var kasusHariIni = new Number(NegaraSemua.todayCases).toLocaleString("en-US");
                                            var Meninggal = new Number(NegaraSemua.deaths).toLocaleString("en-US");
                                            var MeninggalHariIni = (NegaraSemua.todayDeaths).toLocaleString("en-US");
                                            var Pemulihan = new Number(NegaraSemua.recovered).toLocaleString("en-US");
                                            var pasienDirawat = new Number(NegaraSemua.active).toLocaleString("en-US");
                                            var KritisCorona = new Number(NegaraSemua.critical).toLocaleString("en-US");
                                            //var totalTes = NegaraSemua.totalTests;
                                            

                                            html.push("<tr>");
                                            html.push("<td>" + no + "</td>");
                                            html.push("<td>" + namaNegara + "</td>");
                                            html.push("<td>" + kasus + "</td>");
                                            html.push("<td>" + "+" + kasusHariIni + "</td>");
                                            html.push("<td>" + Meninggal + "</td>");
                                            html.push("<td>" + "+" + MeninggalHariIni + "</td>");
                                            html.push("<td>" + Pemulihan + "</td>");
                                            html.push("<td>" + pasienDirawat + "</td>");
                                            html.push("<td>" + KritisCorona + "</td>");
                                            //html.push("<td>" + totalTes + "</td>");
                                            html.push("</tr>");
                                            

                                            $("#Data-Negara-Global").append(html.join("."));
                                            
                                        }
                                        
                                    }
                                } catch (error) {
                                    alert("Gagal Mendapatkan Informasi Daftar Negara Terinfeksi Coronavirus COVID-19")
                                }
                            }
                        });
                    }

                    
                    function getGlobalInfo(params) {
                        $.ajax({
                            // https://corona.lmao.ninja/v2/all
                            //https://corona.lmao.ninja/v2/countries https://coronavirus-19-api.herokuapp.com/countries/world
                            url:'https://corona.lmao.ninja/v2/all',
                            success: function (data) {

                                try {
                                    document.getElementById("globalDate").innerHTML = new Date().toLocaleString('en-GB');
                                    //alert("Data Global Dan Negara Kasus aktif dan kritis Data Hari ini sedang bermasalah");
                                    var google = data;

                                    var GlobalKasus = new Number(google.cases).toLocaleString('en-US');
                                    var GlobalKematian = new Number(google.deaths).toLocaleString('en-US');
                                    var GlobalPulih = new Number(google.recovered).toLocaleString('en-US');
                                    var GlobalAktif = new Number(google.active).toLocaleString('en-US');


                                    var GlobalKasusAllBaru = new Number(google.todayCases).toLocaleString('en-US');
                                    var GlobalKasusAllKematian = new Number(google.todayDeaths).toLocaleString('en-US');
                                    var GlobalPulihAllBaru = new Number(google.todayRecovered).toLocaleString('en-US');


                                    //Percent global COVID-19
                                    var percentCases = google.cases;
                                    var percentDeath = google.deaths;
                                    var percentRecovered = google.recovered;
                                    var percentActive = google.active;

                                    var newglobecases = google.todayCases;
                                    var newglobedeaths = google.todayDeaths;
                                    var newgloberecovered = google.todayRecovered;

                                    var Positiveall = ((percentCases/percentCases) * 100).toFixed(0) + '%';
                                    var Deathall = ((percentDeath/percentCases) * 100).toFixed(2) + '%';
                                    var Recoveredall = ((percentRecovered/percentCases) * 100).toFixed(2) + '%';
                                    var Activeall = ((percentActive/percentCases) * 100).toFixed(2) + '%';
                                    var totalActive = new Number(newglobecases - newglobedeaths - newgloberecovered).toLocaleString('en-US');

                                    
                                    

                                    

                                    $("#Kasus-all-positif").html(GlobalKasus);
                                    $("#Kasus-all-kematian").html(GlobalKematian);
                                    $("#Pasien-all-sembuh").html(GlobalPulih);
                                    $("#Pasien-all-dirawat").html(GlobalAktif);
                                   // $("#wilayah-terdampak").html(TotalTerdampak);
                                    $("#Kasus-all-day-baru").html( "+" + GlobalKasusAllBaru + " Positif Baru");
                                    $("#Kasus-all-day-kematian").html( "+" + GlobalKasusAllKematian + " Kematian Baru");
                                    $("#Pasien-all-day-sembuh").html( "+" + GlobalPulihAllBaru + " Sembuh Baru");

                                    $("#persentinfeksiglobal").html('Positif ' + Positiveall);
                                    $("#persentkematianglobal").html('Kematian ' + Deathall);
                                    $("#persentsembuhglobal").html('Sembuh ' + Recoveredall);
                                    $("#persentrawatglobal").html('Dirawat ' + Activeall);

                                    $("#RunglobalActive").html(totalActive + ' Dirawat' );

                                } catch (error) {
                                    alert('gagal mendapatkan daftar info Global Coronavirus | COVID-19');
                                }
                            }
                        });
                    }


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
                                            document.getElementById("indonesiaDate").innerHTML = new Date().toLocaleString('en-GB');
                                          var indonesiaHistory = new Date(localIndo.updated).toLocaleString('en-GB');
                                        var pasienPositif = new Number(localIndo.cases).toLocaleString('en-US');
                                        var pasienMeninggal = new Number(localIndo.deaths).toLocaleString('en-US');
                                        var pasienSembuh = new Number(localIndo.recovered).toLocaleString('en-US');
                                        var pasienDirawat = new Number(localIndo.active).toLocaleString('en-US');

                                    

                                    var kasusPositifBaru = new Number(localIndo.todayCases).toLocaleString('en-US');
                                    var kasusKematianBaru = new Number(localIndo.todayDeaths).toLocaleString('en-US');
                                    var pasienSembuhBaru = new Number(localIndo.todayRecovered).toLocaleString('en-US');

                                    //covid-19 Indonesia
                                    var idInfection = localIndo.cases;
                                    var idDeath = localIndo.deaths;
                                    var idRecover = localIndo.recovered;
                                    var idActive = localIndo.active;

                                    var newInfection = localIndo.todayCases;
                                    var newDeath = localIndo.todayDeaths;
                                    var newRecover = localIndo.todayRecovered;

                                    var idRunPositive = ((idInfection/idInfection) * 100).toFixed(0) + "%";
                                    var idRunDeath = ((idDeath/idInfection) * 100).toFixed(2) + "%";
                                    var idRunRecovered = ((idRecover/idInfection) * 100).toFixed(2) + "%";
                                    var idRunActive = ((idActive/idInfection) * 100).toFixed(2) + "%";
                                    var totalActive = new Number(newInfection - newDeath - newRecover).toLocaleString('en-US');
                                    
                                    
                                    $("#lokal-negara-positif").html(pasienPositif);
                                    $("#lokal-negara-kematian").html(pasienMeninggal);
                                    $("#lokal-negara-sembuh").html(pasienSembuh);
                                    $("#lokal-negara-aktif").html(pasienDirawat);
                                    $("#Pasien-negara-dirawat").html("Pasien Pemulihan");
                                    $("#pasien-berhasil-sembuh").html("Pasien Dirawat");
                                    $("#Kasus-baru-di-indonesia").html("+" + kasusPositifBaru + " Positif Baru");
                                    $("#Kasus-kematian-di-indonesia").html("+" + kasusKematianBaru + " Kematian Baru");
                                    $("#Sembuh-indonesia").html("+" + pasienSembuhBaru + "&nbspSembuh&nbspBaru");


                                    $("#pctPositive").html('Positif ' + idRunPositive);
                                    $("#pctDeath").html('Kematian ' + idRunDeath);
                                    $("#pctRecovered").html('Sembuh ' + idRunRecovered);
                                    $("#pctActive").html('Dirawat ' + idRunActive);

                                    $("#totalActive").html(totalActive + ' Dirawat');



                                    }
                                  }
                                }
                                   

                                } catch (error) {
                                    alert("Gagal mendapatkan Data Terinfeksi Coronavirus | COVID-19 Dari indonesia ");
                                }
                            }
                        });
                    }





                    /*Yesterday*/
                    function getGlobalYesterdayinfo(params) {
                        $.ajax({
                            // https://corona.lmao.ninja/v2/all
                            //https://corona.lmao.ninja/v2/countries
                            url:'https://disease.sh/v3/covid-19/all?yesterday=true&twoDaysAgo=false&allowNull=true',
                            success: function (datakemarin) {

                                try {
                                    //alert("Data Global Dan Negara Kasus aktif dan kritis Data Hari ini sedang bermasalah");
                                    var Yesterday = datakemarin;
                                    var dataUpdated = new Date(Yesterday.updated).toLocaleString('en-GB');
                                    var GlobalKasuskemarin = new Number(Yesterday.cases).toLocaleString('en-US');
                                    var GlobalKematiankemarin = new Number(Yesterday.deaths).toLocaleString('en-US');
                                    var GlobalPulihkemarin = new Number(Yesterday.recovered).toLocaleString('en-US');
                                    var GlobalAktifkemarin = new Number(Yesterday.active).toLocaleString('en-US');


                                    var GlobalKasusYesterdayBaru = new Number(Yesterday.todayCases).toLocaleString('en-US');
                                    var GlobalKasusYesterdayKematian = new Number(Yesterday.todayDeaths).toLocaleString('en-US');
                                    var GlobalPulihYesterdayBaru = new Number(Yesterday.todayRecovered).toLocaleString('en-US');


                                     //Percent global COVID-19 Yesterday
                                    var percentCases = Yesterday.cases;
                                    var percentDeath = Yesterday.deaths;
                                    var percentRecovered = Yesterday.recovered;
                                    var percentActive = Yesterday.active;

                                    var hrsglobecases = Yesterday.todayCases;
                                    var hrsglobedeaths = Yesterday.todayDeaths;
                                    var hrsgloberecovered = Yesterday.todayRecovered;

                                    var Positiveall = ((percentCases/percentCases) * 100).toFixed(0) + '%';
                                    var Deathall = ((percentDeath/percentCases) * 100).toFixed(2) + '%';
                                    var Recoveredall = ((percentRecovered/percentCases) * 100).toFixed(2) + '%';
                                    var Activeall = ((percentActive/percentCases) * 100).toFixed(2) + '%';
                                    var totalActive = new Number(hrsglobecases - hrsglobedeaths - hrsgloberecovered).toLocaleString('en-US');

                                    

                                    $("#Kasus-yesterday-positif").html(GlobalKasuskemarin);
                                    $("#Kasus-yesterday-kematian").html(GlobalKematiankemarin);
                                    $("#Pasien-yesterday-sembuh").html(GlobalPulihkemarin);
                                    $("#Pasien-yesterday-dirawat").html(GlobalAktifkemarin);
                                   // $("#wilayah-terdampak").html(TotalTerdampak);
                                    $("#globalyesterday").html(dataUpdated);


                                    $("#persentinfeksiglobal1dayago").html('Positif ' + Positiveall);
                                    $("#persentkematianglobal1dayago").html('Kematian ' + Deathall);
                                    $("#persentsembuhglobal1dayago").html('Sembuh ' + Recoveredall);
                                    $("#persentrawatglobal1dayago").html('Dirawat ' + Activeall);

                                    $("#RunglobalActive1dayago").html(totalActive + ' Dirawat' );

                                    

                                    $("#Kasus-yesterday-baru-positif").html( "+" + GlobalKasusYesterdayBaru + " Positif");
                                    $("#Kasus-yesterday-baru-kematian").html( "+" + GlobalKasusYesterdayKematian + " Kematian");
                                    $("#Pasien-yesterday-baru-sembuh").html( "+" + GlobalPulihYesterdayBaru + " Sembuh");

                                } catch (error) {
                                    alert('gagal mendapatkan daftar info Global Sebelumnya Coronavirus | COVID-19');
                                }
                            }
                        });
                    }



                    function getIndonesiaYesterdayInfo(params) {
                        $.ajax({
                            // https://corona.lmao.ninja/v2/all
                            //https://corona.lmao.ninja/v2/countries
                            url:'https://disease.sh/v3/covid-19/countries/indonesia?yesterday=true&twoDaysAgo=false&strict=false&allowNull=true',
                            success: function (datakemarin) {

                                try {
                                    //alert("Data Global Dan Negara Kasus aktif dan kritis Data Hari ini sedang bermasalah");
                                    var Yesterday = datakemarin;
                                    var indoUpdated = new Date(Yesterday.updated).toLocaleString('en-GB');
                                    var indoKasuskemarin = new Number(Yesterday.cases).toLocaleString('en-US');
                                    var indolKematiankemarin = new Number(Yesterday.deaths).toLocaleString('en-US');
                                    var indoPulihkemarin = new Number(Yesterday.recovered).toLocaleString('en-US');
                                    var indoAktifkemarin = new Number(Yesterday.active).toLocaleString('en-US');


                                    var indoKasusYesterdayBaru = new Number(Yesterday.todayCases).toLocaleString('en-US');
                                    var indoKasusYesterdayKematian = new Number(Yesterday.todayDeaths).toLocaleString('en-US');
                                    var indoPulihYesterdayBaru = new Number(Yesterday.todayRecovered).toLocaleString('en-US');

                                     
                                     //COVID-19 yesterday indonesia     
                                    var idInfection = Yesterday.cases;
                                    var idDeath = Yesterday.deaths;
                                    var idRecover = Yesterday.recovered;
                                    var idActive = Yesterday.active;

                                    var newInfection = Yesterday.todayCases;
                                    var newDeath = Yesterday.todayDeaths;
                                    var newRecover = Yesterday.todayRecovered;

                                    var idyesterdayPositive = ((idInfection/idInfection) * 100).toFixed(0) + "%";
                                    var idyesterdayDeath = ((idDeath/idInfection) * 100).toFixed(2) + "%";
                                    var idyesterdayRecovered = ((idRecover/idInfection) * 100).toFixed(2) + "%";
                                    var idyesterdayActive = ((idActive/idInfection) * 100).toFixed(2) + "%";
                                    var totalyesterdayActive = new Number(newInfection - newDeath - newRecover).toLocaleString('en-US');

                                    $("#lokal-yesterday-positif").html(indoKasuskemarin);
                                    $("#lokal-yesterday-kematian").html(indolKematiankemarin);
                                    $("#lokal-yesterday-sembuh").html(indoPulihkemarin);
                                    $("#lokal-yesterday-aktif").html(indoAktifkemarin);
                                    $("#indonesiayesterday").html(indoUpdated);
                                    $("#Kasus-yesterday-di-indonesia").html( "+" + indoKasusYesterdayBaru + " Positif");
                                    $("#Kasus-kematian-yesterday-di-indonesia").html( "+" + indoKasusYesterdayKematian + " Kematian");
                                    $("#Sembuh-yesterday-indonesia").html( "+" + indoPulihYesterdayBaru + " Sembuh");

                                    
                                    $("#pct1agoPositive").html('Positif ' + idyesterdayPositive);
                                    $("#pct1agoDeath").html('Kematian ' + idyesterdayDeath);
                                    $("#pct1agoRecovered").html('Sembuh ' + idyesterdayRecovered);
                                    $("#pct1agoActive").html('Dirawat ' + idyesterdayActive);

                                    $("#total1agoActive").html(totalyesterdayActive + ' Dirawat');
                                    

                                } catch (error) {
                                    alert('gagal mendapatkan daftar info sebelumnya Indonesia Coronavirus | COVID-19');
                                }
                            }
                        });
                    }


</script>

<script>
             //setConfigGlobal
             Chart.defaults.global.defaultFontSize = 15;

var ctx = document.getElementById("myChart").getContext("2d");
  
var chart = new Chart (ctx, {
    //tipe char
    type: 'line',
    //output data
    data: {
        labels: <?php echo json_encode($setTimedate); ?>,
        //setAtributte
        datasets: [{
            label: 'Total Pasien Positif',
            backgroundColor:'transparent',
            borderColor: '#fce308',
            fontSize: '30',
            borderWidth: '5',
            hitRadius: '2',
            hoverBorderWidth: '10',
            data: <?php echo json_encode($positive);?>
        }, {
            label: 'Total Pasien Meninggal',
            backgroundColor: 'transparent',
            borderColor: '#fc4108',
            borderWidth: '5',
            hitRadius: '2',
            hoverBorderWidth: '10',
            data: <?php echo json_encode($death);?>

        }, {
            label: 'Total Pasien Sembuh',
            backgroundColor: 'transparent',
            borderColor: '#08fcab',
            borderWidth: '5',
            hitRadius: '2',
            hoverBorderWidth: '10',
            data: <?php echo json_encode($recovered);?>
        }, {
            label: 'Total Pasien dirawat',
            backgroundColor: 'transparent',
            borderColor: '#7929fa',
            borderWidth: '5',
            hitRadius: '2',
            hoverBorderWidth: '10',
            data: <?php echo json_encode($active);?>
        }]
    },

    //Konfigurasi pengaturan
    options: {
        responsive: true,
        maintainAspectRatio: false,
        title: {
            display: true,
            text: 'Global',
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
        }
    }
    
}) 


var cxt = document.getElementById("myChart-data").getContext("2d");

var chart = new Chart(cxt, {
type: 'line',
data: {
    labels: <?php echo json_encode($setTimedate); ?>,

    datasets: [{
        label: 'Positif Tertinggi',
        borderColor: '#fce308',
        borderWidth: '5',
        backgroundColor: 'transparent',
        hitRadius: '2',
        hoverBorderWidth: '10',
        data: <?php echo json_encode($p_high); ?>
    }, {
        label: 'Meninggal Tertinggi',
        borderColor: '#fc4108',
        backgroundColor: 'transparent',
        borderWidth: '5',
        hitRadius: '2',
        hoverBorderWidth: '10',
        data: <?php echo json_encode($d_high); ?>

    }, {
        label: 'Pemulihan Tertinggi',
        borderColor: '#08fcab',
        backgroundColor: 'transparent',
        borderWidth: '5',
        hitRadius: '2',
        hoverBorderWidth: '10',
        data: <?php echo json_encode($r_high); ?>
    }, {
        label: 'Dirawat Tertinggi',
        borderColor: '#7929fa',
        backgroundColor: 'transparent',
        borderWidth: '5',
        hitRadius: '2',
        hoverBorderWidth: '10',
        data: <?php echo json_encode($a_high); ?>
    }]
},
options: {
    responsive: true,
        maintainAspectRatio: false,
    title: {
        display: true,
        text: ' Tertinggi Terakhir',
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
            fontColor: 'white',
        }
    }
}
})



//Indonesia Chart COVID-19
var newCtx = document.getElementById("chart-ID").getContext("2d");

var chart = new Chart(newCtx, {
  type: 'line',
  data: {
    labels: <?php echo json_encode($SetTime); ?>,
      datasets: [{
          label: 'Total Positif',
          backgroundColor: 'transparent',
          borderColor: '#fce308',
          borderWidth: '5',
          hitRadius: '2',
          hoverBorderWidth: '10',
          data: <?php echo json_encode($id_positive); ?>
      }, {
          label: 'Total Meninggal',
          backgroundColor: 'transparent',
          borderColor: '#fc4108',
          borderWidth: '5',
          hitRadius: '2',
          hoverBorderWidth: '10',
          data: <?php echo json_encode($id_death); ?>
      }, {
          label: 'Total Pemulihan',
          backgroundColor: 'transparent',
          borderColor: '#08fcab',
          borderWidth: '5',
          hitRadius: '2',
          hoverBorderWidth: '10',
          data: <?php echo json_encode($id_recovered); ?>

      }, {
          label: 'Total Pasien Dirawat',
          backgroundColor: 'transparent',
          borderColor: '#7929fa',
          borderWidth: '5',
          hitRadius: '2',
          hoverBorderWidth: '10',
          data: <?php echo json_encode($id_active); ?>
      }]
  },
  options: {
    responsive: true,
        maintainAspectRatio: false,
      title: {
          display: true,
          text: 'Indonesia',
          titleFontFamily: 'Arial, Helvetica, sans-serif',
          fontSize: '26',
          fontColor: 'white',
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
            fontColor: 'white',
        }
      }
  }
})




var ctxs = document.getElementById("chart-ID-add").getContext("2d");

var chart = new Chart(ctxs, {
  type: 'line',
  data: {
    labels: <?php echo json_encode($SetTime) ?>,
      
      datasets: [{
          label: 'Positif Tertinggi',
          backgroundColor: 'transparent',
          borderColor: '#fce308',
          borderWidth: '5',
          hitRadius: '2',
          hoverBorderWidth: '10',
          data: <?php echo json_encode($id_high_p); ?>
      }, {
          label: 'Meninggal Tertinggi',
          backgroundColor: 'transparent',
          borderColor: '#fc4108',
          borderWidth: '5',
          hitRadius: '2',
          hoverBorderWidth: '10',
          data: <?php echo json_encode($id_high_d); ?>
      }, {
          label: 'Pemulihan Tertinggi',
          backgroundColor: 'transparent',
          borderColor: '#08fcab',
          borderWidth: '5',
          hitRadius: '2',
          hoverBorderWidth: '10',
          data: <?php echo json_encode($id_high_r); ?>
      }, {
          label: 'Dirawat Tertinggi',
          backgroundColor: 'transparent',
          borderColor: '#7929fa',
          borderWidth: '5',
          hitRadius: '2',
          hoverBorderWidth: '10',
          data: <?php echo json_encode($id_high_a); ?>
      }]
  },
  options: {
    responsive: true,
        maintainAspectRatio: false,
      title: {
        display: true,
        text: 'Tertinggi Terakhir',
        fontSize: '26',
        fontFamily: 'Arial, Helvetica, sans-serif',
        fontColor: 'white',
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
              fontColor: 'white',
          }
      }
  }
})

</script>
<!--ending-->