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
                            <label class="col-sm-2 col-form-label" for="basic-default-name">No
                                CIF</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_cif" name="no_cif" value="<?= $api_hasil->no_cif; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Gol.
                                Kreditur</label>
                            <div class="col-sm-10">
                                <select name="gol_kreditur" id="gol_kreditur" class="form-select">
                                    <option value="001">001 (Bank Indonesia)</option>
                                    <option value="600">600 (BPR Konvensional)</option>
                                    <option value="601">601 (BPR Syariah)</option>
                                    <option value="700">700 (Bank Umum Konvensional)</option>
                                    <option value="701">701 (Bank Umum Syariah)</option>
                                    <option value="901">901 (Unit Usaha Syariah (KC Syariah Bank Umum
                                        Konvensional))</option>
                                    <option value="800">800 (Pemerintah Pusat)</option>
                                    <option value="805">805 (Pemerintah Daerah)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Sandi
                                Bank</label>
                            <div class="col-sm-10">
                                <select name="sandi_bank" id="sandi_bank" class="form-select">
                                    <option value="002">002 (BANK RAKYAT INDONESIA)</option>
                                    <option value="008">008 (BANK MANDIRI)</option>
                                    <option value="009">009 (BANK BNI 1946)</option>
                                    <option value="076">076 (BANK BUMI ARTA)</option>
                                    <option value="701">701 (Bank Umum Syariah)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Lokasi
                                Kreditur</label>
                            <div class="col-sm-10">
                                <select name="lok_kreditur" id="lok_kreditur" class="form-select">
                                    <option value="0103">0103 (Kab. Purwakarta)</option>
                                    <option value="0106">0106 (Kab. Karawang)</option>
                                    <option value="0108">0108 (Kab. Bogor)</option>
                                    <option value="0109">0109 (Kab. Sukabumi)</option>
                                    <option value="0110">0110 (Kab. Cianjur)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Jenis</label>
                            <div class="col-sm-10">
                                <select name="jenis" id="jenis" class="form-select">
                                    <option value="20">20 (Pinjaman Sindikasi)</option>
                                    <option value="10">10 (Pinjaman Bilateral)</option>
                                    <option value="31">31 (Dari Lembaga Pengayom)</option>
                                    <option value="32">32 (Dalam rangka linkage)</option>
                                    <option value="41">41 (Diperhitungkan sebagai Modal Inti Tambahan
                                        dalam KPMM)</option>
                                    <option value="42">42 (Diperhitungkan sebagai Modal Pelengkap
                                        dalam KPMM (Pinjaman Subordinasi))</option>
                                    <option value="99">99 (Lainnya)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Hubungan
                                Dengan Bank</label>
                            <div class="col-sm-10">
                                <select name="hub_dengan_bank" id="hub_dengan_bank" class="form-select">
                                    <option value="12">12 (Terkait)</option>
                                    <option value="20">20 (Tidak Terkait)</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-12 col-form-label text-center" for="basic-default-name">Jangka
                                Waktu</label>
                            <hr>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal
                                Mulai</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" value="<?= date('Y-m-d', strtotime($api_hasil->tanggal_Mulai)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal
                                Jatuh Tempo</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggal_jatuh_tempo" name="tanggal_jatuh_tempo" value="<?= date('Y-m-d', strtotime($api_hasil->tanggal_jatuh_tempo)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-12 col-form-label text-center" for="basic-default-name">Suku Bunga</label>
                            <hr>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Persentase</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="persen" name="persen" value="<?= $api_hasil->persentase; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Cara
                                Perhitungan</label>
                            <div class="col-sm-10">
                                <select name="cara_perhitungan" id="cara_perhitungan" class="form-select">
                                    <option value="11">11 (Bunga flat Tetap)</option>
                                    <option value="12">12 (Bunga flat Mengambang)</option>
                                    <option value="21">21 (Bunga tidak flat Tetap)</option>
                                    <option value="22">22 (Bunga tidak flat Mengambang)</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Plafon</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="plafon" name="plafon" value="<?= $api_hasil->plafon; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Jenis Agunan
                                yang Dijaminkan</label>
                            <div class="col-sm-10">
                                <select name="jenis_agunan" id="jenis_agunan" class="form-select">
                                    <option value="102">102 (Likuid : Tabungan dan Deposito yang
                                        diblokir
                                        BPR bersangkutan disertai dengan surat kuasa pencairan)</option>
                                    <option value="103">103 (Likuid : Logam mulia yang disertai surat
                                        kuasa gadai)</option>
                                    <option value="201">201 (Non Likuid : Emas perhiasan)</option>
                                    <option value="202">202 (Non Likuid : Tanah dan/atau bangunan yang
                                        memiliki sertipikat yang dibebani hak tanggungan pertama)
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nominal
                                Agunan yang Dijaminkan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nominal_agunan_yang_dijaminkan" name="nominal_agunan_yang_dijaminkan" value="<?= $api_hasil->nominal_agunan_yang_dijaminkan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Baki
                                Debet</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="baki_debet" name="baki_debet" value="<?= $api_hasil->baki_debet; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Biaya
                                Transaksi Belum Diamortisasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="biaya_transaksi_belum_diamortisasi" name="biaya_transaksi_belum_diamortisasi" value="<?= $api_hasil->biaya_transaksi_belum_diamortisasi; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Diskonto
                                Belum Diamortisasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="diskonto_belum_diamortisasi" name="diskonto_belum_diamortisasi" value="<?= $api_hasil->diskonto_belum_diamortisasi; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Baki Debet
                                Neto</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="baki_debet_neto" name="baki_debet_neto" value="<?= $api_hasil->baki_debet_neto; ?>" />
                            </div>
                        </div>

                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Alasan
                                Edit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alasan_edit" name="alasan_edit" placeholder="Masukan alasan mengedit" />
                                <input type="hidden" class="form-control" id="id_0007" name="id_0007" value="<?= $api_hasil->id; ?>" />
                            </div>
                        </div>
                        <div class="row justify-content-end py-3">
                            <div class="col-sm-10">
                                <button type="button" id="btnEdit" onclick="edit()" class="btn btn-primary">Edit</button>
                                <a href="<?= base_url('apollo/form_report_isi_0007') ?>" class="btn btn-warning">Kembali</a>
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
                    messageTop: '[LOG Edit]APOLO - Form 00.07 List of Accepted Loans',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                    }
                },
                {
                    extend: 'excelHtml5',
                    messageTop: '[LOG Edit]APOLO - Form 00.07 List of Accepted Loans',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                    }
                },
                'colvis'
            ]
        });

        $("#jenis_agunan option[value='<?= $api_hasil->jenis_agunan_yang_dijaminkan; ?>']").prop('selected', true);
        $("#cara_perhitungan option[value='<?= $api_hasil->cara_perhitungan; ?>']").prop('selected', true);
        $("#hub_dengan_bank option[value='<?= $api_hasil->hubungan_dengan_bank; ?>']").prop('selected', true);
        $("#jenis option[value='<?= $api_hasil->jenis; ?>']").prop('selected', true);
        $("#lok_kreditur option[value='<?= $api_hasil->lokasi_kreditur; ?>']").prop('selected', true);
        $("#sandi_bank option[value='<?= $api_hasil->sandi_bank; ?>']").prop('selected', true);
        $("#gol_kreditur option[value='<?= $api_hasil->gol_kreditur; ?>']").prop('selected', true);
    });

    function edit() {
        $('#btnEdit').text('saving...'); //change button text
        $('#btnEdit').attr('disabled', true); //set button disable 
        var url;

        url = "<?php echo site_url('apollo/ajax_edit_0007') ?>";


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