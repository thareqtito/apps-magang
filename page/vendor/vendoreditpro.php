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
                        if (isset($_POST['submit'])){
                            
                            $idvendor          = $_POST['id_vendor'];
                            $nokontrak         = $_POST['no_kontrak'];
                            $namavendor        = $_POST['nama_vendor'];
                            $emailvendor       = $_POST['email_vendor'];
                            $uraian            = addslashes($_POST['uraian_kegiatan']);
                            $tglmulai          = date('Y-m-d', strtotime($_POST['tanggal_mulai']));
                            $tglselesai        = date('Y-m-d', strtotime($_POST['tanggal_selesai']));
                            $nilkonspj         = $_POST['nilai_kontrakspj'];
                            $nilkonakhir       = $_POST['nilai_kontrak_akhir'];
                            $progpekerjaan     = $_POST['progress_pekerjaan'];

                                $input = mysqli_query($conn,"UPDATE tbl_vendor SET
                                        no_kontrak                  = '$nokontrak',
                                        nama_vendor                 = '$namavendor',
                                        email_vendor                = '$emailvendor',
                                        uraian                      = '$uraian',
                                        tanggal_mulai               = '$tglmulai',
                                        tanggal_selesai             = '$tglselesai',
                                        nilai_kontrak_spj_spk       = '$nilkonspj',
                                        nilai_kontrak_akhir_amd     = '$nilkonakhir',
                                        progress_pekerjaan          = '$progpekerjaan'
                                        WHERE id_vendor             = '$idvendor'
                                        ") or die (mysqli_error($conn));

                                if ($input){
                                    echo    '<div class="row"><div class="col-md-12"><div class="alert alert-success alert-dismissible">'.
                                            '<h4><i class="icon fa fa-check"></i> Alert!</h4>'.
                                            'edit data berhasil'.
                                            '</div></div></div>';
                                    echo "<meta http-equiv='refresh' content='1;
                                    url=?page=vendor'>";
                                }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

