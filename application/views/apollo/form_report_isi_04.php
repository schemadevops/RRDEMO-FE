<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Apolo /</span>
                Form Report/ Form 00.04</h4>
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header">Form 00.04</h5>
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
                            <th rowspan="2">Sandi Kantor</th>
                            <th rowspan="2">Nama Kantor</th>
                            <th rowspan="2">Kordinat Kantor</th>
                            <th colspan="4" class="text-center">Alamat Kantor</th>
                            <th rowspan="2">Nama Pemimpin</th>
                            <th rowspan="2">No. Tlp</th>
                            <th rowspan="2">Edit</th>
                        </tr>
                        <tr>
                            <td>Nama Jalan dan No.</td>
                            <td>Desa/Kecamatan</td>
                            <td>Kab./Kota</td>
                            <td>Kode Pos</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>001</td>
                            <td>Kantor Pusat</td>
                            <td>-6.234122, 106.822166</td>
                            <td>Jalan XXX No. 99</td>
                            <td>Kecamatan 1</td>
                            <td>0102 (Kab. Bekasi)</td>
                            <td>12345</td>
                            <td>Nama Pimpinan</td>
                            <td>(021) 123456789</td>
                            <td>
                                <a href="<?= base_url('apollo/form_report_edit_04'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>002</td>
                            <td>Kantor Cabang</td>
                            <td>-6.196506, 106.846953</td>
                            <td>Jalan XXX No. 90</td>
                            <td>Kecamatan 2</td>
                            <td>0103 (Kab. Purwakarta)</td>
                            <td>10000</td>
                            <td>Nama Pimpinan</td>
                            <td>(021) 123456789</td>
                            <td>
                                <a href="<?= base_url('apollo/form_report_edit_04'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
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