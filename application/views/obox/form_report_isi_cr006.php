<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Obox /</span>
                Form Report / Form CR006 -
                Debitur Baru Plafon Terbesar</h4>
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
                                <th>Jenis Kredit [loan type]</th>
                                <th>Tanggal Mulai [ start date]</th>
                                <th>Tanggal Jatuh Tempo [maturity date]</th>
                                <th>Jenis Debitur [debtor type]</th>
                                <th>Sektor Ekonomi [economic sector]</th>
                                <th>Kategori Usaha [business category]</th>
                                <th>Persen Suku Bunga [interest rate]</th>
                                <th>Perhitungan Suku Bunga [interest calculation method code]</th>
                                <th>Plafon Awal [original amount / first loan amount]</th>
                                <th>Plafon Efektif</th>
                                <th>Baki Debet [principle amount]</th>
                                <th>Jenis Agunan [type of collateral]</th>
                                <th>Nilai Agunan [collateral value]</th>
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
                                <td>20220308</td>
                                <td>20220608</td>
                                <td>875</td>
                                <td>960009</td>
                                <td>2</td>
                                <td>8.00</td>
                                <td>22</td>
                                <td>400000000</td>
                                <td>0</td>
                                <td>400000000</td>
                                <td>102</td>
                                <td>400000000</td>
                                <td>
                                    <a href="form_report_edit.html" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i> Edit
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