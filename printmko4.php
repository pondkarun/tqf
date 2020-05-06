<?php
include('include/condb.php');
$sql = "SELECT * FROM dbcourse_add AS a
INNER JOIN db_mko4_1 AS b ON a.id = b.id_mko
INNER JOIN db_mko4_2 AS c ON a.id = c.id_mko
INNER JOIN db_mko4_3 AS d ON a.id = d.id_mko
INNER JOIN db_mko4_4 AS e ON a.id = e.id_mko
INNER JOIN db_mko4_5 AS f ON a.id = f.id_mko
INNER JOIN db_mko4_6 AS g ON a.id = g.id_mko
INNER JOIN db_mko4_7 AS h ON a.id = h.id_mko
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


    <div class="container">
        <h1 class="text-center">รายงาน</h1>
        <div class="row text-center">
            <div class="col-6">
                <p>เรื่อง : รายงานมคอ4</p>
            </div>
            <div class="col-6">
                <p>วันที่ : 10/02/63</p>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">ชื่อสถาบันอุดมศึกษา</label>
            <div class="col-sm-10">
                <label class="col-form-label"> <?php echo $row['titutionname']; ?> </label>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">วิทยาเขต/คณะ/สาขา</label>
            <div class="col-sm-10">
                <label class="col-form-label"> <?php echo $row['cam']; ?> </label>
            </div>
        </div>
        <h1 class="h3 mb-0 text-gray-800">หมวดที่ 1 ข้อมูลโดยทั่วไป</h1>
        </td>
        </tr>
        </table>




        <div class="form-group row">
            <label class="col-sm-2 col-form-label">1.รหัสวิชา</label>
            <div class="col-sm-10">
                <label class="col-form-label"> <?php echo $row['coursee']; ?> </label>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">2.ชื่อวิชา</label>
            <div class="col-sm-10">
                <label class="col-form-label"> <?php echo $row['namecouree']; ?> </label>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">3.จำนวนหน่วยกิต</label>
            <div class="col-sm-10">
                <label class="col-form-label"> <?php echo $row['credit']; ?> </label>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">4.หลักสูตรและประเภทรายวิชา</label>
            <div class="col-sm-10">
                <label class="col-form-label"> <?php echo $row['coursetype']; ?> </label>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">5.อาจารย์ผู้รับผิดชอบรายวิชาและอาจารย์ผู้สอน</label>
            <div class="col-sm-10">
                <label class="col-form-label"> <?php echo $row['responsibleteacher']; ?> </label>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">6.ภาคการศึกษา/ชั้นปีที่่เรียน</label>
            <div class="col-sm-10">
                <label class="col-form-label"> <?php echo $row['semester']; ?> </label>
            </div>
        </div>


        <div class="form-group row">
            <label class="col-sm-2 col-form-label">7.วันที่จัดทำหรือปรับปรุงรายละเอียดของรายวิชาครั้งล่าสุด</label>
            <div class="col-sm-10">
                <label class="col-form-label"> <?php echo $row['dateofmaking']; ?> </label>
            </div>
        </div>


        <h1 class="h3 mb-0 text-gray-800">หมวดที่ 2 จุดมุ่งหมายและวัตถุประสงค์ </h1>
        </td>
        </tr>
        </table>

        <form>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">1. จุดมุ่งหมายของรายวิชา </label>
                <div class="col-sm-10">
                    <label class="col-form-label"> <?php echo $row['courseObjectives1']; ?> </label>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">2. วัตถุประสงค์ในการพัฒนา/ปรับปรุงรายวิชา </label>
                <div class="col-sm-10">
                    <label class="col-form-label"> <?php echo $row['courseObjectives2']; ?> </label>
                </div>




            </div>


            <td>
                <h1 class="h3 mb-0 text-gray-800">หมวดที่ 3 การพัฒนาผลการเรียนรู้ของนักศึกษา </h1>
            </td>
            </tr>
            </table>
            <h5>1.คุณธรรมจริยธรรม </h5>
            <h6>1.1 คุณธรรม จริยธรรม ที่ต้องพัฒนา <h6>

                    <input type="checkbox" name="gender1" value="true" <?php echo  $checked = ($row['gender1'] == "true") ? "checked" : ''; ?> disabled>1.1.1.มีความซื่อสัตย์สุจริต</input>
                    <br>
                    <input type="checkbox" name="gender2" value="true" <?php echo  $checked = ($row['gender2'] == "true") ? "checked" : ''; ?> disabled>1.1.2.มีวินัยตรงต่อเวลา</input>
                    <br>
                    <input type="checkbox" name="gender3" value="true" <?php echo  $checked = ($row['gender3'] == "true") ? "checked" : ''; ?> disabled>1.1.3.เคารพกฎระเบียบและข้อบังคับต่างๆ</input>
                    <br>
                    <input type="checkbox" name="gender4" value="true" <?php echo  $checked = ($row['gender4'] == "true") ? "checked" : ''; ?> disabled>1.1.4.มีความรับผิดชอบ</input>
                    <br>

                    <h5>1.2 กระบวนการหรือกิจกรรมที่ใช้พัฒนาการเรียนรู้ </h5>
                    <input type="checkbox" name="gender5" value="true" <?php echo  $checked = ($row['gender5'] == "true") ? "checked" : ''; ?> disabled>1.2.1.การปฐมนิเทศ</input>
                    <br>
                    <input type="checkbox" name="gender6" value="true" <?php echo  $checked = ($row['gender6'] == "true") ? "checked" : ''; ?> disabled>1.2.2.การอบรมบุคลิกภาพและการสื่อสาร</input>
                    <br>
                    <input type="checkbox" name="gender7" value="true" <?php echo  $checked = ($row['gender7'] == "true") ? "checked" : ''; ?> disabled>1.2.3.การอบรมความรู้ตามศาสตร์</input>
                    <br>
                    <input type="checkbox" name="gender8" value="true" <?php echo  $checked = ($row['gender8'] == "true") ? "checked" : ''; ?> disabled>1.2.4.การมอบหมายโครงงานด้านคุณธรรมจริยธรรมการปัจฉิมนิเทศ</input>

                    <h5>1.3 วิธีการประเมินผลการเรียนรู้ </h5>

                    <input type="checkbox" name="gender9" value="true" <?php echo  $checked = ($row['gender9'] == "true") ? "checked" : ''; ?> disabled>1.3.1.อาจารย์นิเทศก์/อาจารย์ที่ปรึกษาประเมินผลงานจาโครงงานจริยธรรมและจิตอาสา</input>
                    <br>
                    <input type="checkbox" name="gender10" value="true" <?php echo  $checked = ($row['gender10'] == "true") ? "checked" : ''; ?> disabled>1.3.2.ประเมินผลการจากเข้าร่วมกิจกรรมปฐมนิเทศอบรมบุคลิกภาพและการสื่อสาร อบรมตามศาสตร์และปัจฉิมนิเทศ </input>
                    <br>

                    <h5>2.ความรู้ </h5>
                    <h6>2.1ความรู้ที่ต้องได้รับ </h6>
                    <input type="checkbox" name="gender11" value="true" <?php echo  $checked = ($row['gender11'] == "true") ? "checked" : ''; ?> disabled>2.1.1.มีความรู้ในศาสตร์ของตนเอง</input>
                    <br>
                    <input type="checkbox" name="gender12" value="true" <?php echo  $checked = ($row['gender12'] == "true") ? "checked" : ''; ?> disabled>2.1.2.มีความรู้ด้านบุคลิกภาพและการสื่อสาร</input>

                    <h5>2.2กระบวนการหรือกิจกรรมที่ใช้พัฒนาการเรียนรู้</h5>
                    <input type="checkbox" name="gender13" value="true" <?php echo  $checked = ($row['gender13'] == "true") ? "checked" : ''; ?> disabled>2.2.1.อาจารย์นิเทศก์/อาจารย์ที่ปรึกษามอบหมายงานโครงงานจริยธรรมและจิตอาสาให้นักศึกษาหลักสูตรจัดอบรมความรู้ตามศาสตร์ให้กับนักศึกษา </input>

                    <h5>2.3 วิธีการประเมินผลการเรียนรู้ </h5>
                    <input type="checkbox" name="gender14" value="true" <?php echo  $checked = ($row['gender14'] == "true") ? "checked" : ''; ?> disabled>2.3.1.ประเมินผลโดยอาจารย์นิเทศก์/อาจารย์ที่ปรึกษาโครงงานจริยธรรมและจิตอาสา</input>


                    <h5>3.ทักษะทางปัญญา </h5>
                    <h6>3.1ทักษะทางปัญญาที่ต้องพัฒนา</h6>
                    <input type="checkbox" name="gender15" value="true" <?php echo  $checked = ($row['gender15'] == "true") ? "checked" : ''; ?> disabled>3.1.1.สามารถคิดวิเคราะห์และสรุปผลความรู้ทางทฤษฎีที่เรียนมาให้สอดคล้องกับการปฏิบัติงานจริงได้</input>
                    <br>
                    <input type="checkbox" name="gender16" value="true" <?php echo  $checked = ($row['gender16'] == "true") ? "checked" : ''; ?> disabled>3.2.2.สามารถแสดงแนวคิดในการนำความรู้ทางทฤษฏีมาพัฒนาหรือปรับปรุงงานให้เหมาะสมสามารถวิเคราะห์ปัญหาและเสนอแนะวิธีการแก้ไขได้</input>
                    <br>


                    <h5>3.2 กระบวนการหรือกิจกรรมที่ใช้พัฒนาการเรียนรู้ </h5>
                    <input type="checkbox" name="gender17" value="true" <?php echo  $checked = ($row['gender17'] == "true") ? "checked" : ''; ?> disabled>3.2.1.การจัดอบรมความรู้ตามศาสตร์</input>
                    <br>
                    <input type="checkbox" name="gender18" value="true" <?php echo  $checked = ($row['gender18'] == "true") ? "checked" : ''; ?> disabled>3.2.1.การมอบหมายงาน</input>
                    <br>

                    <h5>3.3วิธีการประเมินผลการเรียนรู้</h5>
                    <input type="checkbox" name="gender19" value="true" <?php echo  $checked = ($row['gender19'] == "true") ? "checked" : ''; ?> disabled>3.3.1.ประเมินผลโดยอาจารย์นิเทศก์/อาจารย์ที่ปรึกษาโครงงานจริยธรรมและจิตอาสา</input>


                    <h5>4.ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบ</h5>
                    <h6>4.1ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบที่ต้องพัฒนา</h6>
                    <input type="checkbox" name="gender20" value="true" <?php echo  $checked = ($row['gender20'] == "true") ? "checked" : ''; ?> disabled>4.1.1.รับผิดชอบงานที่ได้รับมอบหมาย</input>
                    <br>
                    <input type="checkbox" name="gender21" value="true" <?php echo  $checked = ($row['gender21'] == "true") ? "checked" : ''; ?> disabled>4.1.1.พัฒนาตนเองโดยการเรียนรู้สิ่งใหม่ๆอย่างสมำเสมอ</input>

                    <h5>4.2 กระบวนการหรือกิจกรรมที่ใช้พัฒนาการเรียนรู้ </h5>
                    <input type="checkbox" name="gender22" value="true" <?php echo  $checked = ($row['gender22'] == "true") ? "checked" : ''; ?> disabled>4.2.1.การปฏิสัมพันธ์กับบุคคลในระดับต่างๆ</input>

                    <h5>4.3วิธีการประเมินผลการเรียนรู้</h5>
                    <input type="checkbox" name="gender23" value="true" <?php echo  $checked = ($row['gender23'] == "true") ? "checked" : ''; ?> disabled>4.3.1.ประเมินผลโดยอาจารย์นิเทศก์/อาจารย์ที่ปรึกษาโครงงานจริยธรรมและจิตอาสาๆ</input>


                    <h5>5.ทักษะการวิเคราะห์เชิงตัวเลขการสื่อสารและการใช้เทคโนโลยีสารสนเทศ</h5>
                    <input type="checkbox" name="gender24" value="true" <?php echo  $checked = ($row['gender24'] == "true") ? "checked" : ''; ?> disabled>5.1.1ทักษะการวิเคราะห์เชิงตัวเลขการสื่อสารและการใช้เทคโนโลยีสารสนเทศที่ต้องพัฒนาสามารถใช้ความรู้ทางด้านคอมพิวเตอร์อันนไปสู่การตัดสินใจที่ถูกต้องเหมาะสมมีความสามารถในการนำเสนอความคิดเห็นทั้งเชิงสังคมและวิชาการให้แก่บุคคลหรือกลุ่มบุคคลทั้งการนำเสนอด้วยปากเปล่าและการเขียนรายงานได้อย่างเหมาะสมและมีประสิทธิภาพ
                    </input>

                    <h5>5.2กระบวนการหรือกิจกรรมที่ใช้พัฒนาการเรียนรู้</h5>
                    <input type="checkbox" name="gender25" value="true" <?php echo  $checked = ($row['gender25'] == "true") ? "checked" : ''; ?> disabled>5.2.1.กำหนดให้ส่งโครงงานที่ได้รับมอบหมายจากอาจารย์นิเทศก์/อาจารย์ที่ปรึกษา</input>
                    <br>
                    <input type="checkbox" name="gender26" value="true" <?php echo  $checked = ($row['gender26'] == "true") ? "checked" : ''; ?> disabled>5.2.2.กำหนดให้เขียนบันทึกสรุปผลจากการเข้าร่วมอบรมตามศาสตร์</input>


                    <h5>5.3วิธีการประเมินผลการเรียนรู้ </h5>
                    <input type="checkbox" name="gender27" value="true" <?php echo  $checked = ($row['gender27'] == "true") ? "checked" : ''; ?> disabled>5.3.1.ประเมินผลโดยอาจารย์นิเทศก์/อาจารย์ที่ปรึกษาจากรายงาน</input>
                    <br>
                    <input type="checkbox" name="gender28" value="true" <?php echo  $checked = ($row['gender28'] == "true") ? "checked" : ''; ?> disabled>5.3.2.ประเมินผลจากบันทึกสรุปผล</input>

                    <h1 class="h3 mb-0 text-gray-800">หมวดที่ 4 ลักษณะของประสบการณ์ภาคสนาม </h1>
                    </td>
                    </tr>
                    <br>



                    </table>
                    <br>
                    <center>
                        <h5>คำอธิบายทั่วไปของประสบการณ์ภาคสนาม</h5>
                        <form>



                            <textarea id="story" name="story" rows="7" cols="120" disabled>
                                                การประยุกต์หลักการและทฤษฎีทางการตลาดการศึกษาแนวโน้มสภาพการ
                                                เปลี่ยนแปลงในหน่วยงานทางธุรกิจโดยการใช้กรณีศึกษาสถานการณ์จำลอง
                                                การเตรียมความพร้อมเกี่ยวกับทักษะการใช้ภาษาการใช้คอมพิวเตอร์การใช้
                                                เทคโนโลยีการพัฒนาบุคลิกภาพและการปรับตัวเข้ากับสภาพแวดล้อม
                                                สามารถทำงานเป็นทีมได้อย่างมีประสิทธิภาพการเสริมสร้างจรรยาบรรณใน
                                                วิชาชีพเพื่อเตรียมความพร้อมก่อนออกฝึกประสบการณ์วิชาชีพ 
                                                    </textarea>
                    </center>

                    <h6>ความรู้</h6>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">1.1</label>
                        <div class="col-sm-12">
                            <label class="col-form-label"> <?php echo $row['a']; ?> </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">1.2</label>
                        <div class="col-sm-12">
                            <label class="col-form-label"> <?php echo $row['aa']; ?> </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">1.3</label>
                        <div class="col-sm-12">
                            <label class="col-form-label"> <?php echo $row['aaa']; ?> </label>
                        </div>
                    </div>


                    <h5>รายงานหรืองานที่นักศึกษาได้รับมอบหมาย</h5>

                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">1</label>
                        <div class="col-sm-12">
                            <label class="col-form-label"> <?php echo $row['b']; ?> </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">2</label>
                        <div class="col-sm-12">
                            <label class="col-form-label"> <?php echo $row['bb']; ?> </label>
                        </div>
                    </div>
                    <h5>หน้าที่และความรับผิดชอบของอาจารย์ที่ปรึกษา/อาจารย์นิเทศก์</h5>

                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">1</label>
                        <div class="col-sm-12">
                            <label class="col-form-label"> <?php echo $row['bbb']; ?> </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">2</label>
                        <div class="col-sm-12">
                            <label class="col-form-label"> <?php echo $row['c']; ?> </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">3</label>
                        <div class="col-sm-12">
                            <label class="col-form-label"> <?php echo $row['cc']; ?> </label>
                        </div>
                    </div>

                    <h5>การเตรียมการในการแนะแนวและช่วยเหลือนักศึกษา</h5>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">1</label>
                        <div class="col-sm-10">
                            <label class="col-form-label"> <?php echo $row['ccc']; ?> </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">2</label>
                        <div class="col-sm-10">
                            <label class="col-form-label"> <?php echo $row['d']; ?> </label>
                        </div>
                    </div>
                    <h5>สิ่งอำนวยความสะดวกและการสนับสนุนที่ต้องการจากสถานที่ที่จัดประสบการณ์ภาคสนาม</h5>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">1</label>
                        <div class="col-sm-10">
                            <label class="col-form-label"> <?php echo $row['dd']; ?> </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">2</label>
                        <div class="col-sm-10">
                            <label class="col-form-label"> <?php echo $row['ddd']; ?> </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">3</label>
                        <div class="col-sm-10">
                            <label class="col-form-label"> <?php echo $row['e']; ?> </label>
                        </div>
                    </div>

                    <h1 class="h3 mb-0 text-gray-800">หมวดที่ 5 การวางแผนและการเตรียมการ </h1>
                    </td>
                    </tr>
                    </table>

                    <form>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">1.การกำหนดสถานที่ฝึกงาน</label>
                            <div class="col-sm-10">
                                <label class="col-form-label"> <?php echo $row['so']; ?> </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">2.การเตรียมนักศึกษา</label>
                            <div class="col-sm-10">
                                <label class="col-form-label"> <?php echo $row['sosad']; ?> </label>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">3.การเตรียมอาจารย์ที่ปรึกษา/อาจารย์นิเทศ</label>
                            <div class="col-sm-10">
                                <label class="col-form-label"> <?php echo $row['sa']; ?> </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">4.การจัดการความเสี่ยง</label>
                            <div class="col-sm-10">
                                <label class="col-form-label"> <?php echo $row['qa']; ?> </label>
                                <label class="col-form-label"> <?php echo $row['flow']; ?> </label>
                                <label class="col-form-label"> <?php echo $row['ja']; ?> </label>

                                <h1 class="h3 mb-0 text-gray-800">หมวดที่ 6 การประเมินนักศึกษา</h1>
                                </td>
                                </tr>
                                </table>


                                <h5>1.หลักเกณฑ์การประเมิน</h5>

                                <label for="story"></label>

                                <textarea id="story" name="story" rows="7" cols="120" disabled>
                                            ช่วงคะแนน 	 	 ค่าระดับคะแนน                
                                         90 - 100                   A    
                                         80 - 89  	 	          B+ 
                                         70 - 79  	 	          B                
                                         60 - 69  	 	          C+  
                                         50 - 59  	 	          C                   	 	 	        
                                         40 - 49  	              D+ 
                                         30 - 39  	 	          D 
                                          0 - 29  	 	          F 
                                        ขาดกิจกรรม 	 	        I  
                                        ประพฤติผิดระเบียบ/สอบสวนระบุโทษ  F 
                                       หมายเหตุ   :  เกณฑ์ผ่านการฝึกงานต้องได้ค่าระดับคะแนนไม่ต่ำกว่า C 
