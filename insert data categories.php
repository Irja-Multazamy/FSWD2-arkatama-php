<?php
function insertDataCategories($id, $name, $created_at, $updated_at){
    $koneksi = mysqli_connect("localhost", "root", "", "sinauo");

    $sql = mysqli_query($koneksi, "insert into categories (id, name, created_at, updated_at) values ('$id', '$name', '$created_at', '$updated_at')");
    
    if ($sql){
        echo "Data berhasil ditambahkan";
    } else {
        "Gagal menambahkan data";
    }
}

insertDataCategories(11, 'Kategori 11', '2023-05-06 06:30:17', '2023-05-06 06:30:17');
?>