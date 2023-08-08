<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Apolo /</span>
                Form Report/ Form 01.01</h4>
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header">Form 01.01</h5>
                <div class="container mb-3 py-3">
                    <form>
                        <div class="row mb-3">
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
                    <table class="table table-striped table-bordered dt-responsive nowrap" id="table-res">
                        <thead>
                            <tr class="text-nowrap">
                                <th>No</th>
                                <th>Include Text</th>
                                <th>Sandi Kantor</th>
                                <th>Aset</th>
                                <th>Sandi</th>
                                <th>Jumlah</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 1; $i < 20; $i++) {
                                $tigaangkarandom = mt_rand(111,999);
                                $rp_angka = $tigaangkarandom . "00000";
                            ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td>
                                        <p>T</p>
                                        <p>Y</p>
                                        <p>Y</p>
                                        <p>T</p>
                                        <p>Y</p>
                                        <p>Y</p>
                                        <p>Y</p>
                                    </td>
                                    <td>
                                        <p>-</p>
                                        <ul>
                                            <li><?= "00". $i; ?></li>
                                            <li><?= "00". $i; ?></li>
                                        </ul>
                                        <p>-</p>
                                        <ul>
                                            <li><?= "00". $i; ?></li>
                                            <li><?= "00". $i; ?></li>
                                            <li><?= "00". $i; ?></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <p>Tagihan Komitmen</p>
                                        <ul>
                                            <li>Fasilitas Pinjaman yang Diterima yang Belum Ditarik</li>
                                            <li>Tagihan Komitmen Lainnya</li>
                                        </ul>
                                        <p>Kewajiban Komitmen</p>
                                        <ul>
                                            <li>Fasilitas Kredit kepada Nasabah yang Belum Ditarik</li>
                                            <li>Penerusan Kredit (Channeling)</li>
                                            <li>Kewajiban Komitmen Lainnya</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <p>-</p>
                                        <ul>
                                            <li>6101010000</li>
                                            <li>6101990000</li>
                                        </ul>
                                        <p>-</p>
                                        <ul>
                                            <li>6101010000</li>
                                            <li>6101990000</li>
                                            <li>6101990000</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <p>-</p>
                                        <ul>
                                            <li><?= number_format($rp_angka,0,',','.'); ?></li>
                                            <li><?= number_format($rp_angka,0,',','.'); ?></li>
                                        </ul>
                                        <p>-</p>
                                        <ul>
                                            <li><?= number_format($rp_angka,0,',','.'); ?></li>
                                            <li><?= number_format($rp_angka,0,',','.'); ?></li>
                                            <li><?= number_format($rp_angka,0,',','.'); ?></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary">Edit</button>
                                    </td>
                                </tr>
                            <?php }
                            ?>
                           </tbody>

                    </table>
                </div>

                <div class="row mt-3 mb-3">
                    <div class="col-md-3">
                        <a href="#" class="btn rounded-pill btn-primary my-2">Export to Excel
                        </a>
                        <a href="#" class="btn rounded-pill btn-primary my-2">Export to Txt
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
        $('#table-res').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    });
</script>