<section class="content-header">
    <h1>Manajemen User</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a>Manajemen User</a></li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>User</b> | Edit</h3>
                </div>

                <div class="box-body">
                    <?php 
                        if (isset($_POST['submit'])){
                            
                            $idlogin          = $_POST['id_login'];
                            $username         = $_POST['username'];
                            $password         = $_POST['password'];
                            $email            = $_POST['email'];
                            $role             = $_POST['role'];

                            $input = mysqli_query($conn,"UPDATE tbl_login SET
                                    username       = '$username',
                                    password       = '$password',
                                    email          = '$email',
                                    login_role     = $role
                                    WHERE id_login = $idlogin
                                    ") or die (mysqli_error($conn));

                            if ($input){
                                echo    '<div class="row"><div class="col-md-12"><div class="alert alert-success alert-dismissible">'.
                                        '<h4><i class="icon fa fa-check"></i> Alert!</h4>'.
                                        'edit data berhasil'.
                                        '</div></div></div>';
                                echo "<meta http-equiv='refresh' content='1;
                                url=?page=user'>";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

