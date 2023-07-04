<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Obox /</span>
                Form Report / Form CR009 -
                Debitur Perubahan Kualitas Berdasarkan Baki Debet Terbesar</h4>
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
                                <th>Sandi Kantor [branch code]</th>
                                <th>Nama Debitur [ debtor name]</th>
                                <th>No.CIF</th>
                                <th>No Identitas [National ID number]</th>
                                <th>Kode Kelompok Kredit [loan category code]</th>
                                <th>No. Rekening [loan account number]</th>
                                <th>usage type</th>
                                <th>[debtor type]</th>
                                <th>economic sector </th>
                                <th>type of business </th>
                                <th>interest rate</th>
                                <th>interest calculation method</th>
                                <th>total loan account</th>
                                <th>quality changes code</th>
                                <th>date of quality changed</th>
                                <th>old quality code</th>
                                <th>new quality code</th>
                                <th> reason of quality changes </th>
                                <th> contract amount </th>
                                <th> outstanding </th>
                                <th>type of collateral</th>
                                <th> collateral value </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>D</td>
                                <td>003</td>
                                <td>name 1</td>
                                <td>00057742</td>
                                <td>XX1</td>
                                <td>005</td>
                                <td>1320000021</td>
                                <td>03</td>
                                <td>875</td>
                                <td>960009</td>
                                <td>4</td>
                                <td>18.00</td>
                                <td>22</td>
                                <td>2</td>
                                <td>01</td>
                                <td>20220318</td>
                                <td>2</td>
                                <td>1</td>
                                <td>11</td>
                                <td> 200,000,000 </td>
                                <td> 166,000,000 </td>
                                <td>202</td>
                                <td> 4,400,000,000 </td>
                                <td>
                                    <a href="<?= base_url('obox/form_report_edit_cr009'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i> Edit
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>D</td>
                                <td>003</td>
                                <td>name 1</td>
                                <td>00057742</td>
                                <td>XX1</td>
                                <td>005</td>
                                <td>1320000021</td>
                                <td>03</td>
                                <td>875</td>
                                <td>960009</td>
                                <td>4</td>
                                <td>18.00</td>
                                <td>22</td>
                                <td>2</td>
                                <td>01</td>
                                <td>20220318</td>
                                <td>2</td>
                                <td>1</td>
                                <td>11</td>
                                <td> 200,000,000 </td>
                                <td> 166,000,000 </td>
                                <td>202</td>
                                <td> 4,400,000,000 </td>
                                <td>
                                    <a href="<?= base_url('obox/form_report_edit_cr009'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i> Edit
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>D</td>
                                <td>003</td>
                                <td>name 1</td>
                                <td>00057742</td>
                                <td>XX1</td>
                                <td>005</td>
                                <td>1320000021</td>
                                <td>03</td>
                                <td>875</td>
                                <td>960009</td>
                                <td>4</td>
                                <td>18.00</td>
                                <td>22</td>
                                <td>2</td>
                                <td>01</td>
                                <td>20220318</td>
                                <td>2</td>
                                <td>1</td>
                                <td>11</td>
                                <td> 200,000,000 </td>
                                <td> 166,000,000 </td>
                                <td>202</td>
                                <td> 4,400,000,000 </td>
                                <td>
                                    <a href="<?= base_url('obox/form_report_edit_cr009'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i> Edit
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