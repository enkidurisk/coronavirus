<?php 
session_start();
$indoTime = "";
$id_positive = "";
$id_death = "";
$id_recovered = "";
$id_active = "";
$id_high_p = "";
$id_high_d = "";
$id_high_r = "";
$id_high_a = "";
$id = 0;
$grifnfjifrklkowjiefkskiqjjvbgvatgdyfnijfijdisqkwokdoirjgimolkfokdowllsowkirnjuuvnkmekdmslkodkvokgptkokdisuhvnksmldoskforjginunujuitjifk_state = false;

$databaseIndo = mysqli_connect('localhost', 'root', '', 'coronavirus');


    if (isset($_POST["sendingID"])) {
        $id = time();
        $indoTime = $_POST["indoTime"];
        $id_positive = $_POST["id_positive"];
        $id_death = $_POST["id_death"];
        $id_recovered = $_POST["id_recovered"];
        $id_active = $_POST["id_active"];

        $id_high_p = $_POST["id_high_p"];
        $id_high_d = $_POST["id_high_d"];
        $id_high_r = $_POST["id_high_r"];
        $id_high_a = $_POST["id_high_a"];

        $indoData = "INSERT INTO indonesia_corona (id, indoTime, id_positive, id_death, id_recovered, id_active, id_high_p, id_high_d, id_high_r, id_high_a) VALUES ('$id','$indoTime','$id_positive','$id_death','$id_recovered','$id_active','$id_high_p','$id_high_d','$id_high_r','$id_high_a')";
        $_SESSION['msg'] = "Terima kasih, Data INDONESIA Telah Ditambahkan";
        mysqli_query($databaseIndo, $indoData);
        header('location: dataIndoStats');
    }

    if (isset($_POST['indoupdate'])) {
        $id = $_POST['id'];
        $indoTime = $_POST['indoTime'];
        $id_positive = $_POST['id_positive'];
        $id_death = $_POST['id_death'];
        $id_recovered = $_POST['id_recovered'];
        $id_active = $_POST['id_active'];
        $id_high_p = $_POST['id_high_p'];
        $id_high_d = $_POST['id_high_d'];
        $id_high_r = $_POST['id_high_r'];
        $id_high_a = $_POST['id_high_a'];
        
    
        mysqli_query($databaseIndo, "UPDATE indonesia_corona SET indoTime='$indoTime', id_positive='$id_positive', id_death='$id_death', id_recovered='$id_recovered', id_active='$id_active', id_high_p='$id_high_p', id_high_d='$id_high_d', id_high_r='$id_high_r', id_high_a='$id_high_a' WHERE id=$id");
        $_SESSION['msg'] = "Terima kasih, Data INDONESIA Telah diperbaharui";
        header('location: dataIndoStats');
    }
    

    if (isset($_GET['deleteCfg'])) {
        $id = $_GET['deleteCfg'];

        mysqli_query($databaseIndo, "DELETE FROM indonesia_corona WHERE id=$id");
        $_SESSION['msg'] = "Terima kasih, Data INDONESIA Telah Dihapus oleh pihak konfirmasi";
        header('location: dataIndoStats.php');
    }


    $resultsOut = mysqli_query($databaseIndo, "SELECT * FROM indonesia_corona order by id DESC");
?>