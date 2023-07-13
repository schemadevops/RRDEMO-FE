<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Sipina /</span>
                Form Report / Form - SIPINA</h4>
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
                                <th>No</th>
                                <th>Unique Identity Code</th>
                                <th>CIF Number</th>
                                <th>Saving Account Number</th>
                                <th>Account Status</th>
                                <th>Customer Category</th>
                                <th>Country Code</th>
                                <th>Nationality</th>
                                <th>Currency Code</th>
                                <th>Account Balance</th>
                                <th>Date of Birth</th>
                                <th>Tax Identification Number</th>
                                <th>TIN CountryNumber</th>
                                <th>Choose tax ID Type</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Address Type</th>
                                <th>Country Code</th>
                                <th>Address</th>
                                <th>Source of Income</th>
                                <th>Currency Code according to the source income</th>
                                <th>Total Income</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 1; $i < 21; $i++) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td>11452</td>
                                    <td>1115</td>
                                    <td>6584785215</td>
                                    <td>On</td>
                                    <td>Exemple</td>
                                    <td>Exemple</td>
                                    <td>Exemple</td>
                                    <td>Exemple</td>
                                    <td>Exemple</td>
                                    <td>Exemple</td>
                                    <td>Exemple</td>
                                    <td>Exemple</td>
                                    <td>Exemple</td>
                                    <td>Exemple</td>
                                    <td>Exemple</td>
                                    <td>Exemple</td>
                                    <td>Exemple</td>
                                    <td>Exemple</td>
                                    <td>Exemple</td>
                                    <td>Exemple</td>
                                    <td>Exemple</td>
                                    <td>Exemple</td>
                                    <td>
                                        <a href="<?= base_url('sipina/form_report_edit'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i> Edit
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            };
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
                    messageTop: 'Form SIPINA',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22]
                    }
                },
                {
                    extend: 'excelHtml5',
                    messageTop: 'Form SIPINA',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22]
                    }
                },
                'colvis'
            ]
        });
    });
</script>