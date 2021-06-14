<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="shortcut icon" href="icon/covid19.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <!-- JS, Popper.js, and jQuery -->
     <meta name="theme-color" content="#121212"/>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--CSS only-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">

</head>
<body onload="renderTime();" style="background: #101010;">
             <!--bar-->
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top">
        <a class="navbar-brand text-info user-select-none">COVID-19 Enkidu</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ke halaman Menu utama
                        </a>
                        <div class="dropdown-menu bg-dark border-secondary" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-white bg-dark" href="beranda">Beranda</a>
                        <a class="dropdown-item text-white bg-dark" href="sebaran">Data Sebaran</a>
                        <a class="dropdown-item text-white bg-dark" href="feeds">Feeds</a>
                        <a class="dropdown-item text-white bg-dark" href="covid19">Detail info</a>
                    </li>
                  </ul>
              <form class="form-inline my-2 my-lg-0" action="https://www.bing.com/" method="GET">
                  <input class="form-control mr-sm-2" type="search" required name="q" placeholder="Pencarian bing.com" value="corona">
                  <button class="btn btn-outline-info my-2 my-sm-0" type="submit" data-toggle="tooltip" data-placement="bottom">Search Bing</button>
                </form>
              </div>
    </nav>
    
    <br><br><br>
<div class="container">


<div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">
 <!--Carousel Wrapper-->
  <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-2" data-slide-to="2"></li>
      <li data-target="#carousel-example-2" data-slide-to="3"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="view">
        <img class="d-block w-100 rounded-sm" src="https://images.unsplash.com/photo-1533204515132-035bc8d4128c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" 
        alt="..." >
          <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption">
        <h3 class="h3-responsive" data-toggle="modal" data-target="#modal_1" style="cursor: pointer; font-size: 23px;">Explore</h3>
          <p>Menjelajahi dunia tanpa batas meskipun coronavirus</p>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100 rounded-sm" src="https://images.unsplash.com/photo-1584920845297-22122ebba62b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
            alt="...">
          <div class="mask rgba-black-strong"></div>
        </div>
        <div class="carousel-caption">
        <h3 class="h3-responsive" style="cursor: pointer; font-size: 23px;">Interesting</h3>
          <p>Melakukan apa saja kapan saja</p>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100 rounded-sm" src="https://images.unsplash.com/photo-1584803473818-1a81217f00b0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
            alt="...">
          <div class="mask rgba-black-slight"></div>
        </div>
        <div class="carousel-caption ">
        <h3 class="h3-responsive" style="cursor: pointer; font-size: 23px;">Developer to developer</h3>
          <p>Berjuang semampunya dari pengembang untuk pengembang</p>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100 rounded-sm" src="https://images.wallpaperscraft.com/image/bridge_night_lights_168419_2560x1440.jpg"
            alt="...">
          <div class="mask rgba-black-strong"></div>
        </div>
        <div class="carousel-caption">
        <h3 class="h3-responsive" style="cursor: pointer; font-size: 23px;">About us</h3>
          <p>Nikmati Dashboard kami tanpa iklan</p>
        </div>
      </div>
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
  </div>
  <br><br>
<!--/.Carousel Wrapper-->

<div class="card-deck">
  <div class="card bg-dark text-white">
    <img src="https://i.ytimg.com/vi/0dAoCfgAQw8/maxresdefault.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Tentang Kami</h5>
      <p class="card-text">Halaman Ini Dibuat 18 Maret 2020 oleh enkidu Dan Lainnya</p>
    </div>
  </div>
  <div class="card bg-dark text-white">
    <img src="https://i.ytimg.com/vi/8tDlUyHz_Wo/maxresdefault.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Motivasi Dari Kami</h5>
      <p class="card-text">Mengubah ketakutan menjadi tantangan</p>
    </div>
  </div>
  <div class="card bg-dark text-white">
    <img src="https://www.zastavki.com/pictures/1280x720/2010/World___Italy_The_ruins_of_old_Rome_022117_26.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Sejarah Terbangun</h5>
      <p class="card-text">kemalasan mengunjungi karena bug, kami membuat tracker corona gabungan</p>
    </div>
  </div>
  <div class="card bg-dark text-white">
    <img src="https://mastel.id/wp-content/uploads/2019/02/5-negera-tech-asia.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Rancangan Aplikasi</h5>
      <p class="card-text">Dibuat untuk Pembelajaran dan dapat dikembangkan siapa saja</p>
    </div>
  </div>
