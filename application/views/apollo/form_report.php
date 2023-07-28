<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Apolo /</span>
                Form Report</h4>
            <!-- Responsive Table -->
            <div class="card">
                <!--<h5 class="card-header">Responsive Table</h5>-->
                <div class="table-responsive table-small text-nowrap mt-4">
                    <table class="table">
                        <thead>
                            <tr class="text-nowrap">
                                <th>No</th>
                                <th>Form report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            sort($api_hasil);
                            foreach ($api_hasil as $key) {
                                $no++;
                                $link = 'form_report_isi_' . substr($key->value, 4, 5);

                            ?>
                                <tr>
                                    <th scope="row"><?= $no; ?></th>
                                    <td><a href="<?= base_url('apollo/' . $link); ?>" class="btn rounded-pill btn-outline-primary"> <?= $key->name; ?></a>
                                    </td>
                                </tr>
                            <?php }; ?>
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