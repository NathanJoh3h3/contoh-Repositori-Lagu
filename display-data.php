<?PHP
@session_start();
if (isset($_SESSION['name'])) {


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Repositori Lagu</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <header>
            <h1>Repositori Lagu</h1>
        </header>
        <main>
            <section class="song-list">
                <h2>List Lagu</h2>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Artist</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Genre</th>
                            <th scope="col" class="tengah">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $con = mysqli_connect("localhost", "root", "", "uas_web");
                        $query = "SELECT * FROM daftarlagu ORDER BY id";
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        $count = 1;
                        while (list($id, $nama, $artist, $tahun, $genre) = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                        ?>
                            <tr class="song-item">
                                <td><?php echo $count++; ?></td>
                                <td><?php echo "$nama"; ?></td>
                                <td><?php echo "$artist"; ?></td>
                                <td><?php echo "$tahun"; ?></td>
                                <td><?php echo "$genre"; ?></td>
                                <td class="kanan">
                                    <a href="koneksi-crud.php?aksi=Lihat&id=<?php echo $id; ?>" class="btn btn-view">Lihat</a>
                                    <a href="koneksi-crud.php?aksi=Edit&id=<?php echo $id; ?>" class="btn btn-edit">Edit</a>
                                    <a href="koneksi-crud.php?aksi=Delete&id=<?php echo $id; ?>" class="btn btn-delete">Delete</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                        <tr>
                            <td colspan="5">
                                <a href="insert-data.php" class="btn btn-add">Tambah Lagu</a>
                            </td>
                            <td class="kanan">
                                <a href="logout.php" class="btn btn-logout">Logout</a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7">&copy; 2024 UDHA - AUB</td>
                        </tr>
                    </tfoot>
                </table>
            </section>
        </main>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="scripts.js"></script>
    </body>

    </html>
<?PHP
} else {
    echo "Anda belum Login ! <a href='login.php'>Klik di sini untuk login</a>";
}
?>