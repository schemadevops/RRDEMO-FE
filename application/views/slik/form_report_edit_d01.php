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
                            <label class="col-sm-2 col-form-label">Type of identity number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jenis_identitas" name="jenis_identitas" value="<?= $api_hasil->jenis_identitas; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Identity number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_passport" name="no_passport" value="<?= $api_hasil->no_passport; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Name according to Identity Card</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nm_identitas" name="nm_identitas" value="<?= $api_hasil->nm_identitas; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Full name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nm_lengkap" name="nm_lengkap" value="<?= $api_hasil->nm_lengkap; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Education Code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="stts_debitur" name="stts_debitur" value="<?= $api_hasil->stts_debitur; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kelamin" name="kelamin" value="<?= $api_hasil->kelamin; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Place of birth</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $api_hasil->tempat_lahir; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Date of birth</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_lahir)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">TAX ID number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_npwp" name="no_npwp" value="<?= $api_hasil->no_npwp; ?>" />
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
                                <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="<?= $api_hasil->kode_pos; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Phone number1</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="telp" name="telp" value="<?= $api_hasil->telp; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Phone number2 (mobile phone number)</label>
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
                            <label class="col-sm-2 col-form-label">Country</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kd_negara" name="kd_negara" value="<?= $api_hasil->kd_negara; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Job code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $api_hasil->pekerjaan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Place of work</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tempat_kerja" name="tempat_kerja" value="<?= $api_hasil->tempat_kerja; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Economic sector</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="bidang_usaha" name="bidang_usaha" value="<?= $api_hasil->bidang_usaha; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Work place address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat_kerja" name="alamat_kerja" value="<?= $api_hasil->alamat_kerja; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Gross income in a year</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="penghasilan" name="penghasilan" value="<?= $api_hasil->penghasilan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Source of income</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kd_sumber" name="kd_sumber" value="<?= $api_hasil->kd_sumber; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">The number of dependents</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jml_tanggungan" name="jml_tanggungan" value="<?= $api_hasil->jml_tanggungan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Relation with Bank</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="hub_ljk" name="hub_ljk" value="<?= $api_hasil->hub_ljk; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Debtor type:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="gol_debitur" name="gol_debitur" value="<?= $api_hasil->gol_debitur; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Marital status</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="stts_kawin" name="stts_kawin" value="<?= $api_hasil->stts_kawin; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Spouse - ID Number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_passport_pasangan" name="no_passport_pasangan" value="<?= $api_hasil->no_passport_pasangan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Spouse Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nm_pasangan" name="nm_pasangan" value="<?= $api_hasil->nm_pasangan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Spouse - Date of birth</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_lahir_pasangan" name="tgl_lahir_pasangan" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_lahir_pasangan)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Split Property with Couple?</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pisah_harta" name="pisah_harta" value="<?= $api_hasil->pisah_harta; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Break the maximal loan limit?</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="langgar_bmpk" name="langgar_bmpk" value="<?= $api_hasil->langgar_bmpk; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Greather than maximal loan limit?</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lampau_bmpk" name="lampau_bmpk" value="<?= $api_hasil->lampau_bmpk; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Mother name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="ibu_kandung" name="ibu_kandung" value="<?= $api_hasil->ibu_kandung; ?>" />
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
                                <input type="hidden" class="form-control" id="id_d01" name="id_d01" value="<?= $api_hasil->id; ?>" />
                            </div>
                        </div>

                        <div class="row justify-content-end py-3">
                            <div class="col-sm-10">
                                <button type="button" id="btnEdit" onclick="edit()" class="btn btn-primary">Edit</button>
                                <a href="<?= base_url('slik/form_report_isi_d01') ?>" class="btn btn-warning">Kembali</a>
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

        url = "<?php echo site_url('slik/ajax_edit_d01') ?>";


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