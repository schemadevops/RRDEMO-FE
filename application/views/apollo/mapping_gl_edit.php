<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Apolo /</span>
                Mapping GL</h4>
            <!-- Responsive Table -->
            <div class="card ">
                <form class="mt-3" action="mapping_gl.html">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">COA
                            Number</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" value="100" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">COA Header
                            Number</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-company" value="1" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">COA
                            Description</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" value="Asset" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">COA
                            Group</label>
                        <div class="col-sm-10">
                            <select name="coa_group" id="coa_group" class="form-select">
                                <option value="1" selected>Asset</option>
                                <option value="1">Group 1</option>
                                <option value="1">Group 2</option>
                                <option value="1">Group 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Apolo
                            Code</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" value="1010001" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Apolo
                            Child Code</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" value="1010001" />
                        </div>
                    </div>
                    <div class="row justify-content-end mb-3">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--/ Responsive Table -->
        </div>
    </div>
    <!-- / Navbar -->
</div>

<?php $this->view('temp/footer'); ?>