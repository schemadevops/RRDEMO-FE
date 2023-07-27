<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.min.css">
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">SLIK /</span>
                Form Report/ <?= $judul; ?></h4>
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header"><?= $judul; ?></h5>
                <div class="container mb-3">
                    <form id="form">
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">ID Number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_number" name="id_number" placeholder="John Doe" value="<?= $api_hasil->id; ?>" readonly />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Flag Detail</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="flag_detail" name="flag_detail" placeholder="John Doe" value="<?= $api_hasil->flag_detail; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Customer ID / CIF</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="cif" name="cif" value="<?= $api_hasil->cif; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Report Periods</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="periode_laporan" name="periode_laporan" value="<?= $api_hasil->periode_laporan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Asset</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="aset" name="aset" value="<?= $api_hasil->aset; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Current Assets</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="aset_lancar" name="aset_lancar" value="<?= $api_hasil->aset_lancar; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Cash and Cash Equivalents (Current Assets)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="aset_kas" name="aset_kas" value="<?= $api_hasil->aset_kas; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Account Receivable or Financing (Current Assets)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="aset_biaya" name="aset_biaya" value="<?= $api_hasil->aset_biaya; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Investment or Other Financial Assets (CA)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="aset_investasi" name="aset_investasi" value="<?= $api_hasil->aset_investasi; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Other Current Assets (Current Assets)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="aset_lain" name="aset_lain" value="<?= $api_hasil->aset_lain; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Non-Current Assets</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="aset_tidak_lancar" name="aset_tidak_lancar" value="<?= $api_hasil->aset_tidak_lancar; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Account Receivable or Financing (Non-CA)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="aset_biaya_tidak_lancar" name="aset_biaya_tidak_lancar" value="<?= $api_hasil->aset_biaya_tidak_lancar; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Investment or Other Financial Assets (Non-CA)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="aset_inves_tidak_lancar" name="aset_inves_tidak_lancar" value="<?= $api_hasil->aset_inves_tidak_lancar; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Other Non-Current Assets (Non-CA)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="aset_lain_tidak_lancar" name="aset_lain_tidak_lancar" value="<?= $api_hasil->aset_lain_tidak_lancar; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Liability</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="liabilitas" name="liabilitas" value="<?= $api_hasil->liabilitas; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Short-Term Liability</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="liabilitas_jk_pendek" name="liabilitas_jk_pendek" value="<?= $api_hasil->liabilitas_jk_pendek; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Short-Term Loan (Short-Term Liability)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pinjaman_jk_pendek" name="pinjaman_jk_pendek" value="<?= $api_hasil->pinjaman_jk_pendek; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Short-Term Account Payable (Short-Term Liability)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="utang_usaha_jk_pendek" name="utang_usaha_jk_pendek" value="<?= $api_hasil->utang_usaha_jk_pendek; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Other Short-Term Liability (Short-Term Liability)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="liabilitas_lain_jk_pendek" name="liabilitas_lain_jk_pendek" value="<?= $api_hasil->liabilitas_lain_jk_pendek; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Long-Term Liability</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="liabilitas_jk_panjang" name="liabilitas_jk_panjang" value="<?= $api_hasil->liabilitas_jk_panjang; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Long-Term Loan (Long-Term Liability)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pinjaman_jk_panjang" name="pinjaman_jk_panjang" value="<?= $api_hasil->pinjaman_jk_panjang; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Long-Term Account Payable (Long-Term Liability)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="utang_usaha_jk_panjang" name="utang_usaha_jk_panjang" value="<?= $api_hasil->utang_usaha_jk_panjang; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Other Long Term-Liability (Long-Term Liability)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="liabilitas_lain_jk_panjang" name="liabilitas_lain_jk_panjang" value="<?= $api_hasil->liabilitas_lain_jk_panjang; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Equity</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="ekuitas" name="ekuitas" value="<?= $api_hasil->ekuitas; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Operating or Operating Income</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pendapatan_ops" name="pendapatan_ops" value="<?= $api_hasil->pendapatan_ops; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Cost of Revenue or Operating Expenses</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pendapatan_pk_ops" name="pendapatan_pk_ops" value="<?= $api_hasil->pendapatan_pk_ops; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Gross Profit or Loss</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="biaya_ops" name="biaya_ops" value="<?= $api_hasil->biaya_ops; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Other or Non-Operational Income</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pendapatan_nonops" name="pendapatan_nonops" value="<?= $api_hasil->pendapatan_nonops; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Other or Non-Operational Expenses</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="biaya_nonops" name="biaya_nonops" value="<?= $api_hasil->biaya_nonops; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Profit or Loss Before Tax</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="laba_rugi_sbl_pajak" name="laba_rugi_sbl_pajak" value="<?= $api_hasil->laba_rugi_sbl_pajak; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Profit or Loss for the Year</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="laba_rugi_jalan" name="laba_rugi_jalan" value="<?= $api_hasil->laba_rugi_jalan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Branch Code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="cabang" name="cabang" value="<?= $api_hasil->cabang; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Operation status</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="operation" name="operation" value="<?= $api_hasil->operation; ?>" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Alasan Edit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alasan_edit" name="alasan_edit" placeholder="Masukan alasan mengedit" />
                                <input type="hidden" class="form-control" id="id_k01" name="id_k01" value="<?= $api_hasil->id; ?>" />
                            </div>
                        </div>

                        <div class="row justify-content-end py-3">
                            <div class="col-sm-10">
                                <button type="button" id="btnEdit" onclick="edit()" class="btn btn-primary">Edit</button>
                                <a href="<?= base_url('slik/form_report_isi_k01') ?>" class="btn btn-warning">Kembali</a>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="table-responsive text-nowrap">
                    <table class="table dt-responsive" id="table-res">
                        <thead>
                            <tr class="text-nowrap">
                                <th>No</th>
                                <th>Time Edit</th>
                                <th>Field</th>
                                <th>Before</th>
                                <th>After</th>
                                <th>Reason</th>
                                <th>Request by</th>
                                <th>Approve by</th>
                                <th>Status</th>
                                <th>Date Approve</th>
                            </tr>
                        </thead>
                        <tbody id="log_data">
                            <?php
                            $no_log = 0;
                            foreach ($api_log_data as $row) {
                                $no_log++;
                                $field = $row->field->fieldLog;
                                $field_before = $row->val_before->editBefore;
                                $field_after = $row->val_after->editLog;
                                // $after = (array)$field_after['0'];
                                // $after_string = implode(" ", $after);

                            ?>
                                <tr>
                                    <th scope=" row"><?= $no_log; ?></th>
                                    <td><?= date('d-m-Y H:i:s', strtotime($row->createdAt)); ?></td>
                                    <td>
                                        <ol><?php
                                            foreach ($field as $fld) {
                                            ?>
                                                <li><?= $fld->field; ?></li>
                                            <?php
                                            };
                                            ?>
                                        </ol>
                                    </td>
                                    <td>
                                        <ol><?php
                                            foreach ($field_before as $bf) {
                                                $bef = (array)$bf;
                                                $bef_string = implode(" ", $bef);
                                            ?>
                                                <li><?= $bef_string; ?></li>
                                            <?php
                                            };
                                            ?>
                                        </ol>
                                    </td>
                                    <td>
                                        <ol><?php
                                            foreach ($field_after as $af) {
                                                $aff = (array)$af;
                                                $aff_string = implode(" ", $aff);
                                            ?>
                                                <li><?= $aff_string; ?></li>
                                            <?php
                                            };
                                            ?>
                                        </ol>
                                    </td>
                                    <td><?= $row->reason; ?></td>
                                    <td><?= $row->requestedByUserName; ?></td>


                                    <?php
                                    if ($row->status_approved == 1) {
                                    ?>
                                        <td><?= $row->approvedByUserName; ?></td>
                                        <td><a href="#" class="btn rounded-pill btn-success">Approve</a></td>
                                    <?php } else { ?>
                                        <td>-</td>
                                        <td><a href="#" class="btn rounded-pill btn-warning">Waiting</a></td>
                                    <?php }; ?>

                                    </td>
                                    <td><?= date('d-m-Y H:i:s', strtotime($row->updatedAt)); ?></td>
                                </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                </div>
                <!-- <div class="row mt-3 mb-3">
                    <div class="col-md-3">
                        <a href="#" class="btn rounded-pill btn-primary">Export to Excel
                        </a>
                        <a href="#" class="btn rounded-pill btn-primary">Export to Txt
                        </a>
                    </div>
                </div> -->
            </div>

            <!--/ Responsive Table -->
        </div>
    </div>
    <!-- / Navbar -->
</div>


<?php $this->view('temp/footer'); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

<script>
    $(document).ready(function() {
        // tabel_log();
        $('#table-res').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copyHtml5',
                    messageTop: '[LOG Edit]SLIK - Form A01 Collateral Data',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                    }
                },
                {
                    extend: 'excelHtml5',
                    messageTop: '[LOG Edit]SLIK - Form A01 Collateral Data',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                    }
                },
                'colvis'
            ]
        });
    });

    function edit() {
        $('#btnEdit').text('saving...'); //change button text
        $('#btnEdit').attr('disabled', true); //set button disable 
        var url;

        url = "<?php echo site_url('slik/ajax_edit_k01') ?>";


        // ajax adding data to database

        var formData = new FormData($('#form')[0]);
        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function(data) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                if (data.status) //if success close modal and reload ajax table
                {
                    Toast.fire({
                        icon: 'success',
                        title: 'Data Berhasil disimpan'
                    });
                    window.setTimeout(function() {
                        location.reload();
                    }, 1500);
                } else {
                    for (var i = 0; i < data.inputerror.length; i++) {
                        $('[name="' + data.inputerror[i] + '"]').addClass('is-invalid'); //select parent twice to select div form-group class and add has-error class
                        // $('[name="' + data.inputerror[i] + '"]').text(data.error_string[i]); //select span help-block class set text error string
                        Toast.fire({
                            icon: 'error',
                            title: data.error_string[i]
                        })
                    }
                }
                $('#btnEdit').text('Edit'); //change button text
                $('#btnEdit').attr('disabled', false); //set button enable 


            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
                $('#btnEdit').text('Edit'); //change button text
                $('#btnEdit').attr('disabled', false); //set button enable 

            }
        });
    };
</script>