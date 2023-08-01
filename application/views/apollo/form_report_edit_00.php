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
                            <label class="col-sm-2 col-form-label">Nama
                                BPR</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_bpr" name="nama_bpr" placeholder="John Doe" value="<?= $api_hasil->databpr->name; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Alamat
                                BPR
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat_bpr" name="alamat_bpr" value="<?= $api_hasil->databpr->alamat; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Kabupaten/Kota BPR
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kabupaten_kota" name="kabupaten_kota" placeholder="John Doe" value="<?= $api_hasil->databpr->kabupaten_kota; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Wilayah
                                Kerja OJK
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="wilayah_kerja_ojk" name="wilayah_kerja_ojk" value="<?= $api_hasil->databpr->wilayah_kerja_ojk; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">No. Telepon
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="telp_bpr" name="telp_bpr" value="<?= $api_hasil->databpr->telp; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">E-mail
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email_bpr" name="email_bpr" value="<?= $api_hasil->databpr->email; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Situs Web
                                BPR
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="web_bpr" name="web_bpr" value="<?= $api_hasil->databpr->web; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">NPWP
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="npwp_bpr" name="npwp_bpr" value="<?= $api_hasil->databpr->npwp; ?>" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-12 col-form-label" for="basic-default-name">Penanggung
                                Jawab Penyusun Laporan
                            </label>
                            <hr>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">A. Nama
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_pj" name="nama_pj" placeholder="John Doe" value="<?= $api_hasil->data_penanggungjawab->nama; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">
                                B. Bagian/Divisi
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="devisi_pj" name="devisi_pj" placeholder="John Doe" value="<?= $api_hasil->data_penanggungjawab->devisi; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">
                                C. No. Telepon
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="telp_pj" name="telp_pj" placeholder="John Doe" value="<?= $api_hasil->data_penanggungjawab->telp; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">
                                D. E-mail
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email_pj" name="email_pj" placeholder="John Doe" value="<?= $api_hasil->data_penanggungjawab->email; ?>" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-12 col-form-label" for="basic-default-name">
                                Dividen yang Dibayar
                            </label>
                            <hr>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">
                                A. Nominal
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nominal_dev" name="nominal_dev" placeholder="John Doe" value="<?= $api_hasil->data_deviden->nominal; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">
                                B. Tahun RUPS/RAT
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tahun_dev" name="tahun_dev" placeholder="John Doe" value="<?= $api_hasil->data_deviden->tahun; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">
                                Bonus Tahunan dan Tantiem
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="bonus_th_dev" name="bonus_th_dev" placeholder="John Doe" value="<?= $api_hasil->data_deviden->bonus_tahunan; ?>" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-12 col-form-label" for="basic-default-name">
                                Informasi Audit Laporan Tahunan
                            </label>
                            <hr>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">
                                A. Nama Kantor Akuntan Publik (KAP) yang mengaudit
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_kantor_aud" name="nama_kantor_aud" value="<?= $api_hasil->data_audit_laporan->nama_kantor; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">
                                B. Nama AP yang menandatangani laporan audit
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_user_aud" name="nama_user_aud" value="<?= $api_hasil->data_audit_laporan->nama_user; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">
                                C. Pemeriksaan ke...... Dari KAP yang sama
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pemeriksaan_ke_aud" name="pemeriksaan_ke_aud" value="<?= $api_hasil->data_audit_laporan->pemeriksaan_ke; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">
                                Nilai Nominal per Lembar Saham
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nominal_perlembar_sahan" name="nominal_perlembar_sahan" value="<?= $api_hasil->data_audit_laporan->nominal_perlembar_sahan; ?>" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-12 col-form-label" for="basic-default-name">
                                Pedagang Valuta Asing (PVA)
                            </label>
                            <hr>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">
                                A. Memiliki Izin PVA
                            </label>
                            <div class="col-sm-10">
                                <select name="izin_pva" id="izin_pva" class="form-select">
                                    <option value="1" selected>1 (Ya)</option>
                                    <option value="2">2 (Tidak)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">
                                B. Tanggal Izin PVA
                            </label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_pva" name="tgl_pva" value="<?= date('Y-m-d', strtotime($api_hasil->data_pedangan_valuta_asing->tanggal)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">
                                C. Jumlah PVA
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jumlah_pva" name="jumlah_pva" value="<?= $api_hasil->data_pedangan_valuta_asing->tanggal; ?>" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">
                                Memiliki/Tidak Memiliki Layanan Perbankan Elektronik (E-Banking)
                            </label>
                            <div class="col-sm-10">
                                <select name="ebank_pva" id="ebank_pva" class="form-select">
                                    <option value="1" selected>1 (Ya)</option>
                                    <option value="2">2 (Tidak)</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">
                                Nama Ultimate Shareholder 1
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pemilik_saham1" name="pemilik_saham1" value="<?= $api_hasil->data_pedangan_valuta_asing->pemilik_saham; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">
                                Nama Ultimate Shareholder 2
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pemilik_saham2" name="pemilik_saham2" value="Nama Shareholder" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">
                                Nama Ultimate Shareholder 3
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pemilik_saham3" name="pemilik_saham3" value="Nama Shareholder" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Alasan Edit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alasan_edit" name="alasan_edit" placeholder="Masukan alasan mengedit" />
                                <input type="hidden" class="form-control" id="id_0000" name="id_0000" value="<?= $api_hasil->id; ?>" />
                            </div>
                        </div>


                        <div class="row justify-content-end py-3">
                            <div class="col-sm-10">
                                <button type="button" id="btnEdit" onclick="edit()" class="btn btn-primary">Edit</button>
                                <a href="<?= base_url('apollo/form_report_isi_0000') ?>" class="btn btn-warning">Kembali</a>
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
    $('#table-res').DataTable({
        dom: 'Bfrtip',
        buttons: [{
                extend: 'copyHtml5',
                messageTop: '[LOG Edit]APOLO - Form 00.00 BPR Main Informasi ',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                }
            },
            {
                extend: 'excelHtml5',
                messageTop: '[LOG Edit]APOLO - Form 00.00 BPR Main Informasi ',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                }
            },
            'colvis'
        ]
    });

    function edit() {
        $('#btnEdit').text('saving...'); //change button text
        $('#btnEdit').attr('disabled', true); //set button disable 
        var url;

        url = "<?php echo site_url('apollo/ajax_edit_0000') ?>";


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