<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Apolo /</span>
                Backup / Restore</h4>
            <div class="nav-align-top mb-4">
                <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-home" aria-controls="navs-pills-justified-home" aria-selected="true">
                            <i class='bx bxs-cloud-download'></i> Backup
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-profile" aria-controls="navs-pills-justified-profile" aria-selected="false">
                            <i class='bx bxs-cloud-upload'></i> Restore
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6">
                                <select name="form_report" id="form_report" class="form-control">
                                    <?php
                                    $no = 0;
                                    sort($api_hasil);
                                    foreach ($api_hasil as $key) {
                                        $no++;

                                    ?>
                                        <option value="<?= $no; ?>"><?= $key->name; ?></option>
                                    <?php }; ?>

                                </select>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn rounded-pill btn-primary">Backup</button>
                                <button type="submit" class="btn rounded-pill btn-secondary">Backup All</button>
                            </div>
                        </div>
                        <div class="table-responsive text-nowrap mt-4">
                            <table class="table">
                                <thead>
                                    <tr class="text-nowrap">
                                        <th>No</th>
                                        <th>Form Report</th>
                                        <th>Last Backup Data</th>
                                        <th>Backup Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    sort($api_hasil);
                                    foreach ($api_hasil as $key) {
                                        $no++;

                                    ?>
                                        <tr>
                                            <th scope="row"><?= $no; ?></th>
                                            <td><?= $key->name; ?></td>
                                            <td>01/03/2023 - 05:15</td>
                                            <td>APOLLO_00_0145822</td>
                                            <td><a href="#" class="btn rounded-pill btn-primary">View
                                                    History</a>
                                            </td>
                                        </tr>
                                    <?php }; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="navs-pills-justified-profile" role="tabpanel">
                        <div class="row">
                            <div class="col-md-4">
                                <select name="form_report" id="form_report" class="form-control">
                                    <?php
                                    $no = 0;
                                    sort($api_hasil);
                                    foreach ($api_hasil as $key) {
                                        $no++;

                                    ?>
                                        <option value="<?= $no; ?>"><?= $key->name; ?></option>
                                    <?php }; ?>
                                </select>

                            </div>
                            <div class="col-md-4">
                                <select name="form_report" id="form_report" class="form-control">
                                    <option value="1">Backup ke 1</option>
                                    <option value="2">Backup ke 2</option>
                                    <option value="3">Backup ke 3</option>
                                    <option value="4">Backup ke 4</option>
                                    <option value="5">Backup ke 5</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn rounded-pill btn-primary">Restore</button>
                                <button type="submit" class="btn rounded-pill btn-secondary">Restore All</button>
                            </div>
                        </div>
                        <div class="table-responsive text-nowrap mt-4">
                            <table class="table">
                                <thead>
                                    <tr class="text-nowrap">
                                        <th>No</th>
                                        <th>Form Report</th>
                                        <th>Last Restore Data</th>
                                        <th>Restore Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    sort($api_hasil);
                                    foreach ($api_hasil as $key) {
                                        $no++;

                                    ?>
                                        <tr>
                                            <th scope="row"><?= $no; ?></th>
                                            <td><?= $key->name; ?></td>
                                            <td>01/03/2023 - 05:15</td>
                                            <td>APOLLO_00_0145822</td>
                                            <td><a href="#" class="btn rounded-pill btn-primary">View
                                                    History</a>
                                            </td>
                                        </tr>
                                    <?php }; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- / Navbar -->
</div>


<?php $this->view('temp/footer'); ?>