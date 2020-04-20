<?php
include('include/condb.php');
include('include/chklogin.php');
$query = "SELECT 
* ,


(
SELECT COUNT(a.id)  FROM dbcourse_add AS  a 
INNER JOIN db_mko3_1 AS mk1 ON a.id = mk1.id_mko
INNER JOIN db_mko3_2 AS mk2 ON a.id = mk2.id_mko
INNER JOIN db_mko3_3 AS mk3 ON a.id = mk3.id_mko
INNER JOIN db_mko3_4 AS mk4 ON a.id = mk4.id_mko
INNER JOIN db_mko3_5 AS mk5 ON a.id = mk5.id_mko
INNER JOIN db_mko3_6 AS mk6 ON a.id = mk6.id_mko
INNER JOIN db_mko3_7 AS mk7 ON a.id = mk7.id_mko
 WHERE a.id = aa.id
) AS COUNT_MKO3




FROM dbcourse_add AS  aa";
$result = mysqli_query($condb, $query);
$i = 0
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>รายวิชา</title>

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
                        <h1 class="h3 mb-0 text-gray-800">รายวิชา</h1>
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
                                                    <th width="">ชื่อวิชาภาษาอังกฤษ</th>
                                                    <th width="">หลักสูตรและประเภทรายวิชา</th>
                                                    <th width="">หน่วยกิต</th>
                                                    <th width="">อาจารย์ผู้รับผิดชอบรายวิชา</th>
                                                    <th width="">ปีการศึกษา</th>
                                                    <th width="">ภาคเรียน</th>
                                                    <th width="">ส่งมคอ. 3</th>
                                                    <th width="">ส่งมคอ. 4</th>
                                                    <th width="">ส่งมคอ. 5</th>
                                                    <th width="">ส่งมคอ. 6</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php while ($row = mysqli_fetch_array($result)) { ?>
                                                    <tr>
                                                        <td class="text-center"><?php echo ++$i; ?></td>
                                                        <td><?php echo $row['Coursecode']; ?></td>
                                                        <td><?php echo $row['Thaisubjectname']; ?></td>
                                                        <td><?php echo $row['Englishsubjectname']; ?></td>
                                                        <td><?php echo $row['Curriculumandcoursetype']; ?></td>
                                                        <td><?php echo $row['credit']; ?></td>
                                                        <td><?php echo $row['nameteacher']; ?></td>
                                                        <td><?php echo $row['year']; ?></td>
                                                        <td><?php echo $row['semester']; ?></td>
                                                        <td class="text-center"><?php echo $COUNT_MKO3 = ($row['COUNT_MKO3'] > 0) ? 'ส่งแล้ว' : 'ยังไม่ส่ง'; ?></td>
                                                        <td class="text-center">ยังไม่ส่ง</td>
                                                        <td class="text-center">ยังไม่ส่ง</td>
                                                        <td class="text-center">ยังไม่ส่ง</td>

                                                    </tr>
                                                <?php  } ?>
                                            </tbody>
                                        </table>

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