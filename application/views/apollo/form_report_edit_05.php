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
                <div class="container mb-3">
                    <form>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Pihak
                                Terkait</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe" value="Nama Pihak Terkait" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">No.
                                Identitas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-company" value="1234567890" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Alamat Pihak
                                Terkait</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe" value="Alamat Pihak Terkait 1" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Jenis Pihak
                                Terkait</label>
                            <div class="col-sm-10">
                                <select name="pihak" id="" class="form-select">
                                    <option value="01">01 (Perorangan)</option>
                                    <option value="02">02 (Badan Hukum)</option>
                                    <option value="03">03 (Pemerintah Daerah / Pemerintah Pusat)
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Hubungan
                                Pihak Terkait</label>
                            <div class="col-sm-10">
                                <select name="pihak" id="" class="form-select">
                                    <option value="01">01 (Hubungan Keluarga dengan Anggota Direksi,
                                        Anggota Dewan Komisaris dan Pemegang saham)</option>
                                    <option value="02">02 (Perusahaan bukan bank yang dimiliki oleh
                                        Anggota Direksi, Anggota Dewan Komisaris, pemegang saham,
                                        pejabat eksekutif, dan pihak nomor 1 diatas)</option>
                                    <option value="03">03 (BPR lain yang dimiliki oleh Anggota Direksi,
                                        Anggota Dewan Komisaris, pemegang saham, pejabat eksekutif, dan
                                        pihak nomor 1 diatas)
                                    </option>
                                    <option value="04">04 (BPR lain yang anggota Dewan Komisarisnya
                                        merangkap jabatan sebagai anggota Dewan Komisaris BPR dengan
                                        jumlah paling sedikit 50% dari keseluruhan anggota Direksi dan
                                        anggota Dewan Komisaris pada BPR)
                                    </option>
                                    <option value="05">05 (perusahaan yang paling sedikit 50% (lima
                                        puluh persen) dari jumlah keseluruhan anggota Direksi dan
                                        anggota Dewan Komisaris merupakan anggota Dewan Komisaris BPR)
                                    </option>
                                    <option value="06">06 ( Peminjam yang diberikan jaminan oleh Anggota
                                        Direksi, Anggota Dewan Komisaris, pemegang saham, pejabat
                                        eksekutif, dan pihak 1 s.d 5 diatas. )</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Alasan
                                Edit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name" placeholder="Masukan alasan mengedit" />
                            </div>
                        </div>
                        <div class="row justify-content-end py-3">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr class="text-nowrap">
                                <th>No</th>
                                <th>Time Edit</th>
                                <th>Field</th>
                                <th>Before</th>
                                <th>After</th>
                                <th>Reason</th>
                                <th>Request by</th>
                                <th>Approve by</th>
                                <th>Status</th>
                                <th>Date Approve</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>02/02/2023 07:45:51</td>
                                <td>No. Identitas</td>
                                <td>1231322322</td>
                                <td>1234567890</td>
                                <td>text</td>
                                <td>Refi Ahmad</td>
                                <td>Putri Amalia</td>
                                <td>
                                    <a href="#" class="btn rounded-pill btn-success">Approve
                                    </a>
                                </td>
                                <td>02/02/2023 07:45:51</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>02/02/2023 07:45:51</td>
                                <td>Jenis Pihak Terkait</td>
                                <td>01 (Perorangan)</td>
                                <td>02 (Badan Hukum)</td>
                                <td>text</td>
                                <td>Refi Ahmad</td>
                                <td>Putri Amalia</td>
                                <td>
                                    <a href="#" class="btn rounded-pill btn-warning">Waiting
                                    </a>
                                </td>
                                <td>02/02/2023 07:45:51</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col-md-3">
                        <a href="#" class="btn rounded-pill btn-primary">Export to Excel
                        </a>
                        <a href="#" class="btn rounded-pill btn-primary">Export to Txt
                        </a>
                    </div>
                </div>
            </div>

            <!--/ Responsive Table -->
        </div>
    </div>
    <!-- / Navbar -->
</div>

<?php $this->view('temp/footer'); ?>