<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;

include('include/condb.php');


$check = "SELECT username FROM `users` WHERE  username = '$_POST[username]'";
$result1 = mysqli_query($condb, $check) or die("Error in query: $sql" . mysqli_error());
$num = mysqli_num_rows($result1);
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>เอกสารหมายเลข มคอ.3</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include("include/sidebar.php"); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include("include/nav.php"); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <table align="center" width="762">
                            <tr>
                                <td>
                                    <h1 class="h3 mb-0 text-gray-800">กรอบมาตรฐานคุณวุฒิระดับอุดมศึกษาแห่งชาติประเภท4</h1>
                                </td>
                            </tr>
                        </table>
                        <a href="course.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>บันทึกข้อมูล</a>
                    </div>

                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-body">

                                    <!-- เนื้อหา -->

                                    <form action="mko3_1db.php" method="POST">

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">ชื่อสถาบันอุดมศึกษา</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="institutionname" placeholder="มหาวิทยาลัยราชภัฏจันทรเกษม " ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">วิทยาเขต/คณะ/สาขา</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="campus" placeholder="คณะวิทยาการจัดการ " ?>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <table align="center" width="500">
                                            <tr>
                                                <td>
                                                    <h1 class="h3 mb-0 text-gray-800">หมวดที่ 1 ข้อมูลโดยทั่วไป</h1>
                                                </td>
                                            </tr>
                                        </table>




                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">1.รหัสและชื่อรายวิชา</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="coursename" placeholder="BUSS4801 	การเตรียมฝึกประสบการณ์วิชาชีพทางบริหารธุรกิจ  " ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">2.จำนวนหน่วยกิต</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="credit" placeholder="2 หน่วยกิต (0-0-90) " ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">3.หลักสูตรและประเภทรายวิชา</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="coursetype" placeholder="แขนงวิชาการจัดการทรัพยากรมนุษย์  หลักสูตรบริหารธุรกิจบัณฑิต " ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">4.อาจารย์ผู้รับผิดชอบรายวิชาและอาจารย์ผู้สอน</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="responsibleteacher" placeholder="ศูนย์ฝึกประสบการณ์วิชาชีพและสหกิจศึกษา/คณะวิทยาการจัดการ/อาจารย์ผู้สอน/นางสาวดวงพร คงพิกุล " ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">5.ภาคการศึกษา/ชั้นปีที่่เรียน</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="semester" placeholder="2 / ชั้นปีที่ 3 " ?>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">6.วันที่จัดทำหรือปรับปรุงรายละเอียดของรายวิชาครั้งล่าสุด</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="dateofmaking" placeholder="ปีการศึกษา 2562 " ?>
                                            </div>
                                        </div>
                                        <!-- <center> <button type="submit" class="btn btn-sm btn-primary" href="mko3_2.php">ไปหมวดที่2</button>
                                            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                                            <button type="submit" name="save" class="col-sm-2  btn btn-primary "> -->
                                        บันทึก

                                        </button>
                                        <button type="submit" name="cancel" class="col-sm-2  btn btn-danger">

                                            ยกเลิก

                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
</body>

</html>