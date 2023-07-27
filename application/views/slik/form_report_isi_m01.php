<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">SLIK /</span>
                Form Report / Form M01 -
                Key Management Data (non Individual Customer)</h4>
            <!-- Responsive Table -->
            <div class="card">
                <div class="container my-2">
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
                    <table id="table-res" class="table dt-responsive">
                        <thead>
                            <tr class="text-nowrap">
                                <th>ID number</th>
                                <th>Detail Flag</th>
                                <th>ID Card Number</th>
                                <th>Customer ID number</th>
                                <th>Identity number</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Village</th>
                                <th>Districts</th>
                                <th>Regency code</th>
                                <th>Position code</th>
                                <th>Share ownership percentage</th>
                                <th>Status</th>
                                <th>Branch</th>
                                <th>Operation data</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col-md-3">
                        <a href="<?= base_url('slik/exportDataToTxt_m01') ?>" class="btn rounded-pill btn-primary">Export to Txt
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
        table = $('#table-res').DataTable({
            processing: true,
            serverSide: true,
            order: [], //init datatable not ordering
            ajax: "<?php echo site_url('slik/table_m01') ?>",
            columnDefs: [{
                    targets: -1,
                    orderable: false
                }, //target -1 means last column
            ],
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copyHtml5',
                    messageTop: 'SLIK - Form K01 Non Individual Customers Financial Report Data',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16]
                    }
                },
                {
                    extend: 'excelHtml5',
                    messageTop: 'SLIK - Form K01 Non Individual Customers Financial Report Data',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16]
                    }
                },
                'colvis'
            ]
        });
    });

    function reload_table() {
        table.ajax.reload(null, false); //reload datatable ajax 
        $('#periode_date').val(null);
    }

    function save_periode() {
        $('#btnSeacrh').text('searching...'); //change button text
        $('#btnSeacrh').attr('disabled', true); //set button disable 
        var url;

        url = "<?php echo site_url('slik/ajax_periode_k01') ?>";


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
                    reload_table();
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
</script>