<!DOCTYPE html>
<html lang="en">

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
                                    <h1 class="h3 mb-0 text-gray-800">กรอบมาตรฐานคุณวุฒิระดับอุดมศึกษาแห่งชาติประเภท3</h1>
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
                                    <table align="center" width="500">
                                        <tr>
                                            <td>
                                                <center>
                                                    <h1 class="h3 mb-0 text-gray-800">หมวดที่ 4 การพัฒนาการเรียนรู้ของนักศึกษา</h1>
                                                </center>
                                                <h5>คุณธรรม จริยธรรม
                                                    <br>
                                                    <label for="story">1.1คุณธรรม จริยธรรมที่ต้องพัฒนา</label>

                                                    <textarea id="story" name="story" rows="5" cols="120">
                     นักศึกษาต้องมีคุณธรรม จริยธรรมเพื่อให้สามารถดำเนินชีวิตร่วมกับผู้อื่นในสังคมอย่างราบรื่น และเป็น
                     ประโยชน์ต่อส่วนรวม นอกจากนั้นคอมพิวเตอร์เป็นอุปกรณ์ที่เกี่ยวข้องกับความมั่นคงของประเทศ ความปลอดภัยใน
                     ชีวิตประจำวัน ความสำเร็จทางธุรกิจ ผู้พัฒนาและ/หรือผู้ประยุกต์โปรแกรมจำเป็นต้องมีความรับผิดชอบต่อผลที่
                     เกิดขึ้น เช่นเดียวกับการประกอบอาชีพในสาขาอื่่น ๆ อาจารย์ที่สอนในแต่ละวิชาต้องพยายามสอดแทรกเรื่องที่
                     เกี่ยวข้องกับสิ่งต่อไปนี้ทั้ง 7ข้อ เพื่อให้นักศึกษาสามารถพัฒนาคุณธรรม จริยธรรมอย่างน้อย 2ข้อตามที่ระบุไว้ในตาราง
                     การกระจายความรับผิดชอบต่อผลการเรียนรู้(Curriclum Mapping) ภายในเล่มมคอ. 2ของหลักสูตร
                                     </textarea>
                                                    <form action="#" method="post">
                                                        <input type="checkbox" name="gender" value="Male">1.ตระหนักในคุณค่าและคุณธรรม จริยธรรม เสียสละ แลพซื่อสัตว์สุจริต</input>
                                                        <br>
                                                        <input type="checkbox" name="gender" value="Female">2.มีวินัย ตรงต่อเวลา และความรับผิดชอบต่อตนเองและสังคม</input>
                                                        <br>
                                                        <input type="checkbox" name="gender" value="Male">3.มีภาวะความเป็นผู้นำและผู้ตาม สามารถทำงานเป็นทีมและสามารถแก้ไขขัดแย้งและ
                                                        ลำดับความสำคัญ</input>
                                                        <br>
                                                        <input type="checkbox" name="gender" value="Female">4.เครพสิทธิแลพรับฟังความคิดเห็นของผู้อื่นรวมทั้งเคารพในคุณค่าและศักดิ์ศรี
                                                        ความเป็นมนุษย์</input>
                                                        <br>
                                                        <input type="checkbox" name="gender" value="Male">5.เคารพกฏระเบียบและขอบังตับต่างๆ ขององค์กรและสังคม </input>
                                                        <br>
                                                        <input type="checkbox" name="gender" value="Male">1.ตระหนักในคุณค่าและคุณธรรม จริยธรรม เสียสละ แลพซื่อสัตว์สุจริต</input>
                                                        <br>
                                                        <input type="checkbox" name="gender" value="Male">1.ตระหนักในคุณค่าและคุณธรรม จริยธรรม เสียสละ แลพซื่อสัตว์สุจริต</input>
                                                        <br>
                                                        <input type="submit" name="submit" value="Submit" />
                                                    </form>
                                                    <?php
                                                    if (isset($_POST['gender'])) {
                                                        echo $_POST['gender']; // Displays value of checked checkbox.
                                                    }
                                                    ?>

                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <h5>คำอธิบายรายวิชา</h5>
                                    <form>

                                        <div class="form-group row">
                                            <!-- <label class="col-sm-2 col-form-label">1.1</label> -->
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="comcode">
                                            </div>
                                        </div>
                                        <h5>จำนวนชั่วโมงที่ใช้ต่อภาคการศึกษา</h5>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">บรรยาย</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nameth">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">สอนเสริม</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nameeg">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">การฝึกปฏิบัติ/งานภาคสนามการฝึกงาน</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="kit">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">การศึกษาด้วยตัวเอง</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="course">
                                            </div>
                                        </div>
                                        <h5>จำนวนชั่วโมงต่อสัปดาห์ที่อาจารย์ให้คำปรึกษาและแนะนำทางวิชาการแก่นักศึกษาเป็นรายบุคคล</h5>
                                        <input type="text" class="form-control" name="course">

                                </div>
                                <center> <button>หมวดที่4</button></center>
                            </div>
                            <br>




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