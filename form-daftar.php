<!DOCTYPE html>
<html>
<head>
    <title>Gudang Arkademy</title>
</head>

<body>
    <header>
        <h3>Silahkan Input Produk</h3>
    </header>

    <form action="proses-produk.php" method="POST">

        <fieldset>

        <p>
            <label for="nama_barang">Nama Produk: </label>
            <input type="text" name="nama_produk" placeholder="nama produk" />
        </p>
        <p>
            <label for="keterangan">Keterangan: </label>
            <input type="text" name="keterangan" placeholder="keterangan produk" />
			
        </p>
        <p>
            <label for="harga">Harga Produk: </label>
			<input type="text" name="harga" placeholder="harga produk" />
            
        </p>
        <p>
            <label for="jumlah">Jumlah Produk: </label>
			<input type="text" name="jumlah" placeholder="jumlah produk" />
        </p>
       
        <p>
            <input type="submit" value="Input" name="input" />
        </p>

        </fieldset>

    </form>

    </body>
</html>