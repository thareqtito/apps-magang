<section class="sidebar">
    <div class="user-panel">
    <div class="pull-left image">
        <img src="images/admin.png">
    </div>
    <div class="pull-left info">
        <p><?= $userdata['username'] ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU</li>
    <li class="<?php if ($_GET['page'] == 'dashboard'){ echo "active";} ?>">
        <a href="?page=dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>
    <?php if($userdata['login_role']==0) { ?>
    <li class="<?php if ($_GET['page'] == 'user' || $_GET['page'] == 'useradd' || $_GET['page'] == 'useraddpro' || $_GET['page'] == 'useredit'
                || $_GET['page'] == 'usereditpro' || $_GET['page'] == 'userview' || $_GET['page'] == 'userdelete'){ echo "active"; } ?>">
        <a href="?page=user">
            <i class="fa fa-user"></i><span>Manajemen User</span>
        </a>
    </li>
    <?php } ?>
    <li class="<?php if ($_GET['page'] == 'kontrak' || $_GET['page'] == 'kontrakadd' || $_GET['page'] == 'kontrakaddpro' || $_GET['page'] == 'kontrakedit'
                || $_GET['page'] == 'kontrakeditpro' || $_GET['page'] == 'kontrakview' || $_GET['page'] == 'kontrakdelete'){ echo "active"; } ?>">
        <a href="?page=kontrak">
            <i class="fa fa-users"></i><span>kontrak</span>
        </a>
    </li>
</section>