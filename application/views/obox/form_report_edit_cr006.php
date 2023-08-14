<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Apolo /</span>
                Form Report/ <?= $header; ?></h4>
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header"><?= $header; ?></h5>
                <div class="container mb-3">
                    <form id="form">
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Sandi Kantor</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sandi_kantor" name="sandi_kantor" value="<?= $api_hasil->sandi_kantor; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Nama Debitur</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_debitur" name="nama_debitur" value="<?= $api_hasil->nama_debitur; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">No.CIF</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="cif" name="cif" value="<?= $api_hasil->cif; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">No Identitas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_identitas" name="no_identitas" value="<?= $api_hasil->no_identitas; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Kode Kelompok</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kd_kelompok_kredit" name="kd_kelompok_kredit" value="<?= $api_hasil->kd_kelompok_kredit; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">No. Rekening</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_rekening" name="no_rekening" value="<?= $api_hasil->no_rekening; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Jenis Kredit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jenis_kredit" name="jenis_kredit" value="<?= $api_hasil->jenis_kredit; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Tanggal Mulai</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_mulai)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Tanggal Jatuh Tempo</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_jatuh_tempo" name="tgl_jatuh_tempo" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_jatuh_tempo)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Jenis Debitur</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jenis_debitur" name="jenis_debitur" value="<?= $api_hasil->jenis_debitur; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Sektor Ekonomi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sektor_ekonomi" name="sektor_ekonomi" value="<?= $api_hasil->sektor_ekonomi; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Kategori Usaha</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="ketegori_usaha" name="ketegori_usaha" value="<?= $api_hasil->ketegori_usaha; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Persen Suku Bunga</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="persen_suku_bunga" name="persen_suku_bunga" value="<?= $api_hasil->persen_suku_bunga; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Perhitungan Suku Bunga</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="perhitungan_suku_bunga" name="perhitungan_suku_bunga" value="<?= $api_hasil->perhitungan_suku_bunga; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Plafon Awal</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="plafon_awal" name="plafon_awal" value="<?= $api_hasil->plafon_awal; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Plafon Efektif</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="plafon_efektif" name="plafon_efektif" value="<?= $api_hasil->plafon_efektif; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Baki Debet</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="baki_debet" name="baki_debet" value="<?= $api_hasil->baki_debet; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Jenis Agunan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jenis_agunan" name="jenis_agunan" value="<?= $api_hasil->jenis_agunan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Nilai Agunan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nilai_agunan" name="nilai_agunan" value="<?= $api_hasil->nilai_agunan; ?>" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Alasan Edit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alasan_edit" name="alasan_edit" placeholder="Masukan alasan mengedit" />
                                <input type="hidden" class="form-control" id="id_cr006" name="id_cr006" value="<?= $api_hasil->id; ?>" />
                            </div>
                        </div>
                        <div class="row justify-content-end py-3">
                            <div class="col-sm-10">
                                <button type="button" id="btnEdit" onclick="edit()" class="btn btn-primary">Edit</button>
                                <a href="<?= base_url('obox/form_report_isi_cr006') ?>" class="btn btn-warning">Kembali</a>
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
                        <tbody>
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
        $('#table-res').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copyHtml5',
                    messageTop: '[LOG Edit]OBOX - Form CR006 - Debitur Baru Plafon Terbesar',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                    }
                },
                {
                    extend: 'excelHtml5',
                    messageTop: '[LOG Edit]OBOX - Form CR006 - Debitur Baru Plafon Terbesar',
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

        url = "<?php echo site_url('obox/ajax_edit_cr006') ?>";


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