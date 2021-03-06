<?php
include('include/condb.php');
include('include/chklogin.php');


// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';

if ($_SESSION['login_id']) {
    //2. query ข้อมูลจากตาราง: 
    $sql = "SELECT * FROM users WHERE id = $_SESSION[login_id]";
    $result = mysqli_query($condb, $sql);
    $row = mysqli_fetch_array($result);
} else {
    echo "<script>";
    echo "window.history.back()";
    echo "</script>";
}
?>

<head>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>แก้ไขข้อมูลส่วนตัว</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!--  -->
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    <div class="limiter" style="padding-top: 200px">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                <div class="container">

                    <div class="card o-hidden border-0 shadow-lg my-5 ">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">แก้ไขข้อมูลส่วนตัว</h1>
                                        </div>
                                        <form class="login100-form validate-form flex-sb flex-w" action="personal_db.php" method="post">
                                            <div class="form-group row">
                                                <div class="col-sm-6 ">
                                                    <input class="form-control" type="text" name="name" required placeholder="ชื่อ" value="<?php echo $row['name']; ?>">
                                                    <span class="focus-input100"></span>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input class="form-control" type="text" name="sername" required placeholder="นามสกุล" value="<?php echo $row['sername']; ?>">
                                                    <span class="focus-input100"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" type="text" name="faculty" required placeholder="สาขา" value="<?php echo $row['faculty']; ?>">
                                                    <span class="focus-input100"></span>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input class="form-control" type="text" name="tokenline" required placeholder="tokenline" value="<?php echo $row['tokenline']; ?>">
                                                    <span class="focus-input100"></span>
                                                </div>
                                            </div>
                                            <input type="hidden" name="id" value="<?php echo $_SESSION['login_id']; ?>">
                                            <input type="submit" name="submit" value="บันทึก" class="btn btn-primary btn-user btn-block">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>
</body>

</html>