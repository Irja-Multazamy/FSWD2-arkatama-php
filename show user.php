<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Show User</title>
    <style>
        th{
            text-align : center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 align="center">Data Pengguna</h2>
        <a href="tambah user.php" class="btn btn-dark mt-3">Tambah Pengguna</a>
        <table class="table table-bordered" style="margin-top: 30px;">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th colspan="3">Aksi</th>
                    <th>Avatar</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Role</th>
                </tr>
            </thead>
            <?php
            include "koneksi.php";
            $query = mysqli_query($koneksi, "SELECT * FROM users");
            $no = 1;
            while ($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td align='center'><?php echo $no++ ?></td>
                    <td align='center'><a href="#" class="btn btn-primary btn-sm btn-block">Detail</a></td> 
                    <td><a href="edit user.php?id=<?php echo $data['id']  ?>" class="btn btn-warning btn-sm btn-block">Edit</a></td>
                    <td><a href="hapus user.php?id=<?php echo $data['id']  ?>" onclick="return confirm('Yakin akan menghapus data ini?')" class="btn btn-danger btn-sm btn-block">Hapus</a></td>    
                    <td align='center'><img src="gambar/<?php echo $data['avatar'] ?>" height="50" width="50" alt="..."></td>
                    <td><?php echo $data['name']?></td>
                    <td><?php echo $data['email']?></td>
                    <td><?php echo $data['phone']?></td>
                    <td align='center'><?php echo $data['role']?></td>
                </tr>
            <?php } ?>        
        </table>
    </div>
</body>
</html>