<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Apolo /</span>
                Mapping GL</h4>
            <!-- Responsive Table -->
            <div class="card">
                <div class="container mb-3 mt-3">
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name">Keyword</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe" />
                            </div>
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr class="text-nowrap">
                                <th>No</th>
                                <th>COA</th>
                                <th>COA Header Number</th>
                                <th>COA Desc</th>
                                <th>COA Group</th>
                                <th>Apolo Code</th>
                                <th>Apolo Child Code</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>100</td>
                                <td>1</td>
                                <td>Asset</td>
                                <td>Asset</td>
                                <td>1010001</td>
                                <td>1010001</td>
                                <td>
                                    <a href="mapping_gl_edit.html" class="btn rounded-pill btn-info">
                                        <i class='bx bx-edit-alt'></i>Edit
                                    </a>
                                    <a href="#" class="btn rounded-pill btn-danger">
                                        <i class='bx bx-trash-alt'></i>Hapus
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>1001</td>
                                <td>100</td>
                                <td>Cash Teller</td>
                                <td>Asset</td>
                                <td>101000101</td>
                                <td>10100010111</td>
                                <td>
                                    <a href="mapping_gl_edit.html" class="btn rounded-pill btn-info">
                                        <i class='bx bx-edit-alt'></i>Edit
                                    </a>
                                    <a href="#" class="btn rounded-pill btn-danger">
                                        <i class='bx bx-trash-alt'></i>Hapus
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>1002</td>
                                <td>102</td>
                                <td>Cash ATM</td>
                                <td>Asset</td>
                                <td>101000112</td>
                                <td>101000111</td>
                                <td>
                                    <a href="mapping_gl_edit.html" class="btn rounded-pill btn-info">
                                        <i class='bx bx-edit-alt'></i>Edit
                                    </a>
                                    <a href="#" class="btn rounded-pill btn-danger">
                                        <i class='bx bx-trash-alt'></i>Hapus
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>100201</td>
                                <td>102</td>
                                <td>Cash ATM1</td>
                                <td>Asset</td>
                                <td>101000101</td>
                                <td>101000105</td>
                                <td>
                                    <a href="mapping_gl_edit.html" class="btn rounded-pill btn-info">
                                        <i class='bx bx-edit-alt'></i>Edit
                                    </a>
                                    <a href="#" class="btn rounded-pill btn-danger">
                                        <i class='bx bx-trash-alt'></i>Hapus
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>100202</td>
                                <td>1002</td>
                                <td>Cash ATM2</td>
                                <td>Asset</td>
                                <td>1010001112</td>
                                <td>1010001102</td>
                                <td>
                                    <a href="mapping_gl_edit.html" class="btn rounded-pill btn-info">
                                        <i class='bx bx-edit-alt'></i>Edit
                                    </a>
                                    <a href="#" class="btn rounded-pill btn-danger">
                                        <i class='bx bx-trash-alt'></i>Hapus
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col-md-3">
                        <a href="mapping_gl_add.html" class="btn rounded-pill btn-primary">+ Add Mapping
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