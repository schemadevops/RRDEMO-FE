<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Obox /</span>
                Form Report / Form LQ005 -
                Pemantauan Cash Ratio Mingguan</h4>
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
                                <th>Periode Data </th>
                                <th> Kas </th>
                                <th> Giro </th>
                                <th> Selisih lebih tabungan antar bank </th>
                                <th> Tabungan pada bank lain </th>
                                <th> Tabungan bank umum lain pada bank </th>
                                <th> Tabungan BPR lain pada bank </th>
                                <th> Jumlah alat likuid </th>
                                <th> Kewajiban yang segera dibayar </th>
                                <th> Tabungan </th>
                                <th> Deposito berjangka </th>
                                <th> Jumlah Kewajiban Lancar </th>
                                <th>Cash Ratio (%)</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>D</td>
                                <td>20220220</td>
                                <td> 7,855,688,400 </td>
                                <td> 474,359,346,874 </td>
                                <td> - </td>
                                <td> 42,203,490,936 </td>
                                <td> - </td>
                                <td> 251,394,617,549 </td>
                                <td> 482,215,035,274 </td>
                                <td> 15,640,638,171 </td>
                                <td> 584,853,599,496 </td>
                                <td> 4,992,028,071,480 </td>
                                <td> 5,592,522,309,147 </td>
                                <td> 8.62</td>
                                <td>
                                    <a href="<?= base_url('obox/form_report_edit_lq005'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i> Edit
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