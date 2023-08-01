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
                                <th rowspan="2">Nama Organ Pelaksana</th>
                                <th rowspan="2">Alamat</th>
                                <th rowspan="2">NIK</th>
                                <th colspan="5" class="text-center">Jabatan</th>
                                <th rowspan="2">Tanggal Mulai</th>
                                <th colspan="2" class="text-center">Surat Pengangkatan</th>
                                <th colspan="3" class="text-center">Keanggotaan Komite</th>
                                <th rowspan="2">Keterangan terkait organ pelaksana</th>
                                <th rowspan="2">Created At</th>
                                <th rowspan="2">Edit</th>
                            </tr>
                            <tr>
                                <td>Kepatuhan</td>
                                <td>Manajemen Risiko</td>
                                <td>Audit Intern</td>
                                <td>APU dan PPT</td>
                                <td>Lainnya</td>
                                <td>No</td>
                                <td>Tanggal</td>
                                <td>Komite Audit</td>
                                <td>Komite Pemantauan Risiko</td>
                                <td>Komite Remunerasi dan Nominasi</td>
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
                                    <td><?= $key->nama_organ_pelaksana; ?></td>
                                    <td><?= $key->alamat; ?></td>
                                    <td><?= $key->nik; ?></td>
                                    <td><?= $key->kepatuhan; ?></td>
                                    <td><?= $key->manajemen_risiko; ?></td>
                                    <td><?= $key->aduit_intern; ?></td>
                                    <td><?= $key->apu_dan_ppt; ?></td>
                                    <td><?= $key->lainnya; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tanggal_mulai_menjabat)); ?></td>
                                    <td><?= $key->no_sk; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tanggal)); ?></td>
                                    <td><?= $key->komite_audit; ?></td>
                                    <td><?= $key->komite_pemantauan_risiko; ?></td>
                                    <td><?= $key->komite_remunerasi_dan_nominasi; ?></td>
                                    <td><?= $key->keterangan_terkait_organ_pelaksana; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->createdAt)); ?></td>
                                    <td>
                                        <a href="<?= base_url('apollo/form_report_edit_03/' . $key->id); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
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
                    messageTop: 'APOLO - Form 00.03 BPR Implementator Member',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]
                    }
                },
                {
                    extend: 'excelHtml5',
                    messageTop: 'APOLO - Form 00.03 BPR Implementator Member',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]
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