<section class="content-header">
    <h1>Manajemen User</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a>Manajemen User</a></li>
    </ol>
</section>
<?php 

$query = mysqli_query($conn, "SELECT * FROM tbl_login WHERE id_login=$_GET[id]");
$data = mysqli_fetch_array($query)
?>
<section class="content container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>User</b> | Edit</h3>
                </div>

                <div class="box-body">
                <form action="?page=usereditpro" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="hidden" name="id_login" value="<?= $data['id_login'] ?>">
                                <input type="text" class="form-control" name="username" placeholder="masukkan username ..." value="<?= $data['username'] ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Password</label>
                                <input id="password-field" type="password" class="form-control" maxlength="10" name="password" placeholder="masukkan password maks(10 karakter) ..." value="<?= $data['password'] ?>" required>
                                <span toggle="#password-field" class="fa fa-lg fa-eye field-icon toggle-password"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="masukkan email ..." autocomplete="off" value="<?= $data['email'] ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Hak Akses</label>
                                <select name="role" class="form-control">
                                    <option value="1" <?= ($data['login_role'] == 1)?"selected":"" ?>>Super User (RWX)</option>
                                    <option value="2">User (R) <?= ($data['login_role'] == 2)?"selected":"" ?></option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <input type="submit" name="submit" class="btn btn-success" value="Simpan">
                    <a href="?page=user" class="btn btn-danger">Kembali</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>

