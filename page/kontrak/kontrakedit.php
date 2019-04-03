<section class="content-header">
    <h1>Kontrak</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a>Kontrak</a></li>
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
                    <h3 class="box-title"><b>Kontrak</b> | Edit</h3>
                </div>

                <div class="box-body">
                <form action="?page=kontrakeditpro" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No Kontrak</label>
                                <input type="hidden" name="id_vendor" value="<?= $data['id_vendor'] ?>">
                                <input type="text" class="form-control" name="no_kontrak" placeholder="masukkan nomer kontrak ..." value="<?= $data['no_kontrak'] ?>" readonly required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Vendor</label>
                                <input type="text" class="form-control" name="nama_vendor" placeholder="masukkan nama vendor ..." value="<?= $data['nama_vendor'] ?>" readonly required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email Vendor</label>
                                <input type="email" class="form-control" name="email_vendor" placeholder="masukkan email vendor ..." value="<?= $data['email_vendor'] ?>" readonly required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Uraian Kegiatan</label>
                                <textarea class="form-control" name="uraian_kegiatan" placeholder="masukkan NIK sesuai KTP ..." readonly required><?= $data['uraian'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email Ops 1</label>
                                <input type="email" class="form-control" name="email_ops1" placeholder="masukkan email vendor ..." value="<?= $data['email_ops1'] ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email Ops 2</label>
                                <input type="email" class="form-control" name="email_ops2" placeholder="masukkan email vendor ..." value="<?= $data['email_ops2'] ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row"> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Mulai</label>
                                        <input type="text" class="form-control" name="tanggal_mulai" placeholder="tanggal mulai ..." value="<?= date('m/d/Y', strtotime($data['tanggal_mulai'])) ?>" autocomplete="off" readonly required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Selesai</label>
                                        <input type="text" class="form-control datepicker" name="tanggal_selesai" placeholder="tanggal selesai ..." value="<?= date('m/d/Y', strtotime($data['tanggal_selesai'])) ?>" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nilai Kontrak SPJ/SPK</label>
                                <input type="number" min="0" class="form-control" name="nilai_kontrakspj" placeholder="masukkan nilai kontrak spj/pjk ..." value="<?= $data['nilai_kontrak_spj_spk'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nilai Kontrak Akhir/AMD</label>
                                <input type="number" min="0" class="form-control" name="nilai_kontrak_akhir" placeholder="masukkan nilai kontrak akhir/amd ..." value="<?= $data['nilai_kontrak_akhir_amd'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Penagihan</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row"> 
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="text" class="form-control datepicker" name="penagihan_tanggal" placeholder="tanggal mulai ..." autocomplete="off" value="<?= date('m/d/Y', strtotime($data['penagihan_tanggal'])) ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>Rupiah</label>
                                        <input type="number" min="0" class="form-control" name="penagihan_rupiah" placeholder="masukkan nominal ..." autocomplete="off" value="<?= $data['penagihan_rupiah'] ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pembayaran</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row"> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Rupiah</label>
                                        <input type="number" min="0" class="form-control" name="pembayaran_rupiah" placeholder="masukkan nominal ..." autocomplete="off" value="<?= $data['pembayaran_rupiah'] ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Progress Pekerjaan</label>
                                <input type="number" min="0" class="form-control" name="progress_pekerjaan" placeholder="masukkan nilai progress pekerjaan ..." value="<?= $data['progress_pekerjaan'] ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?php if ($data['kirim_notif'] == 1 || $data['kirim_notif_langsung'] == 1){ ?>
                            <div class="callout callout-success">
                                <span class="fa fa-check"></span> Notifikasi sudah terkirim ke email.
                            </div>
                            <?php } else { ?>
                            <div class="callout callout-danger">
                                <span class="fa fa-remove"></span> Notifikasi belum terkirim ke email.
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <input type="submit" name="submit" class="btn btn-success" value="Simpan">
                    <a href="?page=kontrak" class="btn btn-danger">Kembali</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>

