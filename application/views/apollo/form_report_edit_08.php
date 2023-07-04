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
                <div class="container mb-3">
                    <form>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Jenis
                                Rasio</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name" value="Kewajiban Penyediaan Modal Minimum (KPMM)" readonly />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Sandi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-company" value="0202" readonly />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nilai Rasio
                                (%)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe" value="-5.55" />
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
                                <td>Sandi</td>
                                <td>0501</td>
                                <td>0101</td>
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
                                <td>Nilai Rasio (%)</td>
                                <td>5.56</td>
                                <td>-5.55</td>
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