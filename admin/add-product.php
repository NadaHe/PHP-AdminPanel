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

                <div class="alert alert-dismissible fade show bg-warning text-center text-white" role="alert">
                    <strong class="text-white">Hey!</strong> <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            <?php
                unset($_SESSION['message']);
            }
            ?>
            <!-- /////////////////////////////////////////////////////// -->

            <div class="card">
                <div class="card-header top">
                    <h4 class="text-dark">إضافة منتج جديد</h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="" class="fw-bold h5">اختر تصنيفاً</label>
                                <select name="category_id" class="form-select mb-3">
                                    <option selected>اختر تصنيفاً</option>
                                    <?php
                                    $categories = getAll("categories");
                                    if (mysqli_num_rows($categories) > 0) {
                                        foreach ($categories as $item) {
                                    ?>
                                            <option value="<?= $item['id']; ?>"><?= $item['name']; ?></option>

                                    <?php
                                        }
                                    } else {
                                        echo "No categories found";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="" class="fw-bold h5">اسم المنتج</label>
                                <input type="text" required name="name" class="form-control mb-3" placeholder="Enter name">
                            </div>
                            <div class="col-md-12">
                                <label for="" class="fw-bold h5">الماركة</label>
                                <input type="text" name="slug" class="form-control mb-3" placeholder="Enter slug">
                            </div>
                            <div class="col-md-12">
                                <label for="" class="fw-bold h5">عنوان وصف المنتج</label>
                                <textarea rows="3" name="small_description" class="form-control mb-3" placeholder="Enter small description"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="" class="fw-bold h5">وصف المنتج</label>
                                <textarea rows="3" name="description" class="form-control mb-3" placeholder="Enter description"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold h5">السعر الاصلى</label>
                                <input type="text" name="original_price" class="form-control mb-3" placeholder="Enter the Original price " required>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold h5">السعر بعد الخصم</label>
                                <input type="text" name="selling_price" class="form-control mb-3" placeholder="Enter the Selling price">
                            </div>
                            <div class="col-md-12">
                                <label for="" class="fw-bold h5">قم برفع صورة</label>
                                <input type="file" name="image" class="form-control mb-3">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="" class="fw-bold h5">Quantity</label>
                                    <input type="number" name="qty" class="form-control mb-3" placeholder="Enter the Quantity">
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="fw-bold h5">غير متاح</label> <br>
                                    <input type="checkbox" name="status">
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="fw-bold h5">Trending</label><br>
                                    <input type="checkbox" name="trending">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="" class="fw-bold h5">Meta Title</label>
                                <input type="text" name="meta_title" placeholder="Enter meta-title" class="form-control mb-3">
                            </div>
                            <div class="col-md-12">
                                <label for="" class="fw-bold h5">Meta description</label>
                                <textarea rows="3" name="meta_description" class="form-control mb-3" placeholder="Enter meta description"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="" class="fw-bold h5">Meta keywords</label>
                                <textarea rows="3" name="meta_keywords" class="form-control mb-3" placeholder="Enter meta keywords"></textarea>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn bton text-dark fw-bold h6 mt-3" name="add_product_btn">إضافة المنتج</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>