</div>





<!--About US-->
<h1 class="text-white text-center" style="margin-top: 5%;">Tentang kami</h1>
<hr class="bg-info mt-4">
<div class="card-deck mt-4">
  <div class="card bg-dark text-white">
    <img src="https://s.yimg.com/ny/api/res/1.2/ZRsV3S438svL_O9HKvOooA--/YXBwaWQ9aGlnaGxhbmRlcjtoPTY2Ng--/https://media.zenfs.com/ID/liputan6_hosted_772/d29a66c9445a7d438e93a93a7a98069f" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Garis Pandemi</h5>
      <p class="card-text">Lama Massa Coronavirus Dengan Waktu Sekarang</p>
    </div>
    <a data-toggle="modal" data-target="#exampleModal_1" class="btn btn-dark border-secondary text-white">Lihat Lengkap</a>
  </div>
  <div class="card bg-dark text-white">
    <img src="https://www.blibli.com/friends/assets/2017/12/shutterstock_525845020-1-1280x720.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Dukungan Kami</h5>
      <p class="card-text">Terimakasih Atas Feedback Saran Yang Diberikan</p>
      
    </div>
    <a data-toggle="modal" data-target="#exampleModal_2" class="btn btn-dark border-secondary text-white">Dukungan</a>
  </div>
  <div class="card bg-dark text-white">
    <img src="https://www.paper.id/blog/wp-content/uploads/2019/01/startups2-1200x638-1280x720.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Info Pengembang</h5>
      <p class="card-text">Kami Percaya Kepada Pengguna Dari Feedback</p>
      
    </div>
    <a data-toggle="modal" data-target="#exampleModal_3" class="btn btn-dark border-secondary text-white">Profile User</a>
  </div>
  <div class="card bg-dark text-white">
    <img src="https://a-static.besthdwallpaper.com/3d-coronavirus-wallpaper-1280x720-53708_45.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Browser Anda</h5>
      <p class="card-text">Tentang Versi Browser Yang Dipakai</p>
      
    </div>
    <a data-toggle="modal" data-target="#exampleModal_4" class="btn btn-dark border-secondary text-white">Versi Browser</a>
  </div>
</div>
</div>
</div>

</div><!--end container-->

