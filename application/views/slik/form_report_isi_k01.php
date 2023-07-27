<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">SLIK /</span>
                Form Report / Form K01 -
                Non Individual Customer's Financial Report Data</h4>
            <!-- Responsive Table -->
            <div class="card">
                <div class="container my-2">
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
                                <th>ID number</th>
                                <th>Detail Flag</th>
                                <th>Customer ID/ CIF</th>
                                <th>Report Periods</th>
                                <th>Asset</th>
                                <th>Current Assets</th>
                                <th>Cash and Cash Equivalents (Current Assets)</th>
                                <th>Account Receivable or Financing (Current Assets)</th>
                                <th>Investment or Other Financial Assets (CA)</th>
                                <th>Other Current Assets (Current Assets)</th>
                                <th>Non-Current Assets</th>
                                <th>Account Receivable or Financing (Non-CA)</th>
                                <th>Investment or Other Financial Assets (Non-CA)</th>
                                <th>Other Non-Current Assets (Non-CA)</th>
                                <th>Liability</th>
                                <th>Short-Term Liability</th>
                                <th>Short-Term Loan (Short-Term Liability)</th>
                                <th>Short-Term Account Payable (Short-Term Liability)</th>
                                <th>Other Short-Term Liability (Short-Term Liability)</th>
                                <th>Long-Term Liability</th>
                                <th>Long-Term Loan (Long-Term Liability)</th>
                                <th>Long-Term Account Payable (Long-Term Liability)</th>
                                <th>Other Long Term-Liability (Long-Term Liability)</th>
                                <th>Equity</th>
                                <th>Operating or Operating Income</th>
                                <th>Cost of Revenue or Operating Expenses</th>
                                <th>Gross Profit or Loss</th>
                                <th>Other or Non-Operational Income</th>
                                <th>Other or Non-Operational Expenses</th>
                                <th>Profit or Loss Before Tax</th>
                                <th>Profit or Loss for the Year</th>
                                <th>Branch Code</th>
                                <th>Operation Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($api_hasil as $key) {
                                $no++;
                            ?>
                                <tr>
                                    <th scope="row"><?= $no; ?></th>
                                    <td><?= $key->flag_detail; ?></td>
                                    <td><?= $key->cif; ?></td>
                                    <td><?= $key->periode_laporan; ?></td>
                                    <td><?= $key->aset; ?></td>
                                    <td><?= $key->aset_lancar; ?></td>
                                    <td><?= $key->aset_kas; ?></td>
                                    <td><?= $key->aset_biaya; ?></td>
                                    <td><?= $key->aset_investasi; ?></td>
                                    <td><?= $key->aset_lain; ?></td>
                                    <td><?= $key->aset_tidak_lancar; ?></td>
                                    <td><?= $key->aset_biaya_tidak_lancar; ?></td>
                                    <td><?= $key->aset_inves_tidak_lancar; ?></td>
                                    <td><?= $key->aset_lain_tidak_lancar; ?></td>
                                    <td><?= $key->liabilitas; ?></td>
                                    <td><?= $key->liabilitas_jk_pendek; ?></td>
                                    <td><?= $key->pinjaman_jk_pendek; ?></td>
                                    <td><?= $key->utang_usaha_jk_pendek; ?></td>
                                    <td><?= $key->liabilitas_lain_jk_pendek; ?></td>
                                    <td><?= $key->liabilitas_jk_panjang; ?></td>
                                    <td><?= $key->pinjaman_jk_panjang; ?></td>
                                    <td><?= $key->utang_usaha_jk_panjang; ?></td>
                                    <td><?= $key->liabilitas_lain_jk_panjang; ?></td>
                                    <td><?= $key->ekuitas; ?></td>
                                    <td><?= $key->pendapatan_ops; ?></td>
                                    <td><?= $key->pendapatan_pk_ops; ?></td>
                                    <td><?= $key->biaya_ops; ?></td>
                                    <td><?= $key->pendapatan_nonops; ?></td>
                                    <td><?= $key->biaya_nonops; ?></td>
                                    <td><?= $key->laba_rugi_sbl_pajak; ?></td>
                                    <td><?= $key->laba_rugi_jalan; ?></td>
                                    <td><?= $key->cabang; ?></td>
                                    <td><?= $key->operation; ?></td>
                                    <td>
                                        <a href="<?= base_url('slik/form_report_edit_k01/' . $key->id); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i> Edit
                                        </a>
                                    </td>
                                </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col-md-3">
                        <a href="<?= base_url('slik/exportDataToTxt_k01') ?>" class="btn rounded-pill btn-primary">Export to Txt
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
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
<script>
    $(document).ready(function() {
        $('#table-res').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copyHtml5',
                    messageTop: 'SLIK - Form K01 Non Individual Customers Financial Report Data',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48]
                    }
                },
                {
                    extend: 'excelHtml5',
                    messageTop: 'SLIK - Form K01 Non Individual Customers Financial Report Data',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48]
                    }
                },
                'colvis'
            ]
        });
    });
</script>