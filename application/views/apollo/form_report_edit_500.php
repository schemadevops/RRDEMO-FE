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

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Sandi Bank</label>
                            <div class="col-sm-10">
                                <select name="sandi_bank" id="sandi_bank" class="form-select">
                                    <option value="002">002 (BANK RAKYAT INDONESIA)</option>
                                    <option value="008">008 (BANK MANDIRI)</option>
                                    <option value="600930">600930 (PT. BPR Benua Kraksaan)</option>
                                    <option value="620034">620034 (PT BPRS Muamalah Cilegon)</option>
                                    <option value="601744">601744 (PT. BPR Artha Wiwaha Arjuna)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Lokasi Bank</label>
                            <div class="col-sm-10">
                                <select name="lokasi_bank" id="lokasi_bank" class="form-select">
                                    <option value="3302">3302 (Kab. Langkat)</option>
                                    <option value="3303">3303 (Kab. Karo)</option>
                                    <option value="3304">3304 (Kab. Simalungun)</option>
                                    <option value="3305">3305 (Kab. Labuhan Batu)</option>
                                    <option value="3306">3306 (Kab. Asahan)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Jenis</label>
                            <div class="col-sm-10">
                                <select name="jenis" id="jenis" class="form-select">
                                    <option value="10">10 (Giro)</option>
                                    <option value="20">20 (Tabungan Umum)</option>
                                    <option value="25">25 (Tabungan Khusus pada Lembaga Pengayom)
                                    </option>
                                    <option value="35">35 (Deposito Khusus pada Lembaga Pengayom)
                                    </option>
                                    <option value="40">40 (Sertifikat Deposito) </option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Hubungan dengan Bank</label>
                            <div class="col-sm-10">
                                <select name="hubungan_bank" id="hubungan_bank" class="form-select">
                                    <option value="12">12 (Terkait)</option>
                                    <option value="20">20 (Tidak Terkait) </option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-12 col-form-label text-center">Jangka Waktu</label>
                            <hr>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tanggal Mulai</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_mulai)); ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tanggal Jatuh Tempo</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_jatuh_tempo" name="tgl_jatuh_tempo" value="<?= date('Y-m-d', strtotime($api_hasil->tgl_jatuh_tempo)); ?>" />
                            </div>
                        </div>

                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Kualitas</label>
                            <div class="col-sm-10">
                                <select name="kualitas" id="kualitas" class="form-select">
                                    <option value="1">1 (Lancar)</option>
                                    <option value="3">3 (Kurang Lancar)</option>
                                    <option value="5">5 (Macet)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Suka Bunga</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="suku_bunga" name="suku_bunga" value="<?= $api_hasil->suku_bunga; ?>" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $api_hasil->jumlah; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nominal yang
                                Diblokir/Dijaminkan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nominal_dijaminkan" name="nominal_dijaminkan" value="<?= $api_hasil->nominal_dijaminkan; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Alasan Diblokir</label>
                            <div class="col-sm-10">
                                <select name="alasan_diblokir" id="alasan_diblokir" class="form-select">
                                    <option value="01">01 (Escrow Account)</option>
                                    <option value="02">02 (Cash Collateral)</option>
                                    <option value="99">99 (Alasan Diblokir Lainnya) </option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">PPAP yang Telah Dibentuk</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="ppap_yang_terbentuk" name="ppap_yang_terbentuk" value="<?= $api_hasil->ppap_yang_terbentuk; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Pendapatan Bunga yang Akan
                                Diterima</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pendapatan_bunga_diteima" name="pendapatan_bunga_diteima" value="<?= $api_hasil->pendapatan_bunga_diteima; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Pendapatan Bunga dalam
                                Penyelesaian</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pendapatan_bunga_penyelesaian" name="pendapatan_bunga_penyelesaian" value="<?= $api_hasil->pendapatan_bunga_penyelesaian; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Status BMPK Individu</label>
                            <div class="col-sm-10">
                                <select name="status_bmpk" id="status_bmpk" class="form-select">
                                    <option value="00">00 (Tidak Melanggar dan Tidak Melampaui)
                                    </option>
                                    <option value="11">11 (Melanggar Individu)</option>
                                    <option value="21">21 (Melampaui Individu)</option>
                                </select>
                            </div>
                        </div>

                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Alasan
                                Edit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alasan_edit" name="alasan_edit" placeholder="Masukan alasan mengedit" />
                                <input type="hidden" class="form-control" id="id_0500" name="id_0500" value="<?= $api_hasil->id; ?>" />
                            </div>
                        </div>
                        <div class="row justify-content-end py-3">
                            <div class="col-sm-10">
                                <button type="button" id="btnEdit" onclick="edit()" class="btn btn-primary">Edit</button>
                                <a href="<?= base_url('apollo/form_report_isi_0500') ?>" class="btn btn-warning">Kembali</a>
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
                    messageTop: '[LOG Edit]APOLO - Form 05.00 - List of Placement in Other Banks',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                    }
                },
                {
                    extend: 'excelHtml5',
                    messageTop: '[LOG Edit]APOLO - Form 05.00 - List of Placement in Other Banks',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                    }
                },
                'colvis'
            ]
        });
        $("#status_bmpk option[value='<?= $api_hasil->status_bmpk; ?>']").prop('selected', true);
        $("#alasan_diblokir option[value='<?= $api_hasil->alasan_diblokir; ?>']").prop('selected', true);
        $("#kualitas option[value='<?= $api_hasil->kualitas; ?>']").prop('selected', true);
        $("#hubungan_bank option[value='<?= $api_hasil->hubungan_bank; ?>']").prop('selected', true);
        $("#jenis option[value='<?= $api_hasil->jenis; ?>']").prop('selected', true);
        $("#lokasi_bank option[value='<?= $api_hasil->lokasi_bank; ?>']").prop('selected', true);
        $("#sandi_bank option[value='<?= $api_hasil->sandi_bank; ?>']").prop('selected', true);
    });

    function edit() {
        $('#btnEdit').text('saving...'); //change button text
        $('#btnEdit').attr('disabled', true); //set button disable 
        var url;

        url = "<?php echo site_url('apollo/ajax_edit_0500') ?>";

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