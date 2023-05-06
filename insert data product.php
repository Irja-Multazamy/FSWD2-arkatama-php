<?php
function insertDataProduk($id, $category_id, $name, $description, $price, $status, $created_by, $created_at, $updated_at){
    $koneksi = mysqli_connect("localhost", "root", "", "sinauo");

    $sql = mysqli_query($koneksi, "insert into products (id, category_id, name, description, price, status, created_by, created_at, updated_at) values ('$id', '$category_id', '$name', '$description', '$price', '$status', '$created_by', '$created_at', '$updated_at')");
    
    if ($sql){
        echo "Data berhasil ditambahkan";
    } else {
        "Gagal menambahkan data";
    }
}

insertDataProduk(31, 3, 'Produk 31', 'Lorem', 20000, 'accepted', 1, '2023-05-06 06:30:17', '2023-05-06 06:30:17');
?>