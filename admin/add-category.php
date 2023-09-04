<?php
// include('../middleware/adminMiddleware.php');
include('includes/header.php');
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

            <div class="card">
                <div class="card-header bg-primary">
                    <h4>add category</h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Slug</label>
                                <input type="text" name="slug" class="form-control" placeholder="Enter slug">
                            </div>
                            <div class="col-md-12">
                                <label for="">Description</label>
                                <textarea rows="3" name="description" class="form-control" placeholder="Enter description"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="">Upload Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label for="">Meta Title</label>
                                <input type="text" name="meta_title" placeholder="Enter meta-title" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label for="">Meta description</label>
                                <textarea rows="3" name="meta_description" class="form-control" placeholder="Enter meta description"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="">Meta keywords</label>
                                <textarea rows="3" name="meta_keywords" class="form-control" placeholder="Enter meta keywords"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="">Status</label>
                                <input type="checkbox" name="status">
                            </div>
                            <div class="col-md-6">
                                <label for="">popular</label>
                                <input type="checkbox" name="popular">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary mt-3" name="add_category_btn">Add Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>