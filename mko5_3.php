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

                                    <form action="mko5_3_save.php" method="POST">


                                        <center>
                                            <h1 class="h3 mb-0 text-gray-800">หมวดที่ 3 สรุปผลการจัดการเรียนการสอนของรายวิชา</h1>
                                        </center>

                                        </td>
                                        </tr>
                                        </table>




                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">1.จำนวนนักศึกษาที่ลงทะเบียนเรียน</label>
                                            <div class="col-sm-1">
                                                <input type="text" id='coursename' class="form-control" name="coursename" placeholder="36" ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">2.จำนวนนักศึกษาที่ขาดสอบ</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" name="coursetype" placeholder="8" ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">3.จำนวนักศึกษาที่ไม่มีสิทธิ์สอบ</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" name="responsibleteacher" placeholder="9" ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">4.จำนวนนักศึกษาคะแนนไม่สมบูรณ์</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" name="responsibleteacher1" placeholder="36" ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">5.จำนวนนักศึกษาเพิกถอน (W)</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" name="ll" placeholder="-" ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">6.จำนวนนักศึกษาที่เข้าสอบจริง</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" name="nn" placeholder="36" ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">7.จำนวนนักศึกษาที่คงอยู่เมื่อสิ้นสุดภากการศึกษา</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" name="qw" placeholder="36" ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">ระดับคะแนนA</label>
                                            <div class="col-sm-1">
                                                <input type="text" id="fram1" class="form-control" name="fram1" placeholder="จำนวน" ?>
                                                <input type="text" id="fram2" class="form-control" name="fram2" placeholder="คิดเป็นร้อยละ" ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">ระดับคะแนนB+</label>
                                            <div class="col-sm-1">
                                                <input type="text" id="fram3" class="form-control" name="fram3" placeholder="จำนวน" ?>
                                                <input type="text" id="fram4" class="form-control" name="fram4" placeholder="คิดเป็นร้อยละ" ?>
                                            </div>


                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">ระดับคะแนนB</label>
                                            <div class="col-sm-1">
                                                <input type="text" id="fram5" class="form-control" name="fram5" placeholder="จำนวน" ?>
                                                <input type="text" id="fram6" class="form-control" name="fram6" placeholder="คิดเป็นร้อยละ" ?>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">ระดับคะแนนC+</label>
                                            <div class="col-sm-1">
                                                <input type="text" id="fram7" class="form-control" name="fram7" placeholder="จำนวน" ?>
                                                <input type="text" id="fram8" class="form-control" name="fram8" placeholder="คิดเป็นร้อยละ" ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">ระดับคะแนนC</label>
                                            <div class="col-sm-1">
                                                <input type="text" id="fram9" class="form-control" name="fram9" placeholder="จำนวน" ?>
                                                <input type="text" id="fram10" class="form-control" name="fram10" placeholder="คิดเป็นร้อยละ" ?>
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">ระดับคะแนนD+</label>
                                            <div class="col-sm-1">
                                                <input type="text" id="fram11" class="form-control" name="fram11" placeholder="จำนวน" ?>
                                                <input type="text" id="fram12" class="form-control" name="fram12" placeholder="คิดเป็นร้อยละ" ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">ระดับคะแนนD</label>
                                            <div class="col-sm-1">
                                                <input type="text" id="fram13" class="form-control" name="fram13" placeholder="จำนวน" ?>
                                                <input type="text" id="fram14" class="form-control" name="fram14" placeholder="คิดเป็นร้อยละ" ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">ระดับคะแนนF</label>
                                            <div class="col-sm-1">
                                                <input type="text" id="fram15" class="form-control" name="fram15" placeholder="จำนวน" ?>
                                                <input type="text" id="fram16" class="form-control" name="fram16" placeholder="คิดเป็นร้อยละ" ?>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">ระดับคะแนน(W)</label>
                                            <div class="col-sm-1">
                                                <input type="text" id="fram17" class="form-control" name="fram17" placeholder="จำนวน" ?>
                                                <input type="text" id="fram18" class="form-control" name="fram18" placeholder="คิดเป็นร้อยละ" ?>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">FM</label>
                                            <div class="col-sm-1">
                                                <input type="text" id="fram19" class="form-control" name="fram19" placeholder="จำนวน" ?>
                                                <input type="text" id="fram20" class="form-control" name="fram20" placeholder="คิดเป็นร้อยละ" ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">I</label>
                                            <div class="col-sm-1">
                                                <input type="text" id="fram21" class="form-control" name="fram21" placeholder="จำนวน" ?>
                                                <input type="text" id="fram22" class="form-control" name="fram22" placeholder="คิดเป็นร้อยละ" ?>
                                            </div>
                                        </div>




                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">ผ่าน (P, S)</label>
                                            <div class="col-sm-1">
                                                <input type="text" id="fram23" class="form-control" name="fram23" placeholder="จำนวน" ?>
                                                <input type="text" id="fram24" class="form-control" name="fram24" placeholder="คิดเป็นร้อยละ" ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">ไม่ผ่าน (U)</label>
                                            <div class="col-sm-1">
                                                <input type="text" id="fram25" class="form-control" name="fram25" placeholder="จำนวน" ?>
                                                <input type="text" id="fram26" class="form-control" name="fram26" placeholder="คิดเป็นร้อยละ" ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-10 col-form-label">9.ปัจจัยที่ทำให้ระดับคะแนนผิดปกติ</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="awe" placeholder="ถ้ามี" ?>
                                            </div>
                                        </div>


                                        <h5>10.ความคลาดเคลื่อนจากแผนการปรัเมินที่กำหนดไว่ในรายละเอียดรายวิชา</h5>

                                        <div class="form-group row">
                                            <label class="col-sm-1 col-form-label">10.1.ความคลาดเคลื่อนด้านกำหนดเวลาการประเมิน</label>
                                            <div class="col-sm-11">
                                                <input type="text" class="form-control" name="awe1" placeholder="ความคลาดเคลื่น (มี) (ไม่มี)" ?>
                                                <input type="text" class="form-control" name="awe2" placeholder="เหตุุผล (มี) (ไม่มี)" ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-1 col-form-label">10.2.ความคลาดเคลื่อนด้านวิธีการประเมินผลการเรียนรู้ (ถ้ามี)</label>
                                            <div class="col-sm-11">
                                                <input type="text" class="form-control" name="awe3" placeholder="ความคลาดเคลื่น (มี) (ไม่มี)" ?>
                                                <input type="text" class="form-control" name="awe4" placeholder="เหตุุผล (มี) (ไม่มี)" ?>
                                            </div>
                                        </div>

                                        <h5>11.การทวนสอบมาตราฐานผลสัมฤทธิ์ของนักศึกษา (มคอ.3 หมวด 7 ข้อ 4)</h5>



                                        <div class="form-group row">
                                            <label class="col-sm-1 col-form-label">วิธีการทวนสอบ</label>
                                            <div class="col-sm-11">
                                                <input type="text" class="form-control" name="awe5" placeholder="กรอก" ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-1 col-form-label">สรุปผล</label>
                                            <div class="col-sm-11">
                                                <input type="text" class="form-control" name="awe6" placeholder="กรอก" ?>
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
            // coursename
            // fram1
            // fram2
            // let coursename = $('#coursename').val("300")
            // console.log("coursename", coursename);

            var coursename = document.getElementById("coursename");

            $("#fram1").keyup(function() {
                var IntSumCours = parseInt(coursename.value);
                let fram1 = document.getElementById("fram1");
                let IntFram1 = parseInt(fram1.value);
                let totel = (IntFram1 / IntSumCours) * 100
                $('#fram2').val(totel + "%")
            });

            $("#fram3").keyup(function() {
                var IntSumCours = parseInt(coursename.value);
                let fram3 = document.getElementById("fram3");
                let IntFram3 = parseInt(fram3.value);
                let totel = (IntFram3 / IntSumCours) * 100
                $('#fram4').val(totel + "%")
            });

            $("#fram5").keyup(function() {
                var IntSumCours = parseInt(coursename.value);
                let fram5 = document.getElementById("fram5");
                let IntFram5 = parseInt(fram5.value);
                let totel = (IntFram5 / IntSumCours) * 100
                $('#fram6').val(totel + "%")
            });

            $("#fram7").keyup(function() {
                var IntSumCours = parseInt(coursename.value);
                let fram7 = document.getElementById("fram7");
                let IntFram7 = parseInt(fram7.value);
                let totel = (IntFram7 / IntSumCours) * 100
                $('#fram8').val(totel + "%")
            });

            $("#fram9").keyup(function() {
                var IntSumCours = parseInt(coursename.value);
                let fram9 = document.getElementById("fram9");
                let IntFram9 = parseInt(fram9.value);
                let totel = (IntFram9 / IntSumCours) * 100
                $('#fram10').val(totel + "%")
            });

            $("#fram11").keyup(function() {
                var IntSumCours = parseInt(coursename.value);
                let fram11 = document.getElementById("fram11");
                let IntFram11 = parseInt(fram11.value);
                let totel = (IntFram11 / IntSumCours) * 100
                $('#fram12').val(totel + "%")
            });

            $("#fram13").keyup(function() {
                var IntSumCours = parseInt(coursename.value);
                let fram13 = document.getElementById("fram13");
                let IntFram13 = parseInt(fram13.value);
                let totel = (IntFram13 / IntSumCours) * 100
                $('#fram14').val(totel + "%")
            });

            $("#fram15").keyup(function() {
                var IntSumCours = parseInt(coursename.value);
                let fram15 = document.getElementById("fram15");
                let IntFram15 = parseInt(fram15.value);
                let totel = (IntFram15 / IntSumCours) * 100
                $('#fram16').val(totel + "%")
            });

            $("#fram17").keyup(function() {
                var IntSumCours = parseInt(coursename.value);
                let fram17 = document.getElementById("fram17");
                let IntFram17 = parseInt(fram17.value);
                let totel = (IntFram17 / IntSumCours) * 100
                $('#fram18').val(totel + "%")
            });

            $("#fram19").keyup(function() {
                var IntSumCours = parseInt(coursename.value);
                let fram19 = document.getElementById("fram19");
                let IntFram19 = parseInt(fram19.value);
                let totel = (IntFram19 / IntSumCours) * 100
                $('#fram20').val(totel + "%")
            });

            $("#fram21").keyup(function() {
                var IntSumCours = parseInt(coursename.value);
                let fram21 = document.getElementById("fram21");
                let IntFram21 = parseInt(fram21.value);
                let totel = (IntFram21 / IntSumCours) * 100
                $('#fram22').val(totel + "%")
            });

            $("#fram23").keyup(function() {
                var IntSumCours = parseInt(coursename.value);
                let fram23 = document.getElementById("fram23");
                let IntFram23 = parseInt(fram23.value);
                let totel = (IntFram23 / IntSumCours) * 100
                $('#fram24').val(totel + "%")
            });

            $("#fram25").keyup(function() {
                var IntSumCours = parseInt(coursename.value);
                let fram25 = document.getElementById("fram25");
                let IntFram25 = parseInt(fram25.value);
                let totel = (IntFram25 / IntSumCours) * 100
                $('#fram26').val(totel + "%")
            });

        });
    </script>
</body>

</html>