<?php
include('include/condb.php');
$sql = "SELECT * FROM dbcourse_add AS a
INNER JOIN db_mko6_1 AS b ON a.id = b.id_mko
INNER JOIN db_mko6_2 AS c ON a.id = c.id_mko
INNER JOIN db_mko6_3 AS d ON a.id = d.id_mko
INNER JOIN db_mko6_4 AS e ON a.id = e.id_mko
INNER JOIN db_mko6_5 AS f ON a.id = f.id_mko
INNER JOIN db_mko6_6 AS g ON a.id = g.id_mko
INNER JOIN db_mko6_7 AS h ON a.id = h.id_mko
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

<body>
    <input onclick="javascript:window.print()" type="button" value="คลิ๊กเพื่อ Print หน้านี้" name="print2">

    <div class="container">
        <h1 class="text-center">รายงาน</h1>
        <div class="row text-center">
            <div class="col-6">
                <p>เรื่อง : รายงานมคอ6</p>
            </div>
            <div class="col-6">
                <p>วันที่ : 10/02/63</p>
            </div>
        </div>

        <h1 class="h3 mb-0 text-gray-800">กรอบมาตรฐานคุณวุฒิระดับอุดมศึกษาแห่งชาติประเภท6</h1>
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
                            <label class="col-form-label"> <?php echo $row['institutionnamee']; ?> </label>
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
                            <label class="col-form-label"> <?php echo $row['namesubject']; ?> </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">3.หลักสูตรและประเภทรายวิชา</label>
                        <div class="col-sm-10">
                            <label class="col-form-label"> <?php echo $row['coursetype']; ?> </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">4.จำนวนหน่วยกิต</label>
                        <div class="col-sm-10">
                            <label class="col-form-label"> <?php echo $row['cradit']; ?> </label>
                        </div>
                    </div>
                    <div id="item_table">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">5.อาจารย์ผู้รับผิดชอบรายวิชาและอาจารย์ผู้สอน</label>
                            <div class="col-sm-9">
                                <label class="col-form-label"> <?php echo $row['responsibleteacher']; ?> </label>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">6.ภาคการศึกษา/ชั้นปีที่่เรียนที่ฝึกประสบการณ์ภาคสนาม</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['semester']; ?> </label>
                    </div>
                </div>


                <h1 class="h3 mb-0 text-gray-800">หมวดที่2การดำเนินการที่ต่างจากแผนการฝึกประสบการณ์ภาคสนาม</h1>

                </td>
                </tr>
                </table>




                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">1.การเตรียมนักศึกษา </label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['mm']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">2.การเตรียมอาจารย์ที่ปรึกษา/อาจารย์นิเทศก์</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['hh']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">3.การเตรียมพนักงานพี่เลี้ยง(Field Supervisors)จากสถานประกอบการ</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['gg']; ?> </label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">4.การเปลี่ยนแปลงการจัดการในการฝึกประสบการณ์ภาคสนาม</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['oo']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">5.การเปลี่ยนแปลงอื่นๆ </label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['pp']; ?> </label>
                    </div>
                </div>

                <h1 class="h3 mb-0 text-gray-800">หมวดที่ 3 ผลการดำเนินการ</h1>

                </td>
                </tr>
                </table>




                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">1.จำนวนนักศึกษาที่ลงทะเบียนเรียน/ส่งไปฝึกประสบการณ์ภาคสนาม</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['numchildr']; ?> </label>


                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">2. จำนวนนักศึกษาที่คงอยู่เมื่อสิ้นสุดการฝึกประสบการณ์ภาคสนาม</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['balancer']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">3. จำนวนนักศึกษาที่ถอน (W)</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['wdropf']; ?> </label>
                    </div>
                </div>
                <h5>การกระจายของระดับคะแนน (เกรด)</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ระดับคะแนนA</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['aonec']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['aoneed']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ระดับคะแนนB+</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['bpluss']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['bos']; ?> </label>
                    </div>


                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ระดับคะแนนB</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['bba']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['bbbplus']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ระดับคะแนนC+</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['cplus']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['ccplusv']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ระดับคะแนนC</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['cav']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['conen']; ?> </label>
                    </div>
                </div>



                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ระดับคะแนนD+</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['dplusn']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['donem']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ระดับคะแนนD</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['ddm']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['ddoner']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ระดับคะแนนF</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['ooo']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['ttt']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ไม่สมบูรณ์ (I)</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['yyy']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['uuu']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ผ่าน (P, S)</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['cord']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['suca']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ตก (U)</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['dass']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['nahw']; ?> </label>
                    </div>
                </div>




                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ถอน (W)</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['haw']; ?> </label>
                        <label class="col-form-label"> <?php echo $row['mmml']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">5. ปัจจัยที่มีผลกระทบต่อผลการฝึกประสบการณ์ภาคสนาม (</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['jack']; ?> </label>

                    </div>
                </div>
                <center>
                    <h1 class="h3 mb-0 text-gray-800">หมวดที่ 4 ปัญหาและผลกระทบด้านการบริหาร</h1>
                </center>

                </td>
                </tr>
                </table>




                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">1.ปัญหาด้านการบริหารของสถาบันอุดมศึกษาและ/หรือสถานประกอบการ/สถานที่ฝึก</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['coursename']; ?> </label>

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">2.ผลกระทบต่อผลการเรียนรู้ของนักศึกษา</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['coursetype']; ?> </label>

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">3.การเปลี่ยนแปลงที่จำเป็นเพื่อหลีกเลี่ยงปัญหาและอุปสรรคในอนาคต </label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['responsibleteacher']; ?> </label>

                    </div>
                </div>
                <center>
                    <h1 class="h3 mb-0 text-gray-800">หมวดที่ 5การประเมินการฝึกประสบการณ์ภาคสนาม</h1>
                </center>

                </td>
                </tr>
                </table>
                <h5>1.การประเมินการฝึกประสบการณ์ภาคสนามโดยนักศึกษา (ให้แนบผลการสำรวจ)</h5>




                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">จุดอ่อน</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['bbbb']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">จุดแข็ง</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['nnnn']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">1.2ความเห็นของอาจารย์ผู้รับผิดชอบ/อาจารย์ที่ปรึกษาการฝึกประสบการณ์ภาคสนาม </label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['cccc']; ?> </label>
                    </div>
                </div>
                <h5>2.การประเมินการฝึกประสบการณ์ภาคสนามโดยสถานประกอบการหรือพนักงานพี่เลี้ยง</h5>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">2.1ข้อวิพากษ์ที่สำคัญจากผลการประเมิน</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['ssss']; ?> </label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">2.2ความเห็นของอาจารย์ผู้รับผิดชอบ/อาจารย์ที่ปรึกษาการฝึกประสบการณ์ภาคสนาม</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['qqqq']; ?> </label>
                    </div>
                </div>

                <center>
                    <h1 class="h3 mb-0 text-gray-800">หมวดที่ 6 แผนการปรับปรุง</h1>
                </center>

                </td>
                </tr>
                </table>
                <h5>1. การดำเนินการเพื่อปรับปรุงการฝึกประสบการณ์ภาคสนามครั้งที่ผ่านมา</h5>




                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">แผนการปรับปรุงของภาคเรียน/ปีการศึกษาที่ผ่านมา</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['wqe']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ผลการดำเนินการ</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['qwee']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">2.ความก้าวหน้าของการปรับปรุงการฝึกประสบการณ์ภาคสนามจากรายงานการประเมินครั้งก่อน</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['ewq']; ?> </label>
                    </div>
                </div>
                <h5>3.ข้อเสนอแผนการปรับปรุงสำหรับภาคการศึกษา/ปีการศึกษาต่อไป</h5>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ข้อเสนอ</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['azz']; ?> </label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">กำหนดเวลาที่แล้วเสร็จ</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['xfvvv']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ผู้รับผิดชอบ</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['qqqwe']; ?> </label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">4.ข้อเสนอแนะของอาจารย์ผู้รับผิดชอบการฝึกประสบการณ์สนามเสนอต่ออาจารย์ผู้รับผิดชอบหลักสูตร</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['moi']; ?> </label>
                    </div>
                </div>
            </div>

        </div>


</body>

</html>