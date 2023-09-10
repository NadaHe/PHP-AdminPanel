<?php
include('functions/userfunctions.php');
include('includes/header.php');
?>

<!-- <div class="py-3 bg-primary">
    <div class="container">
        <h6 class="text-white">Home/Collections</h6>
    </div>
</div> -->

<!-- <py-5></py-5> -->
<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="py-2" style="--bs-breadcrumb-divider-flipped: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">الرئيسية</a></li>
                        <li class="breadcrumb-item active" aria-current="page">التصنيفات</li>
                    </ol>
                </nav>
                <h2>التصنيفات</h2>
                <div class="underline mb-4"></div>
                <div class="row">
                    <?php
                    $categories = getAllActive("categories");
                    if (mysqli_num_rows($categories) > 0) {
                        foreach ($categories as $item) {
                    ?>
                            <div class="col-md-3 mb-2">
                                <a href="products.php?category=<?= $item['slug']; ?>">
                                    <div class="card shadow" style=" width: 16rem;">
                                        <img src="uploads/<?= $item['image']; ?>" alt="<?= $item['name']; ?>" class="card-img-top" width="100%" height="200px" class="w-100">
                                        <div class="card-body text-center">
                                            <h6 class="text-danger text-center card-title "><?= $item['name']; ?></h6>
                                        </div>
                                    </div>
                                </a>
                            </div>

                    <?php
                        }
                    } else {
                        echo "No categories found";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>