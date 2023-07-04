<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Apolo /</span>
                Form Report/ Form 00.10</h4>
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header">Form 00.10</h5>
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
                            <th rowspan="2">Nama</th>
                            <th rowspan="2">NIK</th>
                            <th colspan="5" class="text-center">Jabatan</th>
                            <th rowspan="2">Tanggal Mulai Menjabat</th>
                            <th colspan="2" class="text-center">Surat Pengangkatan</th>
                            <th colspan="3" class="text-center">Keanggotaan Komite</th>
                            <th rowspan="2">Keterangan Penyebab Berhenti Menjabat</th>
                            <th rowspan="2">Alasan Mengundurkan Diri/Pemberhentian</th>
                            <th colspan="2" class="text-center">Surat Pemberhentian</th>
                            <th rowspan="2">Edit</th>
                        </tr>
                        <tr>
                            <td>Kepatuhan</td>
                            <td>Manajemen Risiko</td>
                            <td>Audit Intern</td>
                            <td>APU dan PPT</td>
                            <td>Lainnya</td>
                            <td>No.</td>
                            <td>Tanggal</td>
                            <td>Komite Audit</td>
                            <td>Komite Pemantauan Risiko</td>
                            <td>Komite Remunerasi dan Nominasi</td>
                            <td>No.</td>
                            <td>Tanggal</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Nama A</td>
                            <td>111111111</td>
                            <td>00 (Tidak Menjabat)</td>
                            <td>00 (Tidak Menjabat)</td>
                            <td>00 (Tidak Menjabat)</td>
                            <td>00 (Tidak Menjabat)</td>
                            <td>00 (Tidak Menjabat)</td>
                            <td>20231231</td>
                            <td>Nomor SK</td>
                            <td>20180101</td>
                            <td>00 (Tidak Menjabat)</td>
                            <td>00 (Tidak Menjabat)</td>
                            <td>00 (Tidak Menjabat)</td>
                            <td>1 (Pengunduran diri)</td>
                            <td>Alasan</td>
                            <td>SK.01/2022</td>
                            <td>20210831</td>
                            <td>
                                <a href="<?= base_url('apollo/form_report_edit_10'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
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