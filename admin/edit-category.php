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

                <div class="alert alert-dismissible fade show text-white bg-danger text-center" role="alert">
                    <strong class="text-white">Hey!</strong> <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            <?php
                unset($_SESSION['message']);
            }
            ?>

            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $category = getByID("categories", $id);
                if (mysqli_num_rows($category) > 0) {
                    $data = mysqli_fetch_array($category);
            ?>
                    <div class="card">
                        <div class="card-header top">
                            <h4>Edit category
                                <a href="category.php" class="btn btn-warning float-start">Back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="code.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" name="category_id" value="<?= $data['id'] ?>">
                                        <label for="" class="fw-bold h5">Name</label>
                                        <input type="text" name="name" value="<?= $data['name'] ?>" class="form-control mb-3" placeholder="Enter name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="fw-bold h5">Slug</label>
                                        <input type="text" name="slug" value="<?= $data['slug'] ?>" class="form-control mb-3" placeholder="Enter slug">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="fw-bold h5">Description</label>
                                        <textarea rows="3" name="description" class="form-control mb-3" placeholder="Enter description"><?= $data['description'] ?></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="fw-bold h5">Upload Image</label>
                                        <input type="file" name="image" class="form-control mb-3">
                                        <label for="" class="fw-bold h5 ms-2"> Current Image</label>
                                        <input type="hidden" name="old_image" value="<?= $data['image'] ?>">
                                        <img src="../uploads/<?= $data['image'] ?>" alt="" width="120px" height="120px">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="fw-bold h5">Meta Title</label>
                                        <input type="text" name="meta_title" value="<?= $data['meta_title'] ?>" placeholder="Enter meta-title" class="form-control mb-3">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="fw-bold h5">Meta description</label>
                                        <textarea rows="3" name="meta_description" class="form-control mb-3" placeholder="Enter meta description"><?= $data['meta_description'] ?></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="fw-bold h5">Meta keywords</label>
                                        <textarea rows="3" name="meta_keywords" class="form-control mb-3" placeholder="Enter meta keywords"><?= $data['meta_keywords'] ?></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="fw-bold h5">غير متاح</label>
                                        <input type="checkbox" <?= $data['status'] ? "checked" : "" ?> name="status">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="fw-bold h5">popular</label>
                                        <input type="checkbox" <?= $data['popular'] ? "checked" : "" ?> name="popular">
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-warning mt-3 fw-bold h6" name="update_category_btn">تحديث</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            <?php
                } else {
                    echo "Category not found";
                }
            } else {
                echo "Id is missing from url";
            }
            ?>

        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>