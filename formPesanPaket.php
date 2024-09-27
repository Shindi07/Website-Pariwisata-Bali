<!-- Start pesan paket -->
<div class="row justify-content-center">
    <!-- Start Form -->
    <form action="simpanPesanPaket.php" method="post" class="col-md-8 form-bg">
        <!-- Start input nama -->
        <div class="form-group">
            <label for="inputNama">Nama</label>
            <input id="inputNama" class="form-control" type="text" name="namaForm">
        </div>
        <!-- end input nama -->
        <!-- start input alamat -->
        <div class="form-group">
            <label for="inputAlamat">Alamat</label>
            <textarea id="inputAlamat" class="form-control" name="alamatForm" rows="3"></textarea>
        </div>
        <!-- end input alamat -->
        <!-- start input tujuan -->
        <div class="form-group">
            <label for="inputTujuan">Tujuan Pariwisata</label>
            <select id="inputTujuan" class="form-control" name="tujuanForm">
                <option>Lawn Canggu</option>
                <option>Nusa Penida</option>
                <option>Pantai Kuta</option>
                <option>Pura Ulun Danu Beratan</option>
                <option>Bedugul Bali </option>
                <option>Nung-Nung Waterfall</option>
                <option>Tebing Karang Boma</option>

            </select>
        </div>
        <!-- end input tujuan -->
        <!-- start input gender -->
        <label>Jenis Kelamin</label>
        <div class="form-check">
            <label class="form-check-label mr-5">
                <input type="radio" class="form-check-input" name="genderForm" value="Pria">
                Pria
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="genderForm" value="Wanita">
                Wanita
            </label>
        </div>
        <!-- end input gender -->
        <!-- start input jumlah paket -->
        <div class="form-group">
            <label for="inputJumlah">Jumlah Paket</label>
            <input id="inputJumlah" class="form-control" type="number" name="paketForm">
        </div>
        <!-- end input jumlah paket -->
        <!-- start input akomodasi -->
        <label>Akomodasi Tambahan</label>
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="sarapanForm" value="1">
                Akomodasi Tambahan Sarapan
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="kendaraanForm" value="1">
                Akomodasi Tambahan Kendaraan
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="penginapanForm" value="1">
                Akomodasi Tambahan Penginapan
            </label>
        </div>
        <!-- end input akomodasi -->
        <!-- start input tgl berangkat -->
        <div class="form-group">
            <label for="inputTanggal">Tanggal Berangkat</label>
            <input id="inputTanggal" class="form-control" type="date" name="tanggalForm">
        </div>
        <!-- end input tgl berangkat -->
        <!-- start input email -->
        <div class="form-group">
            <label for="inputEmail">Email Anda</label>
            <input id="inputEmail" class="form-control" type="email" name="emailForm">
        </div>
        <!-- end input email -->
        <!-- start input no HP -->
        <div class="form-group">
            <label for="inputHP">Nomor HP Anda</label>
            <input id="inputHP" class="form-control" type="number" name="hpForm">
        </div>
        <!-- end input no HP -->
        <!-- start tombol kirim -->
        <button type="submit" class="btn btn-outline-success mb-5">Kirim</button>
        <!-- end tombol kirim -->
    </form>
    <!-- End Form -->
</div>
<!-- End pesan paket -->