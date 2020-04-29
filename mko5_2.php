<!DOCTYPE html>
<html lang="en">

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
                                    <form class="login100-form validate-form flex-sb flex-w" action="mko5_2_save.php" method="post">
                                        <table align="center" width="800">
                                            <tr>
                                                <td>
                                                    <h6 class="h3 mb-0 text-gray-800">หมวดที่ 2 การจัดการเรียนการสอนของรายวิชา</h6>
                                                </td>
                                            </tr>
                                        </table>
                                        <br>


                                        <h5>รายงานชั่วโมงสอนจริงเทียบกับแผนการสอน</h5>
                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                                            <div class="col-sm-12">
                                                <input type="text" name="week1" class="form-control form-control-user" placeholder="สัปดาห์ที่1" ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                                            <div class="col-sm-1">
                                                <input type="text" name="hrplan1" class="form-control form-control-user" placeholder="8" ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                                            <div class="col-sm-1">
                                                <input type="text" name="hrplann1" class="form-control form-control-user" placeholder="8" ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่สอนจริงต่างจากแผนไม่เกิน 25%</label>
                                            <div class="col-sm-11">
                                                <input type="text" name="reason1" class="form-control form-control-user" placeholder="สัปดาห์ที่1" ?>

                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                                            <div class="col-sm-12">
                                                <input type="text" name="week2" class="form-control form-control-user" placeholder="สัปดาห์ที่2" ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                                            <div class="col-sm-1">
                                                <input type="text" name="hrplan2" class="form-control form-control-user" placeholder="8" ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                                            <div class="col-sm-1">
                                                <input type="text" name="hrplann2" class="form-control form-control-user" placeholder="8" ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                                            <div class="col-sm-11">
                                                <input type="text" name="reason2" class="form-control form-control-user" placeholder="สัปดาห์ที่2" ?>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                                            <div class="col-sm-12">
                                                <input type="text" name="week3" class="form-control form-control-user" placeholder="สัปดาห์ที่3" ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                                            <div class="col-sm-1">
                                                <input type="text" name="hrplan3" class="form-control form-control-user" placeholder="8" ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                                            <div class="col-sm-1">
                                                <input type="text" name="hrplann3" class="form-control form-control-user" placeholder="8" ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                                            <div class="col-sm-11">
                                                <input type="text" name="reason3" class="form-control form-control-user" placeholder="สัปดาห์ที่3" ?>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                                            <div class="col-sm-12">
                                                <input type="text" name="week4" class="form-control form-control-user" placeholder="สัปดาห์ที่4" ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                                            <div class="col-sm-1">
                                                <input type="text" name="hrplan4" class="form-control form-control-user" placeholder="8" ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                                            <div class="col-sm-1">
                                                <input type="text" name="hrplann4" class="form-control form-control-user" placeholder="8" ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                                            <div class="col-sm-11">
                                                <input type="text" name="reason4" class="form-control form-control-user" placeholder="สัปดาห์ที่4" ?>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                                            <div class="col-sm-12">
                                                <input type="text" name="week5" class="form-control form-control-user" placeholder="สัปดาห์ที่5" ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                                            <div class="col-sm-1">
                                                <input type="text" name="hrplan5" class="form-control form-control-user" placeholder="8" ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                                            <div class="col-sm-1">
                                                <input type="text" name="hrplann5" class="form-control form-control-user" placeholder="8" ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                                            <div class="col-sm-11">
                                                <input type="text" name="reason5" class="form-control form-control-user" placeholder="สัปดาห์ที่5" ?>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                                            <div class="col-sm-12">
                                                <input type="text" name="week6" class="form-control form-control-user" placeholder="สัปดาห์ที่6" ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                                            <div class="col-sm-1">
                                                <input type="text" name="hrplan6" class="form-control form-control-user" placeholder="8" ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                                            <div class="col-sm-1">
                                                <input type="text" name="hrplann6" class="form-control form-control-user" placeholder="8" ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                                            <div class="col-sm-11">
                                                <input type="text" name="reason6" class="form-control form-control-user" placeholder="สัปดาห์ที่6" ?>

                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                                            <div class="col-sm-12">
                                                <input type="text" name="week7" class="form-control form-control-user" placeholder="สัปดาห์ที่7" ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                                            <div class="col-sm-1">
                                                <input type="text" name="hrplan7" class="form-control form-control-user" placeholder="8" ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                                            <div class="col-sm-1">
                                                <input type="text" name="hrplann7" class="form-control form-control-user" placeholder="8" ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                                            <div class="col-sm-11">
                                                <input type="text" name="reason7" class="form-control form-control-user" placeholder="สัปดาห์ที่7" ?>

                                            </div>
                                        </div>
                                        <h6>สัปดาห์ที่8สอบกลางภาค</6>

                                            <div class="form-group row">
                                                <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="week9" class="form-control form-control-user" placeholder="สัปดาห์ที่9" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                                                <div class="col-sm-1">
                                                    <input type="text" name="hrplan9" class="form-control form-control-user" placeholder="8" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                                                <div class="col-sm-1">
                                                    <input type="text" name="hrplann9" class="form-control form-control-user" placeholder="8" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                                                <div class="col-sm-11">
                                                    <input type="text" name="reason9" class="form-control form-control-user" placeholder="สัปดาห์ที่9" ?>

                                                </div>
                                            </div>



                                            <div class="form-group row">
                                                <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="week10" class="form-control form-control-user" placeholder="สัปดาห์ที่10" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                                                <div class="col-sm-1">
                                                    <input type="text" name="hrplan10" class="form-control form-control-user" placeholder="8" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                                                <div class="col-sm-1">
                                                    <input type="text" name="hrplann10" class="form-control form-control-user" placeholder="8" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                                                <div class="col-sm-11">
                                                    <input type="text" name="reason10" class="form-control form-control-user" placeholder="สัปดาห์ที่10" ?>

                                                </div>
                                            </div>



                                            <div class="form-group row">
                                                <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="week11" class="form-control form-control-user" placeholder="สัปดาห์ที่11" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                                                <div class="col-sm-1">
                                                    <input type="text" name="hrplan11" class="form-control form-control-user" placeholder="8" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                                                <div class="col-sm-1">
                                                    <input type="text" name="hrplann11" class="form-control form-control-user" placeholder="8" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                                                <div class="col-sm-11">
                                                    <input type="text" name="reason11" class="form-control form-control-user" placeholder="สัปดาห์ที่11" ?>

                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="week12" class="form-control form-control-user" placeholder="สัปดาห์ที่12" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                                                <div class="col-sm-1">
                                                    <input type="text" name="hrplan12" class="form-control form-control-user" placeholder="8" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                                                <div class="col-sm-1">
                                                    <input type="text" name="hrplann12" class="form-control form-control-user" placeholder="8" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                                                <div class="col-sm-11">
                                                    <input type="text" name="reason12" class="form-control form-control-user" placeholder="สัปดาห์ที่12" ?>

                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="week13" class="form-control form-control-user" placeholder="สัปดาห์ที่13" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                                                <div class="col-sm-1">
                                                    <input type="text" name="hrplan13" class="form-control form-control-user" placeholder="8" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                                                <div class="col-sm-1">
                                                    <input type="text" name="hrplann13" class="form-control form-control-user" placeholder="8" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                                                <div class="col-sm-11">
                                                    <input type="text" name="reason13" class="form-control form-control-user" placeholder="สัปดาห์ที่13" ?>

                                                </div>
                                            </div>



                                            <div class="form-group row">
                                                <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="week14" class="form-control form-control-user" placeholder="สัปดาห์ที่14" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                                                <div class="col-sm-1">
                                                    <input type="text" name="hrplan14" class="form-control form-control-user" placeholder="8" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                                                <div class="col-sm-1">
                                                    <input type="text" name="hrplann14" class="form-control form-control-user" placeholder="8" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                                                <div class="col-sm-11">
                                                    <input type="text" name="reason14" class="form-control form-control-user" placeholder="สัปดาห์ที่14" ?>

                                                </div>
                                            </div>



                                            <div class="form-group row">
                                                <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="week15" class="form-control form-control-user" placeholder="สัปดาห์ที่15" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                                                <div class="col-sm-1">
                                                    <input type="text" name="hrplan15" class="form-control form-control-user" placeholder="8" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                                                <div class="col-sm-1">
                                                    <input type="text" name="hrplann15" class="form-control form-control-user" placeholder="8" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                                                <div class="col-sm-11">
                                                    <input type="text" name="reason15" class="form-control form-control-user" placeholder="สัปดาห์ที่15" ?>

                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="week16" class="form-control form-control-user" placeholder="สัปดาห์ที่16" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                                                <div class="col-sm-1">
                                                    <input type="text" name="hrplan16" class="form-control form-control-user" placeholder="8" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                                                <div class="col-sm-1">
                                                    <input type="text" name="hrplann16" class="form-control form-control-user" placeholder="8" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                                                <div class="col-sm-11">
                                                    <input type="text" name="reason16" class="form-control form-control-user" placeholder="สัปดาห์ที่16" ?>

                                                </div>
                                            </div>



                                            <h5>สอบปลายภาค</h5>

                                            <div class="form-group row">
                                                <label class="col-sm-14 col-form-labe">2. หัวข้อไม่ครอบคลุมตามแผน</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="coon1" class="form-control form-control-user" placeholder="-" ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-14 col-form-labe">หัวข้อไม่ครอบคลุมตามแผนได้ทำการสอนครบถ้วนตามแผนแล้ว</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="coon2" class="form-control form-control-user" placeholder="-" ?>

                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-sm-14 col-form-labe">นัยสำคัญของหัวข้อที่สอนไม่ครอบคลุมตามแผน</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="coon3" class="form-control form-control-user" placeholder="-" ?>

                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-sm-14 col-form-labe">แนวชดเชย</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="coon4" class="form-control form-control-user" placeholder="-" ?>

                                                </div>
                                            </div>

                                            <h5>ประสิทธิ์ผลของวิธีสอนที่ทำให้เกิดผลการเรียนรู้ตามที่ระบุในรายละเอียดของรายวิชา</h5>
                                            <div class="form-group row">
                                                <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                                <div class="col-sm-12">
                                                    <div>
                                                        <div>
                                                            <input type="text" name="car1" class="form-control form-control-user" placeholder="คุณธรรม จริยธรรม" ?>
                                                            <input type="text" name="car2" class="form-control form-control-user" placeholder="ข้อที่1" ?>
                                                            <input type="radio" name="radio1" value="true"> มี
                                                            <input type="radio" name="radio1" value="false"> ไม่มี

                                                            <div class="form-group row">
                                                                <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" name="car3" class="form-control form-control-user" placeholder="คุณธรรม จริยธรรม" ?>
                                                                    <input type="text" name="car4" class="form-control form-control-user" placeholder="ข้อที่2" ?>

                                                                </div>
                                                            </div>


                                                            <input type="radio" name="radio2" value="true"> มี
                                                            <input type="radio" name="radio2" value="false"> ไม่มี



                                                            <div class="form-group row">
                                                                <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" name="car5" class="form-control form-control-user" placeholder="คุณธรรม จริยธรรม" ?>
                                                                    <input type="text" name="car6" class="form-control form-control-user" placeholder="ข้อที่3" ?>

                                                                </div>
                                                            </div>


                                                            <input type="radio" name="radio3" value="true"> มี
                                                            <input type="radio" name="radio3" value="false"> ไม่มี



                                                            <div class="form-group row">
                                                                <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" name="car7" class="form-control form-control-user" placeholder="คุณธรรม จริยธรรม" ?>
                                                                    <input type="text" name="car8" class="form-control form-control-user" placeholder="ข้อที่4" ?>

                                                                </div>
                                                            </div>


                                                            <input type="radio" name="radio4" value="true"> มี
                                                            <input type="radio" name="radio4" value="false"> ไม่มี



                                                            <div class="form-group row">
                                                                <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" name="car9" class="form-control form-control-user" placeholder="ความรู้" ?>
                                                                    <input type="text" name="car10" class="form-control form-control-user" placeholder="1.การสอบวัดผล" ?>

                                                                </div>
                                                            </div>


                                                            <input type="radio" name="radio5" value="true"> มี
                                                            <input type="radio" name="radio5" value="false"> ไม่มี



                                                            <div class="form-group row">
                                                                <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" name="car11" class="form-control form-control-user" placeholder="ความรู้" ?>
                                                                    <input type="text" name="car12" class="form-control form-control-user" placeholder="2.จัดการเรียบการสอน" ?>

                                                                </div>
                                                            </div>


                                                            <input type="radio" name="radio6" value="true"> มี
                                                            <input type="radio" name="radio6" value="false"> ไม่มี

                                                            <div class="form-group row">
                                                                <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" name="car13" class="form-control form-control-user" placeholder="ความรู้" ?>
                                                                    <input type="text" name="car14" class="form-control form-control-user" placeholder="3.ทำการวิเคราห์" ?>

                                                                </div>
                                                            </div>


                                                            <input type="radio" name="radio7" value="true"> มี
                                                            <input type="radio" name="radio7" value="false"> ไม่มี


                                                            <div class="form-group row">
                                                                <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" name="car15" class="form-control form-control-user" placeholder="ความรู้" ?>
                                                                    <input type="text" name="car16" class="form-control form-control-user" placeholder="4.ทำการคำนวณ" ?>

                                                                </div>
                                                            </div>


                                                            <input type="radio" name="radio8" value="true"> มี
                                                            <input type="radio" name="radio8" value="false"> ไม่มี


                                                            <div class="form-group row">
                                                                <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" name="car17" class="form-control form-control-user" placeholder="ความรู้" ?>
                                                                    <input type="text" name="car18" class="form-control form-control-user" placeholder="5.ฝึกปฏิบัติ้เขียน" ?>

                                                                </div>
                                                            </div>

                                                            <input type="radio" name="radio9" value="true"> มี
                                                            <input type="radio" name="radio9" value="false"> ไม่มี



                                                            <div class="form-group row">
                                                                <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" name="car19" class="form-control form-control-user" placeholder="ทักษะทางปัญญา" ?>
                                                                    <input type="text" name="car20" class="form-control form-control-user" placeholder="1.การหมอบหมาย" ?>

                                                                </div>
                                                            </div>


                                                            <input type="radio" name="radio10" value="true"> มี
                                                            <input type="radio" name="radio10" value="false"> ไม่มี


                                                            <div class="form-group row">
                                                                <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" name="car21" class="form-control form-control-user" placeholder="ทักษะทางปัญญา" ?>
                                                                    <input type="text" name="car22" class="form-control form-control-user" placeholder="2.การหมอบหมาย" ?>

                                                                </div>
                                                            </div>


                                                            <input type="radio" name="radio11" value="true"> มี
                                                            <input type="radio" name="radio11" value="false"> ไม่มี


                                                            <div class="form-group row">
                                                                <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" name="car23" class="form-control form-control-user" placeholder="ทักษะความสัมพันธ์ระหว่างบุคคลรับผิดชอบ" ?>
                                                                    <input type="text" name="car24" class="form-control form-control-user" placeholder="1.การนำเสนอ" ?>

                                                                </div>
                                                            </div>


                                                            <<input type="radio" name="radio12" value="true"> มี
                                                                <input type="radio" name="radio12" value="false"> ไม่มี

                                                                <div class="form-group row">
                                                                    <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                                                    <div class="col-sm-12">
                                                                        <input type="text" name="car25" class="form-control form-control-user" placeholder="ทักษะความสัมพันธ์ระหว่างบุคคลรับผิดชอบ" ?>
                                                                        <input type="text" name="car26" class="form-control form-control-user" placeholder="2.หมอบหมายทำงานรวมกัน" ?>

                                                                    </div>
                                                                </div>


                                                                <input type="radio" name="radio13" value="true"> มี
                                                                <input type="radio" name="radio13" value="false"> ไม่มี


                                                                <div class="col-sm-12">
                                                                    <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                                                    <input type="text" name="car27" class="form-control form-control-user" placeholder="ทักษะความสัมพันธ์ระหว่างบุคคลรับผิดชอบ" ?>
                                                                    <input type="text" name="car28" class="form-control form-control-user" placeholder="3.จัดกิตกรรมกลุ่ม" ?>

                                                                </div>
                                                        </div>


                                                        <input type="radio" name="radio14" value="true"> มี
                                                        <input type="radio" name="radio14" value="false"> ไม่มี
                                                        <div class="col-sm-12">
                                                            <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                                            <input type="text" name="car29" class="form-control form-control-user" placeholder="ทักษะความสัมพันธ์ระหว่างบุคคลรับผิดชอบ" ?>
                                                            <input type="text" name="car30" class="form-control form-control-user" placeholder="4.การสิบค้นข้อมูล" ?>

                                                        </div>
                                                    </div>


                                                    <input type="radio" name="radio15" value="true"> มี
                                                    <input type="radio" name="radio15" value="false"> ไม่มี


                                                    <div class="col-sm-12">
                                                        <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                                        <input type="text" name="car31" class="form-control form-control-user" placeholder="ทักษะการวิเคราห์เชิงตัวเลขการสือสาร" ?>
                                                        <input type="text" name="car32" class="form-control form-control-user" placeholder="1.หมอบหมายชิ้นงานโดยให้ใช้เครื่องมือ" ?>

                                                    </div>
                                                </div>

                                                <input type="radio" name="radio16" value="true"> มี
                                                <input type="radio" name="radio16" value="false"> ไม่มี


                                                <div class="col-sm-12">
                                                    <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                                    <input type="text" name="car33" class="form-control form-control-user" placeholder="ทักษะการวิเคราห์เชิงตัวเลขการสือสาร" ?>
                                                    <input type="text" name="car34" class="form-control form-control-user" placeholder="2.หมอบหมายชิ้นงานโดยให้ใช้เครื่องมือซอฟเวร์" ?>

                                                </div>
                                            </div>

                                            <input type="radio" name="radio17" value="true"> มี
                                            <input type="radio" name="radio17" value="false"> ไม่มี



                                            <div class="col-sm-12">
                                                <label class="col-sm-14 col-form-labe">ข้อเสนอการดำเนินการเพื่อปรับปรุงวิธีสอน (ปัญหาที่เจอใน ข้อ 3)</label>
                                                <input type="text" name="porm" class="form-control form-control-user" placeholder="เพื่อฝึกฝนให้กล้าแสดงออก" ?>















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
        });
    </script>
</body>

</html>