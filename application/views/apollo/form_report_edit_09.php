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
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $api_hasil->nama; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">NIK</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nik" name="nik" value="<?= $api_hasil->nik; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Jabatan</label>
                            <div class="col-sm-10">
                                <select name="jabatan" id="jabatan" class="form-select">
                                    <option value="110">110 (Direktur Utama)</option>
                                    <option value="120">120 (Direktur)</option>
                                    <option value="210">210 (Komisaris Utama)</option>
                                    <option value="220">220 (Komisaris)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Tanggal
                                Mulai Menjabat</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggal_mulai_menjabat" name="tanggal_mulai_menjabat" value="<?= date('Y-m-d', strtotime($api_hasil->tanggal_mulai_menjabat)); ?>" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-12 col-form-label text-center">Keanggotaan
                                Komite</label>
                            <hr>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Komite
                                Audit</label>
                            <div class="col-sm-10">
                                <select name="komite_audit" id="komite_audit" class="form-select">
                                    <option value="00">00 (Tidak Menjabat)</option>
                                    <option value="01">01 (Ketua)</option>
                                    <option value="02">02 (Anggota)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Komite
                                Pemantau Risiko</label>
                            <div class="col-sm-10">
                                <select name="komite_resiko" id="komite_resiko" class="form-select">
                                    <option value="00">00 (Tidak Menjabat)</option>
                                    <option value="01">01 (Ketua)</option>
                                    <option value="02">02 (Anggota)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Komite
                                Remunerasi dan Nominasi</label>
                            <div class="col-sm-10">
                                <select name="komite_remu" id="komite_remu" class="form-select">
                                    <option value="00">00 (Tidak Menjabat)</option>
                                    <option value="01">01 (Ketua)</option>
                                    <option value="02">02 (Anggota)</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Membawahkan Fungsi Kepatuhan
                                (Ya/Tidak)</label>
                            <div class="col-sm-10">
                                <select name="membawahkan_fungsi" id="membawahkan_fungsi" class="form-select">
                                    <option value="01">01 (Ya)</option>
                                    <option value="02">02 (Tidak)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Komisaris
                                Independen (Ya/Tidak)</label>
                            <div class="col-sm-10">
                                <select name="komisaris" id="komisaris" class="form-select">
                                    <option value="01">01 (Ya)</option>
                                    <option value="02">02 (Tidak)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Keterangan Penyebab Berhenti
                                Menjabat</label>
                            <div class="col-sm-10">
                                <select name="ket_penyebab_berhenti" id="ket_penyebab_berhenti" class="form-select">
                                    <option value="1">1 (Pengunduran diri)</option>
                                    <option value="2">2 (Pemberhentian)</option>
                                    <option value="3">3 (Meninggal dunia)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Tanggal
                                Berhenti Menjabat</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggal_berhenti_menjabat" name="tanggal_berhenti_menjabat" value="<?= date('Y-m-d', strtotime($api_hasil->tanggal_berhenti_menjabat)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Alasan
                                Mengundurkan Diri/Pemberhentian</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alasan_mengundurkan_diri" name="alasan_mengundurkan_diri" value="<?= $api_hasil->alasan_mengundurkan_diri; ?>" />
                            </div>
                        </div>


                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Alasan
                                Edit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alasan_edit" name="alasan_edit" placeholder="Masukan alasan mengedit" />
                                <input type="hidden" class="form-control" id="id_0009" name="id_0009" value="<?= $api_hasil->id; ?>" />
                            </div>
                        </div>
                        <div class="row justify-content-end py-3">
                            <div class="col-sm-10">
                                <button type="button" id="btnEdit" onclick="edit()" class="btn btn-primary">Edit</button>
                                <a href="<?= base_url('apollo/form_report_isi_0009') ?>" class="btn btn-warning">Kembali</a>
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
                    messageTop: '[LOG Edit]APOLO - Form 00.09 Data BoD/BoC Who Have Stopped Serving',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                    }
                },
                {
                    extend: 'excelHtml5',
                    messageTop: '[LOG Edit]APOLO - Form 00.09 Data BoD/BoC Who Have Stopped Serving',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                    }
                },
                'colvis'
            ]
        });

        $("#jabatan option[value='<?= $api_hasil->jabatan; ?>']").prop('selected', true);
        $("#komite_audit option[value='<?= $api_hasil->komite_audit; ?>']").prop('selected', true);
        $("#komite_resiko option[value='<?= $api_hasil->komite_pemantau_risiko; ?>']").prop('selected', true);
        $("#komite_remu option[value='<?= $api_hasil->komite_remunerasi_dan_nominasi; ?>']").prop('selected', true);
        $("#membawahkan_fungsi option[value='<?= $api_hasil->membawahkan_fungsi_kepatuhan; ?>']").prop('selected', true);
        $("#komisaris option[value='<?= $api_hasil->komisaris_independen; ?>']").prop('selected', true);
        $("#ket_penyebab_berhenti option[value='<?= $api_hasil->keterangan_penyebab_berhenti_menjabat; ?>']").prop('selected', true);
    });

    function edit() {
        $('#btnEdit').text('saving...'); //change button text
        $('#btnEdit').attr('disabled', true); //set button disable 
        var url;

        url = "<?php echo site_url('apollo/ajax_edit_0009') ?>";


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