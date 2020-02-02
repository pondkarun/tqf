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
                        <h1 class="h3 mb-0 text-gray-800"> รายวิชา</h1>
                        <a href="course_add.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> รายวิชา</a>
                    </div>

                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-body">

                                    <!-- เนื้อหา -->

                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>ลำดับ</th>
                                                    <th>รหัสวิชา</th>
                                                    <th>ชื่อวิชา</th>
                                                    <th>หน่วยกิต</th>
                                                    <th>กลุ่มเรียน</th>
                                                    <th>อาจารย์ผู้สอน </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>bcom1</td>
                                                    <td>ระบบฐานข้อมูล</td>
                                                    <td>4</td>
                                                    <td>101</td>
                                                    <td>ผศ.ภัทรมน กล้าอาษา</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>bcom2</td>
                                                    <td>ระบบฐานข้อมูล1</td>
                                                    <td>3</td>
                                                    <td>102</td>
                                                    <td>อ.โอปอ กลับสกุล</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>bcom3</td>
                                                    <td>ระบบฐานข้อมูล2</td>
                                                    <td>1</td>
                                                    <td>103</td>
                                                    <td>ดร.ลวัณกร มุกดาสนิท</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>bcom4</td>
                                                    <td>ระบบฐานข้อมูล3</td>
                                                    <td>2</td>
                                                    <td>104</td>
                                                    <td>ดร.สรุชาติ บัวชุม</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>bcom5</td>
                                                    <td>ระบบฐานข้อมูล4</td>
                                                    <td>3</td>
                                                    <td>105</td>
                                                    <td>ดร.ณัฐพล ธนเชวงสกุล</td>
                                                </tr>

                                            </tbody>
                                        </table>
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>



    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>

</body>

</html>