</textarea>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">2.กระบวนการประเมินผลการปฏิบัติงานของนักศึกษา</label>
                                <div class="col-sm-10">
                                    <label class="col-form-label"> <?php echo $row['story']; ?> </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">3.ความรับผิดชอบของอาจารย์ผู้รับผิดชอบประสบการณ์ภาคสนามต่อการประเมินนักศึกษา </label>
                            <div class="col-sm-10">
                                <label class="col-form-label"> <?php echo $row['courseObjectives1']; ?> </label>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">4.การสรุปผลการประเมินที่แตกต่าง</label>
                            <div class="col-sm-10">
                                <label class="col-form-label"> <?php echo $row['courseObjectives2']; ?> </label>
                            </div>
                        </div>



                        <h1 class="h3 mb-0 text-gray-800">หมวดที่ 7 การประเมินและปรับปรุงการดำนินการของการฝึกประสบการณ์ภาคสนาม </h1>
                        </td>
                        </tr>
                        </table>



                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">1. กระบวนการประเมินของการฝึกประสบการณ์ภาคสนามจากผู้เกี่ยวข้อง</label>
                            <div class="col-sm-10">
                                <label class="col-form-label"> <?php echo $row['com']; ?> </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">2. กระบวนการทบทวนผลการประเมินและการวางแผนปรับปรุง </label>
                            <div class="col-sm-10">
                                <label class="col-form-label"> <?php echo $row['comm']; ?> </label>
                            </div>
                        </div>


    </div>
    </div>

    </div>
    </div>


    </div>
    </div>


</body>

</html>