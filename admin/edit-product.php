<?php
include('includes/header.php');
// include('../middleware/adminMiddleware.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if (isset($_SESSION['message'])) {
            ?>

                <div class="alert alert-dismissible fade show bg-info text-white" role="alert">
                    <strong>Hey!</strong> <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            <?php
                unset($_SESSION['message']);
            }
            ?>
            <!-- /////////////////////////////////////////////////////// -->
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $product = getByID("products", $id);
                if (mysqli_num_rows($product) > 0) {
                    $data = mysqli_fetch_array($product);

            ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Product
                                <a href="products.php" class="btn btn-primary float-start">Back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="code.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="" class="mb-0">Select Category</label>
                                        <select name="category_id" class="form-select mb-3">
                                            <option selected>Select category</option>
                                            <?php
                                            $categories = getAll("categories");
                                            if (mysqli_num_rows($categories) > 0) {
                                                foreach ($categories as $item) {
                                            ?>
                                                    <option value="<?= $item['id']; ?>" <?= $data['category_id'] == $item['id'] ? "selected" : "" ?>><?= $item['name']; ?></option>

                                            <?php
                                                }
                                            } else {
                                                echo "No categories found";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <input type="hidden" name="product_id" value="<?= $data['id']; ?>">
                                    <div class="col-md-6">
                                        <label for="" class="mb-0">Name</label>
                                        <input type="text" required name="name" value="<?= $data['name']; ?>" class="form-control mb-3" placeholder="Enter name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="mb-0">Slug</label>
                                        <input type="text" name="slug" value="<?= $data['slug']; ?>" class="form-control mb-3" placeholder="Enter slug">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="mb-0">Small Description</label>
                                        <textarea rows="3" name="small_description" class="form-control mb-3" placeholder="Enter small description"><?= $data['small_description']; ?></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="mb-0">Description</label>
                                        <textarea rows="3" name="description" class="form-control mb-3" placeholder="Enter description"><?= $data['description']; ?></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="mb-0">Original price</label>
                                        <input type="text" name="original_price" value="<?= $data['original_price']; ?>" class="form-control mb-3" placeholder="Enter the Original price " required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="mb-0">Selling price</label>
                                        <input type="text" name="selling_price" value="<?= $data['selling_price']; ?>" class="form-control mb-3" placeholder="Enter the Selling price">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="mb-0">Upload Image</label>
                                        <input type="hidden" name="old_image" value="<?= $data['image']; ?>">
                                        <input type="file" name="image" class="form-control mb-3">
                                        <label for="" class="mb-0">Current Image</label>
                                        <img src="../uploads/<?= $data['image']; ?>" alt="Product image" width="100px" height="100px">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="" class="mb-0">Quantity</label>
                                            <input type="number" name="qty" value="<?= $data['qty']; ?>" class="form-control mb-3" placeholder="Enter the Quantity">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="" class="mb-0">Status</label> <br>
                                            <input type="checkbox" name="status" <?= $data['status'] == '0' ? '' : 'checked' ?>>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="" class="mb-0">Trending</label><br>
                                            <input type="checkbox" name="trending" <?= $data['trending'] == '0' ? '' : 'checked' ?>>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="mb-0">Meta Title</label>
                                        <input type="text" name="meta_title" value="<?= $data['meta_title']; ?>" placeholder="Enter meta-title" class="form-control mb-3">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="mb-0">Meta description</label>
                                        <textarea rows="3" name="meta_description" class="form-control mb-3" placeholder="Enter meta description"><?= $data['meta_description']; ?></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="mb-0">Meta keywords</label>
                                        <textarea rows="3" name="meta_keywords" class="form-control mb-3" placeholder="Enter meta keywords"><?= $data['meta_keywords']; ?></textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary mt-3" name="update_product_btn">Update Product</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            <?php
                } else {
                    echo "Product not found for given id";
                }
            } else {
                echo "id missing from URL";
            }
            ?>

        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>