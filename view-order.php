<?php
include('functions/userfunctions.php');  // to get the access for database
include('includes/header.php');
include('authenticate.php');

if (isset($_GET['t'])) {
    $tracking_no = $_GET['t'];
    $orderData = checkTrackingNoValid($tracking_no);
    if (mysqli_num_rows($orderData) < 0) {
?>
        <h4>something went wrong</h4>
    <?php
        die();
    }
} else {
    ?>
    <h4>something went wrong</h4>
<?php
    die();
}
$data = mysqli_fetch_array($orderData);
?>

<div class="py-5">
    <div class="container">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <nav style="--bs-breadcrumb-divider-flipped: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">الرئيسية</a></li>
                            <li class="breadcrumb-item"><a href="my_orders.php">الاوردرات</a></li>
                            <li class="breadcrumb-item active" aria-current="page">عرض تفاصيل</li>
                        </ol>
                    </nav>
                    <div class="card">
                        <div class="card-header bot">
                            <span class="text-white fs-4"> عرض تفاصيل الاوردر</span>
                            <a href="my_orders.php" class="btn btn-danger float-end"><i class="fa fa-reply"></i> Back</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="text-danger">بيانات المستلم</h4>
                                    <div class="underline mb-4"></div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label class="fw-bold">الاسم</label>
                                            <div class="border p-1">
                                                <?= $data['name'] ?>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="fw-bold">البريد الالكترونى</label>
                                            <div class="border p-1">
                                                <?= $data['email'] ?>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="fw-bold">رقم الهاتف</label>
                                            <div class="border p-1">
                                                <?= $data['phone'] ?>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="fw-bold">رقم الشحنة</label>
                                            <div class="border p-1">
                                                <?= $data['tracking_no'] ?>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="fw-bold">العنوان</label>
                                            <div class="border p-1">
                                                <?= $data['address'] ?>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="fw-bold">الرقم البريدى</label>
                                            <div class="border p-1">
                                                <?= $data['pincode'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="text-danger">تفاصيل الاوردر</h4>
                                    <div class="underline mb-4"></div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>المنتج</th>
                                                <th>السعر</th>
                                                <th>الكمية</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $userId = $_SESSION['auth_user']['user_id'];
                                            $order_query = "SELECT o.id as oid, o.tracking_no , o.user_id , oi.* , oi.qty as orderqty, p.*FROM orders o , order_items oi , products p
                                            WHERE o.user_id='$userId' AND oi.order_id=o.id AND p.id=oi.prod_id AND o.tracking_no= '$tracking_no'";

                                            $order_query_run = mysqli_query($con, $order_query);

                                            if (mysqli_num_rows($order_query_run) > 0) {
                                                foreach ($order_query_run as $item) {
                                            ?>
                                                    <tr>
                                                        <td class="align-middle">
                                                            <img src="uploads/<?= $item['image']; ?>" width="50px" height="50px" alt="<?= $item['name']; ?>">
                                                        </td>
                                                        <td class="align-middle">
                                                            <?= $item['price']; ?> جم
                                                        </td>
                                                        <td class="align-middle">
                                                            <?= $item['orderqty']; ?>
                                                        </td>
                                                    </tr>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <h4>الإجمالى: <span class=" fw-bold"><?= $data['total_price']; ?> جم</span></h4>
                                    <hr>

                                    <label class="fw-bold">طريقة الدفع</label>
                                    <div class="border p-1 mb-3">
                                        <?= $data['payment_mode'] ?>
                                    </div>

                                    <label class="fw-bold">Status</label>
                                    <div class="border p-1 mb-3">
                                        <?php
                                        if ($data['status'] == 0) {
                                            echo "Pending";
                                        }else if($data['status'] == 1){
                                            echo "completed";
                                        }else if($data['status'] == 2){
                                            echo "cancelled";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>