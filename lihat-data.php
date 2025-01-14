<?PHP
session_start();
if (isset($_SESSION['name'])) {
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Data Accessing using PHP</title>
        <link rel="stylesheet" href="styles-forms.css">
        <script type="text/javascript">
            function fn_ValForm() {
                var regularExpres = /^-?\d+\.?\d*$/;
                var sMsg = "";
                if (document.getElementById("nama").value == "") {
                    sMsg += ("\n* Anda belum mengisikan nama");
                }
                if (document.getElementById("artist").value == "") {
                    sMsg += ("\n* Anda belum mengisikan artist");
                }
                if (document.getElementById("tahun").value == "") {
                    sMsg += ("\n* Anda belum mengisikan tahun");
                }
                if (document.getElementById("genre").value == "") {
                    sMsg += ("\n* Anda belum mengisikan genre");
                }
                if (sMsg != "") {
                    alert("Peringatan:\n" + sMsg);
                    e.preventDefault();
                    return false;
                } else
                    return true;
            }
        </script>
    </head>

    <body>
        <header>
            <h1>Lihat Data Koleksi Lagu</h1>
        </header>
        <main>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <td class="labelcell"><strong>NO</strong></td>
                    <td class="fieldcell"><input type="text" class="input" name="id" readonly value="<?php echo $id; ?>" /></td>
                </tr>
                <tr>
                    <td class="labelcell"><strong>Nama</strong></td>
                    <td class="fieldcell"><input type="text" class="input" name="nama" readonly value="<?php echo $nama; ?>" /></td>
                </tr>
                <tr>
                    <td class="labelcell"><strong>Artist</strong></td>
                    <td class="fieldcell"><input type="text" class="input" name="artist" readonly value="<?php echo $artist; ?>" /></td>
                </tr>
                <tr>
                    <td class="labelcell"><strong>Tahun</strong></td>
                    <td class="fieldcell"><input type="text" class="input" name="tahun" readonly value="<?php echo $tahun; ?>" /></td>
                </tr>
                <tr>
                    <td class="labelcell"><strong>Genre</strong></td>
                    <td class="fieldcell"><input type="text" class="input" name="genre" readonly value="<?php echo $genre; ?>" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a href="koneksi-crud.php?aksi=Home" class="btn btn-logout"> KEMBALI </a>
                    </td>
                </tr>
            </table>

        </main>
    </body>

    </html>
<?PHP
} else {
    echo "Anda belum Login ! <a href='login.php'>Klik di sini untuk login</a>";
}
?>