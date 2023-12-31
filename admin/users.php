<?php
include('includes/header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header top">
                    <h4 class="text-dark">Users
                        <a href="admins.php" class="btn btn-warning float-start">Admins</a> 
                    </h4>
                </div>
                <div class="card-body text-center">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>User_ID</th>
                                <th>User_Name</th>
                                <th>Email</th>
                                <th>Mobile Number</th>
                                <th>Registration Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $orders =  getAllUsers('users');

                            if (mysqli_num_rows($orders) > 0) {
                                foreach ($orders as $item) {
                            ?>
                                    <tr>
                                        <td><?= $item['id']; ?></td>
                                        <td><?= $item['name']; ?></td>
                                        <td><?= $item['email']; ?></td>
                                        <td><?= $item['phone']; ?></td>
                                        <td><?= $item['created_at']; ?></td>
                                    </tr>
                                <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="5">NO users yet</td>
                                </tr>
                            <?php
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