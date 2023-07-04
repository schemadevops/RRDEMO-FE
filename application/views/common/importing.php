<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Common /</span>
                Import Data Staging</h4>
            <!-- Responsive Table -->
            <div class="card">

                <!--<h5 class="card-header">Responsive Table</h5>-->
                <div class="container mb-3 mt-4">
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name">Periode
                                Data</label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="basic-default-name" placeholder="John Doe" />
                            </div>
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-primary">Process</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr class="text-nowrap">
                                <th>No</th>
                                <th>Staging</th>
                                <th>Start process</th>
                                <th>End process</th>
                                <th>Process</th>
                                <th>Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Staging A</td>
                                <td>02/02/2023 07:45:51</td>
                                <td>05/02/2023 17:45:51</td>
                                <td><button type="submit" class="btn btn-primary">Process</button></td>
                                <td>
                                    <a href="#" class="btn rounded-pill btn-primary"><i class='bx bx-download'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Staging B</td>
                                <td>10/02/2023 08:45:51</td>
                                <td>15/02/2023 16:45:51</td>
                                <td><button type="submit" class="btn btn-primary">Process</button></td>
                                <td>
                                    <a href="#" class="btn rounded-pill btn-primary"><i class='bx bx-download'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Staging C</td>
                                <td>18/02/2023 08:55:51</td>
                                <td>20/02/2023 18:45:51</td>
                                <td><button type="submit" class="btn btn-primary">Process</button></td>
                                <td>
                                    <a href="#" class="btn rounded-pill btn-primary"><i class='bx bx-download'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Staging D</td>
                                <td>21/02/2023 09:55:51</td>
                                <td>25/02/2023 21:45:51</td>
                                <td><button type="submit" class="btn btn-primary">Process</button></td>
                                <td>
                                    <a href="#" class="btn rounded-pill btn-primary"><i class='bx bx-download'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Staging E</td>
                                <td>25/02/2023 09:05:51</td>
                                <td>28/02/2023 08:45:51</td>
                                <td><button type="submit" class="btn btn-primary">Process</button></td>
                                <td>
                                    <a href="#" class="btn rounded-pill btn-primary"><i class='bx bx-download'></i>
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

</div>
</div>

<!--<div class="buy-now">-->
<!--    <a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank"-->
<!--        class="btn btn-danger btn-buy-now">Upgrade to Pro</a>-->
<!--</div>-->

<?php $this->view('temp/footer'); ?>