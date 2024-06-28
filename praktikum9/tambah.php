<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUUD PHP - INSERT DATA MAHASISWA</title>
</head>
<body>
    <h2> CRUD DATA MAHASISWA</h2>
    <a href="index.php">KEMBALI</a>
    <h3>TAMBAH DATA MAHASISWA</h3>
    <form method='post' action="tambah_aksi.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name= 'nama'></td>
            </tr>
            <tr>
                <td>NPM</td>
                <td><input type="number" name = 'npm'></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name = 'alamat'></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name = 'SIMPAN'></td>
            </tr>

        </table>
    </form>
</body>
</html>