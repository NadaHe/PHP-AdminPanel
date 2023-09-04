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
                <div class="card-header  bg-primary">
                    <h4>Categories</h4>
                </div>
                <div class="card-body" id="category_table">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $category = getAll("categories");
                            if (mysqli_num_rows($category) > 0) {
                                // while ($item = mysqli_fetch_assoc($category)) {
                                foreach ($category as $item) {
                            ?>
                                    <tr>
                                        <td><?= $item['id']; ?></td>
                                        <td><?= $item['name']; ?></td>
                                        <td>
                                            <img src="../uploads/<?= $item['image']; ?>" width="120px" height="120px" alt="<?= $item['name']; ?>">
                                        </td>
                                        <td><?= $item['status'] == '0' ? "visible" : "Hidden" ?></td>
                                        <td>
                                            <a href="edit-category.php?id=<?= $item['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <!-- <form action="code.php" method="POST">
                                                <inpiut type="hidden" name="category_id" value="<?= $item['id']; ?>">
                                                    <button type="submit" name="delete_category_btn" class="btn btn-sm btn-danger">Delete</button>
                                            </form> -->
                                            <button type="button" class="btn btn-sm btn-danger delete_category_btn" value="<?= $item['id']; ?>">Delete</button>
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