<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Apolo /</span>
                Form Report/ <?= $header; ?></h4>
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header"><?= $header; ?></h5>
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
                                <th>Created At</th>
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
                                    <td><?= $key->sandi_kantor; ?></td>
                                    <td><?= $key->no_cif; ?></td>
                                    <td><?= $key->no_idenstitas; ?></td>
                                    <td><?= $key->kd_kelompok_kredit; ?></td>
                                    <td><?= $key->no_rekening; ?></td>
                                    <td><?= $key->jenis; ?></td>
                                    <td><?= $key->stts_restrukturisasi; ?></td>
                                    <td><?= $key->jenis_penggunaan; ?></td>
                                    <td><?= $key->hubungan_bank; ?></td>
                                    <td><?= $key->sumber_dana_pelunasan; ?></td>
                                    <td><?= $key->periode_pembayaran_pokok; ?></td>
                                    <td><?= $key->periode_pembayaran_bunga; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tgl_mulai)); ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tgl_jatuh_tempo)); ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->angsuran_pertama)); ?></td>
                                    <td><?= $key->kualitas; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->tgl_macet)); ?></td>
                                    <td><?= $key->jml_hari_tunggakan_pokok; ?></td>
                                    <td><?= $key->jml_hari_tunggakan_bunga; ?></td>
                                    <td><?= $key->nominal_tunggakan; ?></td>
                                    <td><?= $key->nominal_tunggakan; ?></td>
                                    <td><?= $key->gol_debitur; ?></td>
                                    <td><?= $key->sandi_bank; ?></td>
                                    <td><?= $key->sektor_ekonomi; ?></td>
                                    <td><?= $key->ketegori_usaha; ?></td>
                                    <td><?= $key->lokasi_penggunakan; ?></td>
                                    <td><?= $key->suki_bunga; ?></td>
                                    <td><?= $key->type_suku_bunga; ?></td>
                                    <td><?= $key->gol_penjamin; ?></td>
                                    <td><?= $key->bagian_dijamin; ?></td>
                                    <td><?= $key->agunan_liquid; ?></td>
                                    <td><?= $key->agunan_nonliquid; ?></td>
                                    <td><?= $key->kelonggara_tarik; ?></td>
                                    <td><?= $key->palfon_awal; ?></td>
                                    <td><?= $key->palfon_efektif; ?></td>
                                    <td><?= $key->baki_debet; ?></td>
                                    <td><?= $key->provisi_diamortisasi; ?></td>
                                    <td><?= $key->biaya_transaksi_diamortisasi; ?></td>
                                    <td><?= $key->pendapatan_bunga_ditangguhkan; ?></td>
                                    <td><?= $key->cadangan_kerugian; ?></td>
                                    <td><?= $key->baki_debet_neto; ?></td>
                                    <td><?= $key->ppap_dibentuk; ?></td>
                                    <td><?= $key->ppap_restrukturasi; ?></td>
                                    <td><?= $key->pemdapatan_bunga_diterima; ?></td>
                                    <td><?= $key->pendapatan_bunga_penyelesaian; ?></td>
                                    <td><?= $key->status_bmpk; ?></td>
                                    <td><?= date('d-m-Y', strtotime($key->createdAt));; ?></td>
                                    <td>
                                        <a href="<?= base_url('apollo/form_report_edit_600/' . $key->id); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                        </a>
                                    </td>
                                </tr>

                            <?php }; ?>
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
</body>

</html>