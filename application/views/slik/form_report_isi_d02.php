<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">SLIK /</span>
                Form Report / Form D02 -
                Non Individual Customer Data</h4>
            <!-- Responsive Table -->
            <div class="card">
                <div class="container my-2">
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
                                <th>ID number</th>
                                <th>Detail Flag</th>
                                <th>Customer ID/ CIF</th>
                                <th>Tax Number (NPWP)</th>
                                <th>Debtor name</th>
                                <th>Type of corporate</th>
                                <th>Place of established</th>
                                <th>First deed number</th>
                                <th>First deed date</th>
                                <th>Last deed number</th>
                                <th>Last deed date</th>
                                <th>Phone number</th>
                                <th>Mobile phone number</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Village</th>
                                <th>Districts</th>
                                <th>Regency code</th>
                                <th>Postal code</th>
                                <th>Country code</th>
                                <th>Economic sector</th>
                                <th>Relation with bank</th>
                                <th>Break the maximal loan limit</th>
                                <th>Greather than maximal loan limit</th>
                                <th>Go pulic or not?</th>
                                <th>Debitur type</th>
                                <th>Rating</th>
                                <th>Rating agency</th>
                                <th>Date of rating</th>
                                <th>Debtor group</th>
                                <th>Branch</th>
                                <th>Operation data</th>
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
                                    <td><?= $key->id_bdn_usaha; ?></td>
                                    <td><?= $key->nm_bdn_usaha; ?></td>
                                    <td><?= $key->jenis_bdn_usaha; ?></td>
                                    <td><?= $key->tempat_pendirian; ?></td>
                                    <td><?= $key->no_akte_awal; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tgl_akte_awal)); ?></td>
                                    <td><?= $key->no_akte_akhir; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tgl_akte_akhir)); ?></td>
                                    <td><?= $key->telp; ?></td>
                                    <td><?= $key->no_hp; ?></td>
                                    <td><?= $key->email; ?></td>
                                    <td><?= $key->alamat; ?></td>
                                    <td><?= $key->kelurahan; ?></td>
                                    <td><?= $key->kecamatan; ?></td>
                                    <td><?= $key->dati; ?></td>
                                    <td><?= $key->kd_pos; ?></td>
                                    <td><?= $key->kd_negara; ?></td>
                                    <td><?= $key->kd_bidang_usaha; ?></td>
                                    <td><?= $key->hub_ljk; ?></td>
                                    <td><?= $key->langgar_bmpk; ?></td>
                                    <td><?= $key->lampu_bmpk; ?></td>
                                    <td><?= $key->go_public; ?></td>
                                    <td><?= $key->gol_debitur; ?></td>
                                    <td><?= $key->peringkat; ?></td>
                                    <td><?= $key->pemeringkat; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tgl_pemeringkat)); ?></td>
                                    <td><?= $key->group_debitur; ?></td>
                                    <td><?= $key->cabang; ?></td>
                                    <td><?= $key->operation; ?></td>
                                    <td><?= $key->createdAt; ?></td>
                                    <td>
                                        <a href="<?= base_url('slik/form_report_edit_d02/' . $key->id); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i> Edit
                                        </a>
                                    </td>
                                </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col-md-3">
                        <a href="<?= base_url('slik/exportDataToTxt_d02'); ?>" class="btn rounded-pill btn-primary">Export to Txt
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
                    messageTop: 'SLIK - Form D02 Non Individual Customer Data',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39]
                    }
                },
                {
                    extend: 'excelHtml5',
                    messageTop: 'SLIK - Form D02 Non Individual Customer Data',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39]
                    }
                },
                'colvis'
            ]
        });
    });
</script>