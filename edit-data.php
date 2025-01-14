<?PHP
session_start();
if (isset($_SESSION['name'])) {
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Edit Data</title>
        <link rel="stylesheet" href="styles-forms.css">
    </head>

    <body>
        <header>
            <h1>Edit Data</h1>
        </header>
        <main>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <table>
                    <tr>
                        <td class="labelcell"><strong>Nama</strong></td>
                        <td class="fieldcell"><input type="text" class="input" id="nama" name="nama" value="<?php echo $nama; ?>" /></td>
                    </tr>
                    <tr>
                        <td class="labelcell"><strong>Artist</strong></td>
                        <td class="fieldcell"><input type="text" class="input" id="artist" name="artist" value="<?php echo $artist; ?>" /></td>
                    </tr>
                    <tr>
                        <td class="labelcell"><strong>Tahun</strong></td>
                        <td class="fieldcell"><input type="text" class="input" id="tahun" name="tahun" value="<?php echo $tahun; ?>" /></td>
                    </tr>
                    <tr>
                        <td class="labelcell"><strong>Genre</strong></td>
                        <td class="fieldcell"><input type="text" class="input" id="genre" name="genre" value="<?php echo $genre; ?>" /></td>
                    </tr>
                    <tr>
                        <td colspan="1">
                            <input type="submit" name="Aksi" value="UPDATE" class="button" />
                        </td>
                        <td>
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