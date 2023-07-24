<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout & Basic with Icons -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Apolo /</span>
                Form Report/ Form 00.00</h4>
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header">Form 00.00</h5>
                <div class="container mb-3 py-3">
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name">Periode
                                Data</label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="basic-default-name" placeholder="John Doe" />
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
                                <th>Nama BPR </th>
                                <th>Alamat BPR </th>
                                <th>Kabupaten/Kota BPR </th>
                                <th>Wilayah Kerja OJK </th>
                                <th>No. Telepon </th>
                                <th>E-mail </th>
                                <th>Situs Web BPR </th>
                                <th>NPWP </th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($api_hasil->data as $key) {
                                $no++;
                            ?>
                                <tr>
                                    <th scope="row"><?= $no; ?></th>
                                    <td><?= $key->databpr->name; ?></td>
                                    <td><?= $key->databpr->alamat; ?></td>
                                    <td><?= $key->databpr->kabupaten_kota; ?></td>
                                    <td><?= $key->databpr->wilayah_kerja_ojk; ?></td>
                                    <td><?= $key->databpr->telp; ?></td>
                                    <td><?= $key->databpr->email; ?></td>
                                    <td><?= $key->databpr->web; ?></td>
                                    <td><?= $key->databpr->npwp; ?></td>
                                    <td>
                                        <a href="<?= base_url('apollo/form_report_edit_00/' . $key->id); ?>" class="btn rounded-pill btn-primary"><i class='bx bx-edit-alt'></i>
                                        </a>
                                        <button type="button" class="btn rounded-pill btn-info" onclick="detail('<?= $key->id; ?>')">
                                            <i class='bx bxs-detail'></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php };
                            ?>



                        </tbody>
                    </table>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col-md-3">
                        <a href="#" class="btn rounded-pill btn-primary my-2">Export to Excel
                        </a>
                        <a href="#" class="btn rounded-pill btn-primary my-2">Export to Txt
                        </a>
                    </div>
                    <div class="col-md-6">
                        ;&nbsp
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" />
                            <button class="btn rounded-pill btn-primary" type="button" id="inputGroupFileAddon04">Import</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--/ Responsive Table -->
        </div>
    </div>
    <!-- / Navbar -->
</div>

