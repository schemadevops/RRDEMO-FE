<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Slik /</span>
                Backup / Restore</h4>
            <div class="nav-align-top mb-4">
                <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-home" aria-controls="navs-pills-justified-home" aria-selected="true">
                            <i class='bx bxs-cloud-download'></i> Backup
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-profile" aria-controls="navs-pills-justified-profile" aria-selected="false">
                            <i class='bx bxs-cloud-upload'></i> Restore
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
                        <form id="form_backup">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="start_date">Start Date</label>
                                        <input type="date" class="form-control" name="start_date" id="start_date" placeholder="John Doe" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="end_date">End Date</label>
                                        <input type="date" class="form-control" name="end_date" id="end_date" placeholder="John Doe" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="end_date">Form</label>
                                        <select name="form_report" id="form_report" class="form-control">
                                            <?php
                                            $no = 0;
                                            foreach ($api_hasil as $key) {
                                            ?>
                                                <option value="<?= $key->id; ?>"><?= $key->name; ?></option>
                                            <?php };
                                            ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <br />
                                        <button type="button" id="btnBackup" onclick="save_backup()" class="btn rounded-pill btn-primary">Backup</button>
                                        <button type="submit" class="btn rounded-pill btn-secondary">Backup All</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive text-nowrap mt-4">
                            <table class="table">
                                <thead>
                                    <tr class="text-nowrap">
                                        <th>No</th>
                                        <th>Form Report</th>
                                        <th>Last Backup Data</th>
                                        <th>Backup Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $xno = 0;
                                    foreach ($api_hasil as $key) {
                                        $xno++;
                                        if (count($key->log_backups) == 0) {
                                            $last_backup = "-";
                                            $nm_backup = "-";
                                        } else {
                                            $last_backup = date('d-m-Y', strtotime($key->log_backups[0]->createdAt));;
                                            $nm_backup = $key->log_backups[0]->nm_bu;
                                        }
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $xno; ?></th>
                                            <td><?= $key->name; ?> </td>
                                            <td><?= $last_backup; ?> </td>
                                            <td><?= $nm_backup; ?></td>
                                            <td><button type="button" id="btn_view_backup" onclick="view_history_bu('<?= $key->id; ?>')" class="btn rounded-pill btn-primary">View
                                                    History</button>
                                            </td>
                                        </tr>
                                    <?php }; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="navs-pills-justified-profile" role="tabpanel">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label" for="start_date">Start Date</label>
                                            <input type="date" class="form-control" id="start_date" placeholder="John Doe" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label" for="end_date">End Date</label>
                                            <input type="date" class="form-control" id="end_date" placeholder="John Doe" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label" for="form_report">Form</label>
                                            <select name="form_report" id="form_report" class="form-control">
                                                <option value="1">Form 00.00 - BPR
                                                    Main
                                                    Information</option>
                                                <option value="2">Form 00.00 - BPR
                                                    Ownership Data</option>
                                                <option value="3">Form 00.00 - Data
                                                    Members of BoD and BoC of BPR</option>
                                                <option value="4">Form 00.00 - BPR
                                                    Implementator Member</option>
                                                <option value="5">Form 00.00 - BPR
                                                    Office Data</option>
                                                <option value="6">Form 00.00 - Other
                                                    Related Data</option>
                                                <option value="7">Form 00.00 - Paid
                                                    Capital, Donated Capital, Equity</option>
                                                <option value="8">Form 00.00 - Paid
                                                    Capital, Donated Capital, Equity</option>
                                                <option value="9">Form 00.00 - List
                                                    of Accepted Loans</option>
                                                <option value="10">Form 00.00 - Data
                                                    BoD/BoC who have stopped serving</option>
                                                <option value="11">Form 00.00 -
                                                    Implementing Organs (stop servis)</option>
                                                <option value="12">Form 00.00 - Cash
                                                    Office Data</option>
                                                <option value="13">Form 00.00 -
                                                    Balance Sheet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label" for="backup_ke">Backup ke?</label>
                                            <select name="backup_ke" id="backup_ke" class="form-control">
                                                <option value="1">Backup ke 1</option>
                                                <option value="2">Backup ke 2</option>
                                                <option value="3">Backup ke 3</option>
                                                <option value="4">Backup ke 4</option>
                                                <option value="5">Backup ke 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn rounded-pill btn-small btn-primary">Restore</button>
                                <button type="submit" class="btn rounded-pill btn-small btn-secondary">Restore All</button>
                            </div>
                        </div>
                        <div class="table-responsive text-nowrap mt-4">
                            <table class="table">
                                <thead>
                                    <tr class="text-nowrap">
                                        <th>No</th>
                                        <th>Form Report</th>
                                        <th>Last Restore Data</th>
                                        <th>Restore Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td> Form 00.00 - BPR
                                            Main
                                            Information
                                        </td>
                                        <td>01/03/2023 - 05:15</td>
                                        <td>APOLLO_00_0145822</td>
                                        <td><a href="#" class="btn rounded-pill btn-primary">View
                                                History</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Form 00.00 - BPR
                                            Ownership Data</td>
                                        <td>01/03/2023 - 05:15</td>
                                        <td>APOLLO_00_0145822</td>
                                        <td><a href="#" class="btn rounded-pill btn-primary">View
                                                History</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Form 00.00 - Data
                                            Members of BoD and BoC of BPR</td>
                                        <td>01/03/2023 - 05:15</td>
                                        <td>APOLLO_00_0145822</td>
                                        <td><a href="#" class="btn rounded-pill btn-primary">View
                                                History</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Form 00.00 - BPR
                                            Implementator Member</td>
                                        <td>01/03/2023 - 05:15</td>
                                        <td>APOLLO_00_0145822</td>
                                        <td><a href="#" class="btn rounded-pill btn-primary">View
                                                History</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Form 00.00 - BPR
                                            Office Data</td>
                                        <td>01/03/2023 - 05:15</td>
                                        <td>APOLLO_00_0145822</td>
                                        <td><a href="#" class="btn rounded-pill btn-primary">View
                                                History</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Form 00.00 - Other
                                            Related Data</td>
                                        <td>01/03/2023 - 05:15</td>
                                        <td>APOLLO_00_0145822</td>
                                        <td><a href="#" class="btn rounded-pill btn-primary">View
                                                History</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Form 00.00 - Paid
                                            Capital, Donated Capital, Equity</td>
                                        <td>01/03/2023 - 05:15</td>
                                        <td>APOLLO_00_0145822</td>
                                        <td><a href="#" class="btn rounded-pill btn-primary">View
                                                History</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Form 00.00 - List
                                            of Accepted Loans</td>
                                        <td>01/03/2023 - 05:15</td>
                                        <td>APOLLO_00_0145822</td>
                                        <td><a href="#" class="btn rounded-pill btn-primary">View
                                                History</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Form 00.00 -
                                            Quarterly Financial Rations</td>
                                        <td>01/03/2023 - 05:15</td>
                                        <td>APOLLO_00_0145822</td>
                                        <td><a href="#" class="btn rounded-pill btn-primary">View
                                                History</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td>Form 00.00 - Data
                                            BoD/BoC who have stopped serving</td>
                                        <td>01/03/2023 - 05:15</td>
                                        <td>APOLLO_00_0145822</td>
                                        <td><a href="#" class="btn rounded-pill btn-primary">View
                                                History</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td>Form 00.00 -
                                            Implementing Organs (stop servis)</td>
                                        <td>01/03/2023 - 05:15</td>
                                        <td>APOLLO_00_0145822</td>
                                        <td><a href="#" class="btn rounded-pill btn-primary">View
                                                History</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td>Form 00.00 - Cash
                                            Office Data</td>
                                        <td>01/03/2023 - 05:15</td>
                                        <td>APOLLO_00_0145822</td>
                                        <td><a href="#" class="btn rounded-pill btn-primary">View
                                                History</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">13</th>
                                        <td>Form 00.00 -
                                            Balance Sheet</td>
                                        <td>01/03/2023 - 05:15</td>
                                        <td>APOLLO_00_0145822</td>
                                        <td><a href="#" class="btn rounded-pill btn-primary">View
                                                History</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- / Navbar -->
