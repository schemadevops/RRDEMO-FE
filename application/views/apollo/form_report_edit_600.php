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
                <div class="container mb-3">
                    <form id="form">
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Sandi Kantor</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sandi_kantor" name="sandi_kantor" value="<?= $api_hasil->sandi_kantor; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">No CIF</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_cif" name="no_cif" value="<?= $api_hasil->no_cif; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">No. Identitas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_idenstitas" name="no_idenstitas" value="<?= $api_hasil->no_idenstitas; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Kode Kelompok Kredit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kd_kelompok_kredit" name="kd_kelompok_kredit" value="<?= $api_hasil->kd_kelompok_kredit; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">No. Rekening</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_rekening" name="no_rekening" value="<?= $api_hasil->no_rekening; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Jenis</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jenis" name="jenis" value="<?= $api_hasil->jenis; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Status Restrukturisasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="stts_restrukturisasi" name="stts_restrukturisasi" value="<?= $api_hasil->stts_restrukturisasi; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Jenis Penggunaan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jenis_penggunaan" name="jenis_penggunaan" value="<?= $api_hasil->jenis_penggunaan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Hubungan dengan Bank</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="hubungan_bank" name="hubungan_bank" value="<?= $api_hasil->hubungan_bank; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Sumber Dana Pelunasan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sumber_dana_pelunasan" name="sumber_dana_pelunasan" value="<?= $api_hasil->sumber_dana_pelunasan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Periode Pembayaran - Pokok</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="periode_pembayaran_pokok" name="periode_pembayaran_pokok" value="<?= $api_hasil->periode_pembayaran_pokok; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Periode Pembayaran - Pokok</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="periode_pembayaran_bunga" name="periode_pembayaran_bunga" value="<?= $api_hasil->periode_pembayaran_bunga; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Jangka Waktu - Tanggal Mulai</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_mulai)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Jangka Waktu - Tanggal Jatuh Tempo</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_jatuh_tempo" name="tgl_jatuh_tempo" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_jatuh_tempo)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Angsuran Pokok Pertama</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="angsuran_pertama" name="angsuran_pertama" value="<?= date('Y-m-d', strtotime($api_hasil->angsuran_pertama)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Kualitas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kualitas" name="kualitas" value="<?= $api_hasil->kualitas; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Tanggal Mulai Macet</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_macet" name="tgl_macet" value="<?= date('Y-m-d', strtotime($api_hasil->angsuran_pertama)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Jumlah Hari Tunggakan - Pokok</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jml_hari_tunggakan_pokok" name="jml_hari_tunggakan_pokok" value="<?= $api_hasil->jml_hari_tunggakan_pokok; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Jumlah Hari Tunggakan - Bunga</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jml_hari_tunggakan_bunga" name="jml_hari_tunggakan_bunga" value="<?= $api_hasil->jml_hari_tunggakan_bunga; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Nominal Tunggakan - Pokok</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nominal_tunggakan" name="nominal_tunggakan" value="<?= $api_hasil->nominal_tunggakan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Nominal Tunggakan - Bunga</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nominal_tunggakan" name="nominal_tunggakan" value="<?= $api_hasil->nominal_tunggakan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Golongan Debitur</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="gol_debitur" name="gol_debitur" value="<?= $api_hasil->gol_debitur; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Sandi Bank</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sandi_bank" name="sandi_bank" value="<?= $api_hasil->sandi_bank; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Sektor Ekonomi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sektor_ekonomi" name="sektor_ekonomi" value="<?= $api_hasil->sektor_ekonomi; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Kategori Usaha</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="ketegori_usaha" name="ketegori_usaha" value="<?= $api_hasil->ketegori_usaha; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Lokasi Penggunaan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lokasi_penggunakan" name="lokasi_penggunakan" value="<?= $api_hasil->lokasi_penggunakan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Suku Bunga - Persentase</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="suki_bunga" name="suki_bunga" value="<?= $api_hasil->suki_bunga; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Suku Bunga - Cara Perhitungan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="type_suku_bunga" name="type_suku_bunga" value="<?= $api_hasil->type_suku_bunga; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Penjamin - Golongan Penjamin</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="gol_penjamin" name="gol_penjamin" value="<?= $api_hasil->gol_penjamin; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Penjamin - Bagian yang dijamin</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="bagian_dijamin" name="bagian_dijamin" value="<?= $api_hasil->bagian_dijamin; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Agunan - Likuid</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="agunan_liquid" name="agunan_liquid" value="<?= $api_hasil->agunan_liquid; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Agunan - Non Likuid</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="agunan_nonliquid" name="agunan_nonliquid" value="<?= $api_hasil->agunan_nonliquid; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Kelonggaran tarik</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kelonggara_tarik" name="kelonggara_tarik" value="<?= $api_hasil->kelonggara_tarik; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Plafon - Awal</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="palfon_awal" name="palfon_awal" value="<?= $api_hasil->palfon_awal; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Plafon - Efektif</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="palfon_efektif" name="palfon_efektif" value="<?= $api_hasil->palfon_efektif; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Baki Debet</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="baki_debet" name="baki_debet" value="<?= $api_hasil->baki_debet; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Provisi Belum Diamortisasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="provisi_diamortisasi" name="provisi_diamortisasi" value="<?= $api_hasil->provisi_diamortisasi; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Biaya Transkasi Belum Diamortisasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="biaya_transaksi_diamortisasi" name="biaya_transaksi_diamortisasi" value="<?= $api_hasil->biaya_transaksi_diamortisasi; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Pendapatan Bunga Ditangguhkan Dalam Rangka Restrukturisasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pendapatan_bunga_ditangguhkan" name="pendapatan_bunga_ditangguhkan" value="<?= $api_hasil->pendapatan_bunga_ditangguhkan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Cadangan Kerugian Restrukturisasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="cadangan_kerugian" name="cadangan_kerugian" value="<?= $api_hasil->cadangan_kerugian; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Baki Debet Neto</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="baki_debet_neto" name="baki_debet_neto" value="<?= $api_hasil->baki_debet_neto; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">PPAP - Yang Telah Dibentuk</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="ppap_dibentuk" name="ppap_dibentuk" value="<?= $api_hasil->ppap_dibentuk; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">PPAP - Kelebihan PPAP Dalam Rangka Restrukturisasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="ppap_restrukturasi" name="ppap_restrukturasi" value="<?= $api_hasil->ppap_restrukturasi; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Pendapatan Bunga Yang Akan Diterima</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pemdapatan_bunga_diterima" name="pemdapatan_bunga_diterima" value="<?= $api_hasil->pemdapatan_bunga_diterima; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Pendapatan Bunga Dalam Penyelesaian</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pendapatan_bunga_penyelesaian" name="pendapatan_bunga_penyelesaian" value="<?= $api_hasil->pendapatan_bunga_penyelesaian; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Status BMPK</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="status_bmpk" name="status_bmpk" value="<?= $api_hasil->status_bmpk; ?>" />
                            </div>
                        </div>


                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Alasan
                                Edit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alasan_edit" name="alasan_edit" placeholder="Masukan alasan mengedit" />
                                <input type="hidden" class="form-control" id="id_0600" name="id_0600" value="<?= $api_hasil->id; ?>" />
                            </div>
                        </div>
                        <div class="row justify-content-end py-3">
                            <div class="col-sm-10">
                                <button type="button" id="btnEdit" onclick="edit()" class="btn btn-primary">Edit</button>
                                <a href="<?= base_url('apollo/form_report_isi_0600') ?>" class="btn btn-warning">Kembali</a>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="table-responsive text-nowrap">
                    <table class="table dt-responsive" id="table-res">
                        <thead>
                            <tr class="text-nowrap">
                                <th>No</th>
                                <th>Time Edit</th>
                                <th>Field</th>
                                <th>Before</th>
                                <th>After</th>
                                <th>Reason</th>
                                <th>Request by</th>
                                <th>Approve by</th>
                                <th>Status</th>
                                <th>Date Approve</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no_log = 0;
                            foreach ($api_log_data as $row) {
                                $no_log++;
                                $field = $row->field->fieldLog;
                                $field_before = $row->val_before->editBefore;
                                $field_after = $row->val_after->editLog;
                                // $after = (array)$field_after['0'];
                                // $after_string = implode(" ", $after);

                            ?>
                                <tr>
                                    <th scope=" row"><?= $no_log; ?></th>
                                    <td><?= date('d-m-Y H:i:s', strtotime($row->createdAt)); ?></td>
                                    <td>
                                        <ol><?php
                                            foreach ($field as $fld) {
                                            ?>
                                                <li><?= $fld->field; ?></li>
                                            <?php
                                            };
                                            ?>
                                        </ol>
                                    </td>
                                    <td>
                                        <ol><?php
                                            foreach ($field_before as $bf) {
                                                $bef = (array)$bf;
                                                $bef_string = implode(" ", $bef);
                                            ?>
                                                <li><?= $bef_string; ?></li>
                                            <?php
                                            };
                                            ?>
                                        </ol>
                                    </td>
                                    <td>
                                        <ol><?php
                                            foreach ($field_after as $af) {
                                                $aff = (array)$af;
                                                $aff_string = implode(" ", $aff);
                                            ?>
                                                <li><?= $aff_string; ?></li>
                                            <?php
                                            };
                                            ?>
                                        </ol>
                                    </td>
                                    <td><?= $row->reason; ?></td>
                                    <td><?= $row->requestedByUserName; ?></td>


                                    <?php
                                    if ($row->status_approved == 1) {
                                    ?>
                                        <td><?= $row->approvedByUserName; ?></td>
                                        <td><a href="#" class="btn rounded-pill btn-success">Approve</a></td>
                                    <?php } else { ?>
                                        <td>-</td>
                                        <td><a href="#" class="btn rounded-pill btn-warning">Waiting</a></td>
                                    <?php }; ?>

                                    </td>
                                    <td><?= date('d-m-Y H:i:s', strtotime($row->updatedAt)); ?></td>
                                </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!--/ Responsive Table -->
        </div>
    </div>
    <!-- / Navbar -->
</div>
<?php $this->view('temp/footer'); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.all.min.js"></script>
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
                    messageTop: '[LOG Edit]APOLO - Form 06.01 - Collateral List',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                    }
                },
                {
                    extend: 'excelHtml5',
                    messageTop: '[LOG Edit]APOLO - Form 06.01 - Collateral List',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                    }
                },
                'colvis'
            ]
        });

    });

    function edit() {
        $('#btnEdit').text('saving...'); //change button text
        $('#btnEdit').attr('disabled', true); //set button disable 
        var url;

        url = "<?php echo site_url('apollo/ajax_edit_0600') ?>";

        // ajax adding data to database

        var formData = new FormData($('#form')[0]);
        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function(data) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                if (data.status) //if success close modal and reload ajax table
                {
                    Toast.fire({
                        icon: 'success',
                        title: 'Data Berhasil disimpan'
                    });
                    window.setTimeout(function() {
                        location.reload();
                    }, 1500);
                } else {
                    for (var i = 0; i < data.inputerror.length; i++) {
                        $('[name="' + data.inputerror[i] + '"]').addClass('is-invalid'); //select parent twice to select div form-group class and add has-error class
                        // $('[name="' + data.inputerror[i] + '"]').text(data.error_string[i]); //select span help-block class set text error string
                        Toast.fire({
                            icon: 'error',
                            title: data.error_string[i]
                        })
                    }
                }
                $('#btnEdit').text('Edit'); //change button text
                $('#btnEdit').attr('disabled', false); //set button enable 


            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
                $('#btnEdit').text('Edit'); //change button text
                $('#btnEdit').attr('disabled', false); //set button enable 

            }
        });
    };
</script>