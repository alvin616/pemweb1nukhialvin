<!DOCTYPE html>
<html 
<head>
    <title></title>
</head>
<body>
    <h2>SI sekolah | Data Siswa </h2>
    <br/>
    <a href="tambah.php">+ Tambah Data</a>
    <br/>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Tempat tinggal</th>
            <th>Opsi</th>

        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $query = mysqli_query($koneksi,"SELECT * FROM siswaa");
        while($data = mysqli_fetch_array($query)){
            ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['nim']; ?></td>
            <td><?php echo $data['tempat tinggal']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $data['id']; ?>">EDIT</a>
                <a href="hapus.php?id=<?php echo $data['id']; ?>">HAPUS</a>
            </td>
        </tr>
        <?php
        }
        ?>               
    </table>
</body>
</html>