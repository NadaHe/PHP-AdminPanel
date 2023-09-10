<?php
include('functions/userfunctions.php');  // to get the access for database
include('includes/header.php');
include('authenticate.php')
?>

<div class="py-5">
    <div class="container">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <nav style="--bs-breadcrumb-divider-flipped: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">الرئيسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">الاوردرات</li>
                        </ol>
                    </nav>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Tracking No</th>
                                <th>الإجمالى</th>
                                <th>التاريخ</th>
                                <th>عرض</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $orders =  getOrders();

                            if (mysqli_num_rows($orders) > 0) {
                                foreach ($orders as $item) {
                            ?>
                                    <tr class="text-center">
                                        <td><?= $item['id']; ?></td>
                                        <td><?= $item['tracking_no']; ?></td>
                                        <td><?= $item['total_price']; ?></td>
                                        <td><?= $item['created_at']; ?></td>
                                        <td class="text-center">
                                            <a href="view-order.php?t=<?= $item['tracking_no']; ?>" class="btn text-danger">عرض تفاصيل</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="5">لا يوجد اوردرات حتى الان</td>
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