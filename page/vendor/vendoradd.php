<section class="content-header">
    <h1>Vendor</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a>Vendor</a></li>
    </ol>
</section>
<section class="content container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Vendor</b> | Tambah</h3>
                </div>

                <div class="box-body">
                <form action="?page=vendoraddpro" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>No Kontrak</label>
                                <input type="text" class="form-control" name="no_kontrak" placeholder="masukkan nomer kontrak ..." required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nama Vendor</label>
                                <input type="text" class="form-control" name="nama_vendor" placeholder="masukkan nama vendor ..." required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Uraian Kegiatan</label>
                                <textarea class="form-control" name="uraian_kegiatan" placeholder="masukkan NIK sesuai KTP ..." required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row"> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Mulai</label>
                                        <input type="text" class="form-control" id="datepicker" name="tanggal_mulai" placeholder="tanggal mulai ..." autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Selesai</label>
                                        <input type="text" class="form-control" id="datepicker2" name="tanggal_selesai" placeholder="tanggal selesai ..." autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nilai Kontrak SPJ/SPK</label>
                                <input type="number" min="0" class="form-control" name="nilai_kontrakspj" placeholder="masukkan nilai kontrak spj/pjk ..." required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nilai Kontrak Akhir/AMD</label>
                                <input type="number" min="0" class="form-control" name="nilai_kontrak_akhir" placeholder="masukkan nilai kontrak akhir/amd ..." required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Progress Pekerjaan</label>
                                <input type="number" min="0" class="form-control" name="progress_pekerjaan" placeholder="masukkan nilai progress pekerjaan ..." required>
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

