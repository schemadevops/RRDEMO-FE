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
                            <label class="col-sm-2 col-form-label">Loan Account Number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_rekening" name="no_rekening" value="<?= $api_hasil->no_rekening; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Customer ID / CIF</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="cif" name="cif" value="<?= $api_hasil->cif; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nature of Loan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sifat" name="sifat" value="<?= $api_hasil->sifat; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Loan Type</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jenis_kredit" name="jenis_kredit" value="<?= $api_hasil->jenis_kredit; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">SKIM</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="skim" name="skim" value="<?= $api_hasil->skim; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">First Contract number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_pk_awal" name="no_pk_awal" value="<?= $api_hasil->no_pk_awal; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Contract date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_pk_awal" name="tgl_pk_awal" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_pk_awal)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Last contract number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_pk_akhir" name="no_pk_akhir" value="<?= $api_hasil->no_pk_akhir; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Last contract date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_pk_akhir" name="tgl_pk_akhir" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_pk_akhir)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Number of extend</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="baru_panjang" name="baru_panjang" value="<?= $api_hasil->baru_panjang; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Loan contract date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_awal_kredit" name="tgl_awal_kredit" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_awal_kredit)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Start date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_mulai)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">End date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_jatuh_tempo" name="tgl_jatuh_tempo" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_jatuh_tempo)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kategory" name="kategory" value="<?= $api_hasil->kategory; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Type of usage</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jenis_pengguna" name="jenis_pengguna" value="<?= $api_hasil->jenis_pengguna; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Orientation</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="orientasi" name="orientasi" value="<?= $api_hasil->orientasi; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Economic sector code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sektor_ekonomi" name="sektor_ekonomi" value="<?= $api_hasil->sektor_ekonomi; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Regency</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="dati" name="dati" value="<?= $api_hasil->dati; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Value of the project</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nilai_proyek" name="nilai_proyek" value="<?= $api_hasil->nilai_proyek; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Currency</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="mata_uang" name="mata_uang" value="<?= $api_hasil->mata_uang; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Rate</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="suku_bunga" name="suku_bunga" value="<?= $api_hasil->suku_bunga; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Interest type</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sifat_suku_bunga" name="sifat_suku_bunga" value="<?= $api_hasil->sifat_suku_bunga; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Government program or not?</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kredit_pemerintah" name="kredit_pemerintah" value="<?= $api_hasil->kredit_pemerintah; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Take over from bank? (Input Bank Code) or Not take over</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="takeover" name="takeover" value="<?= $api_hasil->takeover; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Source of loan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sumber_dana" name="sumber_dana" value="<?= $api_hasil->sumber_dana; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">First Initial Loan Amount</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="plafon_awal" name="plafon_awal" value="<?= $api_hasil->plafon_awal; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Last Plafond</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="plafon" name="plafon" value="<?= $api_hasil->plafon; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Disbursement</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="realisasi" name="realisasi" value="<?= $api_hasil->realisasi; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Late charge</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="denda" name="denda" value="<?= $api_hasil->denda; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Outstanding</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="baki_debet" name="baki_debet" value="<?= $api_hasil->baki_debet; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Value from original currency</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="orginal_amount" name="orginal_amount" value="<?= $api_hasil->orginal_amount; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Collectibility status</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kolektibilitas" name="kolektibilitas" value="<?= $api_hasil->kolektibilitas; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Date of the collectibility level 05 (Loss)</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_macet" name="tgl_macet" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_macet)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Reason of collectibility become 05</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sebab_macet" name="sebab_macet" value="<?= $api_hasil->sebab_macet; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Principal arrears</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tunggak_pokok" name="tunggak_pokok" value="<?= $api_hasil->tunggak_pokok; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Interest arrears</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tunggak_bunga" name="tunggak_bunga" value="<?= $api_hasil->tunggak_bunga; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Number of Days arrears</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jml_hari_tunggak" name="jml_hari_tunggak" value="<?= $api_hasil->jml_hari_tunggak; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Arrears freq.</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="frekuensi_tunggak" name="frekuensi_tunggak" value="<?= $api_hasil->frekuensi_tunggak; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Restructure freq.</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="frekuensi_restruktur" name="frekuensi_restruktur" value="<?= $api_hasil->frekuensi_restruktur; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Date of restructure (for the first time)</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_restruktur" name="tgl_restruktur" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_restruktur)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Date of restructure (for the lasttime)</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_restruktur_akhir" name="tgl_restruktur_akhir" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_restruktur_akhir)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Type of restructre</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kd_cara_restruktur" name="kd_cara_restruktur" value="<?= $api_hasil->kd_cara_restruktur; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Loan condition</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kondisi" name="kondisi" value="<?= $api_hasil->kondisi; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Date of loan condition</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_kondisi" name="tgl_kondisi" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_kondisi)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Additional info</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $api_hasil->keterangan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Branch</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="cabang" name="cabang" value="<?= $api_hasil->cabang; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Operation status</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="stts_operasi" name="stts_operasi" value="<?= $api_hasil->stts_operasi; ?>" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Alasan Edit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alasan_edit" name="alasan_edit" placeholder="Masukan alasan mengedit" />
                                <input type="hidden" class="form-control" id="id_f01" name="id_f01" value="<?= $api_hasil->id; ?>" />
                            </div>
                        </div>

                        <div class="row justify-content-end py-3">
                            <div class="col-sm-10">
                                <button type="button" id="btnEdit" onclick="edit()" class="btn btn-primary">Edit</button>
                                <a href="<?= base_url('slik/form_report_isi_f01') ?>" class="btn btn-warning">Kembali</a>
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

        url = "<?php echo site_url('slik/ajax_edit_f01') ?>";


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

    function tabel_log() {
        $.ajax({
            url: "<?php echo site_url('slik/tabel_log_a01') ?>",
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('#log_data').empty();
                var isi = data.data.api_tabel_log
                for (let i = 0; i < isi.length; i++) {
                    const name = isi[i].id;
                    const hobbies = isi[i].field;
                    const fields = isi[i].field.fieldLog;
                    for (let a = 0; a < fields.length; a++) {
                        const filedsss = fields[a];
                    }
                    // Buat elemen <tr> untuk setiap data dan tambahkan ke dalam <tbody> dengan id "container"
                    $('#log_data').append(`<tr>
                        <td>${name}</td>
                        <td>
                            <ul>
                            ${filedsss.map(x => `<li>${x}</li>`).join('')}
                            </ul>
                        </td>
                        </tr>`);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }
</script>