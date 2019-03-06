<section class="content-header">
    <h1>Vendor</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a>Vendor</a></li>
    </ol>
</section>
<?php 

$query = mysqli_query($conn, "SELECT * FROM tbl_vendor WHERE id_vendor=$_GET[id]");
$data = mysqli_fetch_array($query)
?>
<section class="content container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Vendor</b> | Edit</h3>
                </div>

                <div class="box-body">
                <form action="?page=vendoreditpro" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>No Kontrak</label>
                                <input type="hidden" name="id_vendor" value="<?= $data['id_vendor'] ?>">
                                <input type="text" class="form-control" name="no_kontrak" placeholder="masukkan nomer kontrak ..." value="<?= $data['no_kontrak'] ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nama Vendor</label>
                                <input type="text" class="form-control" name="nama_vendor" placeholder="masukkan nama vendor ..." value="<?= $data['nama_vendor'] ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email Vendor</label>
                                <input type="email" class="form-control" name="email_vendor" placeholder="masukkan email vendor ..." value="<?= $data['email_vendor'] ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Uraian Kegiatan</label>
                                <textarea class="form-control" name="uraian_kegiatan" placeholder="masukkan NIK sesuai KTP ..." required><?= $data['uraian'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row"> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Mulai</label>
                                        <input type="text" class="form-control" id="datepicker" name="tanggal_mulai" placeholder="tanggal mulai ..." value="<?= date('m/d/Y', strtotime($data['tanggal_mulai'])) ?>" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Selesai</label>
                                        <input type="text" class="form-control" id="datepicker2" name="tanggal_selesai" placeholder="tanggal selesai ..." value="<?= date('m/d/Y', strtotime($data['tanggal_selesai'])) ?>" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nilai Kontrak SPJ/SPK</label>
                                <input type="number" min="0" class="form-control" name="nilai_kontrakspj" placeholder="masukkan nilai kontrak spj/pjk ..." value="<?= $data['nilai_kontrak_spj_spk'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nilai Kontrak Akhir/AMD</label>
                                <input type="number" min="0" class="form-control" name="nilai_kontrak_akhir" placeholder="masukkan nilai kontrak akhir/amd ..." value="<?= $data['nilai_kontrak_akhir_amd'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Progress Pekerjaan</label>
                                <input type="number" min="0" class="form-control" name="progress_pekerjaan" placeholder="masukkan nilai progress pekerjaan ..." value="<?= $data['progress_pekerjaan'] ?>" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <input type="submit" name="submit" class="btn btn-success" value="Simpan">
                    <a href="?page=vendor" class="btn btn-danger">Kembali</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>

