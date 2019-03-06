<?php 
    $vendor        = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM tbl_vendor"));
    $sudahkirim    = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM tbl_vendor WHERE kirim_notif<>0"));
    $belumkirim    = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM tbl_vendor WHERE kirim_notif<>1"));
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
                            <h3><?= $sudahkirim ?></h3>
                            <p>Notifikasi Terkirim</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-mail-forward"></i>
                        </div>
                        <a href="?page=vendor" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>