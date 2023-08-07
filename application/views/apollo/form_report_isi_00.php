<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Apolo /</span>
                Form Report/ Form 00.00</h4>
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header">Form 00.00</h5>
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
                                <th>No</th>
                                <th>Nama BPR </th>
                                <th>Alamat BPR </th>
                                <th>Kabupaten/Kota BPR </th>
                                <th>Wilayah Kerja OJK </th>
                                <th>No. Telepon </th>
                                <th>E-mail </th>
                                <th>Situs Web BPR </th>
                                <th>NPWP </th>
                                <th>Nama</th>
                                <th>No Telp</th>
                                <th>Email</th>
                                <th>Bagian/Divisi</th>
                                <th>Nominal</th>
                                <th>Tahun RUSP/RAT</th>
                                <th>Bonus Tahunan dan Tantiem</th>
                                <th>Nama Kantor Akuntan Publik (KAP) yang mengaudit</th>
                                <th>Nama AP yang menandatangani laporan audit</th>
                                <th>Pemeriksaan ke...... Dari KAP yang sama</th>
                                <th>Nilai Nominal per Lembar Saham</th>
                                <th>Jumlah PVA</th>
                                <th>Memiliki Izin PVA</th>
                                <th>Tanggal Izin PVA</th>
                                <th>Memiliki/Tidak Memiliki Layanan Perbankan Elektronik (E-Banking)</th>
                                <th>Nama Ultimate Shareholder 1</th>
                                <th>Edit</th>
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
                                    <td><?= $key->databpr->name; ?></td>
                                    <td><?= $key->databpr->alamat; ?></td>
                                    <td><?= $key->databpr->kabupaten_kota; ?></td>
                                    <td><?= $key->databpr->wilayah_kerja_ojk; ?></td>
                                    <td><?= $key->databpr->telp; ?></td>
                                    <td><?= $key->databpr->email; ?></td>
                                    <td><?= $key->databpr->web; ?></td>
                                    <td><?= $key->databpr->npwp; ?></td>
                                    <td><?= $key->data_penanggungjawab->nama; ?></td>
                                    <td><?= $key->data_penanggungjawab->telp; ?></td>
                                    <td><?= $key->data_penanggungjawab->email; ?></td>
                                    <td><?= $key->data_penanggungjawab->devisi; ?></td>
                                    <td><?= $key->data_deviden->nominal; ?></td>
                                    <td><?= $key->data_deviden->tahun; ?></td>
                                    <td><?= $key->data_deviden->bonus_tahunan; ?></td>
                                    <td><?= $key->data_audit_laporan->nama_kantor; ?></td>
                                    <td><?= $key->data_audit_laporan->nama_user; ?></td>
                                    <td><?= $key->data_audit_laporan->pemeriksaan_ke; ?></td>
                                    <td><?= $key->data_audit_laporan->nominal_perlembar_sahan; ?></td>
                                    <td><?= $key->data_pedangan_valuta_asing->pva_jumlah; ?></td>
                                    <td><?= $key->data_pedangan_valuta_asing->izin; ?></td>
                                    <td><?= $key->data_pedangan_valuta_asing->tanggal; ?></td>
                                    <td><?= $key->data_pedangan_valuta_asing->layanan_perbankan; ?></td>
                                    <td><?= $key->data_pedangan_valuta_asing->pemilik_saham; ?></td>
                                    <td>
                                        <a href="<?= base_url('apollo/form_report_edit_00/' . $key->id); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
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
                    <div class="col-md-5">
                        ;&nbsp
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <input type="file" class="form-control" style="border-bottom-right-radius: 10px;
border-top-right-radius: 10px;" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" />
                            <button class="btn rounded-pill btn-primary" style="margin-left: 10px;" type="button" id="inputGroupFileAddon04">Import</button>
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
                    messageTop: 'APOLO - Form 00.00 BPR Main Informasi',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23]
                    }
                },
                {
                    extend: 'excelHtml5',
                    messageTop: 'APOLO - Form 00.00 BPR Main Informasi',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23]
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