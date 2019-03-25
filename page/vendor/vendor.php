<section class="content-header">
    <h1>Vendor</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a>Vendor</a></li>
    </ol>
</section>
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Vendor</b> | Notifikasi</h3>
                </div>
                <div class="box-body">
                    <?php
                        $sum        = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM tbl_vendor"));
                        $sudahkirim = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM tbl_vendor WHERE kirim_notif<>0"));
                        $count = @round((($sudahkirim/$sum)*100),0);
                        $hasil = "width:".$count."%";
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Email notifikasi terkirim</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <?= $sudahkirim ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Jumlah vendor</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <?= $sum ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="progress progress-md active">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="<?= $count ?>" aria-valuemin="0" aria-valuemax="100" style="<?= $hasil ?>">
                                    <span class="sr-only"><?= $count ?>% Complete</span><p><?= $count ?> % sudah terkirim</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="callout callout-info">
                <h4>Informasi !</h4>
                <p>Notifikasi email akan dikirimkan 5 hari sebelum kontrak vendor berakhir. Jika notifikasi email belum dikirimkan ketika sudah masuk jatuh tempo 5 hari, silahkan klik tombol <a href="?page=vendor" style="text-decoration:none;" class="btn btn-warning btn-xs"><span class="fa fa-refresh"></span> Refresh</a>. Notifikasi email akan otomatis dikirim dari sistem.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Vendor</b> | List</h3>
                    <div class="pull-right">
                        <a class="btn btn-warning" href="?page=vendor">
                            <span class="fa fa-refresh"></span> Refresh
                        </a>
                        <a class="btn btn-success" href="?page=vendoradd">
                            <span class="fa fa-plus-circle"></span> Tambah Data
                        </a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th rowspan="2">NO</th>
                                    <th rowspan="2">NO KONTRAK</th>
                                    <th rowspan="2">NAMA VENDOR</th>
                                    <th rowspan="2">EMAIL VENDOR</th>
                                    <th rowspan="2">URAIAN</th>
                                    <th colspan="2">TANGGAL</th>
                                    <th rowspan="2">NILAI KONTRAK SPJ/SPK</th>
                                    <th rowspan="2">NILAI KONTRAK AKHIR/AMD</th>
                                    <th colspan="2">PENAGIHAN</th>
                                    <th>PEMBAYARAN</th>
                                    <th rowspan="2">PROGRESS PEKERJAAN</th>
                                    <th rowspan="2">KONTRAK BERAKHIR</th>
                                    <th rowspan="2">NOTIFIKASI EMAIL</th>
                                    <th rowspan="2">AKSI</th>
                                </tr>
                                <tr>
                                    <th>MULAI</th>
                                    <th>SELESAI</th>
                                    <th>TANGGAL</th>
                                    <th>RUPIAH</th>
                                    <th>RUPIAH</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $no = 1;
                                $sql = mysqli_query($conn,"SELECT * FROM tbl_vendor") or die (mysqli_error($conn));
                                while($data = mysqli_fetch_array($sql)){ ?>
                                    <tr>    
                                        <td><?= $no ?></td>
                                        <td><a class="btn btn-success btn-xs"><i class="fa fa-file"></i> <?= $data['no_kontrak'] ?></a></td>
                                        <td><?= $data['nama_vendor'] ?></td>
                                        <td><?= $data['email_vendor'] ?></td>
                                        <td><?= $data['uraian'] ?></td>
                                        <td><span class="fa fa-calendar"></span> <?= date('d M Y', strtotime($data['tanggal_mulai'])) ?></td>
                                        <td><span class="fa fa-calendar"></span> <?= date('d M Y', strtotime($data['tanggal_selesai'])) ?></td>
                                        <td>
                                        <?php
                                            if (!empty($data['nilai_kontrak_spj_spk'])){
                                                echo buatrp($data['nilai_kontrak_spj_spk']);
                                            } else {
                                                echo "-";
                                            }
                                        ?>
                                        </td>
                                        <td>
                                        <?php
                                            if (!empty($data['nilai_kontrak_akhir_amd'])){
                                                echo buatrp($data['nilai_kontrak_akhir_amd']);
                                            } else {
                                                echo "-";
                                            }
                                        ?>
                                        </td>
                                        <td><span class="fa fa-calendar"></span> <?= date('d M Y', strtotime($data['penagihan_tanggal'])) ?></td>
                                        <td><?= $data['penagihan_rupiah'] ?></td>
                                        <td><?= $data['pembayaran_rupiah'] ?></td>
                                        <td>
                                        <?php 
                                            if (!empty($data['progress_pekerjaan'])){
                                                echo $data['progress_pekerjaan']."%";
                                            } else {
                                                echo "-";
                                            }
                                        ?>
                                        </td>
                                        <td>
                                        <?php
                                        $date1 = new DateTime(getDateNow());
                                        $date2 = new DateTime($data['tanggal_selesai']);
                                        $diff = $date1->diff($date2);
                                        if ($date2 > $date1){
                                            if ($diff->days > 30){
                                                echo $diff->m." Bulan, ".$diff->d." Hari lagi";
                                            } else if ($diff->days > 7 && $diff->days <= 30){
                                                echo $diff->d." Hari lagi";
                                            } else if ($diff->days <= 7 && $data['kirim_notif'] != 1 ){
                                                mailerSent($quseradm['email'],$quseradm['email_pass'],$data['nama_vendor'],$diff->days,$data['tanggal_selesai'],$data['no_kontrak'],$data['uraian'],buatrp($data['nilai_kontrak_akhir_amd']),$data['progress_pekerjaan'],$data['email_vendor']);
                                                udpateCekNotif($data['id_vendor']);
                                                echo $diff->d." Hari lagi";
                                            } else {
                                                echo $diff->d." Hari lagi";
                                            }
                                        } else {
                                            if ($diff->days > 30){
                                                echo $diff->m." Bulan, ".$diff->d." Hari yang lalu";
                                            } else if ($diff->days <= 30 && $diff->days > 0){
                                                echo $diff->d." Hari yang lalu";
                                            } else {
                                                echo "Berakhir hari ini";
                                            }
                                        }
                                        
                                        ?>
                                        </td>
                                        <td>
                                        <?php 
                                            if ($data['kirim_notif'] != 0 ){
                                                echo "<button class='btn btn-success btn-xs'><span class='fa fa-check'></span> sudah terkirim</button>";
                                            } else {
                                                echo "<button class='btn btn-danger btn-xs'><span class='fa fa-remove'></span> belum terkirim</button>";
                                            }
                                        ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-xs" href="?page=vendoredit&id=<?= $data['id_vendor'] ?>"><i class="fa fa-edit"></i> edit</a>
                                            <a class="btn btn-danger btn-xs" href="?page=vendordelete&id=<?= $data['id_vendor'] ?>"><i class="fa fa-trash"></i> hapus</a>
                                        </td>
                                    </tr>
                                <?php $no++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>