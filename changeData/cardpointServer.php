<?php 
session_start();
$title = "";
$picture = "";

$description = "";
$id = 0;
$Qt494gjtldspofgkdofotmjklzajuefudjgieotptivnsagdhgjrikalqppdotnbmxncgdyenhdnsrogoslpqirugmkdjdlsnahs_state = false;


$databaseuser = mysqli_connect('localhost','root', '','coronavirus');

if (isset($_POST["sending"])) {
    $id = time();
    $title = $_POST["title"];
    $picture = $_POST["picture"];
    $link = $_POST["link"];
    $description = $_POST["description"];

    $inputData = "INSERT INTO cardpoint (id, title, picture, description) VALUES ('$id','$title','$picture','$description')";
    $_SESSION['msg'] = "Terima kasih, Kabar Beranda Telah Ditambahkan";
    mysqli_query($databaseuser, $inputData);
    header('location: cardpoint');
}

if (isset($_POST['updated'])) {
    $title = $_POST["title"];
    $picture = $_POST["picture"];
    $link = $_POST["link"];
    $description = $_POST["description"];
    $id = $_POST["id"];

    mysqli_query($databaseuser, "UPDATE cardpoint SET title='$title', picture='$picture', description='$description' WHERE id=$id");
    $_SESSION['msg'] = "Terima kasih, Kabar Beranda diperbaharui";
    header('location: cardpoint');
}


if (isset($_GET['deleteData'])) {
    $id = $_GET['deleteData'];

    mysqli_query($databaseuser, "DELETE FROM cardpoint WHERE id=$id");
    $_SESSION['msg'] = "Terima kasih, Kabar Beranda Telah Dihapus";
    header('location: cardpoint');
}

$decodeRoom = mysqli_query($databaseuser, "SELECT * FROM cardpoint order by id DESC");
?>