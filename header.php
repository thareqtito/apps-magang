<a href="?page=dashboard" class="logo">
    <span class="logo-mini"><b>A</b>DM</span>
    <span class="logo-lg">
    <i class="fa fa-user-secret"></i> <b>ADMIN</b>
    </span>
</a>
<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';

    $query = mysqli_query($conn, "SELECT * FROM tbl_login WHERE username = '$_SESSION[username]'");
    $userdata = mysqli_fetch_array($query);

    // admin role
    $qadmin = mysqli_query($conn, "SELECT * FROM tbl_login WHERE login_role=0");
    $quseradm = mysqli_fetch_array($qadmin);


    function buatrp($angka) {
    $rupiah="Rp. ".number_format($angka,0,',','.');
    return $rupiah;
    }

    function getDateNow() {
        $tz_object = new DateTimeZone('Asia/Jakarta');
        $datetime = new DateTime();
        $datetime->setTimezone($tz_object);
        return $datetime->format('m/d/Y');
    }

    function mailerSent($id,$emailadmin,$emaipass,$nama,$day,$datetwo,$nokontrak,$uraian,$spj,$amd,$penagihan,$pembayaran,$progress,$email){

        $abx = $emailadmin;
        $bxx = $emaipass;

        //Recipients
        $to['email'] = $email;
        $to['name'] = $nama."-".$email;

        $date1 = new DateTime(getDateNow());
        $date2 = new DateTime($datetwo);

        $mail = new PHPMailer;
        $mail->isSMTP();                                      
        $mail->SMTPAuth = true;                                               
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;
        $mail->Username = $abx;                 
        $mail->Password = $bxx;                           
        $mail->SMTPSecure = 'ssl';
        $mail->From = $emailadmin;
        $mail->FromName = "PLN Cengkareng";
        $mail->AddReplyTo($emailadmin,"PLN Cengkareng");
        $mail->AddAddress($to['email'],$to['name']);                       
        $mail->Priority = 1;
        $mail->AddCustomHeader("X-MSMail-Priority: High");
        $mail->WordWrap = 50;  
        
        //Content
        $mail->isHTML(true);
        $mail->AddEmbeddedImage('img/email_header.png', 'gg');
        $mail->AddEmbeddedImage('images/PLN.png', 'logo');
        $mail->AddEmbeddedImage('images/pln-grey.png', 'mono');
        $bodyContent = "<div style='background-color:#ffffff;margin:auto;width:80%;border:20px solid #e8e8e8;'>";
        $bodyContent .= "<div style='background-color:#00a65a;height:120px;padding:5px;overflow:hidden;'>";
        $bodyContent .= "<img style='float:left;margin:5px;' src='cid:logo' width='6%'><img style='float:right;margin:5px;' src='cid:gg' width='50%'><br/>";
        $bodyContent .= "</div>";
        $bodyContent .= "<div style='padding:10px;'>";
        $bodyContent .= "<p>Kepada yth, <b>$nama</b></p>";
        if ($date2 > $date1){
            $bodyContent .= "<p>Kami ingin menginformasikan kepada anda bahwa masa kontrak anda akan berakhir <b>$day hari Lagi</b> yaitu tepat pada tanggal <b>$datetwo</b>.";
        } else {
            $bodyContent .= "<p>Kami ingin menginformasikan kepada anda bahwa masa kontrak anda telah berakhir dari <b>$day hari yang lalu</b> yaitu tepat pada tanggal <b>$datetwo</b>.";
        }
        $bodyContent .= "<table border='0' cellspacing='0' style='margin-left:20px;'>";
        $bodyContent .= "<tr style='background-color:#f2f2f2;border-radius:5px;'><td><b>No Kontrak</b></td><td>: $nokontrak</td></tr>";
        $bodyContent .= "<tr><td><b>Uraian</b></td><td>: $uraian</td></tr>";
        $bodyContent .= "<tr style='background-color:#f2f2f2;border-radius:5px;'><td><b>Nilai Kontrak SPJ/SPK</b></td><td>: $spj</td></tr>";
        $bodyContent .= "<tr><td><b>Nilai Kontrak AKHIR/AMD</b></td><td>: $amd</td></tr>";
        $bodyContent .= "<tr style='background-color:#f2f2f2;border-radius:5px;'><td><b>Penagihan</b></td><td>: $penagihan</td></tr>";
        $bodyContent .= "<tr><td><b>Pembayaran</b></td><td>: $pembayaran</td></tr>";
        $bodyContent .= "<tr style='background-color:#f2f2f2;border-radius:5px;'><td><b>Progress</b></td><td>: $progress %</td></tr>";
        $bodyContent .= "</table><p>Terima kasih</p></div>";
        $bodyContent .= "<div style='background-color:#f2f2f2;height:110px;padding:10px;margin-top:10px;'>";
        $bodyContent .= "<div style='margin-bottom:-5px;'><img style='margin:auto;display:block;'src='cid:mono' width='50'></div>";
        $bodyContent .= "<div style='color:#d2d2d2;text-align:center;'><p>PLN Cengkareng, DKI Jakarta, Indonesia</p></div>";
        $bodyContent .= "</div></div>";

        $mail->Subject = 'Pemberitahuan - Kontrak Vendor PLN Cengkareng';
        $mail->Body    = $bodyContent;

        if(!$mail->send()) {
            $err = 'Message could not be sent,';
            $err .= 'Mailer Error: ' . $mail->ErrorInfo;
        }
        $mail->ClearAddresses();
    }

    function udpateCekNotif($id){
        include 'lib/koneksi.php';
        $query = mysqli_query($conn, "UPDATE tbl_vendor SET
                                     kirim_notif     = 1
                                     WHERE id_vendor = $id 
                                     ");
        if ($query){
            echo "<meta http-equiv='refresh' content='1;
            url=?page=vendor'>";
        }
    }
?>
<nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="images/admin.png" class="user-image" alt="User Image">
                <span><?= $userdata['username'] ?></span>
            </a>
            <ul class="dropdown-menu">
                <li class="user-header">
                    <img src="images/admin.png" class="img-circle" alt="User Image">
                    <p><b><a href="?page=profile&id=<?=$userdata['id_login'] ?>" title="lihat profil" style="color:#fff;"><?= $userdata['username'] ?></a></b></p>
                    Terakhir Login : <?= $userdata['last_active'] ?>
                </li>
                <li class="user-footer">
                    <a href="?page=logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Logout</a>
                </li> 
            </ul>
        </li>
    </ul>
    </div>
</nav>