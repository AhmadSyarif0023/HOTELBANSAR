<?php include_once("header.php");
include_once("koneksi.php");

?>
    <div id="datakamar2">
    <div>
        <?php
            $sql = mysql_query("SELECT * FROM kamar");
            while($data = mysql_fetch_array($sql)) {
                $id = $data['idkamar'];
                $tipe = $data['tipe'];
                $jumlah = $data['jumlah'];
                $harga = $data['harga'];
                $gambar = $data['gambar'];

                $angka = number_format($harga,0,",",".");

                $sqly = mysql_query("SELECT * FROM stokkamar WHERE idkamar=$id");
                while($datay = mysql_fetch_array($sqly)) {
                    $stok = $datay['stok'];
        ?>
        
            <div class="kamar">
                <table>
                    <tr>
                        <td>
                            <center>
                                
                                <div class="idkamar">
                                    <?php echo $tipe ?>
                                </div>
                                <div class="tipekamar"><b>Rp. <?php echo $angka ?></div></b>
                                <img src="gambar/<?php echo $gambar ?>" width="200px" height="150px"/>
                                <div class="tipekamar">Tersedia <?php echo $stok ?> Kamar</div>
                                
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <center>
                                <a href="#"><button style="width:70px;background-color:#00fbff;color:black;font-weight:bold;padding:4px;border:1px solid black; border-radius: 5px;">Pesan</button></a>
                            </center>
                        </td>
                    </tr>
                </table>
            </div>
            <?php
                    }
                }
            ?>
    </div>
    </div>
    
<?php include_once("footer.php"); ?>