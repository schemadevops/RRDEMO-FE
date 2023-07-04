<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Common /</span>
                User Management</h4>
            <div class="card mb-4">
                <!--<div class="card-header d-flex align-items-center justify-content-between">-->
                <!--    <h5 class="mb-0">Basic Layout</h5>-->
                <!--    <small class="text-muted float-end">Default label</small>-->
                <!--</div>-->
                <div class="card-body">
                    <form action="javascript:;" id="form_user">
                        <div class="row mb-3 mt-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe" value="Refi Ahmad" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="text" id="basic-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" value="refiahmad02@gmail.com" />
                                    <span class="input-group-text" id="basic-default-email2">@example.com</span>
                                </div>
                                <div class="form-text">You can use letters, numbers & periods</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Employee
                                ID</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc." value="114522" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Status</label>
                            <div class="col-sm-10">
                                <select name="status" id="status" class="form-select">
                                    <option value="1" selected>Admin</option>
                                    <option value="2">Report</option>
                                    <option value="3">Approval</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe" value="refiahmad" />
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary" onclick="save()">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- / Navbar -->
</div>

</div>
</div>

<!--<div class="buy-now">-->
<!--    <a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank"-->
<!--        class="btn btn-danger btn-buy-now">Upgrade to Pro</a>-->
<!--</div>-->


<?php $this->view('temp/footer'); ?>
<script>
    function save() {
        let timerInterval
        Swal.fire({
            title: 'Auto close alert!',
            html: 'Sedang menyimpan data dalam <b></b> milliseconds.',
            timer: 2000,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft()
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                Swal.fire(
                    'Berhasil',
                    'Data berhasil disimpan',
                    'success'
                )
                window.setTimeout(function() {
                    window.location.href = '<?= base_url('common/user_management') ?>';
                }, 1500);
            }
        })
    }
</script>
</body>

</html>