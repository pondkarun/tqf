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


                                        <center>
                                            <h1 class="h3 mb-0 text-gray-800">หมวดที่ 5 การประเมินรายวิชา</h1>
                                        </center>

                                        </td>
                                        </tr>
                                        </table>




                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">1.ผลการประเมินรายวิชาโดยนักศึกษาคะแนนรวมทั้งหมด</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" name="coursename" placeholder="คะแนนรวมทั้งหมด" ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">1.1 ข้อวิพากษ์ที่สำคัญจากผลการประเมินโดยนักศึกษา</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="coursetype" placeholder="ข้อวิพากษ์ที่สำคัญ" ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">1.2.ความเห็นของอาจารย์ผู้สอนต่อข้อวิพากษต์ตามข้อ1.1 </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="responsibleteacher" placeholder="มีความเห๋นสอดคล้องกัน" ?>
                                            </div>
                                        </div>

                                        <h5>2.ผลการประเมินรายวิชาโดยวิธีอื่น</h5>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">2.1ข้อวิพากษ์ที่สำคัญจากผลการประเมินโดยวิธีอื่น </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="responsibleteacher" placeholder="(ถ้ามี)" ?>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">2.2.ความเห็นของอาจารย์ผู้สอนต่อข้อวิพากษต์ตามข้อ2.1</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="responsibleteacher" placeholder="มีความเห๋นสอดคล้องกัน" ?>
                                            </div>
                                        </div>




                                        <center> <button type="submit" class="btn btn-sm btn-primary" href="mko3_2.php">ไปหมวดที่2</button>
                                            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                                            <button type="submit" name="save" class="col-sm-2  btn btn-primary ">
                                                บันทึก

                                            </button>
                                            <button type="submit" name="cancel" class="col-sm-2  btn btn-danger">

                                                ยกเลิก

                                            </button>
                                    </form>
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