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
                    <h4 class="text-dark">إضافة تصنيف جديد</h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="" class="fw-bold h5">اسم المنتج</label>
                                <input type="text" name="name" class="form-control mb-3" placeholder="ادخل اسم المنتج" required>
                            </div>
                            <div class="col-md-12">
                                <label for="" class="fw-bold h5">الماركة</label>
                                <input type="text" name="slug" class="form-control mb-3" placeholder="ادخل الماركة">
                            </div>
                            <div class="col-md-12">
                                <label for="" class="fw-bold h5">الوصف</label>
                                <textarea rows="3" name="description" class="form-control mb-3" placeholder="ادخل وصف المنتج"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="" class="fw-bold h5">قم برفع صورة</label>
                                <input type="file" name="image" class="form-control mb-3">
                            </div>
                            <div class="col-md-12">
                                <label for="" class="fw-bold h5">Meta Title</label>
                                <input type="text" name="meta_title" placeholder="Enter meta-title" class="form-control h6 mb-3">
                            </div>
                            <div class="col-md-12">
                                <label for="" class="fw-bold h5">Meta description</label>
                                <textarea rows="3" name="meta_description" class="form-control h6 text-muted mb-3" placeholder="Enter meta description"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="" class="fw-bold h5">Meta keywords</label>
                                <textarea rows="3" name="meta_keywords" class="form-control mb-3" placeholder="Enter meta keywords"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold h5">غير متاح</label>
                                <input type="checkbox" name="status">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="fw-bold h5">popular</label>
                                <input type="checkbox" name="popular">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn bton text-dark fw-bold h6 mt-3" name="add_category_btn">إضافة</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>