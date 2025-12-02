<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h2>sekolahh | siswaa </h2>
    <br>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Tempat_tinggal</th>
    
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $query = mysqli_query($koneksi,"select * from siswaa");
        while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>    
                <td><?php echo $data['nim']; ?></td> 
                <td><?php echo $data['nama']; ?></td> 
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