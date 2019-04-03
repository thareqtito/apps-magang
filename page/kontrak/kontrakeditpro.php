<section class="content-header">
    <h1>Kontrak</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a>Kontrak</a></li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Kontrak</b> | Edit</h3>
                </div>

                <div class="box-body">
                    <?php 
                        if (isset($_POST['submit'])){

                            $admemail          = $quseradm['email'];
                            $admpass           = $quseradm['email_pass'];
                            $idvendor          = $_POST['id_vendor'];
                            $nokontrak         = $_POST['no_kontrak'];
                            $namavendor        = $_POST['nama_vendor'];
                            $emailvendor       = $_POST['email_vendor'];
                            $cc1               = $_POST['email_ops1'];
                            $cc2               = $_POST['email_ops2'];
                            $uraian            = addslashes($_POST['uraian_kegiatan']);
                            $tglmulai          = date('Y-m-d', strtotime($_POST['tanggal_mulai']));
                            $tglselesai        = date('Y-m-d', strtotime($_POST['tanggal_selesai']));
                            $nilkonspj         = $_POST['nilai_kontrakspj'];
                            $nilkonakhir       = $_POST['nilai_kontrak_akhir'];
                            $progpekerjaan     = $_POST['progress_pekerjaan'];
                            $penagihantgl      = date('Y-m-d', strtotime($_POST['penagihan_tanggal']));
                            $penagihanrupiah   = $_POST['penagihan_rupiah'];
                            $pembayaranrupiah  = $_POST['pembayaran_rupiah'];

                            $date1 = new DateTime(getDateNow());
                            $date2 = new DateTime($tglselesai);
                            $diff = $date1->diff($date2);

                            if ($date2 > $date1){
                                if($diff->days > 14){
                                    $kirimnotif = 0;
                                } elseif($diff->days <= 14){
                                    $kirimnotif = 1;
                                }
                            } elseif($date2 < $date1) {
                                $kirimnotif = 1;
                            }

                                $input = mysqli_query($conn,"UPDATE tbl_vendor SET
                                        no_kontrak                  = '$nokontrak',
                                        nama_vendor                 = '$namavendor',
                                        email_vendor                = '$emailvendor',
                                        email_ops1                  = '$cc1',
                                        email_ops2                  = '$cc2',
                                        uraian                      = '$uraian',
                                        tanggal_mulai               = '$tglmulai',
                                        tanggal_selesai             = '$tglselesai',
                                        kirim_notif                 = '$kirimnotif',
                                        nilai_kontrak_spj_spk       = '$nilkonspj',
                                        nilai_kontrak_akhir_amd     = '$nilkonakhir',
                                        penagihan_tanggal           = '$penagihantgl',
                                        penagihan_rupiah            = '$penagihanrupiah',
                                        pembayaran_rupiah           = '$pembayaranrupiah',
                                        progress_pekerjaan          = '$progpekerjaan'
                                        WHERE id_vendor             = '$idvendor'
                                        ") or die (mysqli_error($conn));
                                

                                if ($input){
                                    mailerSent($idvendor,$admemail,$admpass,$cc1,$cc2,$namavendor,$diff->days,$tglselesai,$nokontrak,$uraian,$nilkonspj,$nilkonakhir,$penagihanrupiah,$pembayaranrupiah,$progpekerjaan,$emailvendor);
                                    echo    '<div class="row"><div class="col-md-12"><div class="alert alert-success alert-dismissible">'.
                                            '<h4><i class="icon fa fa-check"></i> Alert!</h4>'.
                                            'edit data berhasil'.
                                            '</div></div></div>';
                                    echo "<meta http-equiv='refresh' content='1;
                                    url=?page=kontrak'>";
                                }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

