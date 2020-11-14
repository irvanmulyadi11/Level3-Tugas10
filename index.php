<!DOCTYPE html>
<html>
<head>
    <title>Gudang Arkademy</title>
</head>

<body>
    <header>
        
        <h1>Warehouse Arc</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Input Baru</a></li>
            <li><a href="list-produk.php">List Produk</a></li>
        </ul>
		
		<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Input Produk baru berhasil!";
            } else {
                echo "Input Gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </nav>

    </body>
</html>