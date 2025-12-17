<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<br><br>
<h2>SI Sekolah | Data Mahasiswa</h2>
<br/>
<a href="tambah.php">+ Tambah Data</a>
<br/><br/>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Alamat</th>
        <th>Opsi</th>
    </tr>

    <?php
    include 'koneksi.php';
    $no = 1;
    $query = mysqli_query($koneksi, "SELECT * FROM siswa");
    while ($data = mysqli_fetch_array($query)) {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['nim']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $data['id']; ?>">EDIT</a>
                <a href="hapus.php?id=<?php echo $data['id']; ?>"
                    onclick="return confirm('Yakin ingin menghapus data ini?')">
                    HAPUS
                </a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>

</body>
</html>