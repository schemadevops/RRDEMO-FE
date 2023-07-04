<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Apolo /</span>
                Form Report/ Form 00.07</h4>
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header">Form 00.07</h5>
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
                        <tr class="text-nowrap">
                            <th rowspan="2">No</th>
                            <th rowspan="2">No CIF</th>
                            <th rowspan="2">Gol. Kreditur</th>
                            <th rowspan="2">Sandi Bank</th>
                            <th rowspan="2">Lokasi Kreditur</th>
                            <th rowspan="2">Jenis</th>
                            <th rowspan="2">Hubungan dengan Bank</th>
                            <th colspan="2" class="text-center">Jangka Waktu</th>
                            <th colspan="2" class="text-center">Suku Bunga</th>
                            <th rowspan="2">Plafon</th>
                            <th rowspan="2">Jenis Angunan yang di jaminkan</th>
                            <th rowspan="2">Edit</th>
                        </tr>
                        <tr>
                            <td>Tanggal Mulai</td>
                            <td>Tanggal Jatuh Tempo</td>
                            <td>Persentase</td>
                            <td>Cara Perhitungan</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>NomorCIF</td>
                            <td>600 (BPR Konvensional)</td>
                            <td>600021 (PT. BPR Mora)</td>
                            <td>0103 (Kab. Purwakarta)</td>
                            <td>20 (Pinjaman Sindikasi)</td>
                            <td>12 (Terkait)</td>
                            <td>20180101</td>
                            <td>20231231</td>
                            <td>5.56</td>
                            <td>12 (Bunga flat Mengambang)</td>
                            <td>1000000</td>
                            <td>102 (Likuid : Tabungan dan Deposito yang diblokir BPR bersangkutan
                                disertai dengan surat kuasa pencairan)</td>
                            <td>
                                <a href="<?= base_url('apollo/form_report_edit_07'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>NomorCIF</td>
                            <td>600 (BPR Konvensional)</td>
                            <td>600021 (PT. BPR Mora)</td>
                            <td>0103 (Kab. Purwakarta)</td>
                            <td>20 (Pinjaman Sindikasi)</td>
                            <td>12 (Terkait)</td>
                            <td>20180101</td>
                            <td>20231231</td>
                            <td>5.56</td>
                            <td>12 (Bunga flat Mengambang)</td>
                            <td>1000000</td>
                            <td>102 (Likuid : Tabungan dan Deposito yang diblokir BPR bersangkutan
                                disertai dengan surat kuasa pencairan)</td>
                            <td>
                                <a href="<?= base_url('apollo/form_report_edit_07'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                </a>
                            </td>
                        </tr>


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