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
                            <label class="col-sm-2 col-form-label">Tax Number (NPWP)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_bdn_usaha" name="id_bdn_usaha" value="<?= $api_hasil->id_bdn_usaha; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Debtor name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nm_bdn_usaha" name="nm_bdn_usaha" value="<?= $api_hasil->nm_bdn_usaha; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Type of corporate</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jenis_bdn_usaha" name="jenis_bdn_usaha" value="<?= $api_hasil->jenis_bdn_usaha; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Place of established</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tempat_pendirian" name="tempat_pendirian" value="<?= $api_hasil->tempat_pendirian; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">First deed number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_akte_awal" name="no_akte_awal" value="<?= $api_hasil->no_akte_awal; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">First deed date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_akte_awal" name="tgl_akte_awal" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_akte_awal)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Last deed number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_akte_akhir" name="no_akte_akhir" value="<?= $api_hasil->no_akte_akhir; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Last deed date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_akte_akhir" name="tgl_akte_akhir" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_akte_akhir)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Phone number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="telp" name="telp" value="<?= $api_hasil->telp; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Mobile phone number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $api_hasil->no_hp; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Email address</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" value="<?= $api_hasil->email; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $api_hasil->alamat; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Village</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?= $api_hasil->kelurahan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Districts</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $api_hasil->kecamatan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Regency code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="dati" name="dati" value="<?= $api_hasil->dati; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Postal code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="<?= $api_hasil->kd_pos; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Country</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kd_negara" name="kd_negara" value="<?= $api_hasil->kd_negara; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Economic sector</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kd_bidang_usaha" name="kd_bidang_usaha" value="<?= $api_hasil->kd_bidang_usaha; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Relation with bank</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="hub_ljk" name="hub_ljk" value="<?= $api_hasil->hub_ljk; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Break the maximal loan limit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="langgar_bmpk" name="langgar_bmpk" value="<?= $api_hasil->langgar_bmpk; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Greather than maximal loan limit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lampu_bmpk" name="lampu_bmpk" value="<?= $api_hasil->lampu_bmpk; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Go pulic or not?</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="go_public" name="go_public" value="<?= $api_hasil->go_public; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Debitur type</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="gol_debitur" name="gol_debitur" value="<?= $api_hasil->gol_debitur; ?>" />
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
                            <label class="col-sm-2 col-form-label">Date of rating</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_pemeringkat" name="tgl_pemeringkat" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_pemeringkat)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Debtor group</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="group_debitur" name="group_debitur" value="<?= $api_hasil->group_debitur; ?>" />
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
                                <input type="text" class="form-control" id="operation" name="operation" value="<?= $api_hasil->operation; ?>" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Alasan Edit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alasan_edit" name="alasan_edit" placeholder="Masukan alasan mengedit" />
                                <input type="hidden" class="form-control" id="id_d02" name="id_d02" value="<?= $api_hasil->id; ?>" />
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

        url = "<?php echo site_url('slik/ajax_edit_d02') ?>";


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