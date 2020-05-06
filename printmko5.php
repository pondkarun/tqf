<?php
include('include/condb.php');
$sql = "SELECT * FROM dbcourse_add AS a
INNER JOIN db_mko5_1 AS b ON a.id = b.id_mko
INNER JOIN db_mko5_2 AS c ON a.id = c.id_mko
INNER JOIN db_mko5_3 AS d ON a.id = d.id_mko
INNER JOIN db_mko5_4 AS e ON a.id = e.id_mko
INNER JOIN db_mko5_5 AS f ON a.id = f.id_mko
INNER JOIN db_mko5_6 AS g ON a.id = g.id_mko
WHERE a.id = $_GET[id]
GROUP BY a.id ";
$result = mysqli_query($condb, $sql);
$row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>รายงาน</title>
</head>

<body onload="javascript:window.print()">
    <li class="active"><a href="index.php">หน้าแรก</a></li>

    <div class="container">
        <h1 class="text-center">รายงาน</h1>
        <div class="row text-center">
            <div class="col-6">
                <p>เรื่อง : รายงานมคอ5</p>
            </div>
            <div class="col-6">
                <p>วันที่ : 10/02/63</p>
            </div>
        </div>

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


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ชื่อสถาบันอุดมศึกษา</label>
                        <div class="col-sm-10">
                            <label class="col-form-label"> <?php echo $row['institutionname']; ?> </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">วิทยาเขต/คณะ/สาขา</label>
                        <div class="col-sm-10">
                            <label class="col-form-label"> <?php echo $row['campus']; ?> </label>
                        </div>
                    </div>
                    <br>
                    <br>
                    <table align="center" width="500">
                        <tr>
                            <td>
                                <h1 class="h3 mb-0 text-gray-800">หมวดที่ 1 ข้อมูลโดยทั่วไป</h1>
                            </td>
                        </tr>
                    </table>




                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">1.รหัสวิชา</label>
                        <div class="col-sm-10">
                            <label class="col-form-label"> <?php echo $row['coursename']; ?> </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">2.ชื่อรายวิชา</label>
                        <div class="col-sm-10">
                            <label class="col-form-label"> <?php echo $row['coursetype']; ?> </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">3.จำนวนหน่วยกิต</label>
                        <div class="col-sm-10">
                            <label class="col-form-label"> <?php echo $row['cradit']; ?> </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">4.หลักสูตรและประเภทรายวิชา</label>
                        <div class="col-sm-10">
                            <label class="col-form-label"> <?php echo $row['aii']; ?> </label>
                        </div>
                    </div>
                    <div id="item_table">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">5.อาจารย์ผู้รับผิดชอบรายวิชาและอาจารย์ผู้สอน</label>
                            <div class="col-sm-9">
                                <label class="col-form-label"> <?php echo $row['responsibleteacher']; ?> </label>
                            </div>
                            <div class="col-md-1">

                            </div>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">6.ภาคการศึกษา/ชั้นปีที่่เรียนที่ฝึกประสบการณ์ภาคสนาม</label>
                        <div class="col-sm-10">
                            <label class="col-form-label"> <?php echo $row['semester1']; ?> </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">7.สถานที่เรียน</label>
                        <div class="col-sm-10">
                            <label class="col-form-label"> <?php echo $row['asd']; ?> </label>
                        </div>
                    </div>



                    <h6 class="h3 mb-0 text-gray-800">หมวดที่ 2 การจัดการเรียนการสอนของรายวิชา</h6>
                    </td>
                    </tr>
                    </table>
                    <br>

                    <h5> สัปดาห์ที่1</h5>
                    <h5>รายงานชั่วโมงสอนจริงเทียบกับแผนการสอน</h5>
                    <div class="form-group row">
                        <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                        <div class="col-sm-12">
                            <label class="col-form-label"> <?php echo $row['week1']; ?> </label>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                        <div class="col-sm-1">
                            <label class="col-form-label"> <?php echo $row['hrplan1']; ?> </label>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                        <div class="col-sm-1">
                            <label class="col-form-label"> <?php echo $row['hrplann1']; ?> </label>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่สอนจริงต่างจากแผนไม่เกิน 25%</label>
                        <div class="col-sm-11">
                            <label class="col-form-label"> <?php echo $row['reason1']; ?> </label>

                        </div>
                    </div>
                    <h5> สัปดาห์ที่2</h5>

                    <div class="form-group row">
                        <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                        <div class="col-sm-12">
                            <label class="col-form-label"> <?php echo $row['week2']; ?> </label>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                        <div class="col-sm-1">
                            <label class="col-form-label"> <?php echo $row['hrplan2']; ?> </label>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                        <div class="col-sm-1">
                            <label class="col-form-label"> <?php echo $row['hrplann2']; ?> </label>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                        <div class="col-sm-11">
                            <label class="col-form-label"> <?php echo $row['reason2']; ?> </label>

                        </div>
                    </div>
                    <h5> สัปดาห์ที่3</h5>
                    <div class="form-group row">
                        <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                        <div class="col-sm-12">
                            <label class="col-form-label"> <?php echo $row['week3']; ?> </label>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                        <div class="col-sm-1">
                            <label class="col-form-label"> <?php echo $row['hrplan3']; ?> </label>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                        <div class="col-sm-1">
                            <label class="col-form-label"> <?php echo $row['hrplann3']; ?> </label>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                        <div class="col-sm-11">
                            <label class="col-form-label"> <?php echo $row['reason3']; ?> </label>
                            <h5> สัปดาห์ที่4</h5>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                        <div class="col-sm-12">
                            <label class="col-form-label"> <?php echo $row['week4']; ?> </label>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                        <div class="col-sm-1">
                            <label class="col-form-label"> <?php echo $row['hrplan4']; ?> </label>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                        <div class="col-sm-1">
                            <label class="col-form-label"> <?php echo $row['hrplann4']; ?> </label>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                        <div class="col-sm-11">
                            <label class="col-form-label"> <?php echo $row['reason4']; ?> </label>

                        </div>
                    </div>
                    <h5> สัปดาห์ที่5</h5>
                    <div class="form-group row">
                        <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                        <div class="col-sm-12">
                            <label class="col-form-label"> <?php echo $row['week5']; ?> </label>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                        <div class="col-sm-1">
                            <label class="col-form-label"> <?php echo $row['hrplan5']; ?> </label>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                        <div class="col-sm-1">
                            <label class="col-form-label"> <?php echo $row['hrplann5']; ?> </label>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                        <div class="col-sm-11">
                            <label class="col-form-label"> <?php echo $row['reason5']; ?> </label>

                        </div>
                    </div>
                    <h5> สัปดาห์ที่6</h5>
                    <div class="form-group row">
                        <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                        <div class="col-sm-12">
                            <label class="col-form-label"> <?php echo $row['week6']; ?> </label>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                        <div class="col-sm-1">
                            <label class="col-form-label"> <?php echo $row['hrplan6']; ?> </label>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                        <div class="col-sm-1">
                            <label class="col-form-label"> <?php echo $row['hrplann6']; ?> </label>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                        <div class="col-sm-11">
                            <label class="col-form-label"> <?php echo $row['reason6']; ?> </label>

                        </div>
                    </div>
                    <h5> สัปดาห์ที่7</h5>

                    <div class="form-group row">
                        <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                        <div class="col-sm-12">
                            <label class="col-form-label"> <?php echo $row['week7']; ?> </label>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                        <div class="col-sm-1">
                            <label class="col-form-label"> <?php echo $row['hrplan7']; ?> </label>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                        <div class="col-sm-1">
                            <label class="col-form-label"> <?php echo $row['hrplann7']; ?> </label>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                        <div class="col-sm-11">
                            <label class="col-form-label"> <?php echo $row['reason7']; ?> </label>

                        </div>
                    </div>
                    <h6>สัปดาห์ที่8สอบกลางภาค</6>
                        <h5> สัปดาห์ที่9</h5>
                        <div class="form-group row">
                            <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                            <div class="col-sm-12">
                                <label class="col-form-label"> <?php echo $row['week9']; ?> </label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                            <div class="col-sm-1">
                                <label class="col-form-label"> <?php echo $row['hrplan9']; ?> </label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                            <div class="col-sm-1">
                                <label class="col-form-label"> <?php echo $row['hrplann9']; ?> </label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                            <div class="col-sm-11">
                                <label class="col-form-label"> <?php echo $row['reason9']; ?> </label>

                            </div>
                        </div>
                        <h5> สัปดาห์ที่10</h5>


                        <div class="form-group row">
                            <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                            <div class="col-sm-12">
                                <label class="col-form-label"> <?php echo $row['week10']; ?> </label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                            <div class="col-sm-1">
                                <label class="col-form-label"> <?php echo $row['hrplan10']; ?> </label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                            <div class="col-sm-1">
                                <label class="col-form-label"> <?php echo $row['hrplann10']; ?> </label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                            <div class="col-sm-11">
                                <label class="col-form-label"> <?php echo $row['reason10']; ?> </label>

                            </div>
                        </div>


                        <h5> สัปดาห์ที่11</h5>
                        <div class="form-group row">
                            <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                            <div class="col-sm-12">
                                <label class="col-form-label"> <?php echo $row['week11']; ?> </label>


                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                            <div class="col-sm-1">
                                <label class="col-form-label"> <?php echo $row['hrplan11']; ?> </label>


                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                            <div class="col-sm-1">
                                <label class="col-form-label"> <?php echo $row['hrplann11']; ?> </label>


                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                            <div class="col-sm-11">
                                <label class="col-form-label"> <?php echo $row['reason11']; ?> </label>


                            </div>
                        </div>
                        <h5> สัปดาห์ที่12</h5>

                        <div class="form-group row">
                            <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                            <div class="col-sm-12">
                                <label class="col-form-label"> <?php echo $row['week12']; ?> </label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                            <div class="col-sm-1">
                                <label class="col-form-label"> <?php echo $row['hrplan12']; ?> </label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                            <div class="col-sm-1">
                                <label class="col-form-label"> <?php echo $row['hrplann12']; ?> </label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                            <div class="col-sm-11">
                                <label class="col-form-label"> <?php echo $row['reason12']; ?> </label>

                            </div>
                        </div>
                        <h5> สัปดาห์ที่13</h5>

                        <div class="form-group row">
                            <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                            <div class="col-sm-12">
                                <label class="col-form-label"> <?php echo $row['week13']; ?> </label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                            <div class="col-sm-1">
                                <label class="col-form-label"> <?php echo $row['hrplan13']; ?> </label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                            <div class="col-sm-1">
                                <label class="col-form-label"> <?php echo $row['hrplann13']; ?> </label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                            <div class="col-sm-11">
                                <label class="col-form-label"> <?php echo $row['reason13']; ?> </label>

                            </div>
                        </div>

                        <h5> สัปดาห์ที่14</h5>

                        <div class="form-group row">
                            <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                            <div class="col-sm-12">
                                <label class="col-form-label"> <?php echo $row['week14']; ?> </label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                            <div class="col-sm-1">
                                <label class="col-form-label"> <?php echo $row['hrplan14']; ?> </label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                            <div class="col-sm-1">
                                <label class="col-form-label"> <?php echo $row['hrplann14']; ?> </label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                            <div class="col-sm-11">
                                <label class="col-form-label"> <?php echo $row['reason14']; ?> </label>

                            </div>
                        </div>
                        <h5> สัปดาห์ที่15</h5>


                        <div class="form-group row">
                            <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                            <div class="col-sm-12">
                                <label class="col-form-label"> <?php echo $row['week15']; ?> </label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                            <div class="col-sm-1">
                                <label class="col-form-label"> <?php echo $row['hrplan15']; ?> </label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                            <div class="col-sm-1">
                                <label class="col-form-label"> <?php echo $row['hrplann15']; ?> </label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                            <div class="col-sm-11">
                                <label class="col-form-label"> <?php echo $row['reason15']; ?> </label>

                            </div>
                        </div>
                        <h5> สัปดาห์ที่16</h5>

                        <div class="form-group row">
                            <label class="col-sm-14 col-form-labe">หัวข้อ</label>
                            <div class="col-sm-12">
                                <label class="col-form-label"> <?php echo $row['week16']; ?> </label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงตามแผนการสอน</label>
                            <div class="col-sm-1">
                                <label class="col-form-label"> <?php echo $row['hrplan16']; ?> </label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-labe">จำนวนชั่วโมงได้สอนจริง</label>
                            <div class="col-sm-1">
                                <label class="col-form-label"> <?php echo $row['hrplann16']; ?> </label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-14 col-form-labe">ระบุเหตุุผลที่ก่ีสอนจริงต่างจากแผนไม่เกิน 25%</label>
                            <div class="col-sm-11">
                                <label class="col-form-label"> <?php echo $row['reason16']; ?> </label>

                            </div>
                        </div>



                        <h5>สอบปลายภาค</h5>

                        <div class="form-group row">
                            <label class="col-sm-14 col-form-labe">2. หัวข้อไม่ครอบคลุมตามแผน</label>
                            <div class="col-sm-12">
                                <input type="text" name="coon1" class="form-control form-control-user" placeholder="-" ?>
                                <label class="col-form-label"> <?php echo $row['coon1']; ?> </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-14 col-form-labe">หัวข้อไม่ครอบคลุมตามแผนได้ทำการสอนครบถ้วนตามแผนแล้ว</label>
                            <div class="col-sm-12">
                                <input type="text" name="coon2" class="form-control form-control-user" placeholder="-" ?>
                                <label class="col-form-label"> <?php echo $row['coon2']; ?> </label>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-14 col-form-labe">นัยสำคัญของหัวข้อที่สอนไม่ครอบคลุมตามแผน</label>
                            <div class="col-sm-12">
                                <input type="text" name="coon3" class="form-control form-control-user" placeholder="-" ?>
                                <label class="col-form-label"> <?php echo $row['coon3']; ?> </label>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-14 col-form-labe">แนวชดเชย</label>
                            <div class="col-sm-12">
                                <input type="text" name="coon4" class="form-control form-control-user" placeholder="-" ?>
                                <label class="col-form-label"> <?php echo $row['coon4']; ?> </label>
                            </div>
                        </div>

                        <h5>ประสิทธิ์ผลของวิธีสอนที่ทำให้เกิดผลการเรียนรู้ตามที่ระบุในรายละเอียดของรายวิชา</h5>
                        <div class="form-group row">
                            <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                            <div class="col-sm-12">
                                <div>
                                    <div>
                                        <label class="col-form-label"> <?php echo $row['car1']; ?> </label>
                                        <label class="col-form-label"> <?php echo $row['car2']; ?> </label>
                                        <input type="radio" name="radio1" value="true"> มี
                                        <input type="radio" name="radio1" value="false"> ไม่มี

                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                            <div class="col-sm-12">
                                                <label class="col-form-label"> <?php echo $row['car3']; ?> </label>
                                                <label class="col-form-label"> <?php echo $row['car4']; ?> </label>

                                            </div>
                                        </div>


                                        <input type="radio" name="radio2" value="true"> มี
                                        <input type="radio" name="radio2" value="false"> ไม่มี



                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                            <div class="col-sm-12">
                                                <label class="col-form-label"> <?php echo $row['car5']; ?> </label>
                                                <label class="col-form-label"> <?php echo $row['car6']; ?> </label>

                                            </div>
                                        </div>


                                        <input type="radio" name="radio3" value="true"> มี
                                        <input type="radio" name="radio3" value="false"> ไม่มี



                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                            <div class="col-sm-12">
                                                <label class="col-form-label"> <?php echo $row['car7']; ?> </label>
                                                <label class="col-form-label"> <?php echo $row['car8']; ?> </label>

                                            </div>
                                        </div>


                                        <input type="radio" name="radio4" value="true"> มี
                                        <input type="radio" name="radio4" value="false"> ไม่มี



                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                            <div class="col-sm-12">
                                                <label class="col-form-label"> <?php echo $row['car9']; ?> </label>
                                                <label class="col-form-label"> <?php echo $row['car10']; ?> </label>

                                            </div>
                                        </div>


                                        <input type="radio" name="radio5" value="true"> มี
                                        <input type="radio" name="radio5" value="false"> ไม่มี



                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                            <div class="col-sm-12">
                                                <label class="col-form-label"> <?php echo $row['car11']; ?> </label>
                                                <label class="col-form-label"> <?php echo $row['car12']; ?> </label>

                                            </div>
                                        </div>


                                        <input type="radio" name="radio6" value="true"> มี
                                        <input type="radio" name="radio6" value="false"> ไม่มี

                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                            <div class="col-sm-12">
                                                <label class="col-form-label"> <?php echo $row['car13']; ?> </label>
                                                <label class="col-form-label"> <?php echo $row['car14']; ?> </label>

                                            </div>
                                        </div>


                                        <input type="radio" name="radio7" value="true"> มี
                                        <input type="radio" name="radio7" value="false"> ไม่มี


                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                            <div class="col-sm-12">
                                                <label class="col-form-label"> <?php echo $row['car15']; ?> </label>
                                                <label class="col-form-label"> <?php echo $row['car16']; ?> </label>

                                            </div>
                                        </div>


                                        <input type="radio" name="radio8" value="true"> มี
                                        <input type="radio" name="radio8" value="false"> ไม่มี


                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                            <div class="col-sm-12">
                                                <label class="col-form-label"> <?php echo $row['car17']; ?> </label>
                                                <label class="col-form-label"> <?php echo $row['car18']; ?> </label>
                                            </div>
                                        </div>

                                        <input type="radio" name="radio9" value="true"> มี
                                        <input type="radio" name="radio9" value="false"> ไม่มี



                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                            <div class="col-sm-12">
                                                <label class="col-form-label"> <?php echo $row['car19']; ?> </label>
                                                <label class="col-form-label"> <?php echo $row['car20']; ?> </label>

                                            </div>
                                        </div>


                                        <input type="radio" name="radio10" value="true"> มี
                                        <input type="radio" name="radio10" value="false"> ไม่มี


                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                            <div class="col-sm-12">
                                                <label class="col-form-label"> <?php echo $row['car21']; ?> </label>
                                                <label class="col-form-label"> <?php echo $row['car22']; ?> </label>

                                            </div>
                                        </div>


                                        <input type="radio" name="radio11" value="true"> มี
                                        <input type="radio" name="radio11" value="false"> ไม่มี


                                        <div class="form-group row">
                                            <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                            <div class="col-sm-12">
                                                <label class="col-form-label"> <?php echo $row['car23']; ?> </label>
                                                <label class="col-form-label"> <?php echo $row['car24']; ?> </label>

                                            </div>
                                        </div>


                                        <<input type="radio" name="radio12" value="true"> มี
                                            <input type="radio" name="radio12" value="false"> ไม่มี

                                            <div class="form-group row">
                                                <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                                <div class="col-sm-12">
                                                    <label class="col-form-label"> <?php echo $row['car25']; ?> </label>
                                                    <label class="col-form-label"> <?php echo $row['car26']; ?> </label>

                                                </div>
                                            </div>


                                            <input type="radio" name="radio13" value="true"> มี
                                            <input type="radio" name="radio13" value="false"> ไม่มี


                                            <div class="col-sm-12">
                                                <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                                <label class="col-form-label"> <?php echo $row['car27']; ?> </label>
                                                <label class="col-form-label"> <?php echo $row['car28']; ?> </label>
                                            </div>
                                    </div>


                                    <input type="radio" name="radio14" value="true"> มี
                                    <input type="radio" name="radio14" value="false"> ไม่มี
                                    <div class="col-sm-12">
                                        <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                        <label class="col-form-label"> <?php echo $row['car29']; ?> </label>
                                        <label class="col-form-label"> <?php echo $row['car30']; ?> </label>
                                    </div>
                                </div>


                                <input type="radio" name="radio15" value="true"> มี
                                <input type="radio" name="radio15" value="false"> ไม่มี


                                <div class="col-sm-12">
                                    <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                    <label class="col-form-label"> <?php echo $row['car31']; ?> </label>
                                    <label class="col-form-label"> <?php echo $row['car32']; ?> </label>

                                </div>
                            </div>

                            <input type="radio" name="radio16" value="true"> มี
                            <input type="radio" name="radio16" value="false"> ไม่มี


                            <div class="col-sm-12">
                                <label class="col-sm-14 col-form-labe">ผลการเรียนรู้</label>
                                <label class="col-form-label"> <?php echo $row['car33']; ?> </label>
                                <label class="col-form-label"> <?php echo $row['car34']; ?> </label>

                            </div>
                        </div>

                        <input type="radio" name="radio17" value="true"> มี
                        <input type="radio" name="radio17" value="false"> ไม่มี



                        <div class="col-sm-12">
                            <label class="col-sm-14 col-form-labe">ข้อเสนอการดำเนินการเพื่อปรับปรุงวิธีสอน (ปัญหาที่เจอใน ข้อ 3)</label>
                            <label class="col-form-label"> <?php echo $row['porm']; ?> </label>




                        </div>
                </div>



                <h1 class="h3 mb-0 text-gray-800">หมวดที่ 3 สรุปผลการจัดการเรียนการสอนของรายวิชา</h1>
                </center>

                </td>
                </tr>
                </table>




                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">1.จำนวนนักศึกษาที่ลงทะเบียนเรียน</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['coursename']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">2.จำนวนนักศึกษาที่ขาดสอบ</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['coursetype']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">3.จำนวนักศึกษาที่ไม่มีสิทธิ์สอบ</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['responsibleteacher']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">4.จำนวนนักศึกษาคะแนนไม่สมบูรณ์</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['responsibleteacher1']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">5.จำนวนนักศึกษาเพิกถอน (W)</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['ll']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">6.จำนวนนักศึกษาที่เข้าสอบจริง</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['nn']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">7.จำนวนนักศึกษาที่คงอยู่เมื่อสิ้นสุดภากการศึกษา</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['qw']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ระดับคะแนนA</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['fram1']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['fram2']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ระดับคะแนนB+</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['fram3']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['fram4']; ?> </label>
                    </div>


                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ระดับคะแนนB</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['fram5']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['fram6']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ระดับคะแนนC+</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['fram7']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['fram8']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ระดับคะแนนC</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['fram9']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['fram10']; ?> </label>
                    </div>
                </div>



                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ระดับคะแนนD+</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['fram11']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['fram12']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ระดับคะแนนD</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['fram13']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['fram14']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ระดับคะแนนF</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['fram15']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['fram16']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ระดับคะแนน(W)</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['fram17']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['fram18']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">FM</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['fram19']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['fram20']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">I</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['fram21']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['fram22']; ?> </label>
                    </div>
                </div>




                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ผ่าน (P, S)</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['fram23']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['fram24']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ไม่ผ่าน (U)</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['fram25']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['fram26']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-10 col-form-label">9.ปัจจัยที่ทำให้ระดับคะแนนผิดปกติ</label>
                    <div class="col-sm-12">
                        <label class="col-form-label"> <?php echo $row['awe']; ?> </label>
                    </div>
                </div>


                <h5>10.ความคลาดเคลื่อนจากแผนการปรัเมินที่กำหนดไว่ในรายละเอียดรายวิชา</h5>

                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">10.1.ความคลาดเคลื่อนด้านกำหนดเวลาการประเมิน</label>
                    <div class="col-sm-11">
                        <label class="col-form-label"> <?php echo $row['awe1']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['awe2']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">10.2.ความคลาดเคลื่อนด้านวิธีการประเมินผลการเรียนรู้ (ถ้ามี)</label>
                    <div class="col-sm-11">
                        <label class="col-form-label"> <?php echo $row['awe3']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['awe4']; ?> </label>
                    </div>
                </div>

                <h5>11.การทวนสอบมาตราฐานผลสัมฤทธิ์ของนักศึกษา (มคอ.3 หมวด 7 ข้อ 4)</h5>



                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">วิธีการทวนสอบ</label>
                    <div class="col-sm-11">
                        <label class="col-form-label"> <?php echo $row['awe5']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">สรุปผล</label>
                    <div class="col-sm-11">
                        <label class="col-form-label"> <?php echo $row['awe6']; ?> </label>
                    </div>
                </div>



                <center>
                    <h1 class="h3 mb-0 text-gray-800">หมวดที่ 4 ปัญหาและผลกระทบด้านดำเนินการ</h1>
                </center>

                </td>
                </tr>
                </table>



                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">1.ประเด็นทรัพยากรประกรอบการเรียนและสิ่งอำนวยความสะดวก</label>
                    <div class="col-sm-11">
                        <label class="col-form-label"> <?php echo $row['you']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['caa']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">2.ประเด็นด้านการบริหารและองค์กร</label>
                    <div class="col-sm-11">
                        <label class="col-form-label"> <?php echo $row['gam']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['gam1']; ?> </label>
                    </div>
                </div>
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




                            <center>
                                <h1 class="h3 mb-0 text-gray-800">หมวดที่ 5 การประเมินรายวิชา</h1>
                            </center>

                            </td>
                            </tr>
                            </table>




                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">1.ผลการประเมินรายวิชาโดยนักศึกษาคะแนนรวมทั้งหมด</label>
                                <div class="col-sm-2">
                                    <label class="col-form-label"> <?php echo $row['tay']; ?> </label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">1.1 ข้อวิพากษ์ที่สำคัญจากผลการประเมินโดยนักศึกษา</label>
                                <div class="col-sm-10">
                                    <label class="col-form-label"> <?php echo $row['taa']; ?> </label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">1.2.ความเห็นของอาจารย์ผู้สอนต่อข้อวิพากษต์ตามข้อ1.1 </label>
                                <div class="col-sm-10">
                                    <label class="col-form-label"> <?php echo $row['yab']; ?> </label>
                                </div>
                            </div>

                            <h5>2.ผลการประเมินรายวิชาโดยวิธีอื่น</h5>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">2.1ข้อวิพากษ์ที่สำคัญจากผลการประเมินโดยวิธีอื่น </label>
                                <div class="col-sm-10">
                                    <label class="col-form-label"> <?php echo $row['yty']; ?> </label>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">2.2.ความเห็นของอาจารย์ผู้สอนต่อข้อวิพากษต์ตามข้อ2.1</label>
                                <div class="col-sm-10">
                                    <label class="col-form-label"> <?php echo $row['tyt']; ?> </label>
                                </div>
                            </div>
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
                                    <label class="col-form-label"> <?php echo $row['io']; ?> </label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">ผลการดำเนินงาน</label>
                                <div class="col-sm-10">
                                    <label class="col-form-label"> <?php echo $row['io1']; ?> </label>
                                </div>
                            </div>
                            <h5>ข้อเสนอแผนการปรับปรุงสำหรับภาคการศึกษา/ปีการศึกษาต่อไป</h5>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">ข้อเสนอแผนการปรับปรุงสำหรับภาคการศึกษา/ปีการศึกษาต่อไป</label>
                                <div class="col-sm-10">
                                    <label class="col-form-label"> <?php echo $row['io2']; ?> </label>
                                    <label class="col-form-label"> <?php echo $row['io3']; ?> </label>
                                    <label class="col-form-label"> <?php echo $row['io4']; ?> </label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">4.ข้อเสนอแนะของอาจารย์ผู้รับผิดชอบรายวิชา ต่ออาจารย์ผู้รับผิดชอบหลักสูตร</label>
                                <div class="col-sm-10">
                                    <label class="col-form-label"> <?php echo $row['io5']; ?> </label>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


</body>

</html>