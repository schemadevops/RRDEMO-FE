<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Apolo /</span>
                Form Report/ Form 03.00</h4>
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header">Form 03.00</h5>
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
                            <th>Sandi Kantor</th>
                            <th>Jenis Valas</th>
                            <th>Nominal</th>
                            <th>Kurs Tengah (Rp)</th>
                            <th>Nilai Rupiah</th>
                            <th>Edit</th>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>001</td>
                            <td>USD (US Dollar)</td>
                            <td>200</td>
                            <td>1000</td>
                            <td>200000</td>
                            <td>
                                <a href="<?= base_url('apollo/form_report_edit_300'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>001</td>
                            <td>KRW (Korean Won) </td>
                            <td>200</td>
                            <td>1000</td>
                            <td>200000</td>
                            <td>
                                <a href="<?= base_url('apollo/form_report_edit_300'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>001</td>
                            <td>INR (Indian Rupee)</td>
                            <td>200</td>
                            <td>1000</td>
                            <td>200000</td>
                            <td>
                                <a href="<?= base_url('apollo/form_report_edit_300'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>001</td>
                            <td>HKD (Hong Kong Dollar)</td>
                            <td>200</td>
                            <td>1000</td>
                            <td>200000</td>
                            <td>
                                <a href="<?= base_url('apollo/form_report_edit_300'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>001</td>
                            <td>JPY (Japanese Yen)</td>
                            <td>200</td>
                            <td>1000</td>
                            <td>200000</td>
                            <td>
                                <a href="<?= base_url('apollo/form_report_edit_300'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>001</td>
                            <td>KRW (Korean Won) </td>
                            <td>200</td>
                            <td>1000</td>
                            <td>200000</td>
                            <td>
                                <a href="<?= base_url('apollo/form_report_edit_300'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
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