<!-- Modal -->
<div class="modal fade" id="modal_detail" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLongTitle">Detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row mb-3 mt-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Nama
                            BPR</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" readonly id="nama_bpr" placeholder="John Doe" value="PT. BPR Dummy" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">Alamat
                            BPR
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" readonly id="alamat_bpr" value="Jalan XXX No. 99" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Kabupaten/Kota BPR
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" readonly id="kabkota" placeholder="John Doe" value="6102 (Kab. Gowa)                                                    " />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Wilayah
                            Kerja OJK
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" readonly id="wilayah_ojk" placeholder="John Doe" value="011 (Kantor Regional 1 DKI Jakarta dan Banten)
                                        " />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">No. Telepon
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" readonly id="no_telp" placeholder="John Doe" value="(021) 123456789
                                        " />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">E-mail
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" readonly id="email_bpr" placeholder="John Doe" value="email@email.com
                                        " />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Situs Web
                            BPR
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" readonly id="web_bpr" placeholder="John Doe" value="http://bprs.com
                                        " />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">NPWP
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" readonly id="npwp_bpr" placeholder="John Doe" value="123456789.0-1
                                        " />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label class="col-sm-12 col-form-label text-center" for="basic-default-name">Penanggung
                                    Jawab Penyusun Laporan
                                </label>
                                <hr>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label" for="basic-default-name">A. Nama
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control-plaintext" readonly id="basic-default-name" placeholder="John Doe" value="Nama Penyusun Laporan" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label" for="basic-default-name">
                                    B. Bagian/Divisi
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control-plaintext" readonly id="basic-default-name" placeholder="John Doe" value="Divisi Pelaporan" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label" for="basic-default-name">
                                    C. No. Telepon
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control-plaintext" readonly id="basic-default-name" placeholder="John Doe" value="(021) 123456789" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label" for="basic-default-name">
                                    D. E-mail
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control-plaintext" readonly id="basic-default-name" placeholder="John Doe" value="email@email.com" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label class="col-sm-12 col-form-label text-center" for="basic-default-name">
                                    Dividen yang Dibayar
                                </label>
                                <hr>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label" for="basic-default-name">
                                    A. Nominal
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control-plaintext" readonly id="basic-default-name" placeholder="John Doe" value="2000000" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label" for="basic-default-name">
                                    B. Tahun RUPS/RAT
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control-plaintext" readonly id="basic-default-name" placeholder="John Doe" value="2018" />
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">
                            Bonus Tahunan dan Tantiem
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" readonly id="basic-default-name" placeholder="John Doe" value="2000000" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label class="col-sm-12 col-form-label text-center" for="basic-default-name">
                                    Informasi Audit Laporan Tahunan
                                </label>
                                <hr>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label" for="basic-default-name">
                                    A. Nama Kantor Akuntan Publik (KAP) yang mengaudit
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control-plaintext" readonly id="basic-default-name" value="" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label" for="basic-default-name">
                                    B. Nama AP yang menandatangani laporan audit
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control-plaintext" readonly id="basic-default-name" value="" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label" for="basic-default-name">
                                    C. Pemeriksaan ke...... Dari KAP yang sama
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control-plaintext" readonly id="basic-default-name" value="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label class="col-sm-12 col-form-label" for="basic-default-name">
                                    Pedagang Valuta Asing (PVA)
                                </label>
                                <hr>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label" for="basic-default-name">
                                    A. Memiliki Izin PVA
                                </label>
                                <div class="col-sm-8">
                                    1 (Ya)
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label" for="basic-default-name">
                                    B. Tanggal Izin PVA
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control-plaintext" readonly id="basic-default-name" value="20101231" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label" for="basic-default-name">
                                    C. Jumlah PVA
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control-plaintext" readonly id="basic-default-name" value="5" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label" for="basic-default-name">
                            Nilai Nominal per Lembar Saham
                        </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control-plaintext" readonly id="basic-default-name" value="1000000" />
                        </div>
                    </div>



                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label" for="basic-default-name">
                            Memiliki/Tidak Memiliki Layanan Perbankan Elektronik (E-Banking)
                        </label>
                        <div class="col-sm-8">
                            1 (Ya)
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">
                            Nama Ultimate Shareholder 1
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" readonly id="basic-default-name" value="Nama Shareholder" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">
                            Nama Ultimate Shareholder 2
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" readonly id="basic-default-name" value="Nama Shareholder" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">
                            Nama Ultimate Shareholder 3
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" readonly id="basic-default-name" value="Nama Shareholder" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">
                            Nama Ultimate Shareholder 4
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" readonly id="basic-default-name" value="Nama Shareholder" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">
                            Nama Ultimate Shareholder 5
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" readonly id="basic-default-name" value="Nama Shareholder" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">
                            Nama Ultimate Shareholder 6
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" readonly id="basic-default-name" value="Nama Shareholder" />
                        </div>
                    </div>
                </form>
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

<?php $this->view('temp/footer'); ?>

<script>
    function detail(id) {
        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('apollo/detail_form_00') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                if (data.status) {
                    $.each(data.data.data.databpr, function(i, v) {
                        console.log(v.name);
                        $('#nama_bpr').val(v.name);
                        $('#alamat_bpr').val(v.alamat);
                        $('#kabkota').val(v.kabupaten_kota);
                        $('#wilayah_ojk').val(v.wilayah_kerja_ojk);
                        $('#no_telp').val(v.telp);
                        $('#email_bpr').val(v.email);
                        $('#web_bpr').val(v.web);
                        $('#npwp_bpr').val(v.npwp);
                    });
                    $('#modal_detail').modal('show'); // show bootstrap modal when complete loaded
                    $('.modal-title').text('Detail Pengajuan'); // Set title to Bootstrap modal title

                }

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }
</script>