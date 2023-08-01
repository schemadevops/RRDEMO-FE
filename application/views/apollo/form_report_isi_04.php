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
                                <th rowspan="3">No</th>
                                <th rowspan="3">Sandi Kantor</th>
                                <th rowspan="3">Nama Kantor</th>
                                <th rowspan="3">Koordinat Kantor</th>
                                <th colspan="4" class="text-center">Alamat Kantor</th>
                                <th rowspan="3">Nama Pemimpin</th>
                                <th rowspan="3">No. Tlp</th>
                                <th colspan="12" class="text-center">Jumlah Karyawan</th>
                                <th rowspan="3">Jumlah Kantor Kas</th>
                                <th rowspan="3">Status Kepemilikan Gedung</th>
                                <th rowspan="3">Jumlah Kas Mobil/Kas Terapung</th>
                                <th colspan="3" class="text-center">Jumlah EDC</th>
                                <th colspan="3" class="text-center">ATM</th>
                                <th colspan="5" class="text-center">Perubahan Selama Bulan Posisi Laporan</th>
                                <th rowspan="3">Created At</th>
                                <th rowspan="3">Edit</th>
                            </tr>
                            <tr>
                                <td rowspan="2">Nama Jalan dan No.</td>
                                <td rowspan="2">Desa/Kecamatan</td>
                                <td rowspan="2">Kab./Kota</td>
                                <td rowspan="2">Kode Pos</td>
                                <td colspan="6" class="text-center">Pegawai Tetap</td>
                                <td colspan="6" class="text-center">Pegawai Tidak Tetap</td>
                                <td rowspan="2">EDC Milik Sendiri</td>
                                <td rowspan="2">EDC Milik BU</td>
                                <td rowspan="2">EDC Milik BPR Lain</td>
                                <td rowspan="2">Jumlah Dikelola Sendiri</td>
                                <td rowspan="2">Jumlah Pihak yang Bekerja sama dengan BPR</td>
                                <td rowspan="2">Nama Pihak yang Bekerja Sama dengan BPR</td>
                                <td rowspan="2">Keterangan Data Kantor</td>
                                <td colspan="2" class="text-center">Persetujuan OJK</td>
                                <td rowspan="2">Alamat Sebelumnya</td>
                                <td rowspan="2">Tanggal Pelaksanaan</td>
                            </tr>
                            <tr>
                                <td>S3</td>
                                <td>S2</td>
                                <td>S1</td>
                                <td>D3</td>
                                <td>SLTA</td>
                                <td>Lainnya</td>
                                <td>S3</td>
                                <td>S2</td>
                                <td>S1</td>
                                <td>D3</td>
                                <td>SLTA</td>
                                <td>Lainnya</td>
                                <td>No.</td>
                                <td>Tanggal</td>
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
                                    <td><?= $key->sandi_kantor; ?></td>
                                    <td><?= $key->nama_kantor; ?></td>
                                    <td><?= $key->Latitude . ", " . $key->Longitude; ?></td>
                                    <td><?= $key->nama_jalan_dan_no; ?></td>
                                    <td><?= $key->desa_kecamatan; ?></td>
                                    <td><?= $key->kab; ?></td>
                                    <td><?= $key->kode_pos; ?></td>
                                    <td><?= $key->nama_pimpinan; ?></td>
                                    <td><?= $key->no_telp; ?></td>
                                    <td><?= $key->pegawai_tetap_s3; ?></td>
                                    <td><?= $key->pegawai_tetap_s2; ?></td>
                                    <td><?= $key->pegawai_tetap_s1; ?></td>
                                    <td><?= $key->pegawai_tetap_d3; ?></td>
                                    <td><?= $key->pegawai_tetap_slta; ?></td>
                                    <td><?= $key->pegawai_tetap_lainnya; ?></td>
                                    <td><?= $key->pegawai_tidak_tetap_s3; ?></td>
                                    <td><?= $key->pegawai_tidak_tetap_s2; ?></td>
                                    <td><?= $key->pegawai_tidak_tetap_s1; ?></td>
                                    <td><?= $key->pegawai_tidak_tetap_d3; ?></td>
                                    <td><?= $key->pegawai_tidak_tetap_slta; ?></td>
                                    <td><?= $key->pegawai_tidak_tetap_lainnya; ?></td>
                                    <td><?= $key->jml_kantor_kas; ?></td>
                                    <td><?= $key->status_gedung; ?></td>
                                    <td><?= $key->jml_kas_terapung; ?></td>
                                    <td><?= $key->edc_milik_sendiri; ?></td>
                                    <td><?= $key->edc_milik_bu; ?></td>
                                    <td><?= $key->edc_milik_bpr_lain; ?></td>
                                    <td><?= $key->atm_jumlah_kelolah_sendiri; ?></td>
                                    <td><?= $key->atm_jumlah_pihak; ?></td>
                                    <td><?= $key->atm_nama_pihak; ?></td>
                                    <td><?= $key->ket_data_kantor; ?></td>
                                    <td><?= $key->no_persetujuan_ojk; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tgl_sk)); ?></td>
                                    <td><?= $key->alamat_sebelumnya; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tgl_pelaksana)); ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->createdAt)); ?></td>
                                    <td>
                                        <a href="<?= base_url('apollo/form_report_edit_04/' . $key->id); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
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
                    messageTop: 'APOLO - Form 00.04 BPR Office Data',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35]
                    }
                },
                {
                    extend: 'excelHtml5',
                    messageTop: 'APOLO - Form 00.04 BPR Office Data',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35]
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