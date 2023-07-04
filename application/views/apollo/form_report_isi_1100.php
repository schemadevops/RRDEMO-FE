<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Apolo /</span>
                Form Report/ Form 11.00</h4>
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header">Form 11.00</h5>
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
                    <table class="table table-striped table-bordered dt-responsive nowrap" id="table-res">
                        <thead>
                            <tr class="text-nowrap">
                                <th rowspan="2">No</th>
                                <th rowspan="2">Sandi Kantor</th>
                                <th rowspan="2">Nomor CIF</th>
                                <th rowspan="2">Nomor Rekening</th>
                                <th rowspan="2">Jenis</th>
                                <th rowspan="2">Hubungan dengan Bank</th>
                                <th rowspan="2">Golongan Nasabah</th>
                                <th rowspan="2">Lokasi Nasabah</th>
                                <th colspan="2" class="text-center">Jangka Waktu</th>
                                <th rowspan="2">Suku Bunga</th>
                                <th rowspan="2">Nominal</th>
                                <th rowspan="2">Nominal yang Diblokir/Dijaminkan</th>
                                <th rowspan="2">Alasan Diblokir</th>
                                <th rowspan="2">Biaya Transaksi Belum Diamortisasi</th>
                                <th rowspan="2">Jumlah</th>
                                <th rowspan="2">Edit</th>
                            </tr>
                            <tr>
                                <td>Tanggal Mulai</td>
                                <td>Tanggal Jatuh Tempo</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>001</td>
                                <td>CIF1</td>
                                <td>Rekening1</td>
                                <td>10 (Tabungan yang dapat ditarik sewaktu-waktu)</td>
                                <td>12 (Terkait)</td>
                                <td>835 (Lainnya)</td>
                                <td>1291 (Kota Surabaya)</td>
                                <td>20180101</td>
                                <td>20221231</td>
                                <td>5.55</td>
                                <td>200000</td>
                                <td>200000</td>
                                <td>01 (Escrow Account)</td>
                                <td>100000</td>
                                <td>100000</td>
                                <td>
                                    <a href="<?= base_url('apollo/form_report_edit_1100'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>001</td>
                                <td>CIF1</td>
                                <td>Rekening1</td>
                                <td>10 (Tabungan yang dapat ditarik sewaktu-waktu)</td>
                                <td>12 (Terkait)</td>
                                <td>835 (Lainnya)</td>
                                <td>1291 (Kota Surabaya)</td>
                                <td>20180101</td>
                                <td>20221231</td>
                                <td>5.55</td>
                                <td>200000</td>
                                <td>200000</td>
                                <td>01 (Escrow Account)</td>
                                <td>100000</td>
                                <td>100000</td>
                                <td>
                                    <a href="<?= base_url('apollo/form_report_edit_1100'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>001</td>
                                <td>CIF1</td>
                                <td>Rekening1</td>
                                <td>10 (Tabungan yang dapat ditarik sewaktu-waktu)</td>
                                <td>12 (Terkait)</td>
                                <td>835 (Lainnya)</td>
                                <td>1291 (Kota Surabaya)</td>
                                <td>20180101</td>
                                <td>20221231</td>
                                <td>5.55</td>
                                <td>200000</td>
                                <td>200000</td>
                                <td>01 (Escrow Account)</td>
                                <td>100000</td>
                                <td>100000</td>
                                <td>
                                    <a href="<?= base_url('apollo/form_report_edit_1100'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
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
<script>
    $(document).ready(function() {
        $('#table-res').DataTable({});
    });
</script>