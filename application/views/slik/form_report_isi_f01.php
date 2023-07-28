<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">SLIK /</span>
                Form Report / Form F01 -
                Loan Data</h4>
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
                                <th>ID number</th>
                                <th>Detail Flag</th>
                                <th>Loan account (CBS)</th>
                                <th>CIF (CBS)</th>
                                <th>Nature of Loan</th>
                                <th>Loan Type</th>
                                <th>SKIM</th>
                                <th>First Contract number</th>
                                <th>Contract date</th>
                                <th>Last contract number</th>
                                <th>Last contract date</th>
                                <th>Number of extend</th>
                                <th>Loan contract date</th>
                                <th>Start date</th>
                                <th>End date</th>
                                <th>Category</th>
                                <th>Type of usage</th>
                                <th>Orientation</th>
                                <th>Economic sector code</th>
                                <th>Regency</th>
                                <th>Value of the project</th>
                                <th>Currency</th>
                                <th>Rate</th>
                                <th>Interest type</th>
                                <th>Government program or not?</th>
                                <th>Take over from bank? (Input Bank Code) or Not take over</th>
                                <th>Source of loan</th>
                                <th>First Initial Loan Amount</th>
                                <th>Last Plafond</th>
                                <th>Disbursement</th>
                                <th>Late charge</th>
                                <th>Outstanding</th>
                                <th>Value from original currency</th>
                                <th>Collectibility status</th>
                                <th>Date of the collectibility level 05 (Loss)</th>
                                <th>Reason of collectibility become 05</th>
                                <th>Principal arrears</th>
                                <th>Interest arrears</th>
                                <th>Number of Days arrears</th>
                                <th>Arrears freq.</th>
                                <th>Restructure freq.</th>
                                <th>Date of restructure (for the first time)</th>
                                <th>Date of restructure (for the lasttime)</th>
                                <th>Type of restructre</th>
                                <th>Loan condition</th>
                                <th>Date of loan condition</th>
                                <th>Additional info</th>
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
                                    <td><?= $key->id; ?></td>
                                    <td><?= $key->flag_detail; ?></td>
                                    <td><?= $key->no_rekening; ?></td>
                                    <td><?= $key->cif; ?></td>
                                    <td><?= $key->sifat; ?></td>
                                    <td><?= $key->jenis_kredit; ?></td>
                                    <td><?= $key->skim; ?></td>
                                    <td><?= $key->no_pk_awal; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tgl_pk_awal)); ?></td>
                                    <td><?= $key->no_pk_akhir; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tgl_pk_akhir)); ?></td>
                                    <td><?= $key->baru_panjang; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tgl_awal_kredit)); ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tgl_mulai)); ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tgl_jatuh_tempo)); ?></td>
                                    <td><?= $key->kategory; ?></td>
                                    <td><?= $key->jenis_pengguna; ?></td>
                                    <td><?= $key->orientasi; ?></td>
                                    <td><?= $key->sektor_ekonomi; ?></td>
                                    <td><?= $key->dati; ?></td>
                                    <td><?= number_format($key->nilai_proyek, 0, ',', '.'); ?></td>
                                    <td><?= $key->mata_uang; ?></td>
                                    <td><?= $key->suku_bunga; ?></td>
                                    <td><?= $key->sifat_suku_bunga; ?></td>
                                    <td><?= $key->kredit_pemerintah; ?></td>
                                    <td><?= $key->takeover; ?></td>
                                    <td><?= $key->sumber_dana; ?></td>
                                    <td><?= $key->plafon_awal; ?></td>
                                    <td><?= $key->plafon; ?></td>
                                    <td><?= $key->realisasi; ?></td>
                                    <td><?= $key->denda; ?></td>
                                    <td><?= $key->baki_debet; ?></td>
                                    <td><?= $key->orginal_amount; ?></td>
                                    <td><?= $key->kolektibilitas; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tgl_macet)); ?></td>
                                    <td><?= $key->sebab_macet; ?></td>
                                    <td><?= number_format($key->tunggak_pokok, 0, ',', '.'); ?></td>
                                    <td><?= number_format($key->tunggak_bunga, 0, ',', '.'); ?></td>
                                    <td><?= $key->frekuensi_tunggak; ?></td>
                                    <td><?= $key->frekuensi_restruktur; ?></td>
                                    <td><?= $key->jml_hari_tunggak; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tgl_restruktur)); ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tgl_restruktur_akhir)); ?></td>
                                    <td><?= $key->kd_cara_restruktur; ?></td>
                                    <td><?= $key->kondisi; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tgl_kondisi)); ?></td>
                                    <td><?= $key->keterangan; ?></td>
                                    <td><?= $key->cabang; ?></td>
                                    <td><?= $key->stts_operasi; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->createdAt)); ?></td>
                                    <td>
                                        <a href="<?= base_url('slik/form_report_edit_f01/' . $key->id); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i> Edit
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
                    messageTop: 'SLIK - Form A01 Collateral Data',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48]
                    }
                },
                {
                    extend: 'excelHtml5',
                    messageTop: 'SLIK - Form A01 Collateral Data',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48]
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