<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Obox /</span>
                Report Process</h4>
            <!-- Responsive Table -->
            <div class="card">
                <form action="#" method="post">
                    <div class="row mt-3">
                        <label class="col-sm-3 col-form-label" for="basic-default-name">Periode
                            Data</label>
                        <div class="col-sm-6">
                            <input type="date" class="form-control" id="basic-default-name" placeholder="John Doe" />
                        </div>
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-primary">Process All</button>
                        </div>
                    </div>
                </form>
                <div class="table-responsive text-nowrap mt-4">
                    <table class="table">
                        <thead>
                            <tr class="text-nowrap">
                                <th>No</th>
                                <th>Form report</th>
                                <th>Choose date</th>
                                <th>Last report</th>
                                <th>Last process date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Form A01 - Collateral Data</td>
                                <td><input type="date" class="form-control" /></td>
                                <td>15/02/2023</td>
                                <td>15/02/2023</td>
                                <td>
                                    <a href="#" class="btn rounded-pill btn-primary">Process
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Form F01 - Loan Data</td>
                                <td><input type="date" class="form-control" /></td>
                                <td>15/02/2023</td>
                                <td>15/02/2023</td>
                                <td>
                                    <a href="#" class="btn rounded-pill btn-primary">Process
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Form D01 - Individual Customer Data</td>
                                <td><input type="date" class="form-control" /></td>
                                <td>15/02/2023</td>
                                <td>15/02/2023</td>
                                <td>
                                    <a href="#" class="btn rounded-pill btn-primary">Process
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Form D02 - Non Individual Customer Data</td>
                                <td><input type="date" class="form-control" /></td>
                                <td>15/02/2023</td>
                                <td>15/02/2023</td>
                                <td>
                                    <a href="#" class="btn rounded-pill btn-primary">Process
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Form K01 - Non Individual Customer's Financial Report Data</td>
                                <td><input type="date" class="form-control" /></td>
                                <td>15/02/2023</td>
                                <td>15/02/2023</td>
                                <td>
                                    <a href="#" class="btn rounded-pill btn-primary">Process
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Form M01 - Key Management Data (non Individual Customer)</td>
                                <td><input type="date" class="form-control" /></td>
                                <td>15/02/2023</td>
                                <td>15/02/2023</td>
                                <td>
                                    <a href="#" class="btn rounded-pill btn-primary">Process
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Responsive Table -->
        </div>
    </div>
    <!-- / Navbar -->
</div>


<?php $this->view('temp/footer'); ?>