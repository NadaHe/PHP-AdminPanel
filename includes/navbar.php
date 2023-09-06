<nav class="navbar navbar-expand-lg bg-danger shadow sticky-top">
    <div class="container">
        <a class="navbar-brand text-white " href="index.php">إلكتريتو</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="text-white nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class=" text-white nav-link" href="categories.php">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="text-white nav-link" href="cart.php">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="text-white nav-link" href="contact-us.php">Contact us</a>
                </li>
                <?php
                if (isset($_SESSION['auth'])) {
                ?>
                    <li class="nav-item dropdown">
                        <a class="text-white nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $_SESSION['auth_user']['name']; ?>
                        </a>
                        <ul class="dropdown-menu bg-danger ">
                            <li><a class="text-white dropdown-item" href="my_orders.php">MyOrders</a></li>
                            <li><a class="text-white dropdown-item" href="admin\index.php">Dashboard</a></li>
                            <li><a class="text-white dropdown-item" href="logout.php">Log out</a></li>
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
                    <a class="text-white nav-link" href="login.php">Login</a>
                </li>

                <?php
                }
                ?>

            </ul>
        </div>
    </div>
</nav>