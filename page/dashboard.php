<?php
    $sdhend = 0;
    $notend = 0;
    $vendor = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM tbl_vendor"));
    $q = mysqli_query($conn, "SELECT * FROM tbl_vendor");
    while($data = mysqli_fetch_array($q)){
        $date1 = new DateTime(getDateNow());
        $date2 = new DateTime($data['tanggal_selesai']);
        $diff = $date1->diff($date2);
            if ($date2 > $date1){
                $notend += 1;
            } else {
                $sdhend += 1;
            }
    }
?>
<section class="content-header">
    <h1>Dashboard</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3><?= $vendor ?></h3>
                            <p>Vendor</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href="?page=vendor" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3><?= $notend ?></h3>
                            <p>Kontrak Vendor Akan Berakhir</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-refresh"></i>
                        </div>
                        <a href="?page=vendor" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><?= $sdhend ?></h3>
                            <p>Kontrak Vendor Sudah Berakhir</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <a href="?page=vendor" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>