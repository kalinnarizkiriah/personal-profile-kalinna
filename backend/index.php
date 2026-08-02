<!DOCTYPE html>
<html lang="en">

<!-- ini bagian head -->
 <?php include 'partials/head.php'; ?>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
         <?php include 'components/sidebar.php'; ?>
        <!-- End Sidebar -->

        <div class="main-panel">
        <!-- ini bagian header -->
         <?php include 'components/header.php'; ?>

            <!-- ini bagian dashboard -->
         <?php include 'pages/dashboard.php'; ?>

            
            <!-- ini bagian footer -->
         <?php include 'components/footer.php'; ?>
        </div>

        <!-- Custom template | don't include it in your project! -->
        <!-- ini bagian footer -->
         <?php include 'partials/button-color.php'; ?>
        <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <?php include 'partials/script.php'; ?>
</body>

</html>