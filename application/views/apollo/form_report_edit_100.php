<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Apolo /</span>
                Form Report/ Form 01.00</h4>
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header">Form 01.00</h5>
                <div class="container mb-3">
                    <form>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label">Include Text</label>
                            <div class="col-sm-10">
                                <select name="pilih" id="" class="form-select">
                                    <option value="00">Y</option>
                                    <option value="01">T</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Sandi Kantor</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-company" value="111111111111111" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Pos</label>
                            <div class="col-sm-10">
                                <select name="pilih" id="" class="form-select">
                                    <option value="00">Kas dalam Rupiah </option>
                                    <option value="01">Kas dalam Valuta Asing</option>
                                    <option value="01">Surat Berharga </option>
                                    <option value="01">Penempatan pada Bank Lain </option>
                                    <option value="01">
                                        -/- Penyisihan Penghapusan Aset Produktif
                                    </option>
                                    <option value="01">Kredit yang Diberikan (Baki Debet)</option>
                                    <option value="01">
                                        -/- Provisi yang belum diamortisasi
                                    </option>
                                    <option>Biaya Transaksi yang belum diamortisasi</option>
                                    <option>Biaya Transaksi yang belum diamortisasi</option>
                                    <option value="01">
                                        -/- Pendapatan Bunga yang Ditangguhkan dalam rangka
                                        restrukturisasi
                                    </option>
                                    <option value="01">
                                        -/- Cadangan Kerugian Restrukturisasi
                                    </option>
                                    <option value="01">
                                        -/- Penyisihan Penghapusan Aset Produktif
                                    </option>
                                    <option value="">Agunan yang diambil alih</option>
                                    <option value="">Aset Tetap dan Inventaris </option>
                                    <option value="01">
                                        -/- Akumulasi Penyusutan dan Penurunan Nilai
                                    </option>
                                    <option value="">Aset Tidak Berwujud</option>
                                    <option value="01">
                                        -/- Akumulasi Amortisasi dan Penurunan Nilai
                                    </option>
                                    <option value="">Aset Antarkantor</option>
                                    <option value="">Aset Lainnya </option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Sandi Pos</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-company" value="1000" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-company" value="10000" />
                            </div>
                        </div>

                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Alasan
                                Edit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name" placeholder="Masukan alasan mengedit" />
                            </div>
                        </div>
                        <div class="row justify-content-end py-3">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="table-responsive text-nowrap">
                    <table class="table">
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
                            <tr>
                                <th scope="row">1</th>
                                <td>02/02/2023 07:45:51</td>
                                <td>Sandi</td>
                                <td>0501178595622254</td>
                                <td>0101118522148852</td>
                                <td>text</td>
                                <td>Refi Ahmad</td>
                                <td>Putri Amalia</td>
                                <td>
                                    <a href="#" class="btn rounded-pill btn-success">Approve
                                    </a>
                                </td>
                                <td>02/02/2023 07:45:51</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>02/02/2023 07:45:51</td>
                                <td>Jumlah</td>
                                <td>55000</td>
                                <td>45000</td>
                                <td>text</td>
                                <td>Refi Ahmad</td>
                                <td>Putri Amalia</td>
                                <td>
                                    <a href="#" class="btn rounded-pill btn-warning">Waiting
                                    </a>
                                </td>
                                <td>02/02/2023 07:45:51</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col-md-3">
                        <a href="#" class="btn rounded-pill btn-primary">Export to Excel
                        </a>
                        <a href="#" class="btn rounded-pill btn-primary">Export to Txt
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