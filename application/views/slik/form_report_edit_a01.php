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
                            <label class="col-sm-2 col-form-label">Default Value</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="flag_detail" name="flag_detail" placeholder="John Doe" value="<?= $api_hasil->flag_detail; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Collateral Number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="register_agunan" name="register_agunan" value="<?= $api_hasil->register_agunan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Loan Account Number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="rekening" name="rekening" value="<?= $api_hasil->rekening; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Customer ID / CIF</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="cif" name="cif" value="<?= $api_hasil->cif; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Facility segment (SLIK Code - OJK)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="segment_fasilitas" name="segment_fasilitas" value="<?= $api_hasil->segment_fasilitas; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Collateral status</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="stts_agunan" name="stts_agunan" value="<?= $api_hasil->stts_agunan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Collateral Type</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jenis_agunan" name="jenis_agunan" value="<?= $api_hasil->jenis_agunan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Rating</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="peringkat" name="peringkat" value="<?= $api_hasil->peringkat; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Rating agency</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pemeringkat" name="pemeringkat" value="<?= $api_hasil->pemeringkat; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Type of contract</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jenis_ikat" name="jenis_ikat" value="<?= $api_hasil->jenis_ikat; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Contract date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_ikat" name="tgl_ikat" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_ikat)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Owner of the collateral</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pemilik_agunan" name="pemilik_agunan" value="<?= $api_hasil->pemilik_agunan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Number of collateral certifiacte</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="bukti_milik" name="bukti_milik" value="<?= $api_hasil->bukti_milik; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Coll. Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat_agunan" name="alamat_agunan" value="<?= $api_hasil->alamat_agunan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Collateral regency</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="data_agunan" name="data_agunan" value="<?= $api_hasil->data_agunan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Collateral value (Sale value of Tax object)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nilai_agunan_njop" name="nilai_agunan_njop" value="<?= $api_hasil->nilai_agunan_njop; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Sale value from Bank</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nilai_agunan_bank" name="nilai_agunan_bank" value="<?= $api_hasil->nilai_agunan_bank; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Date of bank appraisal</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_penilaian_bank" name="tgl_penilaian_bank" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_penilaian_bank)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Collateral sale value from Independent appraisal</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nilai_agunan" name="nilai_agunan" value="<?= $api_hasil->nilai_agunan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Name of Independent Appraisal</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_penilai" name="nama_penilai" value="<?= $api_hasil->nama_penilai; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Date of Appraisal</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_penilai" name="tgl_penilai" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_penilai)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Become collateral in other Loan account or not?</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="stts_paripasu" name="stts_paripasu" value="<?= $api_hasil->stts_paripasu; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Percentage of sharing collateral value (if become collateral to
                                other Loan account)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="paripasu" name="paripasu" value="<?= $api_hasil->paripasu; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Joint Account Status</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="stts_kredit_join" name="stts_kredit_join" value="<?= $api_hasil->stts_kredit_join; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Cover with insurance or not?</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="asuransi" name="asuransi" value="<?= $api_hasil->asuransi; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Additional info</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $api_hasil->keterangan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Branch code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="cabang" name="cabang" value="<?= $api_hasil->cabang; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Operation Code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="operation_stastus" name="operation_stastus" value="<?= $api_hasil->operation_stastus; ?>" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Alasan Edit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alasan_edit" name="alasan_edit" placeholder="Masukan alasan mengedit" />
                                <input type="hidden" class="form-control" id="id_a01" name="id_a01" value="<?= $api_hasil->id; ?>" />
                            </div>
                        </div>

                        <div class="row justify-content-end py-3">
                            <div class="col-sm-10">
                                <button type="button" id="btnEdit" onclick="edit()" class="btn btn-primary">Edit</button>
                                <a href="<?= base_url('slik/form_report_isi_a01') ?>" class="btn btn-warning">Kembali</a>
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

        url = "<?php echo site_url('slik/ajax_edit_a01') ?>";


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