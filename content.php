<?php 

if (isset($_GET['page'])) $page=$_GET['page'];
else $page="dashboard";

if ($page == "dashboard") include("page/dashboard.php");
elseif ($page == "logout") include("page/logout.php");

    // -------------------------- vendor --------------------------
    elseif ($page == "vendor")           include("page/vendor/vendor.php");
    elseif ($page == "vendoradd")        include("page/vendor/vendoradd.php");
    elseif ($page == "vendoraddpro")     include("page/vendor/vendoraddpro.php");
    elseif ($page == "vendoredit")       include("page/vendor/vendoredit.php");
    elseif ($page == "vendoreditpro")    include("page/vendor/vendoreditpro.php");
    elseif ($page == "vendorview")       include("page/vendor/vendorview.php");
    elseif ($page == "vendordelete")     include("page/vendor/vendordelete.php");

else echo"Konten tidak ada";

?>