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
    elseif ($page == "vendorsent")       include("page/vendor/vendorsent.php");

    // -------------------------- user --------------------------
    elseif ($page == "user")             include("page/user/user.php");
    elseif ($page == "useradd")          include("page/user/useradd.php");
    elseif ($page == "useraddpro")       include("page/user/useraddpro.php");
    elseif ($page == "useredit")         include("page/user/useredit.php");
    elseif ($page == "usereditpro")      include("page/user/usereditpro.php");
    elseif ($page == "userview")         include("page/user/userview.php");
    elseif ($page == "userdelete")       include("page/user/userdelete.php");

    // -------------------------- vendor --------------------------
    elseif ($page == "profile")           include("page/profile/profile.php");
    elseif ($page == "profileeditpro")    include("page/profile/profileeditpro.php");

else echo"Konten tidak ada";

?>