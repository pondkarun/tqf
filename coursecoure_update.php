<?php
//1. เชื่อมต่อ database: 
include('include/condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
include('include/chklogin.php');



//2. query ข้อมูลจากตาราง: 
$sql = "SELECT * FROM dbcourseteacher WHERE id = $_GET[id] ";
$result = mysqli_query($condb, $sql);
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>เพิ่มรายวิชา</title>

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
                        <h1 class="h3 mb-0 text-gray-800">เพิ่มรายวิชาที่เปิดสอน</h1>
                        <!-- <a href="course.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> เพิ่มรายวิชา</a> -->
                    </div>

                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-body">

                                    <!-- เนื้อหา -->

                                    <form action="coursecoure_updatedb.php" method="POST">
                                        <div class="form-group row">

                                            <div class="col-md-12 col-lg-6">
                                                <label for="">รหัสวิชา</label>
                                                <input type="text" name="course" class="form-control form-control-user" placeholder="รหัสวิชา" value="<?php echo $row['course']; ?>">
                                            </div>

                                            <div class="col-md-12 col-lg-6">
                                                <label for="">ชื่อวิชาภาษาไทย</label>
                                                <input type="text" name="namesub" class="form-control form-control-user" placeholder="ชื่อวิชาภาษาไทย" value="<?php echo $row['namesub']; ?>">
                                            </div>

                                            <div class="col-md-12 col-lg-6">
                                                <label for="">หน่วยกิต</label>
                                                <input type="text" name="cradit" class="form-control form-control-user" placeholder="หน่วยกิต" value="<?php echo $row['cradit']; ?>">
                                            </div>


                                            <div class="col-md-12 col-lg-6">
                                                <label for="">หลักสูตรและประเภทรายวิชา</label>
                                                <input type="text" name="courseObjectives" class="form-control form-control-user" placeholder="หลักสูตรและประเภทรายวิชา" value="<?php echo $row['courseObjectives']; ?>">
                                            </div>

                                        </div>
                                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                                        <button type="submit" name="save" class="col-sm-2  btn btn-primary ">
                                            บันทึก
                                        </button>

                                    </form>
                                </div>
                            </div>


                        </div>


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