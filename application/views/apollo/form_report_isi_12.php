<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Apolo /</span>
                Form Report/ Form 00.12</h4>
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header">Form 00.12</h5>
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
                            <th>No</th>
                            <th>Jenis</th>
                            <th>Sandi Kantor/Kode Kantor Kas</th>
                            <th>Sandi Kantor Induk</th>
                            <th>Nama Kantor</th>
                            <th>Koordinat</th>
                            <th>Alamat</th>
                            <th>Tanggal Pelaksanaan</th>
                            <th>Edit</th>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>01 (Kantor Cabang)</td>
                            <td>002</td>
                            <td>001</td>
                            <td>Nama Kantor Kas</td>
                            <td>-6.196506, 106.846953</td>
                            <td>Alamat</td>
                            <td>20230511</td>
                            <td>
                                <a href="<?= base_url('apollo/form_report_edit_12'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
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