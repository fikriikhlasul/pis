<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Access Blocked</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('sbadmin2/assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('sbadmin2/assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

   
                <!-- Begin Page Content -->
                <div class="container">
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <!-- 404 Error Text -->
                    <div class="text-center">
                        <div class="error mx-auto" data-text="403">403</div>
                        <p class="lead text-gray-800 mb-5">Access Forbidden</p>
                        <p class="text-gray-500 mb-0"> </p>
                        <?php
                        
                        $role_id = $user['role_id'];
                        if($role_id > 1)
                        {
                        ?>
                        <a href="<?= base_url('user/dashboard'); ?>">&larr; Back to Dashboard</a>
                        <?php }else
                        {?>
                            <a href="<?= base_url('admin/dashboard'); ?>">&larr; Back to Dashboard</a>
                        <?php }
                        
                        
                        ?>
                    </div>

                </div>
                <!-- /.container-fluid -->

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('sbadmin2/assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('sbadmin2/assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('sbadmin2/assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('sbadmin2/assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html> 