<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;

include('include/condb.php');



?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>เอกสารหมายเลข มคอ.5</title>

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

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <table align="center" width="762">
                            <tr>
                                <td>
                                    <h1 class="h3 mb-0 text-gray-800">กรอบมาตรฐานคุณวุฒิระดับอุดมศึกษาแห่งชาติประเภท5</h1>
                                </td>
                            </tr>
                        </table>

                    </div>

                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-body">

                                    <!-- เนื้อหา -->

                                    <form action="mko5_6_save.php" method="POST">


                                        <center>
                                            <h1 class="h3 mb-0 text-gray-800">หมวดที่ 6 แผนการปรับปรุง</h1>
                                        </center>

                                        </td>
                                        </tr>
                                        </table>

                                        <h5>1.ความก้าวหน้าของการปรับปรุงการเรียนการสอนตามที่เสนอในรายงาน/รายวิชาที่ผ่านมา</h5>


                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">แผนการปรับปรุงที่เสนอในภาคการศึกษา/ปีการศึกษาที่ผ่านมา</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="io" placeholder="(มี ไม่มี)" ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">ผลการดำเนินงาน</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="io1" placeholder="(มี ไม่มี)" ?>
                                            </div>
                                        </div>
                                        <h5>ข้อเสนอแผนการปรับปรุงสำหรับภาคการศึกษา/ปีการศึกษาต่อไป</h5>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">ข้อเสนอแผนการปรับปรุงสำหรับภาคการศึกษา/ปีการศึกษาต่อไป</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="io2" placeholder="ข้อเสนอ" ?>
                                                <input type="text" class="form-control" name="io3" placeholder="กำหนดเวลาที่แล้วเสร็จ" ?>
                                                <input type="text" class="form-control" name="io4" placeholder="ผู้รับผิดชอบ" ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">4.ข้อเสนอแนะของอาจารย์ผู้รับผิดชอบรายวิชา ต่ออาจารย์ผู้รับผิดชอบหลักสูตร</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="io5" placeholder="(มี ไม่มี)" ?>
                                            </div>
                                        </div>



                                        <center>
                                            <input type="hidden" name="id_mko" value="<?php echo $_GET["id_mko"]; ?>">
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