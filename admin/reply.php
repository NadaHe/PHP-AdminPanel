<?php
include('includes/header.php');
// include('../middleware/adminMiddleware.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4>Reply</h4>
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
                                            <a href="mailto:<?= $item['email'] ?>" class="btn btn-primary"><i class="fa fa-envelope"></i> send email</a>
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