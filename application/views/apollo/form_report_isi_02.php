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
                <div class="container mb-3 py-3">
                    <form id="form_periode">
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-3 col-form-label" for="periode_date">Periode
                                Data</label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="periode_date" name="periode_date" placeholder="John Doe" />
                            </div>
                            <div class="col-sm-3">
                                <button type="button" onclick="save_periode()" id="btnSeacrh" class="btn btn-primary">Search</button>
                                <button type="button" onclick="reload_table()" id="btnReload" class="btn btn-warning">Reset</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="table-responsive text-nowrap">
                    <table class="table dt-responsive" id="table-res">
                        <thead>
                            <tr class="text-nowrap">
                                <th rowspan="2">No</th>
                                <th rowspan="2">Nama</th>
                                <th rowspan="2">Alamat</th>
                                <th rowspan="2">NIK</th>
                                <th rowspan="2">Jabatan</th>
                                <th rowspan="2">Tanggal Mulai</th>
                                <th rowspan="2">Tanggal Selesai Menjabat</th>
                                <th colspan="2" class="text-center">Surat Persetujuan OJK</th>
                                <th rowspan="2">Memiliki Sertifikat Kompetensi Kerja yang Berlaku
                                <th rowspan="2">Tanggal Berakhir Masa Berlakunya Sertifikat Kompetensi Kerja</th>
                                <th colspan="3" class="text-center">Pendidikan Formal</th>
                                <th colspan="3" class="text-center">Pendidikan Non Formal</th>
                                <th colspan="3" class="text-center">Keanggotaan Komite</th>
                                <th rowspan="2" class="text-center">Membawahkan Fungsi Kepatuhan (Ya/Tidak)</th>
                                <th rowspan="2" class="text-center">Komisaris Independen (Ya/Tidak)</th>
                                <th rowspan="2" class="text-center">Keterangan terkait Kepengurusan</th>
                                <th rowspan="2" class="text-center">Alasan Perubahan Jabatan</th>
                                <th rowspan="2" class="text-center">Keterangan Jabatan</th>
                                <th rowspan="2">Edit</th>
                            </tr>
                            <tr>
                                <th>No. SK</th>
                                <th>Tanggal SK</th>
                                <th>Pendidikan Terakhir</th>
                                <th>Tanggal Kelulusan</th>
                                <th>Nama Lembaga</th>
                                <th>Jenis Pelatihan Terakhir</th>
                                <th>Tanggal Pelatihan</th>
                                <th>Lembaga Penyelenggara</th>
                                <th>Komite Audit</th>
                                <th>Komite Pemantaun</th>
                                <th>Komite Remunerasi dan Nominasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($api_hasil->data as $key) {
                                $no++;
                            ?>
                                <tr>
                                    <th scope="row"><?= $no; ?></th>
                                    <td><?= $key->nama; ?></td>
                                    <td><?= $key->alamat; ?></td>
                                    <td><?= $key->nik; ?></td>
                                    <td><?= $key->jabatan; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tanggal_mulai_menjabat)); ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tanggal_selesai_menjabat)); ?></td>
                                    <td><?= $key->no_sk; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tanggal_sk)); ?></td>
                                    <td><?= $key->memiliki_sertifikat_kompetensi_kerja_yang_berlaku; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tanggal_berakhir_masa_berlakunya_sertifikat_kompetensi_kerja)); ?></td>
                                    <td><?= $key->pendidikan_terakhir; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tanggal_kelulusan)); ?></td>
                                    <td><?= $key->nama_lembaga; ?></td>
                                    <td><?= $key->jenis_pelatihan_terakhir; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tanggal_pelatihan)); ?></td>
                                    <td><?= $key->lembaga_penyelenggara; ?></td>
                                    <td><?= $key->komite_audit; ?></td>
                                    <td><?= $key->komite_pemantauan; ?></td>
                                    <td><?= $key->komite_remunerasi_dan_nominasi; ?></td>
                                    <td><?= $key->membawahkan_fungsi_kepatuhan; ?></td>
                                    <td><?= $key->komisaris_independen; ?></td>
                                    <td><?= $key->keterangan_terkait_kepengurusan; ?></td>
                                    <td><?= $key->alasan_perubahan_jabatan; ?></td>
                                    <td><?= $key->keterangan_jabatan; ?></td>
                                    <td>
                                        <a href="<?= base_url('apollo/form_report_edit_02/' . $key->id); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php };
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col-md-3">
                        <a href="<?= base_url('apollo/exportDataToTxt'); ?>" class="btn rounded-pill btn-primary my-2">Export to Txt
                        </a>
                    </div>
                    <div class="col-md-6">
                        ;&nbsp
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" />
                            <button class="btn rounded-pill btn-primary" type="button" id="inputGroupFileAddon04">Import</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--/ Responsive Table -->
        </div>
    </div>
    <!-- / Navbar -->
</div>

<?php $this->view('temp/footer'); ?>
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
                    messageTop: 'APOLO - Form 00.02 Data Member of BoD and BoC of BPR',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24]
                    }
                },
                {
                    extend: 'excelHtml5',
                    messageTop: 'APOLO - Form 00.02 Data Member of BoD and BoC of BPR',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24]
                    }
                },
                'colvis'
            ]
        });
    });

    function save_periode() {
        $('#btnSeacrh').text('searching...'); //change button text
        $('#btnSeacrh').attr('disabled', true); //set button disable 
        var url;

        url = "<?php echo site_url('apollo/ajax_periode') ?>";


        // ajax adding data to database

        var formData = new FormData($('#form_periode')[0]);
        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function(data) {
                if (data.status) //if success close modal and reload ajax table
                {
                    Swal.fire({
                        icon: 'success',
                        title: 'Data Berhasil dicari'
                    });
                    window.setTimeout(function() {
                        location.reload();
                    }, 1000);
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Opss ada yang error'
                    })
                }
                $('#btnSeacrh').text('Search'); //change button text
                $('#btnSeacrh').attr('disabled', false); //set button enable 


            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
                $('#btnSeacrh').text('Search'); //change button text
                $('#btnSeacrh').attr('disabled', false); //set button enable 

            }
        });
    }

    function reload_table() {
        window.setTimeout(function() {
            location.reload();
        }, 1000);
    }
</script>