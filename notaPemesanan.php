<!-- Start container table -->
<div class="table-responsive mt-3">
    <!-- Menggunakan class "table-responsive" untuk memastikan tabel bisa di-scroll jika lebarnya melebihi container -->
    <table id="tabelPesanan" class="table table-dark">
        <thead>
            <!-- Bagian kepala tabel untuk judul kolom -->
            <th>Nama/Alamat</th>
            <th>Tujuan/ Paket</th>
            <th>Harga Paket</th>
            <th>Sarapan</th>
            <th>Kendaraan</th>
            <th>Penginapan</th>
            <th>Tanggal Pesanan</th>
            <th>Email/HP</th>
            <th>Total Harga</th>
        </thead>
        <tbody>
            <!-- Bagian body tabel untuk menampilkan data -->


            <?php
            // Mengambil data dari database menggunakan query SQL
            $cekData = mysqli_query($sql, "SELECT * FROM pemesanan");
            // Mengiterasi setiap baris data yang diambil dari database
            while ($data = mysqli_fetch_array($cekData)) {
                // Menentukan harga berdasarkan tujuan
                if ($data['tujuan'] == "Lawn Canggu") {
                    $hargatujuan = 2500000;
                } else if ($data['tujuan'] == "Nusa Penida") {
                    $hargatujuan = 3000000;
                } else if ($data['tujuan'] == "Pantai Kuta") {
                    $hargatujuan = 2800000;
                } else if ($data['tujuan'] == "Pura Ulun Danu Beratan") {
                    $hargatujuan = 2900000;
                } else if ($data['tujuan'] == "Bedugul Bali") {
                    $hargatujuan = 2950000;
                } else if ($data['tujuan'] == "Gerbang Candi") {
                    $hargatujuan = 2600000;
                } else if ($data['tujuan'] == "Nung-Nung Waterfall") {
                    $hargatujuan = 2000000;
                } else if ($data['tujuan'] == "Tebing Karang Boma") {
                    $hargatujuan = 2900000;
                    // Default jika tujuan tidak ditemukan
                } else {
                    $hargatujuan = 0;
                }

                // Menentukan harga sarapan jika tersedia
                if ($data['sarapan'] == 1) {
                    $hargasarapan = 100000;
                } else {
                    $hargasarapan = 0;
                }
                // Menentukan harga kendaraan jika tersedia
                if ($data['kendaraan'] == 1) {
                    $hargakendaraan = 200000;
                } else {
                    $hargakendaraan = 0;
                }
                // Menentukan harga penginapan jika tersedia
                if ($data['penginapan'] == 1) {
                    $hargapenginapan = 300000;
                } else {
                    $hargapenginapan = 0;
                }
            ?>
                <!-- Baris tabel untuk setiap item data -->
                <tr>
                    <!-- Menampilkan nama dan alamat -->
                    <td><?php echo $data["nama"] . "/" . $data["alamat"] ?> </td>
                    <!-- Menampilkan tujuan dan paket -->
                    <td><?php echo $data["tujuan"] . "/" . $data["paket"] ?> </td>
                    <!-- Menampilkan harga paket -->
                    <td><?php echo rupiah($hargatujuan) ?></td>
                    <!-- Menampilkan harga sarapan -->
                    <td><?php echo rupiah($hargasarapan) ?></td>
                    <!-- Menampilkan harga kendaraan -->
                    <td><?php echo rupiah($hargakendaraan) ?></td>
                    <!-- Menampilkan harga penginapan -->
                    <td><?php echo rupiah($hargapenginapan) ?></td>
                    <!-- Menampilkan tanggal pesanan -->
                    <td><?php echo $data["tanggal"] ?> </td>
                    <!-- Menampilkan email dan nomor telepon -->
                    <td><?php echo $data["email"] . "/" . $data["hp"] ?> </td>
                    <!-- Menampilkan total harga, dihitung dari total harga komponen dikalikan dengan jumlah paket -->
                    <td><?php echo rupiah(($hargatujuan + $hargasarapan + $hargakendaraan + $hargapenginapan) * $data["paket"]) ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<!-- End container table -->