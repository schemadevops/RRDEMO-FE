<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Apolo /</span>
                Form Report/ Form 00.05</h4>
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header">Form 00.05</h5>
                <div class="container mb-3 py-3">
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name">Periode
                                Data</label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="basic-default-name" placeholder="John Doe" />
                            </div>
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr class="text-nowrap">
                                <th>No</th>
                                <th>Nama Pihak Terkait</th>
                                <th>No. Identitas</th>
                                <th>Alamat Pihak Terkait</th>
                                <th>Jenis Pihak Terkait</th>
                                <th>Hubungan Pihak Terkait</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Nama Pihak Terkait</td>
                                <td>1234567890</td>
                                <td>Alamat Pihak Terkait 1</td>
                                <td>01 (Perorangan)</td>
                                <td>01 (Hubungan Keluarga dengan Anggota Direksi, Anggota Dewan
                                    Komisaris dan Pemegang saham)</td>
                                <td>
                                    <a href="<?= base_url('apollo/form_report_edit_05'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Nama Pihak Terkait</td>
                                <td>1234567891</td>
                                <td>Alamat Pihak Terkait 2</td>
                                <td>02 (Badan Hukum)</td>
                                <td>02 (Perusahaan bukan bank yang dimiliki oleh Anggota Direksi,
                                    Anggota Dewan Komisaris, pemegang saham, pejabat eksekutif, dan
                                    pihak nomor 1 diatas)</td>
                                <td>
                                    <a href="<?= base_url('apollo/form_report_edit_05'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Nama Pihak Terkait</td>
                                <td>1234567892</td>
                                <td>Alamat Pihak Terkait 3</td>
                                <td>03 (Pemerintah Daerah / Pemerintah Pusat)</td>
                                <td>03 (BPR lain yang dimiliki oleh Anggota Direksi, Anggota Dewan
                                    Komisaris, pemegang saham, pejabat eksekutif, dan pihak nomor 1
                                    diatas)</td>
                                <td>
                                    <a href="<?= base_url('apollo/form_report_edit_05'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Nama Pihak Terkait</td>
                                <td>1234567893</td>
                                <td>Alamat Pihak Terkait 4</td>
                                <td>01 (Perorangan)</td>
                                <td>04 (BPR lain yang anggota Dewan Komisarisnya merangkap jabatan
                                    sebagai anggota Dewan Komisaris BPR dengan jumlah paling sedikit 50%
                                    dari keseluruhan anggota Direksi dan anggota Dewan Komisaris pada
                                    BPR)</td>
                                <td>
                                    <a href="<?= base_url('apollo/form_report_edit_05'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Nama Pihak Terkait</td>
                                <td>1234567894</td>
                                <td>Alamat Pihak Terkait 5</td>
                                <td>02 (Badan Hukum)</td>
                                <td>05 (perusahaan yang paling sedikit 50% (lima puluh persen) dari
                                    jumlah keseluruhan anggota Direksi dan anggota Dewan Komisaris
                                    merupakan anggota Dewan Komisaris BPR)</td>
                                <td>
                                    <a href="<?= base_url('apollo/form_report_edit_05'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Nama Pihak Terkait</td>
                                <td>1234567894</td>
                                <td>Alamat Pihak Terkait 6</td>
                                <td>03 (Pemerintah Daerah / Pemerintah Pusat)</td>
                                <td>06 ( Peminjam yang diberikan jaminan oleh Anggota Direksi, Anggota
                                    Dewan Komisaris, pemegang saham, pejabat eksekutif, dan pihak 1 s.d
                                    5 diatas.)</td>
                                <td>
                                    <a href="<?= base_url('apollo/form_report_edit_05'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col-md-3">
                        <a href="#" class="btn rounded-pill btn-primary my-2">Export to Excel
                        </a>
                        <a href="#" class="btn rounded-pill btn-primary my-2">Export to Txt
                        </a>
                    </div>
                    <div class="col-md-6">
                        ;&nbsp
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" />
                            <button class="btn rounded-pill btn-primary" type="button" id="inputGroupFileAddon04">Import</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--/ Responsive Table -->
        </div>
    </div>
    <!-- / Navbar -->
</div>

<?php $this->view('temp/footer'); ?>