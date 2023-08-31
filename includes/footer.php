<script src="./assets/jquery-3.7.0.min.js"></script>
<script src="assets/bootstrap-5.3.1-dist/js/bootstrap.bundle.js"></script>

<!-- Alertify js -->
<script src="assets/Alertify js/alertify.min.js"></script>

<script src="assets/js/custom.js"></script>

<script>
    alertify.set('notifier', 'position', 'top-center');
    <?php
    if (isset($_SESSION['message'])) {
    ?>
        alertify.success('<?= $_SESSION['message'] ?>');

    <?php
        unset($_SESSION['message']);
    }
    ?>
</script>

</body>

</html>