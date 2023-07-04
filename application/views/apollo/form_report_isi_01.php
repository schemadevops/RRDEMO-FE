<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Apolo /</span>
                Form Report/ Form 00.01</h4>
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header">Form 00.01</h5>
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
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Jenis</th>
                                <th>No Identitas</th>
                                <th>PSP(Ya/Tidak)</th>
                                <th>Jumlah Nominal</th>
                                <th>Persentase Kepemilikan</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>H. Abd. Hafidz Izzudin</td>
                                <td>Alamat Pemilik 1</td>
                                <td>01 (Perorangan)</td>
                                <td>1234567891</td>
                                <td>02 (Non PSP)</td>
                                <td>8090000000</td>
                                <td>57.79</td>
                                <td>
                                    <a href="<?= base_url('apollo/form_report_edit_01'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Nugroho Adi Waspodo, SE</td>
                                <td>Alamat Pemilik 2</td>
                                <td>02 (Badan Hukum)</td>
                                <td>1234567892</td>
                                <td>02 (Non PSP)</td>
                                <td>3360000000</td>
                                <td>24.00</td>
                                <td>
                                    <a href="<?= base_url('apollo/form_report_edit_01'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>KOPKAR Karya Nugraha</td>
                                <td>Alamat Pemilik 3</td>
                                <td>03 (Pemerintah Daerah / Pemerintah Pusat) </td>
                                <td>1234567893 </td>
                                <td>02 (Non PSP)</td>
                                <td>1350000000 </td>
                                <td>9.64 </td>
                                <td>
                                    <a href="<?= base_url('apollo/form_report_edit_01'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>KOPKAR Karya Nugraha</td>
                                <td>Alamat Pemilik 3</td>
                                <td>03 (Pemerintah Daerah / Pemerintah Pusat) </td>
                                <td>1234567893 </td>
                                <td>02 (Non PSP)</td>
                                <td>1350000000 </td>
                                <td>9.64 </td>
                                <td>
                                    <a href="<?= base_url('apollo/form_report_edit_01'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
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