<div class="modal fade" id="exampleModal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Garis Pandemi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body list-group" id="dataSet">
                    <p class="list-group-item rounded-sm" id="clockDisplay"></p>
                    <p class="list-group-item rounded-sm" id="clock-native"></p>
                    <p class="list-group-item rounded-sm" id="GoSchool"></p>
                    <p class="list-group-item rounded-sm" id="ResetReasonMoba"></p>
                </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Okee Sip👍</button>
                </div>
            </div>
            </div>
          </div>

          <div class="modal fade" id="exampleModal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content bg-dark text-white">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Terima Kasih Atas Dukungan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="text-center border-bottom mb-4">
                      <img src="https://i.gifer.com/UvNz.gif" class="rounded mb-3" alt="..." width="230">
                      <h3 class="text-success font-weight-bold">Google Search</h3>
                      <p class="text-justify">Google LLC adalah sebuah perusahaan multinasional Amerika Serikat yang berkekhususan pada jasa dan produk Internet. Produk-produk tersebut meliputi teknologi pencarian, komputasi web, perangkat lunak, dan periklanan daring. Sebagian besar labanya berasal dari AdWords.</p>
                      <ul class="text-left text-warning">
                      <li><b>Produk lain Google</b> Youtube, Calender, Play Games, Chrome, Maps, Hangouts, Photos, Play Store, Drive, Duo Etc.</li>
                      <li><b>Industri</b> Internet, Perangkat lunak komputer</li>
                      <li><b>Didirikan</b> 4 September 1998</li>
                      <li><b>Jenis</b> Terbuka / Situs web Dinamis</li>
                      <li><b>Pendiri</b> Larry Page, Sergey Brin</li>
                      <li><b>Situs Web </b><a href="https://www.google.com/" id="link">Google Search</a></li>
                    </ul>
                    </div>

                    <div class="text-center border-bottom mb-4">
                      <img src="https://apifyusercontent.com/5255af4212441560dd4ebff25d684a9e350b034b/68747470733a2f2f61706966792d696d6167652d75706c6f6164732d70726f642e73332e616d617a6f6e6177732e636f6d2f344f746b6c64523162497838354472546d2f61507336756f51776346714147737844502d31666e4a507a784d5f343030783430302e706e67" class="rounded mb-3" alt="..." width="230">
                      <h3 class="text-success font-weight-bold">Worldometers - info coronavirus</h3>
                      <p class="text-justify">Worldometer, dulunya Worldometers, adalah sebuah situs web rujukan yang menyediakan penghitungan dan statistik waktu nyata untuk beragam topik. Situs tersebut dimiliki dan dioperasikan oleh perusahaan data Dadax yang meraih pendapatan melalui iklan daring</p>
                      <ul class="text-left text-warning">
                        <li><b>Jenis situs</b> Statistik waktu nyata</li>
                        <li><b>Didirikan</b> 29 Januari 2008</li>
                        <li><b>Pemilik</b> Dadax Limited</li>
                        <li><b>Situs Web </b><a href="https://www.worldometers.info/coronavirus/" id="link">Wordometers Coronavirus</a></li>
                      </ul>
                    </div>


                    <div class="text-center border-bottom mb-4">
                      <img src="https://www.who.int/Images/SchemaOrg/schemaOrgLogo.jpg" class="rounded mb-3" alt="..." width="230">
                      <h3 class="text-success font-weight-bold">WHO - World Health Organization</h3>
                      <p class="text-justify">Organisasi Kesehatan Dunia adalah salah satu badan PBB yang bertindak sebagai koordinator kesehatan umum internasional dan bermarkas di Jenewa, Swiss. Direktur Jendral sekarang adalah Tedros Adhanom.</p>
                      <ul class="text-left text-warning">
                        <li><b>Didirikan</b> 7 April 1948</li>
                        <li><b>Kantor Pusat</b> Jenewa, Swiss</li>
                        <li><b>Singkatan</b> WHO</li>
                        <li><b>Jenis Situs</b> Kesehatan Global dan lokal</li>
                        <li><b>Wilayah Hukum</b> Global</li>
                        <li><b>Situs Web </b><a href="https://www.who.int/" id="link">WHO Global</a> Dan <a href="https://www.who.int/indonesia" id="link">WHO - Indonesia</a></li>

                      </ul>
                    </div>

                    <div class="text-center border-bottom mb-4">
                      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Logo_Kompasdotcom.png/1200px-Logo_Kompasdotcom.png" class="rounded mb-3" alt="..." width="230">
                      <h3 class="text-success font-weight-bold">Kompas com - Jernih Melihat Dunia</h3>
                      <p class="text-justify">Kompas.com adalah sebuah portal web yang berisi berita dan artikel daring di Indonesia. Kompas.com merupakan salah satu situs berita terpopuler di Indonesia. Berbeda dari situs-situs berita berbahasa Indonesia lainnya, Kompas.com hanya mempunyai edisi daring dan menggantungkan pendapatan dari bidang iklan.</p>
                      <ul class="text-left text-warning">
                        <li><b>Pemilik</b> Kompas Gramedia</li>
                        <li><b>Diluncurkan</b> 14 September 1995</li>
                        <li><b>Jenis situs</b> Situs web Berita</li>
                        <li><b>Situs Web </b><a href="https://www.kompas.com/" id="link">Kompas com</a></li>
                      </ul>

                    </div>

                    <div class="text-center border-bottom mb-4">
                      <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/Shopee-logo.jpg" class="rounded mb-3" alt="..." width="230">
                      <h3 class="text-success font-weight-bold">Shopee - The New Normal</h3>
                      <p class="text-justify">Shopee adalah serambi perdagangan elektronik yang berkantor pusat di Singapura di bawah SEA Group, yang didirikan pada 2009 oleh Forrest Li. Shopee pertama kali diluncurkan di Singapura pada tahun 2015, dan sejak itu memperluas jangkauannya ke Malaysia, Thailand, Taiwan, Indonesia, Vietnam, dan Filipina.</p>
                      <ul class="text-left text-warning">
                        <li><b>Pendiri</b> Forrest Li</li>
                        <li><b>CEO</b> Chris Feng (Jul 2015 – Sekarang)</li>
                        <li><b>Markas</b> Singapura</li>
                        <li><b>Didirikan</b> 2015 <b>Sebelumnya Garena</b> 2009</li>
                        <li><b>Jenis Situs</b> E-Commerce</li>
                        <li><b>Situs Web </b><a href="https://shopee.co.id/" id="link">Shopee Belanja online - Indonesia</a></li>
                      </ul>
                    </div>

                    <div class="text-center border-bottom mb-4">
                      <img src="https://obs.line-scdn.net/0hDKTba-TVG2RpGzNdRilkM1NNGAtadwhnDS1Kejl1RVAQLwgxVnpQCkpIFldFI1w6By1UA00TAFUXIww3XXlQ/w644" class="rounded mb-3" alt="..." width="230">
                      <h3 class="text-success font-weight-bold">COVID-19 Coronavirus</h3>
                      <p class="text-justify">Penyakit virus corona (COVID-19) adalah penyakit menular yang disebabkan oleh virus corona yang baru-baru ini ditemukan.</p>
                      <ul class="text-left text-warning">
                        <li><b>Jenis</b> Virus</li>
                        <li><b>Lokasi Pertama Kali</b> Wuhan - China</li>
                        <li><b>Terdeteksi</b> 29 Desember 2019</li>
                        <li><b>Jenis</b> Penyakit Mematikan</li>
                        <li><b>Situs Web </b><a href="https://www.google.com/search?q=COVID-19&oq=COVID-19&aqs=chrome.0.69i59j35i39j69i61l3j69i65l3.2965j0j7&sourceid=chrome&ie=UTF-8" id="link">COVID-19 Google</a></li>
                      </ul>
                    </div>
                    <div class="text-center border-bottom mb-4">
                      <img src="https://upload.wikimedia.org/wikipedia/commons/8/84/Coronavirus_Disease_Mitigation_Acceleration_Task_Force.jpg" class="rounded mb-3" alt="..." width="230">
                      <h3 class="text-success font-weight-bold">COVID-19 Gugus Tugas Penanganan</h3>
                      <p class="text-justify">Gugus Tugas Percepatan Penanganan Coronavirus Disease 2019 adalah sebuah gugus tugas yang dibentuk pemerintah Indonesia untuk mengkoordinasikan kegiatan antarlembaga dalam upaya mencegah dan menanggulangi dampak penyakit koronavirus baru di Indonesia.</p>
                      <ul class="text-left text-warning">
                        <li><b>Didirikan</b> 13 Maret 2020</li>
                        <li><b>Wilayah hukum</b> Pemerintah Indonesia</li>
                        <li><b>Pejabat eksekutif</b> Doni Monardo, Kepala pelaksana</li>
                        <li><b>Situs Web </b><a href="https://covid19.go.id/" id="link"> COVID-19 ID</a></li>
                      </ul>
                    </div>

                    
                  </div>
                  
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Okee Sip👍</button>
              
                </div>
              </div>
            </div>


            <div class="modal fade" id="exampleModal_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-scrollable">
                    <div class="modal-content bg-dark text-white">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Info Pengembang Coronavirus - COVID-19</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <img src="icon/covid19.ico" class="rounded" width="230">
                          <h3 class="text-success mt-3 font-weight-bold">Info Pengembang Coronavirus - COVID-19</h3>
                          <p class="text-center">Info pengenalan user</p>
                          <ul class="text-warning text-left">
                            <li><b>Nama User </b>Enkidu</li>
                            <li><b>No Telepon Pengembang </b><a onclick="telp();" id="link">0813-7593-6477</a></li>
                            <li><b>E-mail</b><a onclick="mailBox();" id="link"> enkidu.risk@gmail.com</a></li>
                            <li><b>Alamat</b><a onclick="map();" id="link"> Lihat Penuh</a></li>
                            <li><b>Aktif Di Halaman Ini</b> 18 Maret 2020 s/d 17 Desember 2020</li>
                            <li><b>Jenis domain</b> Localhost / xampp</li>
                       
                          </ul>
                        </div>
                      </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Okee Sip👍</button>
                    </div>
                  </div>
                </div>

                <script>
                  function telp(params) {
                    var openTelp = window.open("tel:+62813-7593-6477",'_blank');
                    openTelp.focus();
                  }

                  function mailBox(params) {
                    var openMail = window.open("mailto:playerglobal62@email.com?&subject=Sebagai%20Pembaca%20data%20coronavirus&body=Beritahu%20kami%20jika%20ada%20kendala%20terima%20kasih",'_blank');
                    openMail.focus();
                  }

                  function map(params) {
                    var Mapid = window.open("address",'_blank');
                    Mapid.focus();
                  }
                </script>



      <div class="modal fade" style="font-size: 20px;" id="exampleModal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content bg-dark text-white">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tentang Browser Anda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <script>
                    //Source Link Github 1 may 2020
                    //Github download link or search
                    //Mendeteksi browser menggunakan javaScript
                    function browser(){
                        var ua=navigator.userAgent,tem,M=ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
                        if(/trident/i.test(M[1])){
                            tem=/\brv[ :]+(\d+)/g.exec(ua) || [];
                            return 'IE '+(tem[1]||'');
                            }
                        if(M[1]==='Chrome'){
                            tem=ua.match(/\bOPR\/(\d+)/)
                            if(tem!=null)   {return 'Opera '+tem[1];}
                            }
                        M=M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
                        if((tem=ua.match(/version\/(\d+)/i))!=null) {M.splice(1,1,tem[1]);}
                        return M[0];
                        }
                    function browser_version(){
                        var ua=navigator.userAgent,tem,M=ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
                        if(/trident/i.test(M[1])){
                            tem=/\brv[ :]+(\d+)/g.exec(ua) || [];
                            return 'IE '+(tem[1]||'');
                            }
                        if(M[1]==='Chrome'){
                            tem=ua.match(/\bOPR\/(\d+)/)
                            if(tem!=null)   {return 'Opera '+tem[1];}
                            }
                        M=M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
                        if((tem=ua.match(/version\/(\d+)/i))!=null) {M.splice(1,1,tem[1]);}
                        return M[1];
                        }
                    var browser=browser();
                    var browser_version=browser_version();
                    document.write("<ul>")
                    document.write("<li>" + "Nama Browser : "+browser+"<br/>" + "</li>" );
                    document.write("<li>" + "Versi Browser : "+browser_version+"<br>" + "</li>" );
                    document.write("<li>" + "Kode Nama : "+navigator.appCodeName+"<br>" + "</li>" );
                    document.write("<li>" + "Nama : "+navigator.appName+"<br>" + "</li>" );
                    document.write("<li>" + "Bahasa : "+navigator.language+"<br>" + "</li>" );
                    document.write("<li>" + "Software Platform  : "+navigator.platform+"<br>" + "</li>" );
                    document.write("<li>" + "Versi Saat ini : "+navigator.appVersion+"<br>") + "</li>" ;
                    document.write("<li>" + "Pengguna Agen : "+navigator.userAgent+"<br>" + "</li>" );
                    document.write("</ul>");
                </script>
            </div>
 
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Okee Sip!</button>
            </div>
        </div>
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
        <a href="https://www.instagram.com/yusra_budiman/" class="text-white">Instagram</a>
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
            body{
              font-family: sans-serif;
            }
            /*scrollbar*/
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
            #dataSet p{
              background: #1f1f1f;
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
          }
