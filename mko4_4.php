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
                                    <form class="login100-form validate-form flex-sb flex-w" action="registerdb.php" method="post">
                                        <table align="center" width="500">
                                            <tr>
                                                <td>
                                                    <h1 class="h3 mb-0 text-gray-800">หมวดที่ 4 ลักษณะของประสบการณ์ภาคสนาม </h1>
                                                </td>
                                            </tr>
                                            <br>



                                        </table>
                                        <br>
                                        <center>
                                            <h5>คำอธิบายทั่วไปของประสบการณ์ภาคสนาม</h5>
                                            <form>



                                                <textarea id="story" name="story" rows="5" cols="120">
                                                การประยุกต์หลักการและทฤษฎีทางการตลาดการศึกษาแนวโน้มสภาพการ
                                                เปลี่ยนแปลงในหน่วยงานทางธุรกิจโดยการใช้กรณีศึกษาสถานการณ์จำลอง
                                                การเตรียมความพร้อมเกี่ยวกับทักษะการใช้ภาษาการใช้คอมพิวเตอร์การใช้
                                                เทคโนโลยีการพัฒนาบุคลิกภาพและการปรับตัวเข้ากับสภาพแวดล้อม
                                                สามารถทำงานเป็นทีมได้อย่างมีประสิทธิภาพการเสริมสร้างจรรยาบรรณใน
                                                วิชาชีพเพื่อเตรียมความพร้อมก่อนออกฝึกประสบการณ์วิชาชีพ 
                                                    </textarea>
                                        </center>

                                        <h6>2.ความรู้</h6>
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">1.1</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="courseObjectives1" placeholder="การเรียนรู้ในศาสตร์ทางด้านคอมพิวเตอร์ภาษาอังกฤษบุคลิกภาพและการสื่อสาร" ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">1.2</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="courseObjectives2" placeholder="การฝึกปฏิบัติงานในหน้าที่ต่างๆตามที่ได้รับมอบหมาย" ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">1.3</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="courseObjectives3" placeholder="การฝึกเพื่อแก้ไขปัญหาที่เกิดขึ้นเฉพาะหน้าการเผชิญกับการทางานจริง" ?>
                                            </div>
                                        </div>


                                        <h5>รายงานหรืองานที่นักศึกษาได้รับมอบหมาย</h5>

                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">1</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="courseObjectives2" placeholder="1.รายงานโครงงานจริยธรรมและจิตอาสากำหนดการส่ง1เดือนหลังจากการเข้าร่วมการอบรมบุคลิกภาพและการสื่อสารการติดตามผลอาจารย์ที่ปรึกษา/อาจารย์นิเทศก์ประเมินผลงานจากรายงาน " ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">2</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="courseObjectives3" placeholder="2.รายงานการเข้าร่วมอบรมตามศาสตร์กำหนดการส่ง2อาทิตย์หลังจากการเข้าร่วมการอบรมความรู้ตามศาสตร์การติดตามผลอาจารย์ที่ปรึกษา/อาจารย์นิเทศก์ ประเมินผลงานจากรายงาน " ?>
                                            </div>
                                        </div>
                                        <h5>4.หน้าที่และความรับผิดชอบของอาจารย์ที่ปรึกษา/อาจารย์นิเทศก์</h5>

                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">1</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="courseObjectives2" placeholder="ให้คำปรึกษาในการทำกิจกรรมต่างๆของการเตรียมฝึกประสบการณ์วิชาชีพแก่นักศึกษา" ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">2</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="courseObjectives3" placeholder="ให้คำปรึกษาในการเลือกสถานที่ฝึกงานแก่นักศึกษา" ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">3</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="courseObjectives3" placeholder="ประเมินผลการงานของนักศึกษา" ?>
                                            </div>
                                        </div>

                                        <h5>5.การเตรียมการในการแนะแนวและช่วยเหลือนักศึกษา</h5>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">1</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="courseObjectives1" placeholder="จัดปฐมนิเทศแนะนำการเตรียมฝึกประสบการณ์วิชาชีพให้กับนักศึกษา" ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">2</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="courseObjectives1" placeholder="จัดอาจารย์ที่ปรึกษาการเตรียมฝึกประสบการณ์วิชาชีพให้กับนักศึกษา" ?>
                                            </div>
                                        </div>
                                        <h5>6.สิ่งอำนวยความสะดวกและการสนับสนุนที่ต้องการจากสถานที่ที่จัดประสบการณ์ภาคสนาม</h5>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">1</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="courseObjectives1" placeholder="สถานที่จัดการปฐมนิเทศอบรมบุคลิกภาพและการสื่อสารอบรมความรู้ตามศาสตร์และปัจฉิมนิเทศ" ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">2</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="courseObjectives1" placeholder="คู่มือการเตรียมฝึกประสบการณ์วิชาชีพ" ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">3</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="courseObjectives1" placeholder="วัสดุอุปกรณ์สนับสนุนต่างๆ" ?>
                                            </div>
                                        </div>

                                        <center> <button type="submit" class="btn btn-sm btn-primary" href="mko3_2.php">ไปหมวดที่2</button>
                                            <button type="submit" class="btn btn-sm btn-info" href="mko3_2.php">บันทึกข้อมูล</button></center>

                                </div>
                                <br>

                                </form>


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