<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Apolo /</span>
                Form Report/ Form 06.00</h4>
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header">Form 06.00</h5>
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
                                <th>Sandi Kantor</th>
                                <th>Nomor CIF</th>
                                <th>No. Identitas</th>
                                <th>Kode Kelompok Kredit</th>
                                <th>No. Rekening</th>
                                <th>Jenis</th>
                                <th>Status Restrukturisasi</th>
                                <th>Jenis Penggunaan</th>
                                <th>Hubungan dengan Bank</th>
                                <th>Sumber Dana Pelunasan</th>
                                <th>Periode Pembayaran - Pokok</th>
                                <th>Periode Pembayaran - Bunga</th>
                                <th>Jangka Waktu - Tanggal Mulai</th>
                                <th>Jangka Waktu - Tanggal Jatuh Tempo</th>
                                <th>Angsuran Pokok Pertama</th>
                                <th>Kualitas</th>
                                <th>Tanggal Mulai Macet</th>
                                <th>Jumlah Hari Tunggakan - Pokok</th>
                                <th>Jumlah Hari Tunggakan - Bunga</th>
                                <th>Nominal Tunggakan - Pokok</th>
                                <th>Nominal Tunggakan - Bunga</th>
                                <th>Golongan Debitur</th>
                                <th>Sandi Bank</th>
                                <th>Sektor Ekonomi</th>
                                <th>Kategori Usaha</th>
                                <th>Lokasi Penggunaan</th>
                                <th>Suku Bunga - Persentase</th>
                                <th>Suku Bunga - Cara Perhitungan</th>
                                <th>Penjamin - Golongan Penjamin</th>
                                <th>Penjamin - Bagian yang dijamin</th>
                                <th>Agunan - Likuid</th>
                                <th>Agunan - Non Likuid</th>
                                <th>Kelonggaran tarik</th>
                                <th>Plafon - Awal</th>
                                <th>Plafon - Efektif</th>
                                <th>Baki Debet</th>
                                <th>Provisi Belum Diamortisasi</th>
                                <th>Biaya Transkasi Belum Diamortisasi</th>
                                <th>Pendapatan Bunga Ditangguhkan Dalam Rangka Restrukturisasi</th>
                                <th>Cadangan Kerugian Restrukturisasi</th>
                                <th>Baki Debet Neto</th>
                                <th>PPAP - Yang Telah Dibentuk</th>
                                <th>PPAP - Kelebihan PPAP Dalam Rangka Restrukturisasi</th>
                                <th>Pendapatan Bunga Yang Akan Diterima</th>
                                <th>Pendapatan Bunga Dalam Penyelesaian</th>
                                <th>Status BMPK</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 1; $i < 20; $i++) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td>001</td>
                                    <td>CIF1</td>
                                    <td>1234567890</td>
                                    <td></td>
                                    <td>Rekening1</td>
                                    <td>01 (Dalam rangka pembiayaan bersama (sindikasi))</td>
                                    <td>10 (Tidak direstrukturisasi)</td>
                                    <td>10 (Modal kerja)</td>
                                    <td>11 (Terkait dalam rangka kesejahteraan)</td>
                                    <td>10 (Gaji/Honor)</td>
                                    <td>1 (Harian)</td>
                                    <td>1 (Harian)</td>
                                    <td>20180101</td>
                                    <td>20231231</td>
                                    <td>20180101</td>
                                    <td>1 (Lancar)</td>
                                    <td></td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>100000</td>
                                    <td>100000</td>
                                    <td>835 (Lainnya)</td>
                                    <td></td>
                                    <td>011110</td>
                                    <td>1 (Mikro)</td>
                                    <td>1291 (Kota Surabaya)</td>
                                    <td>5.56</td>
                                    <td>11 (Bunga flat Tetap)</td>
                                    <td>880 (Asuransi jiwa)</td>
                                    <td>5.56</td>
                                    <td>100000</td>
                                    <td>100000</td>
                                    <td>100000</td>
                                    <td>100000</td>
                                    <td>200000</td>
                                    <td>100000</td>
                                    <td>100000</td>
                                    <td>100000</td>
                                    <td>100000</td>
                                    <td></td>
                                    <td>0</td>
                                    <td>50000</td>
                                    <td></td>
                                    <td>1000000</td>
                                    <td></td>
                                    <td>00 (Tidak Melanggar dan Tidak Melampaui)</td>
                                    <td>
                                        <a href="#<?= base_url('apollo/form_report_edit_600'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                        </a>
                                    </td>
                                </tr>

                            <?php }; ?>

                        </tbody>

                    </table>
                </div>

                <div class="row mt-3 mb-3">
                    <div class="col-md-3">
                        <!-- <a href="#" class="btn rounded-pill btn-primary my-2">Export to Excel
                        </a>
                        <a href="#" class="btn rounded-pill btn-primary my-2">Export to Txt
                        </a> -->
                        &nbsp;
                    </div>
                    <div class="col-md-6">
                        &nbsp;
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
                    messageTop: 'Apollo - Form 06.00 - List of Credits Granted',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46]
                    }
                },
                {
                    extend: 'excelHtml5',
                    messageTop: 'Apollo - Form 06.00 - List of Credits Granted',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46]
                    }
                },
                'colvis'
            ]
        });
    });
</script>
</body>

</html>