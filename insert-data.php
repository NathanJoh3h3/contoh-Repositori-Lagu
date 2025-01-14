<?PHP
@session_start();
if (isset($_SESSION['name'])) {


?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Data Accessing using PHP</title>
        <link rel="stylesheet" href="styles-forms.css">
        <script type="text/javascript" src="jquery-1.3.2.min.js"></script>
        <script type="text/javascript" src="scripts.js"></script>
    </head>

    <body>
        <?PHP
        $nama = isset($_POST['nama']) ? $_POST['nama'] : "";
        $artist = isset($_POST['artist']) ? $_POST['artist'] : "";
        $tahun = isset($_POST['tahun']) ? $_POST['tahun'] : "";
        $genre = isset($_POST['genre']) ? $_POST['genre'] : "";
        ?>
        <header>
            <h1>Insert Data</h1>
        </header>
        <main>
            <form action="koneksi-crud.php" method="post" id="form">
                <table>
                    <tr>
                        <td class="labelcell"><strong>Nama</strong></td>
                        <td class="fieldcell" colspan="2"><input type="text" class="input" id="nama" name="nama" value="<?php echo $nama; ?>" /></td>
                    </tr>
                    <tr>
                        <td class="labelcell"><strong>Artist</strong></td>
                        <td class="fieldcell" colspan="2"><input type="text" class="input" id="artist" name="artist" value="<?php echo $artist; ?>" /></td>
                    </tr>
                    <tr>
                        <td class="labelcell"><strong>Tahun</strong></td>
                        <td class="fieldcell" colspan="2"><input type="text" class="input" id="tahun" name="tahun" value="<?php echo $tahun; ?>" /></td>
                    </tr>
                    <tr>
                        <td class="labelcell"><strong>Genre</strong></td>
                        <td class="fieldcell" colspan="2"><input type="text" class="input" id="genre" name="genre" value="<?php echo $genre; ?>" /></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="Aksi" value="TAMBAH" class="button" onclick="fn_ValForm()" />
                        </td>
                        <td>
                            <a href="#" id="reset" class="btn btn-reset"> RESET </a>
                        </td>
                        <td class="kanan">
                            <a href="koneksi-crud.php?aksi=Home" class="btn btn-logout"> KEMBALI </a>
                        </td>
                    </tr>
                </table>
            </form>
        </main>
    </body>

    </html>
    <?PHP
} else {
    echo "Anda belum Login ! <a href='login.php'>Klik di sini untuk login</a>";
}
?>