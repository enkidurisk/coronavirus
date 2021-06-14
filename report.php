<?php date_default_timezone_set("Asia/Jakarta") ?>
<?php
    error_reporting(0);
    session_start();
    $name = "";
    $email = "";
    $post = "";
    $reportdate = date("Y-m-d H:i:s");

    $database = mysqli_connect('localhost', 'root', '', 'coronavirus');

    if (isset($_POST['save'])) {
        
        $name = base64_encode(stripslashes(strtolower(addslashes($_POST['name']))));
        $email = base64_encode(strtolower(addslashes($_POST['email'])));
        $post = base64_encode(stripslashes(addslashes($_POST['post'])));

        $_SESSION['notification'] = "Laporan Sudah Dikirim terima kasih Telah mendukung kami";
        $input = "INSERT INTO report (name, email, post, reportdate) VALUES ('$name', '$email', '$post', '$reportdate')";
        mysqli_query($database, $input);
    }



    $delay = 90;
    mysqli_query($database, "DELETE FROM report WHERE DATEDIFF(CURDATE(), reportdate) > $delay");
 

    $show_up = mysqli_query($database ,"SELECT * FROM report ORDER BY reportdate DESC");



    error_reporting(0)
   
?>
<!--01 august 2020-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon/covid19.ico" type="image/x-icon">
    <title>Laporkan Masalah</title>
    <meta name="theme-color" content="#121212"/>
    <!--link CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
</head>
<script>
  //Disable close other X
    $('#myModal').modal({
        backdrop: 'static',
        keyboard: false
        });

        //Disable confirm resubmission
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href);
        }
</script> 
<style>

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
    /*all bar home*/
        *{
            margin: 0;
            padding: 0;

        }
        body{
        
            margin: auto;
            font-family: sans-serif;
            color: #ffffff;
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
        h1{
            margin-top: 2vh;
            text-align: center;
        }
        .form-group input{
            background: #2e2e2e;
            border: none;
        }
        .form-group input:focus{
            background: #2e2e2e;
        }
        .form-group textarea{
            border: none;
            background: #2e2e2e;
        }
        .form-group textarea:focus{
            background: #2e2e2e;
        }
        #capitalize{
            text-transform: capitalize;
        }
        .group-modal{
            display: block;
            border: 3px solid #02bd60;
            width: 50%;
            border-radius: 8px;
            margin: 2% auto;
            padding: 4vh;
            user-select: none;
        }
        @media(max-width: 750px) {
            .group-modal{
                width: 95%;
                margin-bottom: 80px;
            }
        }
        textarea{
            resize: none;
        }
        .notification{
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
            .notification{
                width: 97%;
                height: 74vh;
                font-size: 26px;
                bottom: .4vh;
                z-index: 1000;
            }
        }
     
</style>
<body style="background: #101010;">
    <!--bar-->
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top">
        <a class="navbar-brand text-info" href="about">COVID-19 Enkidu</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                 <!--     <li class="nav-item">
                          <a class="nav-link" href="http://localhost/email_php/index.php">Melalui Email</a>
                      </li>-->
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ke halaman Menu utama
                        </a>
                        <div class="dropdown-menu bg-dark border-secondary" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-white bg-dark" href="beranda">Beranda</a>
                        <a class="dropdown-item text-white bg-dark" href="sebaran">Data Sebaran</a>
                        <a class="dropdown-item text-white bg-dark" href="feeds">Feeds</a>
                        <a class="dropdown-item text-white bg-dark" href="covid19">Detail Info</a>
                    </li>
                  </ul>
              <form class="form-inline my-2 my-lg-0" action="https://www.bing.com/" method="GET">
                  <input class="form-control mr-sm-2" type="search" required name="q" placeholder="Pencarian bing.com" value="corona">
                  <button class="btn btn-outline-info my-2 my-sm-0" type="submit" data-toggle="tooltip" data-placement="bottom">Search Bing</button>
                </form>
              </div>
    </nav>
    
    <br><br>
    <!--run-->
    <h1>Corona Feedback</h1>
    <p class="text-center">Memberi kepercayaan kepada kami Melalui feedback yang telah disediakan</p>
    <div class="group-modal">
        <form method="post" action="">
                <div class="form-group">
                    <input type="text" required name="name" class="form-control text-white" autofocus placeholder="Your Name Report" autocomplete="off">
                    
                </div>
                <div class="form-group">
                    <input type="email" required name="email" class="form-control text-white" placeholder="example@gmail.com" autocomplete="off">
                </div>
                <div class="form-group">
                    <textarea class="form-control text-white" name="post" required id="exampleFormControlTextarea1" placeholder="Send your feedback or bug" rows="6"></textarea>
                </div>
                <button type="submit" name="save" class="btn btn-dark col-12">Kirim Laporan</button>
        </form>

                <!-- Button trigger modal -->
        <button type="button" data-toggle="modal" data-target="#data_user" data-backdrop="static" class="btn btn-dark col-12 mt-2">Lihat Seluruh Pengirim</button>
        </div>
        <?php if (isset($_SESSION['notification'])): ?>
            <div class="notification bg-dark">
                <?php 
                    echo $_SESSION['notification'];
                    unset($_SESSION['notification']);
                ?>
            </div>
        <?php endif ?>


            <!-- Modal -->
            <div class="modal fade" id="data_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content bg-dark text-white">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel">All Feedback Public Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                
                        <tbody>
                            
                            <?php while ($up = mysqli_fetch_array($show_up)) { ?>

                                <div class="list-group">
                                    <div class="list-group-item list-group-item-action mb-3 text-white"
                                    style="
                                    background: #1f1f1f;">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1 text-info" id="capitalize"><?php echo htmlspecialchars(base64_decode($up['name'])); ?></h5><small class="text-muted"><?php echo crc32(base64_decode(htmlspecialchars($up['email']))); ?></small>
                                            </div>
                                            <small class="text-muted"><?php echo date('d F Y - H:i:s', strtotime($up['reportdate'])).' WIB'; ?></small>
                                        <p class="mb-1" style="font-size: 19px; color: #ffffffd8;"><?php echo nl2br(htmlspecialchars(base64_decode($up['post']))); ?></p>
                                        
                                    </div>
                                </div>
                            <?php } ?>
                                
                           
                        </tbody>
                    </table>
                </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Okee Siap!</button>
                </div>
            </div>
            </div>
            
            <script>
            

            //modal box chatbot
                $('#myModal').modal({
                    backdrop: 'static',
                    keyboard: false
                })
            </script>

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
<!-- Footer -->
</body>
</html>