</style>
<script>
                      function renderTime() {
                      var mydate = new Date();
                      var year = mydate.getYear();

                      if(year < 1000){
                          year +=1900
                      }
                      var day = mydate.getDay();
                      var month = mydate.getMonth();
                      var dayDate = mydate.getDate();
                      var dayarray = new Array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu");
                      var montharray = new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                      //Create date Ends

                      var currentTime = new Date();
                      var h = currentTime.getHours();
                      var m = currentTime.getMinutes();
                      var s = currentTime.getSeconds();
                      //Create Time CLock
                          if(h == 24){
                              h = 0;
                          }else if(h > 12){
                              h = h - 0;
                          }
                          if(h < 10){
                              h = "0" + h;
                          }
                          if(m < 10){
                              m = "0" + m;
                          }
                          if(s < 10){
                              s = "0" + s;
                          }

                          var myClock = document.getElementById("clockDisplay");
                          
                          //textContent, InnerText and InnerHTML same as output Text
                          myClock.innerHTML = "Coronavirus Terdeteksi Minggu 29 Desember 2019 | 00:00:00<br> " + "Saat ini:  " +dayarray[day]+ " " +dayDate+ " " +montharray[month]+ " " +year+ " | " +h+ ":" +m+ ":" +s+" WIB";
                          setTimeout("renderTime();", 1000);
                  }

                  //New Year For fun 2021
                  var countDown = new Date("Jan 01, 2022 00:00:00").getTime();

                      var interval = setInterval(function(){
                          var Now = new Date().getTime();
                              var distance = countDown - Now;

                              var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                              var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))
                              var seconds = Math.floor((distance % (1000 * 60)) / (1000));

                              document.getElementById("clock-native")
                              .innerHTML = 'Waktu Pengantian Tahun 01 Januari 2022 | 00:00:00<br> ' +'Tersisa: ' + days + 'h  ' + hours + 'j  ' + minutes + 'm  ' + seconds + 'd ';
                              
                              if(distance < 0){
                                  clearInterval(interval);
                                  document.getElementById("clock-native")
                                  .innerHTML = 'Selamat Tahun Baru 2022 Untuk Menuju ke depannya';
                              }

                      },1000);

                      //Data go to school

                      var GoDateCountDate = new Date("Jun 20, 2021 05:50:00").getTime();

                      var intervalDate = setInterval(function(){
                          var nowDate = new Date().getTime();

                          var GoDate = GoDateCountDate - nowDate;

                              var TimeOneDate = Math.floor(GoDate / (1000 * 60 * 60 * 24));
                              var TimeTwoDate = Math.floor((GoDate % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                              var TimeThreeDate = Math.floor((GoDate % (1000 * 60 * 60)) / (1000 * 60));
                              var TimeFourDate  = Math.floor((GoDate % (1000 * 60)) / (1000));

                              document.getElementById("GoSchool")
                              .innerHTML = 'Tahun Tamat Sekolah 20 Juni 2021 | 05:50:00 <br> ' + 'Tersisa: ' + TimeOneDate + 'h ' + TimeTwoDate + 'j ' + TimeThreeDate + 'm ' + TimeFourDate + 'd ';

                              if(GoDate < 0){
                                  clearInterval(intervalDate);
                                      document.getElementById("GoSchool").innerHTML = 'Sekarang Tamat Sekolah SMK Panca Budi';
                                  
                              }
                      },1000);


                      var ResetSeason = new Date("Jun 18, 2021 17:00:00").getTime();

                      var intervalData = setInterval(function(){
                          var countNow = new Date().getTime();

                              var LoadOut = ResetSeason - countNow;

                                  var hari = Math.floor(LoadOut / (1000 * 60 * 60 * 24));
                                  var Jam = Math.floor((LoadOut % (1000 * 60 * 60 * 24 )) / (1000 * 60 * 60));
                                  var menit = Math.floor((LoadOut % (1000 * 60 * 60)) / (1000 * 60));
                                  var detik = Math.floor((LoadOut % (1000 * 60)) / (1000));


                                  document.getElementById("ResetReasonMoba")
                                  .innerHTML = 'Reset Season Mobile Legends bang bang 18 Juni 2021 | 17:00:00 <br>Tersisa : ' + hari + 'h ' + Jam + 'j ' + menit + 'm ' + detik + 'd';

                                  if (LoadOut < 0) {
                                      clearInterval(intervalData);
                                      document.getElementById("ResetReasonMoba").innerHTML = "Selamat Datang di Season 21 Dan Menjadi hal baru";
                                  }
                      }, 1000);
 </script>