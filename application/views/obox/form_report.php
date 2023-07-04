<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Obox /</span>
                Form Report</h4>
            <!-- Responsive Table -->
            <div class="card">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr class="text-nowrap">
                                <th>No</th>
                                <th>Form report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="<?= base_url('obox/form_report_isi_cr006'); ?>" class="btn btn-primary"> Form CR006
                                        - Debitur Baru Plafon Terbesar
                                    </a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><a href="<?= base_url('obox/form_report_isi_cr007'); ?>" class="btn btn-primary"> Form CR007
                                        - Debitur Top-Up Plafon Terbesar
                                    </a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><a href="<?= base_url('obox/form_report_isi_cr008'); ?>" class="btn btn-primary">Form CR008
                                        - Debitur Penurunan Baki Debet Terbesar
                                    </a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><a href="<?= base_url('obox/form_report_isi_cr009'); ?>" class="btn btn-primary">Form CR009
                                        - Debitur Perubahan Kualitas Berdasarkan Baki Debet Terbesar
                                    </a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><a href="<?= base_url('obox/form_report_isi_lq003'); ?>" class="btn btn-primary">Form LQ003
                                        - 10 Nasabah dengan Dana Masuk Terbesar
                                    </a></td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td><a href="<?= base_url('obox/form_report_isi_lq004'); ?>" class="btn btn-primary">Form LQ004
                                        - 10 Nasabah dengan Dana Keluar Terbesar
                                    </a></td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td><a href="<?= base_url('obox/form_report_isi_lq005'); ?>" class="btn btn-primary">Form LQ005
                                        - Pemantauan Cash Ratio Mingguan
                                    </a></td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td><a href="<?= base_url('obox/form_report_isi_lq006'); ?>" class="btn btn-primary">Form LQ006
                                        - Pemantauan Loan to Deposit Ratio (LDR)
                                    </a></td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td><a href="<?= base_url('obox/form_report_isi_op001'); ?>" class="btn btn-primary">Form OP001
                                        - Pemantauan Mutasi Kas Harian
                                    </a></td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td><a href="<?= base_url('obox/form_report_isi_op002'); ?>" class="btn btn-primary">Form OP002
                                        - Pemantauan Penempatan pada Bank Lain
                                    </a></td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td><a href="<?= base_url('obox/form_report_isi_op003'); ?>" class="btn btn-primary">Form OP003
                                        - Pengelolaan Buku Tabungan dan Bilyet Deposito
                                    </a></td>
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