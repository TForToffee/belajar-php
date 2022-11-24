<?php

// 1. Buat koneksi dengan MySQL
$con = mysqli_connect("localhost","root","","seal_fakultas");

// 2. Cek koneksi dengan MySQL
if (mysqli_connect_errno()){
    echo "Ra nyambung boskuhhh". mysqli_connect_error();
} else {
    echo "Nyambung gan. Sip";
}

// 3. Membaca data dari tabel MySQL
$query = "SELECT * FROM mahasiswa";

// 4. Tampilkan data SQL Query
$result = mysqli_query($con, $query);
if ($result){
    // Tampilkan data satu per satu
    $row = mysqli_fetch_assoc($result);
    
    while($row = mysqli_fetch_assoc($result)){
        echo "<br>".$row["nama"]."alamat : ".$row["alamat"];
    }
    
    mysqli_free_result($result);
}

//5. Tutup Koneksi MySQL
mysqli_close($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <?php var_dump($mahasiswa); ?>
    <table border="1" style="width:100%">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
        </tr>
        <?php foreach($mahasiswa as $value): ?>
        <tr>
            <td>2022010001</td>
            <td>Mas Bambang</td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>