<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Apolo /</span>
                Form Report/ Form 00.08</h4>
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header">Form 00.08</h5>
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
                                <th>Jenis Rasio</th>
                                <th>Sandi</th>
                                <th>Nilai Rasio (%)</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Kewajiban Penyediaan Modal Minimum (KPMM)</td>
                                <td>0101</td>
                                <td>-5.55</td>
                                <td>
                                    <a href="<?= base_url('apollo/form_report_edit_08'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Kualitas Aset Produktif (KAP)</td>
                                <td>0201</td>
                                <td>5.56</td>
                                <td>
                                    <a href="<?= base_url('apollo/form_report_edit_08'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Penyisihan Penghapusan Aset Produktif (PPAP)</td>
                                <td>0202</td>
                                <td>5.57</td>
                                <td>
                                    <a href="<?= base_url('apollo/form_report_edit_08'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>NPL (Neto)</td>
                                <td>0203</td>
                                <td>-5.58</td>
                                <td>
                                    <a href="<?= base_url('apollo/form_report_edit_08'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Non Performing Loan (NPL) Gross</td>
                                <td>0204</td>
                                <td>5.59</td>
                                <td>
                                    <a href="<?= base_url('apollo/form_report_edit_08'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
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