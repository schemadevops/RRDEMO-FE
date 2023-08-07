<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Apolo /</span>
                Form Report/ Form <?= $header; ?></h4>
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header">Form <?= $header; ?></h5>
                <div class="container mb-3">
                    <form id="form">
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Sandi Kantor</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sandi_kantor" name="sandi_kantor" value="<?= $api_hasil->sandi_kantor; ?>" readonly />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nomor CIF</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_cif" name="no_cif" value="<?= $api_hasil->no_cif; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">No. Rekening</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_rekening" name="no_rekening" value="<?= $api_hasil->no_rekening; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Jenis</label>
                            <div class="col-sm-10">
                                <select name="jenis" id="jenis" class="form-select">
                                    <option value="10">10 (Kredit yang diberikan)</option>
                                    <option value="20">20 (Penempatan pada bank lain)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Gol. Debitur</label>
                            <div class="col-sm-10">
                                <select name="gol_debitor" id="gol_debitor" class="form-select">
                                    <option value="600">600 (BPR Konvensional)</option>
                                    <option value="601">601 (BPR Syariah)</option>
                                    <option value="700">700 (Bank Umum Konvensional)</option>
                                    <option value="901">901 (Unit Usaha Syariah (KC Syariah Bank Umum
                                        Konvensional))</option>
                                    <option value="835">835 (Lainnya)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Hubungan Dengan Bank</label>
                            <div class="col-sm-10">
                                <select name="hubungan_bank" id="hubungan_bank" class="form-select">
                                    <option value="12">12 (Terkait)</option>
                                    <option value="20">20 (Tidak Terkait)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tanggal Hapusbuku</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_hapus_buku" name="tgl_hapus_buku" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_hapus_buku)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-12 col-form-label text-center">Saldo Pokok</label>
                            <hr>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Saat Hapus Buku</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sp_hapus_buku" name="sp_hapus_buku" value="<?= $api_hasil->sp_hapus_buku; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Akumulasi Tertagih</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sp_akumlasi_tertagih" name="sp_akumlasi_tertagih" value="<?= $api_hasil->sp_akumlasi_tertagih; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Per Posisi Laporan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sp_posisi_laporan" name="sp_posisi_laporan" value="<?= $api_hasil->sp_posisi_laporan; ?>" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-12 col-form-label text-center">Tunggakan Bunga</label>
                            <hr>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Saat Hapus Buku</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tb_hapus_buku" name="tb_hapus_buku" value="<?= $api_hasil->tb_hapus_buku; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Akumulasi Tertagih</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tb_akumalasi_tertagih" name="tb_akumalasi_tertagih" value="<?= $api_hasil->tb_akumalasi_tertagih; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Akumulasi Tambahan Bunga
                                Berjalan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tb_akumulasi_tambahan" name="tb_akumulasi_tambahan" value="<?= $api_hasil->tb_akumulasi_tambahan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Per Posisi Laporan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tb_posisi_laporan" name="tb_posisi_laporan" value="<?= $api_hasil->tb_posisi_laporan; ?>" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-12 col-form-label text-center">Agunan</label>
                            <hr>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Jenis</label>
                            <div class="col-sm-10">
                                <select name="agunan_jenis" id="agunan_jenis" class="form-select">
                                    <option value="201">201 (Non Likuid : Emas perhiasan)</option>
                                    <option value="202">202 (Non Likuid : Tanah dan/atau bangunan yang
                                        memiliki sertipikat yang dibebani hak tanggungan pertama)
                                    </option>
                                    <option value="203">203 (Non Likuid : Tanah dan/atau bangunan yang
                                        memiliki sertipikat dan didukung dengan surat kuasa menjual
                                        namun tidak dibebani dengan hak tanggungan pertama)</option>
                                    <option value="203">206 (Non Likuid : Resi gudang yang penilaiannya
                                        dilakukan kurang dari 12 bulan atau sampai dengan 12 (dua belas)
                                        bulan dan sejalan dengan ketentuan peraturan perundang-undangan
                                        mengenai resi gudang)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="agunan_alamat" name="agunan_alamat" value="<?= $api_hasil->agunan_alamat; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nilai</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="agunan_nilai" name="agunan_nilai" value="<?= $api_hasil->agunan_nilai; ?>" />
                            </div>
                        </div>

                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Alasan
                                Edit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alasan_edit" name="alasan_edit" placeholder="Masukan alasan mengedit" />
                                <input type="hidden" class="form-control" id="id_1500" name="id_1500" value="<?= $api_hasil->id; ?>" />
                            </div>
                        </div>
                        <div class="row justify-content-end py-3">
                            <div class="col-sm-10">
                                <button type="button" id="btnEdit" onclick="edit()" class="btn btn-primary">Edit</button>
                                <a href="<?= base_url('apollo/form_report_isi_1500') ?>" class="btn btn-warning">Kembali</a>
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
                    messageTop: '[LOG Edit]APOLO - Form 15.00 - List of Earning Assets Erased by Books',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                    }
                },
                {
                    extend: 'excelHtml5',
                    messageTop: '[LOG Edit]APOLO - Form 15.00 - List of Earning Assets Erased by Books',
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

        url = "<?php echo site_url('apollo/ajax_edit_1500') ?>";


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