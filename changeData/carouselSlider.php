<?php 
error_reporting(0);
include('carouselSliderServer.php');

if (isset($_GET['Qt494gjtldspofgkdofotmjklzajuefudjgieotptivnsagdhgjrikalqppdotnbmxncgdyenhdnsrogoslpqirugmkdjdlsnahs'])) {
    $id = $_GET['Qt494gjtldspofgkdofotmjklzajuefudjgieotptivnsagdhgjrikalqppdotnbmxncgdyenhdnsrogoslpqirugmkdjdlsnahs'];
    $Qt494gjtldspofgkdofotmjklzajuefudjgieotptivnsagdhgjrikalqppdotnbmxncgdyenhdnsrogoslpqirugmkdjdlsnahs_state = true;
    $reaction = mysqli_query($databaseuser, "SELECT * FROM slider WHERE id=$id");
    $run = mysqli_fetch_array($reaction);

      $title = $run["title"];
      $picture = $run["picture"];
      $link = $run["link"];
      $description = $run["description"];
      $id = $run['id'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarankan Pengubahan Data Global</title>
    <!--CSS only-->
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
<div class="modal fade" id="exampleModal" tabindex="-1" data-backdrop="static"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content bg-dark text-white">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kabar Beranda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="carouselSliderServer.php" method="POST"><!--dataStatsServer.php-->
          <h2 class="text-center">Berikan Kabar Beranda Anda</h2>
           <input type="hidden" name="id" value="<?php echo $id; ?>">
              <div class="form-group">
              <label>Judul</label>
              <input type="text" class="form-control bg-dark text-white" required autocomplete="off" name="title" value="<?php echo $title; ?>">
              </div>
              <div class="form-group">
              <label>Gambar</label>
              <input type="text" class="form-control bg-dark text-white" required autocomplete="off" name="picture" value="<?php echo $picture; ?>">
              </div>
              <div class="form-group">
              <label>Alamat Website</label>
              <input type="text" class="form-control bg-dark text-white" required autocomplete="off" name="link"value="<?php echo $link; ?>">
              </div>
              <div class="form-group">
              <label>Deskripsi</label>
              <textarea class="form-control bg-dark text-white" required  name="description" value=""><?php echo $description; ?></textarea>
              </div>
        
            <?php if ($Qt494gjtldspofgkdofotmjklzajuefudjgieotptivnsagdhgjrikalqppdotnbmxncgdyenhdnsrogoslpqirugmkdjdlsnahs_state == true):  ?>
              <button type="submit" class="btn btn-info btn-lg btn-block" name="updated" onclick="return confirm('Kabar Berita Akan Di Perbaharui Lanjutkan ?');"  >Perbaharui Kabar Beranda</button><!--name="updated"-->
            <?php else: ?>
              <button type="submit" class="btn btn-secondary btn-lg btn-block" name="sending" onclick=" return confirm('Tambahkan Kabar Berita ?');">Tambahkan Kabar Beranda</button><!--name="sending"-->
            <?php endif ?>
            </form>
      </div><!--ending modal body-->
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
    </div><!--end modal body-->
  </div>    
  </div>
 </div>
</div>
<!-- Button trigger modal -->
</div>
<div class="container">
  <input class="form-control text-center mb-4" id="posSearch"  type="text" placeholder="Cari di posisi Judul Berita">
  <div class="table-responsive-sm text-white">
    <table>
      <thead>
        <tr>
        <th>Judul</th>
        <th>Gambar</th>
        <th>Alamat Website</th>
        <th>Deskripsi</th>
        <th colspan="2">Tindakan</th>
        </tr>
      </thead>


      <?php while ($Open = mysqli_fetch_array($decodeRoom)) { ?>
        <tbody id="posTable">
        <tr>
        <td><?php echo htmlspecialchars($Open['title']); ?></td>
        <td><img src="<?php echo htmlspecialchars($Open['picture']); ?>" alt="" width="190"></td>
        <td><?php echo htmlspecialchars($Open['link']); ?></td>
        <td><?php echo htmlspecialchars($Open['description']); ?></td>
        <td><a href="carouselSlider?Qt494gjtldspofgkdofotmjklzajuefudjgieotptivnsagdhgjrikalqppdotnbmxncgdyenhdnsrogoslpqirugmkdjdlsnahs=<?php echo $Open['id']; ?>" onclick="javascript: return confirm('Periksa di tombol Edit / Masukkan Kabar Beranda Lanjutkan ?');"><i class="fas fa-edit text-warning"></i></a></td>
        <td><a href="carouselSliderServer.php?deleteData=<?php echo $Open['id']; ?>" onclick="Javascript: return confirm('Menghapus Kabar Beranda ?')"><i class="fas fa-trash-alt text-danger"></i></a></td>
        <!---->
        <!--href=""><i class="fas fa-edit"></i>-->
        <!--dataStatsServer.php?deleteData=<?php// echo $Open['id']; ?>-->
        
        </tr>
      </tbody>
      <?php } ?>
    </table>
  </div>
</div>
    <!-- Copyright -->
    <div class="footer-copyright mt-4 text-center py-3 bg-secondary" id="CopyrightUser"><script>document.getElementById("CopyrightUser").innerHTML ='&copy ' + new Date().getFullYear() + "&nbspCopyright:";</script>
    <a href="https://github.com/EnkiduRisk" class="text-white"> enkidurisk</a>
    </div>
    <!-- Copyright -->





  
</body>
</html>
<script>
    //Disable any click for close
    $('#myModal').modal({
    keyboard: false
    });

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
    
    #posSearch{
        color: #d3d3d3;
        font-family: sans-serif;
        letter-spacing: 1px;
        background: transparent;
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
        text-align: center;
        z-index: 1000;
        visibility: hidden;
        animation: animate;
        animation-duration: 4s;
        animation-iteration-count: 1;
        z-index: 1001;
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