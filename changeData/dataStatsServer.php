<?php 
session_start();
$timeDate = "";
$positive = "";
$death = "";
$recovered = "";
$active = "";
$p_high = "";
$d_high = "";
$r_high = "";
$a_high = "";
$id = 0;
$Qt494gjtldspofgkdofotmjklzajuefudjgieotptivnsagdhgjrikalqppdotnbmxncgdyenhdnsrogoslpqirugmkdjdlsnahs_state = false;


$databaseuser = mysqli_connect('localhost','root', '','coronavirus');

if (isset($_POST["sending"])) {
    $id = time();
    $timeDate = $_POST["timeDate"];
    $positive = $_POST["positive"];
    $death = $_POST["death"];
    $recovered = $_POST["recovered"];
    $active = $_POST["active"];

    $p_high = $_POST["p_high"];
    $d_high = $_POST["d_high"];
    $r_high = $_POST["r_high"];
    $a_high = $_POST["a_high"];
    $inputData = "INSERT INTO global_corona (id, timeDate, positive, death, recovered, active, p_high, d_high, r_high, a_high) VALUES ('$id','$timeDate','$positive','$death','$recovered','$active','$p_high','$d_high','$r_high','$a_high')";
    $_SESSION['msg'] = "Terima kasih, Data GLOBAL Telah Ditambahkan";
    mysqli_query($databaseuser, $inputData);
    header('location: dataStats.php');
}

if (isset($_POST['updated'])) {
    $timeDate = $_POST['timeDate'];
    $positive = $_POST['positive'];
    $death = $_POST['death'];
    $recovered = $_POST['recovered'];
    $active = $_POST['active'];
    $p_high = $_POST['p_high'];
    $d_high = $_POST['d_high'];
    $r_high = $_POST['r_high'];
    $a_high = $_POST['a_high'];
    $id = $_POST["id"];

    mysqli_query($databaseuser, "UPDATE global_corona SET timeDate='$timeDate', positive='$positive', death='$death', recovered='$recovered', active='$active', p_high='$p_high', d_high='$d_high', r_high='$r_high', a_high='$a_high' WHERE id=$id");
    $_SESSION['msg'] = "Terima kasih, Data GLOBAL Telah diperbaharui";
    header('location: dataStats');
}


if (isset($_GET['deleteData'])) {
    $id = $_GET['deleteData'];

    mysqli_query($databaseuser, "DELETE FROM global_corona WHERE id=$id");
    $_SESSION['msg'] = "Terima kasih, Data GLOBAL Telah Dihapus oleh pihak konfirmasi";
    header('location: dataStats');
}

$decodeRoom = mysqli_query($databaseuser, "SELECT * FROM global_corona order by id DESC");
?>