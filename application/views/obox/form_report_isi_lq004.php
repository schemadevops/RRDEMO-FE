<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Obox /</span>
                Form Report / Form LQ004 -
                Nasabah dengan Dana Keluar Terbesar</h4>
            <!-- Responsive Table -->
            <div class="card">
                <div class="container mt-3 mb-3">
                    <form>
                        <div class="row mb-3 mt-3">
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
                    <table id="table-res" class="table dt-responsive">
                        <thead>
                            <tr class="text-nowrap">
                                <th>No</th>
                                <th>FLAG DETAIL</th>
                                <th>No.CIF</th>
                                <th>Nama Nasabah</th>
                                <th>No Identitas [National ID number]</th>
                                <th>Jenis DPK/Simpanan dari Bank Lain</th>
                                <th>Nominal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>D</td>
                                <td>00036269</td>
                                <td>name 1</td>
                                <td>XX1</td>
                                <td>1</td>
                                <td>1320000021</td>
                                <td>
                                    <a href="<?= base_url('obox/form_report_edit_lq004'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i> Edit
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>D</td>
                                <td>00036269</td>
                                <td>name 1</td>
                                <td>XX1</td>
                                <td>1</td>
                                <td>1320000021</td>
                                <td>
                                    <a href="<?= base_url('obox/form_report_edit_lq004'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i> Edit
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>D</td>
                                <td>00036269</td>
                                <td>name 1</td>
                                <td>XX1</td>
                                <td>1</td>
                                <td>1320000021</td>
                                <td>
                                    <a href="<?= base_url('obox/form_report_edit_lq004'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i> Edit
                                    </a>
                                </td>
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
<script>
    $(document).ready(function() {
        $('#table-res').DataTable({});
    });
</script>