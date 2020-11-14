<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Gudang Arkademy</title>
</head>

<body>
    <header>
        <h3>Welcome to our Warehouse</h3>
    </header>
 <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>


    <br>

    <table border="1">
    <thead>
        <tr>
		    <th>ID</th>
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
			<th>Tindakan</th>
           
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM produk";
        $query = mysqli_query($db, $sql);

        while($produk = mysqli_fetch_array($query)){
            echo "<tr>";
			echo "<td>".$produk['id']."</td>";
            echo "<td>".$produk['nama_produk']."</td>";
            echo "<td>".$produk['keterangan']."</td>";
            echo "<td>".$produk['harga']."</td>";
            echo "<td>".$produk['jumlah']."</td>";
            

           echo "<td>";
    echo "<a href='form-edit.php?id=".$produk['id']."'>Edit</a> | ";
    echo "<a href='hapus.php?id=".$produk['id']."'>Hapus</a>";
    echo "</td>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>