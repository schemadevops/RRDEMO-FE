<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Common /</span>
                Parameter</h4>
            <div class="card mb-4">
                <!--<div class="card-header d-flex align-items-center justify-content-between">-->
                <!--<h5 class="mb-0">Basic Layout</h5>-->
                <!--<small class="text-muted float-end">Default label</small>-->
                <!--</div>-->
                <div class="card-body">
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Parameter</label>
                            <div class="col-sm-10">
                                <select name="parameter" id="parameter" class="form-select select2">
                                    <option value="1">Customer Type</option>
                                    <option value="2">Customer SubType</option>
                                    <option value="3">Gender</option>
                                    <option value="3">Citizenship</option>
                                    <option value="3">ID Type</option>
                                    <option value="3">Education</option>
                                    <option value="3">Marital Status</option>
                                    <option value="3">TIN Reason</option>
                                    <option value="3">Religion</option>
                                    <option value="3">Relation</option>
                                    <option value="3">Occupation</option>
                                    <option value="3">Employee Status</option>
                                    <option value="3">Address Type</option>
                                    <option value="3">Residencial Status</option>
                                    <option value="3">Province</option>
                                    <option value="3">Opening Purpose</option>
                                    <option value="3">Source of Fund</option>
                                    <option value="3">Average Income</option>
                                    <option value="3">Purpose Use of Fund</option>
                                    <option value="3">Relation Bank</option>
                                    <option value="3">Agent Type</option>
                                    <option value="3">Agent Classification</option>
                                    <option value="3">Channel</option>
                                    <option value="3">CIF Status</option>
                                    <option value="3">Social Platform Type</option>
                                    <option value="3">Customer Loyalty Level</option>
                                    <option value="3">Business Entity Type</option>
                                    <option value="3">Business Field</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Keyword</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc." />
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Responsive Table -->
            <div class="card">
                <!--<h5 class="card-header">Responsive Table</h5>-->
                <div class="table-responsive text-nowrap mt-4">
                    <table class="table">
                        <thead>
                            <tr class="text-nowrap">
                                <th>No</th>
                                <th>Code</th>
                                <th>Label-Bahasa</th>
                                <th>Label-English</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>01</td>
                                <td>Perorangan</td>
                                <td>Individual</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>02</td>
                                <td>Non Perorangan</td>
                                <td>Non Individual</td>
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

<script>
    $(document).ready(function() {
        $('.select2').select2({
            theme: "classic"
        });
    });
</script>
</body>

</html>