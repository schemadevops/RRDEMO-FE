<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Sipesat /</span>
                Form Report / Form - Sistem Informasi Pengguna Jasa Terpadu</h4>
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
                                <th>IDPJK</th>
                                <th>kode nasabah</th>
                                <th>nama nasabah</th>
                                <th>tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>No.KTP</th>
                                <th>No.Idlain</th>
                                <th>No.CIF</th>
                                <th>No.NPWP</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 1; $i < 21; $i++) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td>95756</td>
                                    <td>1</td>
                                    <td>Larry</td>
                                    <td>Singaparna</td>
                                    <td>16/08/1988</td>
                                    <td>570 Merry Way</td>
                                    <td>374288457098464</td>
                                    <td>0</td>
                                    <td>CIFTestTW4-1</td>
                                    <td>01.NPWP.Test.1</td>
                                    <td>
                                        <a href="<?= base_url('sipesat/form_report_edit'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i> Edit
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            };
                            ?>


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