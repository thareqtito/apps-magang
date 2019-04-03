<section class="content-header">
    <h1>Manajemen User</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a>Manajemen User</a></li>
    </ol>
</section>
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>User</b> | List</h3>
                    <div class="pull-right">
                        <a class="btn btn-success" href="?page=useradd">
                            <span class="fa fa-plus-circle"></span> Tambah Data
                        </a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>USERNAME</th>
                                    <th>PASSWORD</th>
                                    <th>EMAIL</th>
                                    <th>ROLE</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $no = 1;
                                $sql = mysqli_query($conn,"SELECT * FROM tbl_login WHERE login_role <> 0") or die (mysqli_error($conn));
                                while($data = mysqli_fetch_array($sql)){ ?>
                                    <tr>    
                                        <td><?= $no ?></td>
                                        <td><a class="btn btn-success btn-xs"><i class="fa fa-user"></i> <?= $data['username'] ?></a></td>
                                        <td>*****</td>
                                        <td><?= $data['email'] ?></td>
                                        <td><?php
                                        
                                        if ($data['login_role'] == 1){
                                            echo '<a class="btn btn-info btn-xs"><span class="fa fa-lock"></span> Super User (RWX) </a>';
                                        } else {
                                            echo '<a class="btn btn-info btn-xs"><span class="fa fa-lock"></span> User (R) </a>';
                                        } ?></td>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-xs" href="?page=useredit&id=<?= $data['id_login'] ?>"><i class="fa fa-edit"></i> edit</a>
                                            <a class="btn btn-danger btn-xs" href="?page=userdelete&id=<?= $data['id_login'] ?>"><i class="fa fa-trash"></i> hapus</a>
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