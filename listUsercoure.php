<?php
include('include/condb.php');
include('include/chklogin.php');
$query = "SELECT * FROM dbcourseteacher where 1 ";
$result = mysqli_query($condb, $query);
$i = 0;


// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';
// exit;


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>รายวิชาที่เปิดสอน</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
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
                        <h1 class="h3 mb-0 text-gray-800">รายวิชาที่เปิดสอน</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div>
                                    <div class="card-body">

                                        <table class="table table-bordered" id="dataTable" width="" cellspacing="0">
                                            <thead>

                                                <tr class="text-center">
                                                    <th width="">#</th>
                                                    <th width="">รหัสวิชา</th>
                                                    <th width="">ชื่อวิชาภาษาไทย</th>
                                                    <th width="">หลักสูตรและประเภทรายวิชา</th>
                                                    <th width="">หน่วยกิต</th>
                                                    <?php if ($_SESSION['satatus'] == 'admin') { ?>
                                                        <th width="">จัดการ</th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php while ($row = mysqli_fetch_array($result)) { ?>
                                                    <tr>
                                                        <td class="text-center"><?php echo ++$i; ?></td>
                                                        <td><?php echo $row['course']; ?></td>
                                                        <td><?php echo $row['namesub']; ?></td>
                                                        <td><?php echo $row['courseObjectives']; ?></td>
                                                        <td><?php echo $row['cradit']; ?></td>


                                                        <?php if ($_SESSION['satatus'] == 'admin') { ?>
                                                            <td class="text-center">


                                                                <a href="coursecoure_update.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning">แก้ไข</a>
                                                                ||
                                                                <a href="coursecoure_del.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Do you want to delete this record? !!!')" class="btn btn-sm btn-danger">ลบ</a>

                                                            </td>

                                                        <?php } ?>



                                                        </td>
                                                    </tr>
                                                <?php  } ?>
                                            </tbody>
                                        </table>
                                        <?php if ($_SESSION['satatus'] == 'admin') { ?>
                                            <a href="coursecoure_add.php" class="btn btn-sm btn-primary">เพิ่มข้อมูล</a>
                                        <?php } ?>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2019</span>
                        </div>
                    </div>
                </footer>
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