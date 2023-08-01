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
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="John Doe" value="<?= $api_hasil->nama; ?>" />
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
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Jabatan</label>
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
                            <label class="col-sm-2 col-form-label">Tanggal Mulai</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" value="<?= date('Y-m-d', strtotime($api_hasil->tanggal_mulai_menjabat)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tanggal Selesai Menjabat</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" value="<?= date('Y-m-d', strtotime($api_hasil->tanggal_selesai_menjabat)); ?>" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-12 col-form-label">Surat Persetujuan OJK/BI</label>
                            <hr>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">No. SK</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_sk" name="no_sk" value="<?= $api_hasil->no_sk; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tanggal SK</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_sk" name="tgl_sk" value="<?= date('Y-m-d', strtotime($api_hasil->tanggal_sk)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Memiliki Sertifikat Kompetensi Kerja
                                yang Berlaku</label>
                            <div class="col-sm-10">
                                <select name="memiliki_sertifikat" id="memiliki_sertifikat" class="form-select">
                                    <option value="01">1 (Ya)</option>
                                    <option value="02">2 (Tidak)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tanggal Berakhir Masa Berlakunya
                                Sertifikat Kompetensi Kerja</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_serfikat" name="tgl_serfikat" value="<?= date('Y-m-d', strtotime($api_hasil->tanggal_berakhir_masa_berlakunya_sertifikat_kompetensi_kerja)); ?>" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-12 col-form-label">Pendidikan Formal</label>
                            <hr>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Pendidikan</label>
                            <div class="col-sm-10">
                                <select name="pdk_akhir" id="pdk_akhir" class="form-select">
                                    <option value="01">01 (S3)</option>
                                    <option value="02">02 (S2)</option>
                                    <option value="03">03 (S1)</option>
                                    <option value="04">04 (D3)</option>
                                    <option value="05">05 (SLTA)</option>
                                    <option value="99">99 (Lainnya)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_kelulusan" name="tgl_kelulusan" value="<?= date('Y-m-d', strtotime($api_hasil->tanggal_kelulusan)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nama Lembaga</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_lembaga" name="nama_lembaga" value="<?= $api_hasil->nama_lembaga; ?>" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-12 col-form-label">Pendidikan Non Formal</label>
                            <hr>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Jenis Pelatihan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jns_pelatihan" name="jns_pelatihan" value="<?= $api_hasil->jenis_pelatihan_terakhir; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_pelatihan" name="tgl_pelatihan" value="<?= date('Y-m-d', strtotime($api_hasil->tanggal_pelatihan)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nama Penyelenggara</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_penyelenggara" name="nama_penyelenggara" value="<?= $api_hasil->lembaga_penyelenggara; ?>" />
                            </div>
                        </div>

                        <div class="row mb-3">
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
                                <select name="komite_pemantauan" id="komite_pemantauan" class="form-select">
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
                                <select name="komite_remunerasi_dan_nominasi" id="komite_remunerasi_dan_nominasi" class="form-select">
                                    <option value="00">00 (Tidak Menjabat)</option>
                                    <option value="01" selected>01 (Ketua)</option>
                                    <option value="02">02 (Anggota)</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Membawahkan Fungsi Kepatuhan
                                (Ya/Tidak)</label>
                            <div class="col-sm-10">
                                <select name="fungsi_kepatuhan" id="fungsi_kepatuhan" class="form-select">
                                    <option value="01" selected>01 (Ya)</option>
                                    <option value="02">02 (Tidak)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Komisaris Independen
                                (Ya/Tidak)</label>
                            <div class="col-sm-10">
                                <select name="komisaris_ind" id="komisaris_ind" class="form-select">
                                    <option value="01" selected>01 (Ya)</option>
                                    <option value="02">02 (Tidak)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Keterangan terkait
                                Kepengurusan</label>
                            <div class="col-sm-10">
                                <select name="ket_kepengurusan" id="ket_kepengurusan" class="form-select">
                                    <option value="1" selected>1 (Pengangkatan Baru)</option>
                                    <option value="2">2 (Pengangkatan Kembali)</option>
                                    <option value="3">3 (Perubahan Jabatan)</option>
                                    <option value="4">4 (Tidak Berubah)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Alasan Perubahan Jabatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="alasan_per_jabatan" id="alasan_per_jabatan" value="<?= $api_hasil->alasan_perubahan_jabatan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Keterangan Jabatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="ket_jabatan" name="ket_jabatan" value="<?= $api_hasil->keterangan_jabatan; ?>" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Alasan Edit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alasan_edit" name="alasan_edit" placeholder="Masukan alasan mengedit" />
                                <input type="hidden" class="form-control" id="id_0002" name="id_0002" value="<?= $api_hasil->id; ?>" />
                            </div>
                        </div>

                        <div class="row justify-content-end py-3">
                            <div class="col-sm-10">
                                <button type="button" id="btnEdit" onclick="edit()" class="btn btn-primary">Edit</button>
                                <a href="<?= base_url('apollo/form_report_isi_0002') ?>" class="btn btn-warning">Kembali</a>
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
                    messageTop: '[LOG Edit]APOLO - Form 00.01 BPR Ownership Data',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                    }
                },
                {
                    extend: 'excelHtml5',
                    messageTop: '[LOG Edit]APOLO - Form 00.01 BPR Ownership Data',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                    }
                },
                'colvis'
            ]
        });

        $("#ket_kepengurusan option[value='<?= $api_hasil->keterangan_terkait_kepengurusan; ?>']").prop('selected', true);
        $("#komisaris_ind option[value='<?= $api_hasil->komisaris_independen; ?>']").prop('selected', true);
        $("#fungsi_kepatuhan option[value='<?= $api_hasil->membawahkan_fungsi_kepatuhan; ?>']").prop('selected', true);
        $("#komite_remunerasi_dan_nominasi option[value='<?= $api_hasil->komite_remunerasi_dan_nominasi; ?>']").prop('selected', true);
        $("#komite_pemantauan option[value='<?= $api_hasil->komite_pemantauan; ?>']").prop('selected', true);
        $("#komite_audit option[value='<?= $api_hasil->komite_audit; ?>']").prop('selected', true);
        $("#pdk_akhir option[value='<?= $api_hasil->pendidikan_terakhir; ?>']").prop('selected', true);
        $("#memiliki_sertifikat option[value='<?= $api_hasil->memiliki_sertifikat_kompetensi_kerja_yang_berlaku; ?>']").prop('selected', true);
        $("#jabatan option[value='<?= $api_hasil->jabatan; ?>']").prop('selected', true);
    });

    function edit() {
        $('#btnEdit').text('saving...'); //change button text
        $('#btnEdit').attr('disabled', true); //set button disable 
        var url;

        url = "<?php echo site_url('apollo/ajax_edit_0002') ?>";


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