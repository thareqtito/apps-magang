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
                    <h3 class="box-title"><b>User</b> | Hapus</h3>  
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="callout callout-danger">
                                <h5>Peringatan !</h5>
                                <p>Anda yakin ingin menghapus data ini ?</p>
                                <form action="?page=userdelete" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="idlogin" value="<?= $_GET['id'] ?>">
                                    <input class="btn btn-info" type="submit" name="submit" value="Ya">
                                    <a class="btn btn-info" href="?page=user"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php 
                        if(isset($_POST['submit'])){
                            $id = $_POST['idlogin'];
                            $delete = mysqli_query($conn,"DELETE FROM tbl_login WHERE id_login=$id") or die (mysqli_error($conn));
                            if ($delete){
                                echo    '<div class="row">'.
                                            '<div class="col-md-12">'.
                                                '<div class="alert alert-success alert-dismissible">'.
                                                '<h5><i class="icon fa fa-check"></i> Alert!</h5>'.
                                                'Data berhasil dihapus.</div>'.
                                            '</div>'.
                                        '</div>';
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

