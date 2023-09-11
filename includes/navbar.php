<nav class="navbar navbar-expand-lg bg-danger shadow sticky-top">
    <div class="container">
        <a class="navbar-brand text-white " href="index.php">إلكتريتو</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="text-white nav-link active" aria-current="page" href="index.php">الرئيسية</a>
                </li>
                <li class="nav-item">
                    <a class=" text-white nav-link" href="categories.php">التصنيفات</a>
                </li>
                <li class="nav-item">
                    <a class="text-white nav-link" href="cart.php">سلة التسوق</a>
                </li>
                <li class="nav-item">
                    <a class="text-white nav-link" href="contact-us.php">اتصل بنا</a>
                </li>
                <?php
                if (isset($_SESSION['auth'])) {
                ?>
                    <li class="nav-item dropdown">
                        <a class="text-white nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         <?= $_SESSION['auth_user']['name']; ?>
                         <i class="fa-solid fa-user"></i>
                        </a>
                        <ul class="dropdown-menu bg-danger ">
                            <li><a class="text-dark dropdown-item" href="my_orders.php">الاوردرات</a></li>
                            <li><a class="text-dark dropdown-item" href="admin\index.php">لوحة التحكم</a></li>
                            <li><a class="text-dark dropdown-item" href="logout.php">تسجيل الخروج</a></li>
                        </ul>
                    </li>
                <?php
                }
                else
                {
                ?>
                <li class="nav-item">
                    <a class="text-white nav-link" href="register.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="text-white nav-link" href="login.php">تسجيل الدخول</a>
                </li>

                <?php
                }
                ?>

            </ul>
        </div>
    </div>
</nav>