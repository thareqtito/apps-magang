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
                    <h3 class="box-title"><b>Vendor</b> | Tambah</h3>
                </div>

                <div class="box-body">
                    <?php 
                        if (isset($_POST['submit'])){
                            
                            $nokontrak         = $_POST['no_kontrak'];
                            $namavendor        = $_POST['nama_vendor'];
                            $emailvendor       = $_POST['email_vendor'];
                            $uraian            = addslashes($_POST['uraian_kegiatan']);
                            $tglmulai          = date('Y-m-d', strtotime($_POST['tanggal_mulai']));
                            $tglselesai        = date('Y-m-d', strtotime($_POST['tanggal_selesai']));
                            $nilkonspj         = $_POST['nilai_kontrakspj'];
                            $nilkonakhir       = $_POST['nilai_kontrak_akhir'];
                            $progpekerjaan     = $_POST['progress_pekerjaan'];
                            $penagihantgl      = date('Y-m-d', strtotime($_POST['penagihan_tanggal']));
                            $penagihanrupiah   = $_POST['penagihan_rupiah'];
                            $pembayaranrupiah  = $_POST['pembayaran_rupiah'];

                                $input = mysqli_query($conn,"INSERT INTO tbl_vendor SET
                                        no_kontrak                  = '$nokontrak',
                                        nama_vendor                 = '$namavendor',
                                        email_vendor                = '$emailvendor',
                                        uraian                      = '$uraian',
                                        tanggal_mulai               = '$tglmulai',
                                        tanggal_selesai             = '$tglselesai',
                                        nilai_kontrak_spj_spk       = '$nilkonspj',
                                        nilai_kontrak_akhir_amd     = '$nilkonakhir',
                                        penagihan_tanggal           = '$penagihantgl',
                                        penagihan_rupiah            = '$penagihanrupiah',
                                        pembayaran_rupiah           = '$pembayaranrupiah',
                                        progress_pekerjaan          = '$progpekerjaan'
                                        ") or die (mysqli_error($conn));

                                if ($input){
                                    echo    '<div class="row"><div class="col-md-12"><div class="alert alert-success alert-dismissible">'.
                                            '<h4><i class="icon fa fa-check"></i> Alert!</h4>'.
                                            'tambah data berhasil'.
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