</div>

<?php $this->view('temp/footer'); ?>
<script>
    function save_backup() {
        var start_date = $('#start_date').val()
        var end_date = $('#end_date').val()
        var form_report = $('#form_report').val()

        if (start_date != "" && end_date != "") {
            if (start_date > end_date) {
                Swal.fire(
                    'Sorryy!',
                    'Start date harus lebih dulu dari end date!',
                    'warning'
                )
            } else {
                var url = "<?= base_url('slik/ajax_backup'); ?>";
                // ajax adding data to database

                $.ajax({
                    url: url,
                    type: "POST",
                    data: {
                        start_date: start_date,
                        end_date: end_date,
                        form_report: form_report
                    },
                    dataType: "JSON",
                    success: function(data) {

                        if (data.status) //if success close modal and reload ajax table
                        {
                            Swal.fire(
                                'Success!',
                                'Your form as Backup',
                                'success'
                            )
                            window.setTimeout(function() {
                                location.reload();
                            }, 1500);
                        } else {
                            Swal.fire(
                                'Sorryy!',
                                data.isi,
                                'error'
                            )

                        }

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error adding / update data');
                    }
                });
            }

        } else {
            Swal.fire(
                'Sorryy!',
                'Silahkan masukan start date dan end date terlebih dahulu!!!',
                'warning'
            )
        }
    }

    function view_history_bu(id) {
        $.ajax({
            url: "<?php echo site_url('slik/view_history_backup/') ?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                if (data.status) {
                    $('#list_backup').empty()
                    $.each(data.isi, function(i, v) {
                        $('#list_backup').append(`
                        <button type="button" onclick="get_detail_bk('` + v.id + `')" class="list-group-item list-group-item-action">Backup ke ` + v.number + `</button>
                        `)

                    });
                    $('#modal_detail_backup').modal('show'); // show bootstrap modal when complete loaded
                    $('.modal-title').text('Detail Backup'); // Set title to Bootstrap modal title
                    $('#isi_detail_backup').hide()
                } else {
                    Swal.fire(
                        'Sorryy!',
                        'Belum ada data yang bisa ditampilkan',
                        'warning'
                    )
                }

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function get_detail_bk(id) {
        $.ajax({
            url: "<?php echo site_url('slik/detail_history_backup/') ?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                if (data.status) {
                    $('#table_list_backup').dataTable().fnClearTable();
                    $('#table_list_backup').dataTable().fnDestroy();

                    $('#isi_detail_backup').show();
                    $('#list_detail_backup').empty();
                    $.each(data.isi, function(i, v) {
                        $('#list_detail_backup').append(`
                        <tr>
                            <td>` + v.id + `</td>
                            <td>` + v.flag_detail + `</td>
                            <td>` + v.register_agunan + `</td>
                            <td>` + v.rekening + `</td>
                            <td>` + v.cif + `</td>
                            <td>` + v.segment_fasilitas + `</td>
                            <td>` + v.stts_agunan + `</td>
                            <td>` + v.jenis_agunan + `</td>
                            <td>` + v.peringkat + `</td>
                            <td>` + v.pemeringkat + `</td>
                            <td>` + v.jenis_ikat + `</td>
                            <td>` + v.tgl_ikat + `</td>
                            <td>` + v.pemilik_agunan + `</td>
                            <td>` + v.bukti_milik + `</td>
                            <td>` + v.alamat_agunan + `</td>
                            <td>` + v.data_agunan + `</td>
                            <td>` + v.nilai_agunan_njop + `</td>
                            <td>` + v.nilai_agunan_bank + `</td>
                            <td>` + v.tgl_penilaian_bank + `</td>
                            <td>` + v.nilai_agunan + `</td>
                            <td>` + v.nama_penilai + `</td>
                            <td>` + v.tgl_penilai + `</td>
                            <td>` + v.stts_paripasu + `</td>
                            <td>` + v.paripasu + `</td>
                            <td>` + v.stts_kredit_join + `</td>
                            <td>` + v.asuransi + `</td>
                            <td>` + v.keterangan + `</td>
                            <td>` + v.cabang + `</td>
                            <td>` + v.operation_stastus + `</td>
                            <td>` + v.createdAt + `</td>
                        </tr>
                        `);
                    });
                    $('#table_list_backup').DataTable({});

                } else {

                }

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });

    }
</script>
<!-- Modal -->
<div class="modal fade" id="modal_detail_backup" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLongTitle">Detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="demo-inline-spacing mt-3">
                    <div class="list-group" id="list_backup">
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action active">Bear claw cake biscuit</a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">Soufflé pastry pie ice</a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action disabled">Tart tiramisu cake</a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">Bonbon toffee muffin</a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">Dragée tootsie roll</a>
                    </div>
                </div>
                <hr>
                <div id="isi_detail_backup" class="table-responsive text-nowrap">
                    <table id="table_list_backup" class="table dt-responsive">
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
                            </tr>
                        </thead>
                        <tbody id="list_detail_backup">
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Tutup
                </button>

            </div>
        </div>
    </div>
</div>
<!-- Modal -->