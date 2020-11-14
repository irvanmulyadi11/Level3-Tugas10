<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-produk.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM produk WHERE id=$id";
$query = mysqli_query($db, $sql);
$produk = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Produk</title>
</head>

<body>
    <header>
        <h3>Edit data Produk</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $produk['id'] ?>" />

        <p>
            <label for="nama_barang">Nama Produk: </label>
            <input type="text" name="nama_produk" placeholder="nama produk" value="<?php echo $produk['nama_produk'] ?>" />
        </p>
        <p>
            <label for="keterangan">Keterangan: </label>
            <input type="text" name="keterangan" placeholder="keterangan produk" value="<?php echo $produk['keterangan'] ?>" />
        </p>
        <p>
            <label for="harga">Harga Produk: </label>
			<input type="text" name="harga" placeholder="harga produk" value="<?php echo $produk['harga'] ?>"/>
            
        </p>
        <p>
            <label for="jumlah">Jumlah Produk: </label>
			<input type="text" name="jumlah" placeholder="jumlah produk" value="<?php echo $produk['jumlah'] ?>"/>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>