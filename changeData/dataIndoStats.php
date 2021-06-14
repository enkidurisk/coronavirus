<?php 
error_reporting(0);

include('dataIndoStatsServer.php');

if (isset($_GET['grifnfjifrklkowjiefkskiqjjvbgvatgdyfnijfijdisqkwokdoirjgimolkfokdowllsowkirnjuuvnkmekdmslkodkvokgptkokdisuhvnksmldoskforjginunujuitjifk'])) {
  $id = $_GET['grifnfjifrklkowjiefkskiqjjvbgvatgdyfnijfijdisqkwokdoirjgimolkfokdowllsowkirnjuuvnkmekdmslkodkvokgptkokdisuhvnksmldoskforjginunujuitjifk'];
  $grifnfjifrklkowjiefkskiqjjvbgvatgdyfnijfijdisqkwokdoirjgimolkfokdowllsowkirnjuuvnkmekdmslkodkvokgptkokdisuhvnksmldoskforjginunujuitjifk_state = true;
  $indoreact = mysqli_query($databaseIndo, "SELECT * FROM indonesia_corona WHERE id=$id");
  $IndoCorona = mysqli_fetch_array($indoreact);

  $indoTime = $IndoCorona["indoTime"];
  $id_positive = $IndoCorona["id_positive"];
  $id_death = $IndoCorona["id_death"];
  $id_recovered = $IndoCorona["id_recovered"];
  $id_active = $IndoCorona["id_active"];
  $id_high_p = $IndoCorona["id_high_p"];
  $id_high_d = $IndoCorona["id_high_d"];
  $id_high_r = $IndoCorona["id_high_r"];
  $id_high_a = $IndoCorona["id_high_a"];
  $id = $IndoCorona['id'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarankan Pengubahan Data Indonesia</title>
    <link rel="shortcut icon" href="covid19.ico" type="image/x-icon">
    

    <meta name="theme-color" content="#121212"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body style="background: #101010;">

<?php if (isset($_SESSION['msg'])): ?>
    <div class="msg bg-dark">
        <?php 
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        ?>
    </div>
<?php endif ?>
 <!--navbar-expand-lg to config responsive-->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <!--Start navbar item-->
                      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <!--     <li class="nav-item">
                            <a class="nav-link" href="http://localhost/email_php/index.php">Melalui Email</a>
                        </li>-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ubah Data Berikutnya
                            </a>
                            <div class="dropdown-menu bg-dark border-secondary" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-white bg-dark" href="carouselSlider">Kabar Beranda</a>
                            <a class="dropdown-item text-white bg-dark" href="cardpoint">Infomasi Virus Corona</a>
                            <a class="dropdown-item text-white bg-dark" href="dataStats">Data Corona Dunia</a>
                            <a class="dropdown-item text-white bg-dark" href="dataIndoStats">Data Corona Indonesia</a>
                        </li>
                    </ul>
                      <li class="nav-item">
                          <a class="nav-link" data-toggle="modal"  data-target="#exampleModal">Edit / masukkan data</a>
                      </li>
                  </ul>
                <form class="form-inline my-2 my-lg-0" action="https://www.bing.com/" method="GET">
                  <input class="form-control mr-sm-2" type="search" required name="q" placeholder="Pencarian bing.com" value="corona">
                  <button class="btn btn-outline-info my-2 my-sm-0" type="submit" data-toggle="tooltip" data-placement="bottom">Search Bing</button>
                </form>
            </div>
          </nav>

        <br><br><br>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content bg-dark text-white">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Corona Global Indonesia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
          <div class="modal-body">
                      <form action="dataIndoStatsServer.php" method="POST"><!--dataIndoStatsServer.php-->
                          <h2 class="text-center">Data Corona Global Indonesia</h2>
                          <input type="hidden" name="id" value="<?php echo $id; ?>">
                              <div class="form-group">
                              <label>Tanggal Laporan</label>
                              <input type="date" class="form-control bg-dark text-white" required autocomplete="off" name="indoTime" id="" value="<?php echo $indoTime; ?>">
                              </div>
                              <div class="form-group">
                              <label>Positif</label>
                              <input type="number" class="form-control bg-dark text-white" required autocomplete="off" name="id_positive" id="" value="<?php echo $id_positive; ?>">
                              </div>
                              <div class="form-group">
                              <label>Meninggal</label>
                              <input type="number" class="form-control bg-dark text-white" required autocomplete="off" name="id_death" id="" value="<?php echo $id_death; ?>">
                              </div>
                              <div class="form-group">
                              <label>Sembuh</label>
                              <input type="number" class="form-control bg-dark text-white" required autocomplete="off" name="id_recovered" id="" value="<?php echo $id_recovered; ?>">
                              </div>
                              <div class="form-group">
                              <label>Dirawat</label>
                              <input type="number" class="form-control bg-dark text-white" required autocomplete="off" name="id_active" id="" value="<?php echo $id_active; ?>">
                              </div>
                              <div class="form-group">
                              <label>Positif Tertinggi</label>
                              <input type="number" class="form-control bg-dark text-white" required autocomplete="off" name="id_high_p" id="" value="<?php echo $id_high_p; ?>">
                              </div>
                              <div class="form-group">
                              <label>Kematian Tertinggi</label>
                              <input type="number" class="form-control bg-dark text-white" required autocomplete="off" name="id_high_d" id="" value="<?php echo $id_high_d; ?>">
                              </div>
                              <div class="form-group">
                              <label>Sembuh Tertinggi</label>
                              <input type="number" class="form-control bg-dark text-white" required autocomplete="off" name="id_high_r" id="" value="<?php echo $id_high_r; ?>">
                              </div>
                              <div class="form-group">
                              <label>Dirawat Tertinggi</label>
                              <input type="number" class="form-control bg-dark text-white" required autocomplete="off" name="id_high_a" id="" value="<?php echo $id_high_a; ?>">
                              </div>
                          
                     
                        <?php if($grifnfjifrklkowjiefkskiqjjvbgvatgdyfnijfijdisqkwokdoirjgimolkfokdowllsowkirnjuuvnkmekdmslkodkvokgptkokdisuhvnksmldoskforjginunujuitjifk_state == true): ?>
                          <button type="submit" class="btn btn-info btn-lg btn-block" name="indoupdate" onclick="return confirm('Data INDONESIA Akan DIPERBAHARUI lanjutkan ?')" >Perbaharui data indonesia</button><!--name="indoupdate"-->
                        <?php else: ?>
                          <button type="submit" class="btn btn-secondary btn-lg btn-block" name="sendingID" onclick="return confirm('Data INDONESIA Akan DITAMBAHKAN lanjutkan ?');">Kirim Data Indonesia</button><!--name="sendingID"-->
                        <?php endif ?>
                      </form>
              </div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>
</div>


  <div class="container">
   <input class="form-control mb-4 text-center" id="posSearch"  type="text" placeholder="Cari di posisi tanggal">
<div class="table-responsive-sm text-white">
    <table>
      <thead>
        <tr>
          <th>Tanggal laporan</th>
          <th>Positif</th>
          <th>kematian</th>
          <th>Sembuh</th>
          <th>Dirawat</th>
          <th>Positif tertinggi</th>
          <th>kematian tertinggi</th>
          <th>Sembuh tertinggi</th>
          <th>Dirawat tertinggi</th>
          <th colspan="2">Tindakan</th>
        </tr>
      </thead>
      <?php while ($ID_Open = mysqli_fetch_array($resultsOut)) { ?>
        <tbody id="posTable">
        <tr>
          <td><?php echo date('d F Y', strtotime($ID_Open['indoTime']));?></td>
          <td><?php echo number_format($ID_Open['id_positive']); ?></td>
          <td><?php echo number_format($ID_Open['id_death']); ?></td>
          <td><?php echo number_format($ID_Open['id_recovered']); ?></td>
          <td><?php echo number_format($ID_Open['id_active']);?></td>
          <td><?php echo number_format($ID_Open['id_high_p']); ?></td>
          <td><?php echo number_format($ID_Open['id_high_d']); ?></td>
          <td><?php echo number_format($ID_Open['id_high_r']); ?></td>
          <td><?php echo number_format($ID_Open['id_high_a']); ?></td>
          <td><a href="dataIndoStats?grifnfjifrklkowjiefkskiqjjvbgvatgdyfnijfijdisqkwokdoirjgimolkfokdowllsowkirnjuuvnkmekdmslkodkvokgptkokdisuhvnksmldoskforjginunujuitjifk=<?php echo $ID_Open['id']; ?>" onclick="javascript: return confirm('Periksa di tombol Edit / Masukkan data INDONESIA corona tertulis tanggal <?php echo date('d F Y', strtotime($ID_Open['indoTime'])); ?> Data nomor <?php echo $ID_Open['id']; ?> Lanjutkan ?');"><i class="fas fa-edit text-warning"></i></a></td>
          <td><a href="#" onclick="javascript: return alert('Tidak dapat menghapus jika tidak memiliki izin oleh enkidu data INDONESIA tanggal <?php echo date('d M Y', strtotime($ID_Open['indoTime'])); ?>');"><i class="fas fa-trash-alt text-danger"></i></a></td>
          <!--dataIndoStatsServer.php?deleteCfg=<?php// echo $ID_Open['id']; ?>-->
          <!--dataIndoStats.php?grifnfjifrklkowjiefkskiqjjvbgvatgdyfnijfijdisqkwokdoirjgimolkfokdowllsowkirnjuuvnkmekdmslkodkvokgptkokdisuhvnksmldoskforjginunujuitjifk=<?php// echo $ID_Open['id']; ?>-->
        </tr>
      </tbody>
  <?php } ?>
  
</table>
</div>
</div><!--end container-->


<!-- Copyright -->
<div class="footer-copyright mt-4 text-center py-3 bg-secondary" id="CopyrightUser"><script>document.getElementById("CopyrightUser").innerHTML ='&copy ' + new Date().getFullYear() + "&nbspCopyright:";</script>
<a href="https://github.com/EnkiduRisk" class="text-white"> enkidurisk</a>
</div>
<!-- Copyright -->



   
</body>
</html>
<script>

function backToSebaran(params) {
        window.history.back();
   }
    $('#myModal').modal({
    keyboard: false
    })

        //Filter Search
        $(document).ready(function(){
      
      $("#posSearch").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        
      $("#posTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      });
    });
  });



</script>
<style>

    ::-webkit-scrollbar{
        width: 0px;
        height: 0px;

    }

    body{
        background: #ffffff;
        color: #ffffff;
        font-family: sans-serif;
    }
    label{
       font-size: 26px;
    }
    #posSearch{
        color: #d3d3d3;
        font-family: sans-serif;
        letter-spacing: 1px;
        background: transparent;
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
        padding: 5px;
        background: #045a20;
        font-size: 17px;
        text-align: center;
        border: 2px solid #000000;
    }
    td{
        text-align: center;
        font-size: 18px;
        background: #0c2b35;
        padding: 12px;
        border: 2px solid #000000;
    }
    @media(max-width: 780px){

        tr, th{
            font-size: 14px;
            padding: 5px;
        }
        td{
            font-size: 16px;
            padding: 13px;
        }
    }
    /*label forum*/
    label{
      font-size: 26px;
    }
    td:nth-child(2){
      background: #615304;
    }
    td:nth-child(3){
      background: #5e1a1a;
    }
    td:nth-child(4){
      background: #025826;
    }
    td:nth-child(5){
      background: #2a0c52;
    }
    td:nth-child(6){
      background: #4f5c04;
    }
    td:nth-child(7){
      background: #58200e;
    }
    td:nth-child(8){
      background: #025036;
    }
    td:nth-child(9){
      background: #35165e;
    }
   
    .msg{
        position: fixed;
        bottom: 2vh;
        left: 1vh;
        color: #ffffff;
        border-radius: 10px;
        padding: 2vh;
        width: 30%;
        font-size: 22px;
        z-index: 1000;
        text-align: center;
        visibility: hidden;
        animation: animate;
        z-index: 1001;
        animation-duration: 4s;
        animation-iteration-count: 1;
    }
    @keyframes animate{
      0%{
        opacity: 1;
        visibility: visible;
      }
      90%{
        opacity: 1;
        visibility: visible;
      }
      100%{
        opacity: 0;
        visibility: hidden;
      }
    }
    @media(max-width: 720px){
        .msg{
            width: 97%;
            height: 64vh;
            font-size: 26px;
            bottom: .4vh;
            z-index: 1001;
        }
    }
</style>
</body>
</html>
<!--ending-->