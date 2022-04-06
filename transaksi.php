<!DOCTYPE HTML>
<html>
    <head>
        <title> Transaksi </title>
        <link rel="stylesheet" type="text/css" href="styleTransaksi.css">
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
            <h3> Hitung Transaksi </h3>
            <table cellspacing="15px">
                <form action="prosesTransaksi.php" method="post">
                <tr>
                    <td><label><b>Nama Pembeli</b></label></td>
                    <td><input type="text" name="pembeli" placeholder="isikan nama pembeli"></td>
                </tr>
                <tr>
                    <td><label><b> Status Pembeli </b></label></td>
                    <td>
                        <select name="status" " size="1">
                            <option value="member">Member</option>
                            <option value="nonmember">Non-Member</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label><b> Menu </b></label></td>
                    <td>
                        <select name="menu" size="1">
                            <option value="paket1">Paket 1</option>
                            <option value="paket2">Paket 2</option>
                            <option value="paket3">Paket 3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label><b> Jumlah </b></label></td>
                    <td><input type="number" name="jumlah" placeholder="isikan jumlah pesanan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="hitung" value="Hitung"></td>
                </tr>
                </form>
            </table>    
        </div>   
       <footer>
           <h3><div id="footer"><p align="center">Copyright&copy; Nafiatul Fadlilah</p></div></h3>
       </footer>
    </body>
</html>