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
                                <input type="text" class="form-control" id="sandi_kantor" name="sandi_kantor" placeholder="John Doe" readonly value="<?= $api_hasil->sandi_kantor; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nama Kantor</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_kantor" name="nama_kantor" value="<?= $api_hasil->nama_kantor; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Koordinat Kantor</label>
                            <div class="col-sm-10">
                                <small>Latitutde</small>
                                <input type="text" class="form-control" id="lat" name="lat" value="<?= $api_hasil->Latitude; ?>" />
                                <small>Longtitude</small>
                                <input type="text" class="form-control" id="long" name="long" value="<?= $api_hasil->Longitude; ?>" />
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-12 col-form-label text-center">Alamat Kantor</label>
                            <hr>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nama Jalan dan No.</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_jalan_dan_no" name="nama_jalan_dan_no" value="<?= $api_hasil->nama_jalan_dan_no; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Desa/Kecamatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="desa_kecamatan" name="desa_kecamatan" value="<?= $api_hasil->desa_kecamatan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Kab./Kota</label>
                            <div class="col-sm-10">
                                <select name="kab_kota" id="kab_kota" class="form-select">
                                    <option value="0102" selected>0102 (Kab. Bekasi)</option>
                                    <option value="0103">0103 (Kab. Purwakarta)</option>
                                    <option value="0106">0106 (Kab. Karawang)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Kode Pos</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="<?= $api_hasil->kode_pos; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nama Pemimpin</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_pimpinan" name="nama_pimpinan" value="<?= $api_hasil->nama_pimpinan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">No. Tlp</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $api_hasil->no_telp; ?>" />
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-12 col-form-label text-center">Jumlah Karyawan</label>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <label class="col-form-label ">Pegawai Tetap</label>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label">S3</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="pt_s3" name="pt_s3" value="<?= $api_hasil->pegawai_tetap_s3; ?>" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label">S2</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="pt_s2" name="pt_s2" value="<?= $api_hasil->pegawai_tetap_s2; ?>" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label">S1</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="pt_s1" name="pt_s1" value="<?= $api_hasil->pegawai_tetap_s1; ?>" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label">D3</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="pt_d3" name="pt_d3" value="<?= $api_hasil->pegawai_tetap_d3; ?>" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label">SLTA</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="pt_slta" name="pt_slta" value="<?= $api_hasil->pegawai_tetap_slta; ?>" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label">Lainnya</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="pt_lainnya" name="pt_lainnya" value="<?= $api_hasil->pegawai_tetap_lainnya; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <label class="col-form-label ">Pegawai Tidak Tetap</label>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label">S3</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="ptt_s3" name="ptt_s3" value="<?= $api_hasil->pegawai_tidak_tetap_s3; ?>" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label">S2</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="ptt_s2" name="ptt_s2" value="<?= $api_hasil->pegawai_tidak_tetap_s2; ?>" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label">S1</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="ptt_s1" name="ptt_s1" value="<?= $api_hasil->pegawai_tidak_tetap_s1; ?>" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label">D3</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="ptt_d3" name="ptt_d3" value="<?= $api_hasil->pegawai_tidak_tetap_d3; ?>" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label">SLTA</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="ptt_slta" name="ptt_slta" value="<?= $api_hasil->pegawai_tidak_tetap_slta; ?>" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label">Lainnya</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="ptt_lainnya" name="ptt_lainnya" value="<?= $api_hasil->pegawai_tidak_tetap_lainnya; ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Jumlah Kantor Kas</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="jml_kantor_kas" name="jml_kantor_kas" value="<?= $api_hasil->jml_kantor_kas; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Status Kepemilikan Gedung</label>
                            <div class="col-sm-8">
                                <select name="status_kepemilikan_gedung" id="status_kepemilikan_gedung" class="form-select">
                                    <option value="01" selected>01 (Sewa)</option>
                                    <option value="02">02 (Milik Sendiri)</option>
                                    <option value="99">99 (Lainnya)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Jumlah Kas Mobil/Kas Terapung</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="jml_kas_terapung" name="jml_kas_terapung" value="<?= $api_hasil->jml_kas_terapung; ?>" />
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-12 col-form-label text-center">Jumlah EDC</label>
                            <hr>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">EDC Milik Sendiri</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="edc_milik_sendiri" name="edc_milik_sendiri" value="<?= $api_hasil->edc_milik_sendiri; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">EDC milik BU</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="edc_milik_bu" name="edc_milik_bu" value="<?= $api_hasil->edc_milik_bu; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">EDC Milik BPR Lain</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="edc_milik_bpr_lain" name="edc_milik_bpr_lain" value="<?= $api_hasil->edc_milik_bpr_lain; ?>" />
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-12 col-form-label text-center">ATM</label>
                            <hr>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Jumlah Dikelola Sendiri</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="atm_jumlah_kelolah_sendiri" name="atm_jumlah_kelolah_sendiri" value="<?= $api_hasil->atm_jumlah_kelolah_sendiri; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Jumlah Pihak yang Bekerja sama dengan
                                BPR</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="atm_jumlah_pihak" name="atm_jumlah_pihak" value="<?= $api_hasil->atm_jumlah_pihak; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Nama Pihak yang Bekerja Sama dengan
                                BPR</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="atm_nama_pihak" name="atm_nama_pihak" value="<?= $api_hasil->atm_nama_pihak; ?>" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-12 col-form-label text-center">Perubahan Selama Bulan
                                Posisi Laporan</label>
                            <hr>
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label">Keterangan Data
                                        Kantor</label>
                                    <div class="col-sm-8">
                                        <select name="ket_data_kantor" id="ket_data_kantor" class="form-select">
                                            <option value="1" selected>01 (Pembukaan KC)</option>
                                            <option value="2">2 (Pembukaan KC yg berasal dari
                                                peningkatan status kantor kas)</option>
                                            <option value="3">3 (Pemindahan alamat)</option>
                                            <option value="4">4 (Tidak berubah)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label">Alamat Sebelumnya</label>
                                    <div class="col-sm-8">
                                        <textarea id="alamat_sebelumnya" name="alamat_sebelumnya"><?= $api_hasil->alamat_sebelumnya; ?></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label">Tanggal Pelaksanaan</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="tgl_pelaksanaan" name="tgl_pelaksanaan" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_pelaksana)); ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <label class="col-sm-12 col-form-label text-center">Persetujuan
                                        OJK</label>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label">No.</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="no_persetujuan_ojk" name="no_persetujuan_ojk" value="<?= $api_hasil->no_persetujuan_ojk; ?>" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label">Tanggal</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="tgl_sk" name="tgl_sk" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_sk)); ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Alasan Edit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alasan_edit" name="alasan_edit" placeholder="Masukan alasan mengedit" />
                                <input type="hidden" class="form-control" id="id_0004" name="id_0004" value="<?= $api_hasil->id; ?>" />
                            </div>
                        </div>

                        <div class="row justify-content-end py-3">
                            <div class="col-sm-10">
                                <button type="button" id="btnEdit" onclick="edit()" class="btn btn-primary">Edit</button>
                                <a href="<?= base_url('apollo/form_report_isi_0004') ?>" class="btn btn-warning">Kembali</a>
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

        $("#ket_data_kantor option[value='<?= $api_hasil->ket_data_kantor; ?>']").prop('selected', true);
        $("#status_kepemilikan_gedung option[value='<?= $api_hasil->status_gedung; ?>']").prop('selected', true);
        $("#kab_kota option[value='<?= $api_hasil->kab; ?>']").prop('selected', true);
    });

    function edit() {
        $('#btnEdit').text('saving...'); //change button text
        $('#btnEdit').attr('disabled', true); //set button disable 
        var url;

        url = "<?php echo site_url('apollo/ajax_edit_0004') ?>";


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