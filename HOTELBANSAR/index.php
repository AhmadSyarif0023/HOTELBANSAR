<?php include_once("header.php") ?>

    <div class="wrapper">
        <section id="home">
            <img src="gambar/hotel.jpg" width="550"/>
            <div class="kolom">
                <p class="deskripsi">Sistem Informasi Pemesanan Hotel #dirumahaja</p>
                <h2>Tetap Sehat, Liburan dengan nyaman</h2>
                <p style="text-align:justify;">Hotel BANSAR adalah cabang dari OYO GROUP yang terletak di tengah sawah, tepatnya di Jalan Raya Banyusari Ds. Gempol RT/RW 004/008 Kec. Banyusari Kab. Karawang. Hotel ini merupakan hotel bintang empat yang berlokasi strategis di tengah sawah. Lokasi yang sejuk dan asri membuat Hotel BANSAR tempat yang bagus untuk pengunjung liburan. Hotel ini memiliki total 15 kamar yang terdiri atas 5 Kamar Superior, 5 Kamar Deluxe, 3 Suite Junior, dan 2 Suite Eksekutif.</p>
                <p style="text-align:justify;">PLTU yang merupakan icon kecamatan Cilamaya bisa ditempuh dengan berkendara kurang dari 40 menit, sementara pusat perbelanjaan dapat diakses dengan lima menit berkendara dari penginapan.</p>
                <p><a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
            </div>
        </section>

        <section id="jenis">
            <div class="tengah">
                <div class="kolom">
                    <h2>CLASS ROOM</h2>
                    <p>Panorama Sawah yang indah dan Kesejukan AG menjadi Keindahan yang ditawarkan kepada konsumen</p>
                </div>

                <div class="tutor-list">
                    <div class="kartu-tutor">
                        <img src="gambar/Superior.jpg" height="70%"/>
                        <p>SUPERIOR</p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="gambar/Deluxe.jpg" height="70%"/>
                        <p>Deluxe</p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="gambar/Suite.jpg" height="70%"/>
                        <p>Suite</p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="gambar/Junior-Suite.jpg" height="70%"/>
                        <p>Junior Suite</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="pesan">
            <div class="tengah">
                <div class="kolom">
                <h2>BOOKING</h2>
                </div>
                <center>
				<form method="post" action="user/pemesanan">
					<table>
						<tr>
							<td>Check-In</td>
							<td>Check-Out</td>
							<td>Type</td>
							<td>Jumlah Kamar</td>
							<td></td>
						</tr>
						<tr>
							<td>
								<input type="date" name="cekin">
							</td>
							<td>
								<input type="date" name="cekout">
							</td>
							<td>
								<select name="tipe">
									<option selected="selected" disabled="disabled">-Pilih-</option>
									<option value="Rp 410.000">Superior</option>
									<option value="Rp 450.000">Deluxe</option>
									<option value="Rp 700.000">Junior Suite</option>
									<option value="Rp 1.200.000">Executive</option>
								</select>
							</td>
							<td>
								<input type="text" name="harga">
								<input type="hidden" name="tipex">
							</td>
							<td>
								<input type="submit" name="ok" value="Pesan" id="tombol">
							</td>
						</tr>
					</table>
				</form>
        </center>
            </div>
        </section>


    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <h2 style="text-align:center;">CONTACT</h2>
              
                <iframe src="https://maps.google.com/maps?q=smkn%201%20banyusa&t=&z=17&ie=UTF8&iwloc=&output=embed" width="1100" height="300" frameborder="0" style="border:0;"></iframe>    


                <div class="footer-section">
                    <h3>Alamat</h3>
                    <p>Jl. Raya Banyusari Ds. Gempol Kec. Banyusari Kab. Karawang</p>
                </div>
                <div class="footer-section">
                    <h3>Informasi</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint, culpa!</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Jl. Laksda Adisucipto Sleman Yogyakarta</p>
                    <p>Kode Pos: 57365</p>
                </div>
                <div class="footer-section">
                    <h3>Sosial</h3>
                    <p>Youtube</p>
                    <p>Jurnalis Bansar</p>
                </div>
            </div>
        </div>
    </div>

<?php include_once("footer.php"); ?>