<section class="content-header">
    <h1>Profile Admin</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a>Profile Admin</a></li>
    </ol>
</section>
<?php 
    $query = mysqli_query($conn, "SELECT * FROM tbl_login WHERE id_login=$_GET[id]");
    $data = mysqli_fetch_array($query);
          
?>
<section class="content container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>PROFILE USER</b> | Edit</h3>
                </div>

                <div class="box-body">
                <form action="?page=profileeditpro" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Username</label>
                                        <input type="hidden" name="idlogin" value="<?= $data['id_login'] ?>">
                                        <input type="text" class="form-control" name="username" value="<?= $data['username'] ?>" placeholder="enter username ..." required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Password</label>
                                        <input type="text" class="form-control" name="password" value="<?= $data['password'] ?>" placeholder="enter password ..." required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" name="email" value="<?= $data['email'] ?>" placeholder="enter email address ..." required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Password Email</label>
                                        <input type="text" class="form-control" name="email_pass" value="<?= $data['email_pass'] ?>" placeholder="enter email password ..." required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <input type="submit" name="submit" class="btn btn-success" value="Save">
                    <a href="?page=dashboard" class="btn btn-danger">Back</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>

