<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">SLIK /</span>
                Form Report / Form A01 -
                Collateral Data</h4>
            <!-- Responsive Table -->
            <div class="card">
                <div class="container mt-3 mb-3">
                    <form>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name">Periode
                                Data</label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="basic-default-name" placeholder="John Doe" />
                            </div>
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="table-responsive text-nowrap">
                    <table id="table-res" class="table dt-responsive">
                        <thead>
                            <tr class="text-nowrap">
                                <th>ID</th>
                                <th>Default Value</th>
                                <th>Collateral Number</th>
                                <th>Loan Account Number</th>
                                <th>Customer ID / CIF</th>
                                <th>Facility segment (SLIK Code - OJK)</th>
                                <th>Collateral status</th>
                                <th>Collateral Type</th>
                                <th>Rating</th>
                                <th>Rating agency</th>
                                <th>Type of contract</th>
                                <th>Contract date</th>
                                <th>Owner of the collateral</th>
                                <th>Number of collateral certifiacte</th>
                                <th>Coll. Address</th>
                                <th>Collateral regency</th>
                                <th>Collateral value (Sale value of Tax object)</th>
                                <th>Sale value from Bank</th>
                                <th>Date of bank appraisal</th>
                                <th>Collateral sale value from Independent appraisal</th>
                                <th>Name of Independent Appraisal</th>
                                <th>Date of Appraisal</th>
                                <th>Become collateral in other Loan account or not?</th>
                                <th>Percentage of sharing collateral value (if become collateral to
                                    other Loan account)</th>
                                <th>Joint Account Status</th>
                                <th>Cover with insurance or not?</th>
                                <th>Additional info</th>
                                <th>Branch code</th>
                                <th>Operation Code</th>
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
                                    <td><?= $key->register_agunan; ?></td>
                                    <td><?= $key->rekening; ?></td>
                                    <td><?= $key->cif; ?></td>
                                    <td><?= $key->segment_fasilitas; ?></td>
                                    <td><?= $key->stts_agunan; ?></td>
                                    <td><?= $key->jenis_agunan; ?></td>
                                    <td><?= $key->peringkat; ?></td>
                                    <td><?= $key->pemeringkat; ?></td>
                                    <td><?= $key->jenis_ikat; ?></td>
                                    <td><?= date('d-m-Y H:i:s', strtotime($key->tgl_ikat)); ?></td>
                                    <td><?= $key->pemilik_agunan; ?></td>
                                    <td><?= $key->bukti_milik; ?></td>
                                    <td><?= $key->alamat_agunan; ?></td>
                                    <td><?= $key->data_agunan; ?></td>
                                    <td><?= $key->nilai_agunan_njop; ?></td>
                                    <td><?= $key->nilai_agunan_bank; ?></td>
                                    <td><?= date('d-m-Y H:i:s', strtotime($key->tgl_penilaian_bank)); ?></td>
                                    <td><?= $key->nilai_agunan; ?></td>
                                    <td><?= $key->nama_penilai; ?></td>
                                    <td><?= date('d-m-Y H:i:s', strtotime($key->tgl_penilai)); ?></td>
                                    <td><?= $key->stts_paripasu; ?></td>
                                    <td><?= $key->paripasu; ?></td>
                                    <td><?= $key->stts_kredit_join; ?></td>
                                    <td><?= $key->asuransi; ?></td>
                                    <td><?= $key->keterangan; ?></td>
                                    <td><?= $key->cabang; ?></td>
                                    <td><?= $key->operation_stastus; ?></td>
                                    <td><?= date('d-m-Y H:i:s', strtotime($key->createdAt)); ?></td>
                                    <td>
                                        <a href="<?= base_url('slik/form_report_edit_a01/' . $key->id); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i> Edit
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
                        <a href="#" class="btn rounded-pill btn-primary">Export to Txt
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
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29]
                    }
                },
                {
                    extend: 'excelHtml5',
                    messageTop: 'SLIK - Form A01 Collateral Data',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29]
                    }
                },
                'colvis'
            ]
        });
    });
</script>