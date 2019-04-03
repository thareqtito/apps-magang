<?php 

if (isset($_GET['page'])) $page=$_GET['page'];
else $page="dashboard";

if ($page == "dashboard") include("page/dashboard.php");
elseif ($page == "logout") include("page/logout.php");

    // -------------------------- vendor --------------------------
    elseif ($page == "kontrak")           include("page/kontrak/kontrak.php");
    elseif ($page == "kontrakaddpro")     include("page/kontrak/kontrakaddpro.php");
    elseif ($page == "kontrakadd")        include("page/kontrak/kontrakadd.php");
    elseif ($page == "kontrakedit")       include("page/kontrak/kontrakedit.php");
    elseif ($page == "kontrakeditpro")    include("page/kontrak/kontrakeditpro.php");
    elseif ($page == "kontrakview")       include("page/kontrak/kontrakview.php");
    elseif ($page == "kontrakdelete")     include("page/kontrak/kontrakdelete.php");
    elseif ($page == "kontraksent")       include("page/kontrak/kontraksent.php");

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