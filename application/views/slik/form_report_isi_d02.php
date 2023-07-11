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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            for ($i=1; $i < 20; $i++) { 
                            ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td>D</td>
                                <td>1111</td>
                                <td>1234</td>
                                <td>4321</td>
                                <td>F01</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>1 (Available)</td>
                                <td>
                                    <a href="#<?= base_url('slik/form_edit_d02'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i> Edit
                                    </a>
                                </td>
                            </tr>
                            <?php }; ?>
                            

                        </tbody>
                    </table>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col-md-3">
                        <a href="#" class="btn rounded-pill btn-primary">Export to Excel
                        </a>
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
<script>
    $(document).ready(function() {
        $('#table-res').DataTable({});
    });
</script>