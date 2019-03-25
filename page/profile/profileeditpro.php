<section class="content-header">
    <h1>Profile Admin</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a>Profile Admin</a></li>
    </ol>
</section>
<section class="content container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Profile Admin</b> | Edit</h3>
                </div>

                <div class="box-body">
                <?php 
                if (isset($_POST['submit'])){   

                    $idlogin        = $_POST['idlogin'];
                    $username       = $_POST['username'];
                    $password       = $_POST['password'];
                    $email          = $_POST['email'];

                    if($userdata['login_role'] == 0){
                        $emailpass      = $_POST['email_pass'];
                    } else {
                        $emailpass      = NULL;
                    }

                        $update = mysqli_query($conn, "UPDATE tbl_login SET
                                        username        = '$username',
                                        password        = '$password',
                                        email           = '$email',
                                        email_pass      = '$emailpass'
                                        WHERE id_login  = $idlogin");
                        
                        if ($update){
                            echo    '<div class="row"><div class="col-md-12"><div class="alert alert-success alert-dismissible">'.
                                    '<h4><i class="icon fa fa-check"></i> Alert!</h4>'.
                                    'Edit data success'.
                                    '</div></div></div>';
                            echo "<meta http-equiv='refresh' content='1;
                            url=?page=profile&id=$idlogin'>";
                        }
                }
                ?>
                </div>
            </div>
        </div>
    </div>
</section>

