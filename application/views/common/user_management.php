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
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Keyword</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc." />
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </div>
                        </div>
                    </form>
                    <a href="<?= base_url('common/user_management_tambah'); ?>" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
            <!-- Responsive Table -->
            <div class="card">
                <!--<h5 class="card-header">Responsive Table</h5>-->
                <div class="table-responsive text-nowrap mt-4">
                    <table class="table">
                        <thead>
                            <tr class="text-nowrap">
                                <th>No</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Access</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Refi Ahmad</td>
                                <td>refiahmad</td>
                                <td>refiahmad2@gmail.com</td>
                                <td>Report</td>
                                <td>
                                    <a href="<?= base_url('common/user_management_access'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>Edit
                                        Access
                                    </a>
                                </td>
                                <td>
                                    <a href="<?= base_url('common/user_management_edit'); ?>" class="btn rounded-pill btn-info">
                                        <i class='bx bx-edit-alt'></i>Edit User
                                    </a>
                                    <a href="javascript:;" onclick="hapus_user()" class="btn rounded-pill btn-danger">
                                        <i class='bx bx-trash-alt'></i>Hapus User
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Refi Ahmad</td>
                                <td>refiahmad</td>
                                <td>refiahmad2@gmail.com</td>
                                <td>Admin</td>
                                <td>
                                    <a href="<?= base_url('common/user_management_access'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>Edit
                                        Access
                                    </a>
                                </td>
                                <td>
                                    <a href="<?= base_url('common/user_management_edit'); ?>" class="btn rounded-pill btn-info">
                                        <i class='bx bx-edit-alt'></i>Edit User
                                    </a>
                                    <a href="javascript:;" onclick="hapus_user()" class="btn rounded-pill btn-danger">
                                        <i class='bx bx-trash-alt'></i>Hapus User
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Refi Ahmad</td>
                                <td>refiahmad</td>
                                <td>refiahmad2@gmail.com</td>
                                <td>Approval</td>
                                <td>
                                    <a href="<?= base_url('common/user_management_access'); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>Edit
                                        Access
                                    </a>
                                </td>
                                <td>
                                    <a href="<?= base_url('common/user_management_edit'); ?>" class="btn rounded-pill btn-info">
                                        <i class='bx bx-edit-alt'></i>Edit User
                                    </a>
                                    <a href="javascript:;" onclick="hapus_user()" class="btn rounded-pill btn-danger">
                                        <i class='bx bx-trash-alt'></i>Hapus User
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Responsive Table -->
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
    function hapus_user() {
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'User berhasil dihapus.',
                    'success'
                )
            }
        })
    }
</script>