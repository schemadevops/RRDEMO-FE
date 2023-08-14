<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Obox /</span>
                Form Report / Form CR007 -
                Debitur Top-Up Plafon Terbesar</h4>
            <!-- Responsive Table -->
            <div class="card">
                <div class="container mt-3 mb-3">
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
                    <table id="table-res" class="table dt-responsive">
                        <thead>
                            <tr class="text-nowrap">
                                <th>No</th>
                                <th>FLAG DETAIL</th>
                                <th>Sandi Kantor [branch code]</th>
                                <th>Nama Debitur [ debtor name]</th>
                                <th>No.CIF</th>
                                <th>No Identitas [National ID number]</th>
                                <th>Kode Kelompok Kredit [loan category code]</th>
                                <th>No. Rekening [loan account number]</th>
                                <th>Jenis Kredit [debtor type]</th>
                                <th>date of principle top up</th>
                                <th>last principle (before top up)</th>
                                <th>(plafon sebelum) principle amount after top up</th>
                                <th>(plafon sesudah) difference between last principle amount & new principle amount</th>
                                <th>outstanding before</th>
                                <th>outstanding after</th>
                                <th>outstanding difference</th>
                                <th>total loan account before</th>
                                <th>total loan account after top up</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($api_hasil as $key) {
                                $no++;
                            ?>
                                <tr>
                                    <th scope="row"><?= $no; ?></th>
                                    <td><?= $key->flag_detail; ?></td>
                                    <td><?= $key->kd_cabang; ?></td>
                                    <td><?= $key->nm_debitur; ?></td>
                                    <td><?= $key->no_cif; ?></td>
                                    <td><?= $key->no_ktp; ?></td>
                                    <td><?= $key->tipe_pinjaman; ?></td>
                                    <td><?= $key->no_rek_pinjaman; ?></td>
                                    <td><?= $key->tipe_nasabah; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tgl_top_up)); ?></td>
                                    <td><?= $key->nilai_sebelum_topup; ?></td>
                                    <td><?= $key->nilai_setelah_topup; ?></td>
                                    <td><?= $key->selisih_antara_plafon; ?></td>
                                    <td><?= $key->outstanding_sebelum_topup; ?></td>
                                    <td><?= $key->outstanding_setelah_topup; ?></td>
                                    <td><?= $key->selisih_outstanding; ?></td>
                                    <td><?= $key->jumlah_rek_sebelum_topup; ?></td>
                                    <td><?= $key->jumlah_rek_setelah_topup; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->createdAt)); ?></td>
                                    <td>
                                        <a href="<?= base_url('obox/form_report_edit_cr007/' . $key->id); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i> Edit
                                        </a>
                                    </td>
                                </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col-md-3">
                        <a href="<?= base_url('obox/exportDataToTxt'); ?>" class="btn rounded-pill btn-primary my-2">Export to Txt
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
                    messageTop: 'OBOX - Form CR007 - Debitur Top-Up Plafon Terbesar',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17]
                    }
                },
                {
                    extend: 'excelHtml5',
                    messageTop: 'OBOX - Form CR007 - Debitur Top-Up Plafon Terbesar',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17]
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

        url = "<?php echo site_url('obox/ajax_periode') ?>";


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