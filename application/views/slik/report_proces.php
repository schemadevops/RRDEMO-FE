<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">SLIK /</span>
                Report Process</h4>
            <!-- Responsive Table -->
            <div class="card">
                <form action="#" method="post">
                    <div class="row mt-3">
                        <label class="col-sm-3 col-form-label" for="basic-default-name">Periode
                            Data</label>
                        <div class="col-sm-6">
                            <input type="date" class="form-control" id="basic-default-name" placeholder="John Doe" />
                        </div>
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-primary">Process All</button>
                        </div>
                    </div>
                </form>
                <div class="table-responsive text-nowrap mt-4">
                    <table class="table">
                        <thead>
                            <tr class="text-nowrap">
                                <th>No</th>
                                <th>Form report</th>
                                <th>Choose date</th>
                                <th>Last report</th>
                                <th>Last process date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($api_hasil as $key) {
                                $no++;
                            ?>

                                <tr>
                                    <th scope="row"><?= $no; ?></th>
                                    <td><?= $key->name; ?></td>
                                    <td><input type="date" name="pilih_tgl" id="pilih_tgl_<?= $key->id; ?>" class="form-control" /></td>
                                    <?php
                                    if ($key->other != null) {
                                        $last_report = date('d-m-Y', strtotime($key->log_processes[0]->last_report));
                                        $last_process = date('d-m-Y', strtotime($key->log_processes[0]->last_process));
                                        $link_path = $key->other->path_process;
                                    } else {
                                        $last_report = "-";
                                        $last_process = "-";
                                        $link_path = "-";
                                    }
                                    ?>
                                    <input type="hidden" name="link_path" id="link_path_<?= $key->id; ?>" value="<?= $link_path; ?>">
                                    <td><?= $last_report; ?></td>
                                    <td><?= $last_process; ?></td>
                                    <td>
                                        <button type="button" onclick="process('<?= $key->id; ?>')" class="btn rounded-pill btn-primary">Process
                                        </button>
                                    </td>
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
<script>
    function process(id) {
        var pilih_tgl = $('#pilih_tgl_' + id).val();
        var link_path = $('#link_path_' + id).val();

        if (link_path != "-") {
            if (pilih_tgl != "") {
                var url = "<?= base_url('slik/ajax_process'); ?>";
                // ajax adding data to database

                $.ajax({
                    url: url,
                    type: "POST",
                    data: {
                        formid: id,
                        date: pilih_tgl,
                        link: link_path
                    },
                    dataType: "JSON",
                    success: function(data) {

                        if (data.status) //if success close modal and reload ajax table
                        {
                            Swal.fire(
                                'Success!',
                                'Your form as process',
                                'success'
                            )
                            window.setTimeout(function() {
                                window.location.href = '<?= base_url('slik/form_report'); ?>';
                            }, 1500);
                        } else {
                            Swal.fire(
                                'Sorryy!',
                                'Something wrong!!!',
                                'error'
                            )

                        }

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error adding / update data');
                    }
                });
            } else {
                Swal.fire(
                    'Sorryy!',
                    'Silahkan masukan tanggal proses!',
                    'warning'
                )
            }

        } else {
            Swal.fire(
                'Sorryy!',
                'Form ini belum bisa di process',
                'warning'
            )
        }

    }
</script>