<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Sipesat /</span>
                Form Report/ Form A01 -
                Collateral Data / D - 1111</h4>
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header">Responsive Table</h5>
                <div class="container mb-3">
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Flag Detail</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe" value="D" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Collateral Number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-company" value="1111" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Loan Account Number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe" value="1234" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">CIF</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe" value="4321" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Facility Segment</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe" value="F01" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Collateral Status</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe" value="1 (Available)" />
                            </div>
                        </div>
                        <div class="row justify-content-end">
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
                                <th>Approvre by</th>
                                <th>Status</th>
                                <th>Date Approvre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>02/02/2023 07:45:51</td>
                                <td>CIF</td>
                                <td>4321</td>
                                <td>3254</td>
                                <td>text</td>
                                <td>Refi Ahmad</td>
                                <td>Putri Amalia</td>
                                <td>
                                    <a href="#" class="btn rounded-pill btn-success">Approvre
                                    </a>
                                </td>
                                <td>02/02/2023 07:45:51</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>02/02/2023 07:45:51</td>
                                <td>Facility Segment</td>
                                <td>F01</td>
                                <td>F02</td>
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