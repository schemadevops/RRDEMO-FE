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
                            <label class="col-sm-2 col-form-label">Nama Organ Pelaksana</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_organ_pelaksana" name="nama_organ_pelaksana" value="<?= $api_hasil->nama_organ_pelaksana; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $api_hasil->alamat; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nik" name="nik" value="<?= $api_hasil->nik; ?>" />
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-12 col-form-label">Jabatan</label>
                            <hr>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Kepatuhan</label>
                            <div class="col-sm-10">
                                <select name="kepatuhan" id="kepatuhan" class="form-select">
                                    <option value="00">00 (Tidak Menjabat)</option>
                                    <option value="01">01 (Kepala Satuan Kerja)</option>
                                    <option value="02">02 (Pejabat Exekutif)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Manajemen Risiko</label>
                            <div class="col-sm-10">
                                <select name="mana_resiko" id="mana_resiko" class="form-select">
                                    <option value="00">00 (Tidak Menjabat)</option>
                                    <option value="01">01 (Kepala Satuan Kerja)</option>
                                    <option value="02">02 (Pejabat Exekutif)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Audit Intern</label>
                            <div class="col-sm-10">
                                <select name="audit_int" id="audit_int" class="form-select">
                                    <option value="00">00 (Tidak Menjabat)</option>
                                    <option value="01">01 (Kepala Satuan Kerja)</option>
                                    <option value="02">02 (Pejabat Exekutif)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">APU dan PPT</label>
                            <div class="col-sm-10">
                                <select name="apu_ppt" id="apu_ppt" class="form-select">
                                    <option value="00">00 (Tidak Menjabat)</option>
                                    <option value="01">01 (Kepala Satuan Kerja)</option>
                                    <option value="02">02 (Pejabat Exekutif)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Lainnya</label>
                            <div class="col-sm-10">
                                <select name="lainnya" id="lainnya" class="form-select">
                                    <option value="00">00 (Tidak Menjabat)</option>
                                    <option value="01">01 (Kepala Satuan Kerja)</option>
                                    <option value="02">02 (Pejabat Exekutif)</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tanggal Mulai Menjabat</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_mulai_menjabat" name="tgl_mulai_menjabat" value="<?= date('Y-m-d', strtotime($api_hasil->tanggal_mulai_menjabat)); ?>" />
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-12 col-form-label">Surat Pengangkatan</label>
                            <hr>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">No.</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_sk" name="no_sk" value="<?= $api_hasil->no_sk ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_sk" name="tgl_sk" value="<?= date('Y-m-d', strtotime($api_hasil->tanggal)); ?>" />
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-12 col-form-label">Keanggotaan Komite</label>
                            <hr>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Komite Audit</label>
                            <div class="col-sm-10">
                                <select name="komite_audit" id="komite_audit" class="form-select">
                                    <option value="00">00 (Tidak Menjabat)</option>
                                    <option value="01">01 (Ketua)</option>
                                    <option value="02">02 (Anggota)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Komite Pemantaun</label>
                            <div class="col-sm-10">
                                <select name="komite_pemantaun" id="komite_pemantaun" class="form-select">
                                    <option value="00">00 (Tidak Menjabat)</option>
                                    <option value="01">01 (Ketua)</option>
                                    <option value="02">02 (Anggota)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Komite Remunerasi dan
                                Nominasi</label>
                            <div class="col-sm-10">
                                <select name="komite_remu" id="komite_remu" class="form-select">
                                    <option value="00">00 (Tidak Menjabat)</option>
                                    <option value="01" selected>01 (Ketua)</option>
                                    <option value="02">02 (Anggota)</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Keterangan terkait organ
                                pelaksana</label>
                            <div class="col-sm-10">
                                <select name="ket_terkait" id="ket_terkait" class="form-select">
                                    <option value="1">1 (Pengangkatan)</option>
                                    <option value="2" selected>2 (Perubahan Jabatan)</option>
                                    <option value="3">3 (Tidak Berubah)</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Alasan Edit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alasan_edit" name="alasan_edit" placeholder="Masukan alasan mengedit" />
                                <input type="hidden" class="form-control" id="id_0003" name="id_0003" value="<?= $api_hasil->id; ?>" placeholder="Masukan alasan mengedit" />
                            </div>
                        </div>

                        <div class="row justify-content-end py-3">
                            <div class="col-sm-10">
                                <button type="button" id="btnEdit" onclick="edit()" class="btn btn-primary">Edit</button>
                                <a href="<?= base_url('apollo/form_report_isi_0003') ?>" class="btn btn-warning">Kembali</a>
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
                    messageTop: '[LOG Edit]APOLO - Form 00.03 BPR Implementator Member',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                    }
                },
                {
                    extend: 'excelHtml5',
                    messageTop: '[LOG Edit]APOLO - Form 00.03 BPR Implementator Member',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                    }
                },
                'colvis'
            ]
        });

        $("#ket_terkait option[value='<?= $api_hasil->keterangan_terkait_organ_pelaksana; ?>']").prop('selected', true);
        $("#komite_remu option[value='<?= $api_hasil->komite_remunerasi_dan_nominasi; ?>']").prop('selected', true);
        $("#komite_pemantaun option[value='<?= $api_hasil->komite_pemantauan_risiko; ?>']").prop('selected', true);
        $("#komite_audit option[value='<?= $api_hasil->komite_audit; ?>']").prop('selected', true);
        $("#lainnya option[value='<?= $api_hasil->lainnya; ?>']").prop('selected', true);
        $("#apu_ppt option[value='<?= $api_hasil->apu_dan_ppt; ?>']").prop('selected', true);
        $("#audit_int option[value='<?= $api_hasil->aduit_intern; ?>']").prop('selected', true);
        $("#mana_resiko option[value='<?= $api_hasil->manajemen_risiko; ?>']").prop('selected', true);
        $("#kepatuhan option[value='<?= $api_hasil->kepatuhan; ?>']").prop('selected', true);
    });

    function edit() {
        $('#btnEdit').text('saving...'); //change button text
        $('#btnEdit').attr('disabled', true); //set button disable 
        var url;

        url = "<?php echo site_url('apollo/ajax_edit_0003') ?>";


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