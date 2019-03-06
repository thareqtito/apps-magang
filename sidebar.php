<section class="sidebar">
    <div class="user-panel">
    <div class="pull-left image">
        <img src="images/admin.png">
    </div>
    <div class="pull-left info">
        <p>ADMINISTRATOR</p>
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
    <li class="<?php if ($_GET['page'] == 'vendor' || $_GET['page'] == 'vendoradd' || $_GET['page'] == 'vendoraddpro' || $_GET['page'] == 'vendoredit'
                || $_GET['page'] == 'vendoreditpro' || $_GET['page'] == 'vendorview' || $_GET['page'] == 'vendordelete'){ echo "active"; } ?>">
        <a href="?page=vendor">
            <i class="fa fa-users"></i><span>Vendor</span>
        </a>
    </li>
</section>