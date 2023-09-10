<?php
$page=substr($_SERVER['SCRIPT_NAME'] , strrpos($_SERVER['SCRIPT_NAME'] , '/' )+1);
?>
<aside class="sidenav sidebarcolor shadow navbar navbar-vertical navbar-expand-xs border-0 fixed-start ms-3 bg-grey" id="sidenav-main">
    <div class="sidenav-header text-center">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="../index.php">
            <!-- <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo"> -->
            <span class="ms-1 h3 font-weight-bold text-white">إلكتريتو</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white  <?= $page== "index.php"?'active':'' ?>"   href="index.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?= $page== "add-category.php"?'active':'' ?>"  href="add-category.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">add</i>
                    </div>
                    <span class="nav-link-text ms-1">add category</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?= $page == "category.php"?'active':'' ?>"    href="category.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">All categories</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?= $page == "add-product.php"?'active':'' ?>"    href="add-product.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">add</i>
                    </div>
                    <span class="nav-link-text ms-1">add product</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?= $page== "products.php"?'active':'' ?>"  href="products.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">All products</span>
                </a>
            </li>
            <li class="nav-item"> <!-- bg-gradient-primary -->
                <a class="nav-link text-white <?= $page== "orders.php"?'active':'' ?>"  href="orders.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">Orders</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?= $page== "users.php"?'active':'' ?>"  href="users.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?= $page== "admins.php"?'active':'' ?>"  href="admins.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">Admins</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?= $page== "contact-us.php"?'active':'' ?>"  href="contact-us.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">Messages</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <a class="btn bg-gradient-dark mt-4 w-100" 
            href="../logout.php">Log out</a>
        </div>
    </div>
</aside>