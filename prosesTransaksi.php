<!DOCTYPE HTML>
<html>
    <head>
        <title> Transaksi </title>
        <link rel="stylesheet" type="text/css" href="styleTransaksi.css">
        <style>
            #merah{
                color: #FF0000;
            }
        </style>
    </head>
    <body>
        <header>
        <div class="header">
            <h2> Kim's Restaurant </h2>
        </div>
        <div class="header">
            <ul>
                <li><a class="link" href="index.html">Home</a></li>
                <li><a class="link" href="transaksi.php">Transaksi</a></li>
                <li><a class="link" href="tambahFoto.html">Tambah Foto</a></li>
            </ul>
        <div>
        </header>
        <div id="kontainer">
        <?php
            $harga;
            $diskon;
            $totalHarga;
            $totalBayar;

            if($_POST["menu"] = "paket1"){
                $harga = 20000;
            }else if($_POST["menu"] = "paket2"){
                $harga = 30000;
            }else{
                $harga = 50000;
            }

            if($_POST["status"]= "member"){
                if($_POST["jumlah"] == 1){
                    $diskon = $harga * $_POST["jumlah"] * 5 / 100;
                    $totalHarga = $harga * $_POST["jumlah"];
                    $totalBayar = $totalHarga - $diskon;
                }else if($_POST["jumlah"] > 1 && $_POST["jumlah"] <= 3){
                    $diskon = $harga * 7 * $_POST["jumlah"] / 100;
                    $totalHarga = $harga * $_POST["jumlah"];
                    $totalBayar = $totalHarga - $diskon;
                }else{
                    $diskon = $harga * 10 *$_POST["jumlah"] / 100;
                    $totalHarga = $harga * $_POST["jumlah"];
                    $totalBayar = $totalHarga - $diskon;
                }
            }else{
                if($_POST["jumlah"] <= 5){
                    $diskon = 0;
                    $totalHarga = $harga * $_POST["jumlah"];
                    $totalBayar = $totalHarga - $diskon;
                }else if($_POST["jumlah"] > 5 && $_POST["jumlah"] <= 10){
                    $diskon = $harga * 5 / 100;
                    $totalHarga = $harga * $_POST["jumlah"];
                    $totalBayar = $totalHarga - $diskon;
                }else{
                    $diskon = $harga * 7 / 100;
                    $totalHarga = $harga * $_POST["jumlah"];
                    $totalBayar = $harga - $diskon;
                }   
            }  
        ?>  

        <h3>Total Transaksi</h3>
        <table cellspacing="10px">
            <tr>
                <td><b>Nama Pembeli</b></td>
                <td><b>: <?php echo $_POST["pembeli"]; ?></b></td>
            </tr>
            <tr>
                <td><b>Status Pembeli</b></td>
                <td><b>: <?php echo $_POST["status"]; ?></b></td>
            </tr>
            <tr>
                <td><b>Total Harga</b></td>
                <td><b>: Rp.<?php echo $totalHarga; ?></b></td>
            </tr>
            <tr>
                <td><b>Total Diskon</b></td>
                <td><b>: Rp.<?php echo $diskon; ?></b></td>
            </tr>
        </table>
        <h4 id="merah">Yang harus dibayarkan Rp.<?php echo $totalBayar; ?></h4>
        </div>   
       <footer>
           <h3><div id="footer"><p align="center">Copyright&copy; Nafiatul Fadlilah</p></div></h3>
       </footer>
    </body>
</html>