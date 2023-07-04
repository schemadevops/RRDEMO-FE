<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Apolo /</span>
                Form Report/ Form 06.01</h4>
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header">Form 06.01</h5>
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
                    <table class="table table-striped table-bordered nowrap" id="table-res">
                        <thead>
                            <tr class="text-nowrap">
                                <th rowspan="2">No</th>
                                <th rowspan="2">Sandi Kantor</th>
                                <th rowspan="2">Kode Register/Nomor Agunan</th>
                                <th rowspan="2">No. Rekening</th>
                                <th rowspan="2">Jenis Agunan</th>
                                <th rowspan="2">Alamat Agunan</th>
                                <th rowspan="2">Nilai yang Diagunkan</th>
                                <th colspan="3" class="text-center">Nilai Agunan</th>
                                <th colspan="2" class="text-center">Nilai yang Diperhitungkan untuk PPAP
                                </th>
                                <th rowspan="2">Edit</th>
                            </tr>
                            <tr>
                                <td>Nominal</td>
                                <td>Penilai</td>
                                <td>Tanggal Penilaian Terakhir</td>
                                <td>Likuid</td>
                                <td>Non Likuid</td>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>001</td>
                                <td>NomorAgunan1</td>
                                <td>NomorRekening1</td>
                                <td>101 (Likuid : SBI/Surat Utang Pemerintah)</td>
                                <td>Alamt Agunan 1</td>
                                <td>1000000</td>
                                <td>1000000</td>
                                <td>1 (Penilai Independen)</td>
                                <td>20180101</td>
                                <td>100000</td>
                                <td></td>
                                <td>
                                    <a href="<?= base_url('apollo/form_report_edit_601'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>001</td>
                                <td>NomorAgunan1</td>
                                <td>NomorRekening1</td>
                                <td>102 (Likuid : Tabungan dan Deposito yang diblokir BPR bersangkutan
                                    disertai dengan surat kuasa pencairan)</td>
                                <td>Alamt Agunan 1</td>
                                <td>1000000</td>
                                <td>1000000</td>
                                <td>2 (Internal BPR)</td>
                                <td>20180101</td>
                                <td>100000</td>
                                <td></td>
                                <td>
                                    <a href="<?= base_url('apollo/form_report_edit_601'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>001</td>
                                <td>NomorAgunan1</td>
                                <td>NomorRekening1</td>
                                <td>103 (Likuid : Logam mulia yang disertai surat kuasa gadai) </td>
                                <td>Alamt Agunan 1</td>
                                <td>1000000</td>
                                <td>1000000</td>
                                <td>1 (Penilai Independen) </td>
                                <td>20180101</td>
                                <td>100000</td>
                                <td></td>
                                <td>
                                    <a href="<?= base_url('apollo/form_report_edit_601'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>001</td>
                                <td>NomorAgunan1</td>
                                <td>NomorRekening1</td>
                                <td>201 (Non Likuid : Emas perhiasan)</td>
                                <td>Alamt Agunan 1</td>
                                <td>1000000</td>
                                <td>1000000</td>
                                <td>1 (Penilai Independen) </td>
                                <td>20180101</td>
                                <td>100000</td>
                                <td></td>
                                <td>
                                    <a href="<?= base_url('apollo/form_report_edit_601'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
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
        $('#table-res').DataTable();
    });
</script>