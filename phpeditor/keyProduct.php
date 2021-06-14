<!--Create Key API 23 nov 2020-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  setInterval(function() {
    google();
  },500);
    //Produck key Form php users
    function google(params) {
    var google = document.getElementById("produckKey").value;
    

    if (google == '26022001') {
        //alert('Sukses masuk');
        document.getElementById("login").style.display = "none";
        
    } else {
        
    }
}


if (document.addEventListener) {
  document.addEventListener('contextmenu', function(e) {
    alert("Laporkan Masalah atau kontak gmail enkidu.risk@gmail.com"); //here you draw your own menu
    e.preventDefault();
  }, false);
} else {
  document.attachEvent('oncontextmenu', function() {
    alert("Laporkan Masalah atau kontak gmail enkidu.risk@gmail.com");
    window.event.returnValue = false;
  });
}

</script>

<script type="text/javascript">
window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==73||e.which==80||e.which==83||e.which==85)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}
</script>


<script type="text/javascript">
document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}
</script>

<!--

 <div id="login">
                <div class="formlogin">
                <p class="text-center text-white" style="font-size: 26px;">Masukkan Kunci Produk</p>
                    <input type="text" class="form-control bg-dark text-white mb-3 col-md-12" id="produckKey" autocomplete="off" autofocus placeholder="Masukkan Kunci Produk" id="">
                    <p class="text-warning" id="Warning"></p>
                </div>
                
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                    <a class="navbar-brand text-info" style="user-select: none;">Kunci Produk</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                         
                            <li class="nav-item">
                                <a class="nav-link" href="configure">Menu konfigurasi</a>
                            </li>   
                            <li class="nav-item">
                                <a class="nav-link" onclick='document.getElementById("Warning").innerHTML = "Untuk mencegahnya Serangan yang tidak wajar, kami terpaksa menggunakan Kunci Produk dan memblokir fasilitas sebagai pelindungan dari kesalahan laporan, atau spam terima kasih"'>Apa yang terjadi</a>
                            </li>  
                            <li class="nav-item">
                                <a class="nav-link" href="sebaran">Kembali Ke Sebaran</a>
                            </li>    

                        </ul>
                      <form class="form-inline my-2 my-lg-0" action="https://www.bing.com/" method="GET">
                        <input class="form-control mr-sm-2" type="search" required name="q" placeholder="Pencarian bing.com" value="corona">
                        <button class="btn btn-outline-info my-2 my-sm-0" type="submit" data-toggle="tooltip" data-placement="bottom">Search Bing</button>
                      </form>
                  </div>
                </nav>
            </div>
          
            <style>
              .formlogin{
        width: 50%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        
    }
    @media(max-width: 1030px){
        .formlogin{
            width: 95%;
            top: 40%;
        }
    }
    #login{
        position: fixed;
        width: 100%;
        height: 100vh;
        background: #2b2b2b;
        z-index: 10000;
        user-select: none;
    }
    input{
        font-size: 30px;
    }
            </style>
-->