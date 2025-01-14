<?php
$con = mysqli_connect("localhost", "root", "", "uas_web");
$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : "";
$aksi2 = isset($_POST['Aksi']) ? $_POST['Aksi'] : "";
if ($aksi == "Edit") {
    $id = $_REQUEST['id'];
    $query = "SELECT * FROM daftarlagu WHERE id='$id'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    list($id, $nama, $artist, $tahun, $genre) = mysqli_fetch_array($result, MYSQLI_BOTH);
    include "edit-data.php";
}
if ($aksi == "Lihat") {
    $id = $_REQUEST['id'];
    $query = "SELECT * FROM daftarlagu WHERE id='$id'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    list($id, $nama, $artist, $tahun, $genre) = mysqli_fetch_array($result, MYSQLI_BOTH);
    include "lihat-data.php";
}
if ($aksi == "Delete") {
    $id = $_REQUEST['id'];
    $query = "Delete FROM daftarlagu WHERE id='$id'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    include "display-data.php";
}
if ($aksi == "Home") {
    include "display-data.php";
}
if ($aksi2 == "UPDATE") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $artist = $_POST['artist'];
    $tahun = $_POST['tahun'];
    $genre = $_POST['genre'];
    if ($nama == "" || $artist == "" || $tahun == "" || $genre == "") {
        null;
    } else {
        $query = "UPDATE daftarlagu SET id='$id', nama='$nama', artist='$artist', tahun='$tahun', genre='$genre' WHERE id='$id'";
        if ($con->query($query) === TRUE) {
            echo "<div class='contentFooter'><p>The song has been successfully updated.</p></div>";
        } else {
            echo "<div class='contentFooter'><p>There was a problem updating the song.</p></div>";
        }
        $query = "SELECT * FROM daftarlagu WHERE id='$id'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        list($id, $nama, $artist, $tahun, $genre) = mysqli_fetch_array($result, MYSQLI_BOTH);
        $con->close();
    }
    include "edit-data.php";
} elseif ($aksi2 == "TAMBAH") {
    $nama = $_POST['nama'];
    $artist = $_POST['artist'];
    $tahun = $_POST['tahun'];
    $genre = $_POST['genre'];
    if ($nama == null || $artist == null || $tahun == null || $genre == null) {
        null;
    } else {

        $query = "INSERT INTO `daftarlagu` (`id`, `nama`, `artist`, `tahun`, `genre`) VALUES ('', '$nama', '$artist', '$tahun', '$genre')";
        if ($con->query($query) === TRUE) {
            echo "<div class='contentFooter'><p>The song has been successfully inserted.</p></div>";
        } else {
            echo "<div class='contentFooter'><p> $query There was a problem inserting the song.</p></div>";
        }
        $con->close();
    }
    include "display-data.php";
}

