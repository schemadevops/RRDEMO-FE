<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">SLIK /</span>
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
                                <td><a href="<?= base_url('slik/form_report_isi_a01'); ?>" class="btn btn-primary"> Form A01
                                        -
                                        Collateral Data </a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><a href="<?= base_url('slik/form_report_isi_f01'); ?>" class="btn btn-primary"> Form F01
                                        -
                                        Loan Data </a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><a href="<?= base_url('slik/form_report_isi_d01'); ?>" class="btn btn-primary">Form D01
                                        -
                                        Individual Customer Data </a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><a href="<?= base_url('slik/form_report_isi_d02'); ?>" class="btn btn-primary">Form D02
                                        -
                                        Non Individual Customer Data </a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><a href="<?= base_url('slik/form_report_isi_k01'); ?>" class="btn btn-primary">Form K01
                                        -
                                        Non Individual Customer's Financial Report Data</a></td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td><a href="<?= base_url('slik/form_report_isi_m01'); ?>" class="btn btn-primary">Form M01
                                        -
                                        Key Management Data (non Individual Customer)</a></td>
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