<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">SLIK /</span>
                Form Report / Form D01 -
                Individual Customer Data</h4>
            <!-- Responsive Table -->
            <div class="card">
                <div class="container my-2">
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
                                <th>ID number</th>
                                <th>Detail Flag</th>
                                <th>Customer ID/ CIF</th>
                                <th>Type of identity number</th>
                                <th>Identity number</th>
                                <th>Name according to Identity Card</th>
                                <th>Full name</th>
                                <th>Education Code</th>
                                <th>Gender</th>
                                <th>Place of birth</th>
                                <th>Date of birth</th>
                                <th>TAX ID number</th>
                                <th>Address</th>
                                <th>Village</th>
                                <th>Districts</th>
                                <th>Regency code</th>
                                <th>Postal code</th>
                                <th>Phone number1</th>
                                <th>Phone number2 (mobile phone number)</th>
                                <th>Email address</th>
                                <th>Country</th>
                                <th>Job code</th>
                                <th>Place of work</th>
                                <th>Economic sector</th>
                                <th>Work place address</th>
                                <th>Gross income in a year</th>
                                <th>Source of income</th>
                                <th>The number of dependents</th>
                                <th>Relation with Bank</th>
                                <th>Debtor type:</th>
                                <th>Marital status</th>
                                <th>Spouse - ID Number</th>
                                <th>Spouse Name</th>
                                <th>Spouse - Date of birth</th>
                                <th>Split Property with Couple?</th>
                                <th>Break the maximal loan limit?</th>
                                <th>Greather than maximal loan limit?</th>
                                <th>Mother name</th>
                                <th>Branch</th>
                                <th>Operation status</th>
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
                                    <td><?= $key->cif; ?></td>
                                    <td><?= $key->jenis_identitas; ?></td>
                                    <td><?= $key->no_passport; ?></td>
                                    <td><?= $key->nm_identitas; ?></td>
                                    <td><?= $key->nm_lengkap; ?></td>
                                    <td><?= $key->stts_debitur; ?></td>
                                    <td><?= $key->kelamin; ?></td>
                                    <td><?= $key->tempat_lahir; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tgl_lahir)); ?></td>
                                    <td><?= $key->no_npwp; ?></td>
                                    <td><?= $key->alamat; ?></td>
                                    <td><?= $key->kelurahan; ?></td>
                                    <td><?= $key->kecamatan; ?></td>
                                    <td><?= $key->dati; ?></td>
                                    <td><?= $key->kode_pos; ?></td>
                                    <td><?= $key->telp; ?></td>
                                    <td><?= $key->no_hp; ?></td>
                                    <td><?= $key->email; ?></td>
                                    <td><?= $key->kd_negara; ?></td>
                                    <td><?= $key->pekerjaan; ?></td>
                                    <td><?= $key->tempat_kerja; ?></td>
                                    <td><?= $key->bidang_usaha; ?></td>
                                    <td><?= $key->alamat_kerja; ?></td>
                                    <td><?= number_format($key->penghasilan, 0, ',', '.'); ?></td>
                                    <td><?= $key->kd_sumber; ?></td>
                                    <td><?= number_format($key->jml_tanggungan, 0, ',', '.'); ?></td>
                                    <td><?= $key->hub_ljk; ?></td>
                                    <td><?= $key->gol_debitur; ?></td>
                                    <td><?= $key->stts_kawin; ?></td>
                                    <td><?= $key->no_passport_pasangan; ?></td>
                                    <td><?= $key->nm_pasangan; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tgl_lahir_pasangan)); ?></td>
                                    <td><?= $key->pisah_harta; ?></td>
                                    <td><?= $key->langgar_bmpk; ?></td>
                                    <td><?= $key->lampau_bmpk; ?></td>
                                    <td><?= $key->ibu_kandung; ?></td>
                                    <td><?= $key->cabang; ?></td>
                                    <td><?= $key->operation; ?></td>
                                    <td><?= $key->createdAt; ?></td>
                                    <td>
                                        <a href="<?= base_url('slik/form_report_edit_d01/' . $key->id); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i> Edit
                                        </a>
                                    </td>
                                </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col-md-3">
                        <a href="<?= base_url('slik/exportDataToTxt') ?>" class="btn rounded-pill btn-primary">Export to Txt
                        </a>
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
                    messageTop: 'SLIK - Form D01 Individual Customer Data',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39]
                    }
                },
                {
                    extend: 'excelHtml5',
                    messageTop: 'SLIK - Form D01 Individual Customer Data',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39]
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

        url = "<?php echo site_url('slik/ajax_periode') ?>";


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