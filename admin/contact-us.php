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
                <div class="card-header bg-primary">
                    <h4>Messages</h4>
                </div>
                <div class="card-body" id="Messages_table">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>city</th>
                                <th>file</th>
                                <th>sent_at</th>
                                <th>Reply</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $contact = getAll("contact");
                            if (mysqli_num_rows($contact) > 0) {
                                foreach ($contact as $item) {
                            ?>
                                    <tr>
                                        <td><?= $item['id']; ?></td>
                                        <td><?= $item['name']; ?></td>
                                        <td><?= $item['email']; ?></td>
                                        <td><?= $item['phone']; ?></td>
                                        <td><?= $item['city']; ?></td>
                                        <td>
                                            <a download href="../uploaded_files/<?= $item['file']; ?>" alt="<?= $item['name']; ?>"> Download the PDF</a>
                                        </td>
                                        <td><?= $item['sent_at']; ?></td>
                                        <td>
                                            <a href="reply.php?id=<?= $item['id']; ?>" class="btn btn-sm btn-primary">Reply</a>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger delete_Message_btn" value="<?= $item['id']; ?>">Delete</button>
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