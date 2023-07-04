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
                <div class="card-body mt-4">
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name: Refi Ahmad</th>
                                    <th>E-mail: refiahmad2@gmail.com</th>
                                    <th>Username: refiahmad</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3">
                                        <h4><strong>Common</strong></h4>
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Parameter
                                                <span>
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                </span>
                                            </li>
                                            <li class="list-group-item ">
                                                User Management
                                                <ul class="list-group">
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        Add User
                                                        <span>
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        </span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        Edit User
                                                        <span>
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        </span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        Remove User
                                                        <span>
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        </span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        Edit Access
                                                        <span>
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        </span>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Module Dokumen
                                                <span>
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                </span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Import Staging Data
                                                <span>
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                </span>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-10">
                            &nbsp;
                        </div>
                        <div class="col-sm-2 text-right">
                            <button type="submit" class="btn btn-secondary" onclick="save()">Cancel</button>
                            <button type="submit" class="btn btn-primary" onclick="save()">Submit</button>
                        </div>
                    </div>
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
            html: 'I will close in <b></b> milliseconds.',
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
                    window.location.href = 'user_management.html';
                }, 1500);
            }
        })
    }
</script>
</body>

</html>