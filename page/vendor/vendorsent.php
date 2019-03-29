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
                    <h3 class="box-title"><b>Vendor</b> | Edit</h3>
                </div>

                <div class="box-body">
                    <?php 

                        $idvendor = $_GET['idvendor'];
                        $admail = $_GET['admail'];
                        $adpass = $_GET['adpass'];
                        $nama = $_GET['nama'];
                        $day = $_GET['day'];
                        $tglselesai = $_GET['tglselesai'];
                        $nokontrak = $_GET['nokontrak'];
                        $uraian = $_GET['uraian'];
                        $spj = $_GET['spj'];
                        $amd = $_GET['amd'];
                        $nagihrp = $_GET['nagihrp'];
                        $bayarrp = $_GET['bayarrp'];
                        $progress = $_GET['progress'];
                        $email = $_GET['email'];
                        
                        mailerSent($idvendor,$admail,$adpass,$nama,$day,$tglselesai,$nokontrak,$uraian,$spj,$amd,$nagihrp,$bayarrp,$progress,$email);
                        udpateCekNotif($idvendor);

                        echo    '<div class="row"><div class="col-md-12"><div class="alert alert-success alert-dismissible">'.
                                '<h4><i class="icon fa fa-check"></i> Alert!</h4>'.
                                'Notifikasi email berhasil terkirim'.
                                '</div></div></div>';
                        echo "<meta http-equiv='refresh' content='1;
                        url=?page=vendor'>";

                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

