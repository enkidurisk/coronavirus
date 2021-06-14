<?php 
session_start();
$title = "";
$picture = "";
$link = "";
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

    $inputData = "INSERT INTO slider (id, title, picture, link, description) VALUES ('$id','$title','$picture','$link','$description')";
    $_SESSION['msg'] = "Terima kasih, Kabar Beranda Telah Ditambahkan";
    mysqli_query($databaseuser, $inputData);
    header('location: carouselSlider');
}

if (isset($_POST['updated'])) {
    $title = $_POST["title"];
    $picture = $_POST["picture"];
    $link = $_POST["link"];
    $description = $_POST["description"];
    $id = $_POST["id"];

    mysqli_query($databaseuser, "UPDATE slider SET title='$title', picture='$picture', link='$link', description='$description' WHERE id=$id");
    $_SESSION['msg'] = "Terima kasih, Kabar Beranda diperbaharui";
    header('location: carouselSlider');
}


if (isset($_GET['deleteData'])) {
    $id = $_GET['deleteData'];

    mysqli_query($databaseuser, "DELETE FROM slider WHERE id=$id");
    $_SESSION['msg'] = "Terima kasih, Kabar Beranda Telah Dihapus";
    header('location: carouselSlider');
}

$decodeRoom = mysqli_query($databaseuser, "SELECT * FROM Slider order by id DESC");
?>