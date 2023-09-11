<?php
include('includes/header.php');
// include('../middleware/adminMiddleware.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="bg-success">
                <?php
                if (isset($_SESSION['message'])) {
                ?>

                    <div class="alert alert-dismissible fade show bg-success" role="alert">
                        <strong>Hey!</strong> <?= $_SESSION['message'] ?>
                        <button type="button" class="btn-close bg-dark" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                    unset($_SESSION['message']);
                }
                ?>
            </div>
            <div class="card">
                <div class="card-header top">
                    <h4 class="text-dark">المنتجات</h4>
                </div>
                <div class="card-body text-center" id="products_table">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $products = getAll("products");
                            if (mysqli_num_rows($products) > 0) {
                                // while ($item = mysqli_fetch_assoc($category)) {
                                foreach ($products as $item) {
                            ?>
                                    <tr>
                                        <td><?= $item['id']; ?></td>
                                        <td><?= $item['name']; ?></td>
                                        <td>
                                            <img src="../uploads/<?= $item['image']; ?>" width="100px" height="100px" alt="<?= $item['name']; ?>">
                                        </td>
                                        <td><?= $item['status'] == '0' ? "visible" : "Hidden" ?></td>
                                        <td>
                                            <a href="edit-product.php?id=<?= $item['id']; ?>" class="btn btn-sm btn-info">Edit</a>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger delete_product_btn" value="<?= $item['id']; ?>">Delete</button>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "No record found";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>