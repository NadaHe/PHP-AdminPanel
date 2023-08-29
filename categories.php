<?php
include('functions/userfunctions.php');
include('includes/header.php');
?>

<div class="py-3 bg-primary">
    <div class="container">
        <h6 class="text-white">Home/Collections</h6>
    </div>
</div>
<!-- <py-5></py-5> -->
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Our Categories</h1>
                <hr>
                <div class="row">
                    <?php
                    $categories = getAllActive("categories");
                    if (mysqli_num_rows($categories) > 0) {
                        foreach ($categories as $item) {
                    ?>
                            <div class="col-md-3 mb-2">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <img src="uploads/<?= $item['image']; ?>" alt="<?= $item['name']; ?>" width="100%" height="200px" class="w-100">
                                        <h4 class="text-center"><?= $item['name']; ?></h4>
                                    </div>
                                </div>
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