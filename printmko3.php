<?php
include('include/condb.php');
$sql = "SELECT * FROM dbcourse_add AS a
INNER JOIN db_mko3_1 AS b ON a.id = b.id_mko
INNER JOIN db_mko3_2 AS c ON a.id = c.id_mko
INNER JOIN db_mko3_3 AS d ON a.id = d.id_mko
INNER JOIN db_mko3_4 AS e ON a.id = e.id_mko
INNER JOIN db_mko3_5 AS f ON a.id = f.id_mko
INNER JOIN db_mko3_6 AS g ON a.id = g.id_mko
INNER JOIN db_mko3_7 AS h ON a.id = h.id_mko
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
    <!-- <input onclick="javascript:window.print()" type="button" value="คลิ๊กเพื่อ Print หน้านี้" name="print2"> -->

    <div class="container">
        <h1 class="text-center">รายงาน</h1>
        <div class="row text-center">
            <div class="col-6">
                <p>เรื่อง : รายงานมคอ3</p>
            </div>
            <div class="col-6">
                <p>วันที่ : 06/05/63</p>
            </div>
        </div>

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
            <label class="col-sm-2 col-form-label">1.ชื่อวิชา</label>
            <div class="col-sm-10">
                <label class="col-form-label"> <?php echo $row['namecourse']; ?> </label>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">2.จำนวนหน่วยกิต</label>
            <div class="col-sm-10">
                <label class="col-form-label"> <?php echo $row['credit']; ?> </label>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">3.หลักสูตรและประเภทรายวิชา</label>
            <div class="col-sm-10">
                <label class="col-form-label"> <?php echo $row['coursetype']; ?> </label>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">4.อาจารย์ผู้รับผิดชอบรายวิชาและอาจารย์ผู้สอน</label>
            <div class="col-sm-10">
                <label class="col-form-label"> <?php echo $row['responsibleteacher']; ?> </label>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">5.ภาคการศึกษา/ชั้นปีที่่เรียน</label>
            <div class="col-sm-10">
                <label class="col-form-label"> <?php echo $row['semester']; ?> </label>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">6.รายวิชาที่่ต้องเรียนมาก่อน</label>
            <div class="col-sm-10">
                <label class="col-form-label"> <?php echo $row['studiedfirst']; ?> </label>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">7.รายวิชาที่ต้องเรียนพร้อมกัน</label>
            <div class="col-sm-10">
                <label class="col-form-label"> <?php echo $row['studiedtogether']; ?> </label>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">8.สถานที่่เรียน</label>
            <div class="col-sm-10">
                <label class="col-form-label"> <?php echo $row['placeofstudy']; ?> </label>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">9.วันที่จัดทำหรือปรับปรุงรายละเอียดของรายวิชาครั้งล่าสุด</label>
            <div class="col-sm-10">
                <label class="col-form-label"> <?php echo $row['dateofmaking']; ?> </label>
            </div>
        </div>

        <h1 class="h3 mb-0 text-gray-800">หมวดที่ 2 จุดมุ่งหมายและวัตถุประสงค์</h1>
        </td>
        </tr>
        </table>
        <br>
        <h5>จุดมุ่งหมายของรายวิชา/</h5>
        <form>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">1.1</label>
                <div class="col-sm-10">
                    <label class="col-form-label"> <?php echo $row['courseObjectives1']; ?> </label>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">1.2</label>
                <div class="col-sm-10">
                    <label class="col-form-label"> <?php echo $row['courseObjectives2']; ?> </label>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">1.3</label>
                <div class="col-sm-10">
                    <label class="col-form-label"> <?php echo $row['courseObjectives3']; ?> </label>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">1.4</label>
                <div class="col-sm-10">
                    <label class="col-form-label"> <?php echo $row['courseObjectives4']; ?> </label>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">1.5</label>
                <div class="col-sm-10">
                    <label class="col-form-label"> <?php echo $row['coursedevelopment']; ?> </label>
                </div>
            </div>
            <h5>วัตถุประสงค์ในการพัฒนา/ปรับปรุงรายวิชา</h5>



            <h1 class="h3 mb-0 text-gray-800">หมวดที่ 3 ลักษณะและการดำเนินงาน</h1>
            </td>
            </tr>
            </table>
            <br>
            <h5>คำอธิบายรายวิชา</h5>
            <label class="col-form-label"> <?php echo $row['jame1']; ?> </label>

            <div class="form-group row">
                <!-- <label class="col-sm-2 col-form-label">1.1</label> -->
                <div class="col-sm-12">

                </div>
            </div>
            <h5>จำนวนชั่วโมงที่ใช้ต่อภาคการศึกษา</h5>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">บรรยาย</label>
                <div class="col-sm-10">
                    <label class="col-form-label"> <?php echo $row['jame2']; ?> </label>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">สอนเสริม</label>
                <div class="col-sm-10">
                    <label class="col-form-label"> <?php echo $row['jame3']; ?> </label>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">การฝึกปฏิบัติ/งานภาคสนามการฝึกงาน</label>
                <div class="col-sm-10">
                    <label class="col-form-label"> <?php echo $row['jame4']; ?> </label>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">การศึกษาด้วยตัวเอง</label>
                <div class="col-sm-10">
                    <label class="col-form-label"> <?php echo $row['jame5']; ?> </label>
                </div>
            </div>
            <h5>จำนวนชั่วโมงต่อสัปดาห์ที่อาจารย์ให้คำปรึกษาและแนะนำทางวิชาการแก่นักศึกษาเป็นรายบุคคล</h5>
            <label class="col-form-label"> <?php echo $row['jame6']; ?> </label>

            <h1 class="h3 mb-0 text-gray-800">หมวดที่ 4 การพัฒนาการเรียนรู้ของนักศึกษา</h1>
            </center>
            <h5>คุณธรรม จริยธรรม
                <br>
                <label for="story">1.1คุณธรรม จริยธรรมที่ต้องพัฒนา</label>

                <textarea id="story" name="story" rows="7" cols="120" disabled>    นักศึกษาต้องมีคุณธรรม จริยธรรมเพื่อให้สามารถดำเนินชีวิตร่วมกับผู้อื่นในสังคมอย่างราบรื่น และเป็น ประโยชน์ต่อส่วนรวม นอกจากนั้นคอมพิวเตอร์เป็นอุปกรณ์ที่เกี่ยวข้องกับความมั่นคงของประเทศ ความปลอดภัยใน ชีวิตประจำวัน ความสำเร็จทางธุรกิจ ผู้พัฒนาและ/หรือผู้ประยุกต์โปรแกรมจำเป็นต้องมีความรับผิดชอบต่อผลที่ เกิดขึ้น เช่นเดียวกับการประกอบอาชีพในสาขาอื่่น ๆ อาจารย์ที่สอนในแต่ละวิชาต้องพยายามสอดแทรกเรื่องที่ เกี่ยวข้องกับสิ่งต่อไปนี้ทั้ง 7ข้อ เพื่อให้นักศึกษาสามารถพัฒนาคุณธรรม จริยธรรมอย่างน้อย 2ข้อตามที่ระบุไว้ในตารางการกระจายความรับผิดชอบต่อผลการเรียนรู้(Curriclum Mapping) ภายในเล่มมคอ. 2ของหลักสูตร</textarea>

                <input type="checkbox" name="gender1" value="true" <?php echo  $checked = ($row['gender1'] == "true") ? "checked" : ''; ?> disabled> 1.1.1.ตระหนักในคุณค่าและคุณธรรม จริยธรรม เสียสละ แลพซื่อสัตว์สุจริต</input>
                <br>
                <input type="checkbox" name="gender2" value="true" <?php echo  $checked = ($row['gender2'] == "true") ? "checked" : ''; ?> disabled>1.1.2.มีวินัย ตรงต่อเวลา และความรับผิดชอบต่อตนเองและสังคม</input>
                <br>
                <input type="checkbox" name="gender3" value="true" <?php echo  $checked = ($row['gender3'] == "true") ? "checked" : ''; ?> disabled>1.1.3.มีภาวะความเป็นผู้นำและผู้ตาม สามารถทำงานเป็นทีมและสามารถแก้ไขขัดแย้งและ ลำดับความสำคัญ</input>
                <br>
                <input type="checkbox" name="gender4" value="true" <?php echo  $checked = ($row['gender4'] == "true") ? "checked" : ''; ?> disabled>1.1.4.เครพสิทธิแลพรับฟังความคิดเห็นของผู้อื่นรวมทั้งเคารพในคุณค่าและศักดิ์ศรีวามเป็นมนุษย์</input>
                <br>
                <input type="checkbox" name="gender5" value="true" <?php echo  $checked = ($row['gender5'] == "true") ? "checked" : ''; ?> disabled>1.1.5.เคารพกฏระเบียบและขอบังคับต่างๆ ขององค์กรและสังคม </input>
                <br>
                <input type="checkbox" name="gender6" value="true" <?php echo  $checked = ($row['gender6'] == "true") ? "checked" : ''; ?> disabled>1.1.6.สามารถวิเคราะห์ผลกระทบจากการ ใช้คอมพิวเตอร์ต่อบุคคล องค์กรและสังคม</input>
                <br>
                <input type="checkbox" name="gender7" value="true" <?php echo  $checked = ($row['gender7'] == "true") ? "checked" : ''; ?> disabled>1.1.7.มีจรรยาบรรณทางวิชาการและวิชาชีพ</input>
                <br>


                </td>
                </tr>
                </table> <br>

                <table align="center" width="500">
                    <tr>
                        <td>


                            <h5>2.ความรู้
                                <br>
                                <label for="story">2.1ความรู้ที่ต้องได้รับ</label>

                                <textarea id="story" name="story" rows="7" cols="120" disabled>
                                    นักศึกษาต้องมีความรู้เกี่ยวกับสาขาวิชาที่ศึกษาในแขนงวิชาคอมพิวเตอร์ธุรกิจ มีคุณธรรม จริยธรรม และความรับผิดชอบต่อตนเองและ
                                สังคม ความรู้เกี่ยวกับสาขาวิชาที่ศึกษานั้นต้องเป็นสิ่งที่นักศึกษาต้องรู้ เพื่อใช้ประกอบอาชีพและช่วยพัฒนาสังคม ดังนั้น
                                มาตรฐานความรู้ต้องครอบคลุมวิ่งต่อไปนี้ทั้ง 8ข้อ เพื่อให้นักศึกษามีตวามรู้ความเข้าใจเกี่ยวกับรายวิชาหลักการเขียน
                                โปรแกรมคอมเบื้องต้นทางธุรกิจ อย่างน้อย 4ข้อตามที่ระบุไว้ในตารางการกระจายความรับผิดชอบต่อผลการเรียนรู้
                                (Curriculum Mapping) ภายในเล่มมคอ. 2ของหลักศูตร</textarea>

                                <input type="checkbox" name="gender8" value="true" <?php echo  $checked = ($row['gender8'] == "true") ? "checked" : ''; ?> disabled> 2.1.1.มีความรู้ความเข้าใจเกี่ยวกับหลักการและทฤษฎีที่สำคัญในเนื้อหาวิชาที่ศึกษา</input>
                                <br>
                                <input type="checkbox" name="gender9" value="true" <?php echo  $checked = ($row['gender9'] == "true") ? "checked" : ''; ?> disabled> 2.1.2.สามารถวิเคราะห์ปัญหา เข้าใจและอธิบายความต้องการทางคอมพิวเตอร์รวมทั้งประยุกต์ความรู้ ทักษะและการใช้เครื่องมือที่เหมาะสมแก้ไขปัญหา</input>
                                <br>
                                <input type="checkbox" name="gender10" value="true" <?php echo  $checked = ($row['gender10'] == "true") ? "checked" : ''; ?> disabled>2.1.3.สามารถวิเคราะห์ออกแบบ ติดตั้งปรับปรุงและ/หรือประเมินระบบองค์ประกอบต่างๆ ของระบบคอมพิวเตอร์ให้ได้ตรงตามข้อกำหนด</input>

                                <input type="checkbox" name="gender11" value="true" <?php echo  $checked = ($row['gender11'] == "true") ? "checked" : ''; ?> disabled>2.1.4.สามารถติดตามความก้าวหน้าทางวิชาการ และวิวัฒนาการคอมพิวเตอร์ร่วมทั้งการนำไปประยุกต์ความเป็นมนุษย์</input>
                                <br>
                                <input type="checkbox" name="gender12" value="true" <?php echo  $checked = ($row['gender12'] == "true") ? "checked" : ''; ?> disabled>2.1.5.รู้เข้าใจและสนใจพัฒนาความรู้ความ ความชำนาญทางคอมพิวเตอร์อย่างต่อเนื่อง </input>
                                <br>
                                <input type="checkbox" name="gender13" value="true" <?php echo  $checked = ($row['gender13'] == "true") ? "checked" : ''; ?> disabled>2.1.6.มีความรู้ในแนวทางกว้างของสาขาวิชาที่ต้องศึกษาเพื่อให้เล็งเห็นการเปลี่ยนแปลง และเข้าใจผลกระทบของเทคโนโลยีใหม่ๆ ที่เกี่ยวข้อง</input>
                                <br>
                                <input type="checkbox" name="gender14" value="true" <?php echo  $checked = ($row['gender14'] == "true") ? "checked" : ''; ?> disabled>2.1.7.มีประสบการณ์ในการพัฒนาและ/หรือประยุกต์ซอฟต์แวร์ที่ใช้งานได้จิง</input>
                                <br>
                                <input type="checkbox" name="gender15" value="true" <?php echo  $checked = ($row['gender15'] == "true") ? "checked" : ''; ?> disabled>2.1.8.สามารถบรูณาการความรู้ในสาขาวิชาที่ศึกษากับความรู้ในศาสตร์อื่นๆ ที่เกี่ยวข้อง</input>
                                <br>




                                <h5>2.2 วิธีการสอบ</h5>
                                <input type="checkbox" name="gender16" value="true" <?php echo  $checked = ($row['gender16'] == "true") ? "checked" : ''; ?> disabled>2.2.1.การทำงานร่วมกันและอภิปายร่วมกันภายในห้องเรียน โดยการมอบหมายให้นักศึกษาทำแบบฝึกหัดและแบบฝึกปฏิบัติที่เกี่ยวข้องกับการเขียนโปรแกรมทางธุรกิจ</input>
                                <br>
                                <input type="checkbox" name="gender17" value="true" <?php echo  $checked = ($row['gender17'] == "true") ? "checked" : ''; ?> disabled>2.2.2.สอนแบบสาธิตควบคู่่กับการยกตัวอย่างในลักษณะของกรณีศึกษา</input>
                                <br>
                                <input type="checkbox" name="gender18" value="true" <?php echo  $checked = ($row['gender18'] == "true") ? "checked" : ''; ?> disabled>2.2.3.ฝึกทำการวิเคราะห์ และแก้โจทย์ปัญหาทางคอมพิวเตอร์</input>
                                <br>
                                <input type="checkbox" name="gender19" value="true" <?php echo  $checked = ($row['gender19'] == "true") ? "checked" : ''; ?> disabled>2.2.4.ฝึกทำการคำนวณท้างด้านระบบเลขฐาน และด้านคณิตศาสตร์ร่วมกับตัวดำเนินการต่างๆ</input>
                                <br>
                                <input type="checkbox" name="gender20" value="true" <?php echo  $checked = ($row['gender20'] == "true") ? "checked" : ''; ?> disabled>2.2.5.ฝึกปฏิบัติการเขียนโปรแกรมด้วยภาษา python เบื้องต้น </input>
                                <br>

                                </center>

                                <h5>2.3 วิธีการประเมินผล
                                    <input type="checkbox" name="gender21" value="true" <?php echo  $checked = ($row['gender21'] == "true") ? "checked" : ''; ?> disabled>2.3.1.ประเมินการทำแบบฝึกหัดแบบฝึกปฏิบัติ รายงาน และนำเสนอหน้าชั้นเรียน</input>
                                    <br>
                                    <input type="checkbox" name="gender22" value="true" <?php echo  $checked = ($row['gender22'] == "true") ? "checked" : ''; ?> disabled>2.3.2.ประเมินจากการคำรวณทางด้านระบบเลขฐาน และด้านคณิตศาสตร์ร่วมกับตัวดำเนินการต่างๆ </input>
                                    <br>
                                    <input type="checkbox" name="gender23" value="true" <?php echo  $checked = ($row['gender23'] == "true") ? "checked" : ''; ?> disabled>2.3.3.ประเมินจากฝึกปฏิบัติการเขียนโปรแกรมด้วยภาษา python เบื้องต้น</input>
                                    <br>
                                    <input type="checkbox" name="gender24" value="true" <?php echo  $checked = ($row['gender24'] == "true") ? "checked" : ''; ?> disabled>2.3.4.ประเมินจากการสอบกลางภาค และการสอบปลายภาค</input>
                                    <br>
                                    <input type="checkbox" name="gender25" value="true" <?php echo  $checked = ($row['gender25'] == "true") ? "checked" : ''; ?> disabled>2.3.5.ประเมินจากจิตพิสัยแลพงานที่มอบหมายต่าง ๆ </input>
                                    <br></h5>

                                </center>

                                <h5>ทักษะทางปัญญา
                                    <br>
                                    <label for="story">3.1ทักษะทางปัญญาที่ต้องพัฒนา</label>

                                    <textarea id="story" name="story" rows="7" cols="120" disabled>
                            นักศึกษาต้องสามารถพัฒนาตนเองและประกอบวิชาชีพได้โดยพึ่งตนเองได้เมือจบการศึกษาแล้ว ดังนั้น
                        นักศึกษาจำเป็นจ้องได้รับการพัฒนาทักษะทางปัญญาไปพร้อมกับคุณธรรม จริยธรรม และความรู้เกี่ยวกับสาขาวิชาที่เรียน
                        ศึกษาในขณะที่สอนนักศึกษา อาจารย์ต้องเน้นให้นักศึกษาคิดหาเหตุผล เข้าใจที่มาและสาเหตุของปีญหา วิธีการแก้ไข
                        ปัญหารวมทั้งแนวคิดด้วยตนเอง ไม่สอนในลักษณะท่องจำ นักศึกษาคิดหาเหตุผล เข้าใจที่มาและสาเหตุของปัญหา 
                        วิธีการแก้ไขทักษะทางปัญญาต่อไปนี้ทั้ง 4ข้อ เพื่อให้นักศึกษามีทักษะทางปัญญาเกี่ยวกับรายวิชาหลักการเขียนโปรแกรม
                        คอมเบื้องต้นทางธุรกิจ อย่างน้อย 1จ้อตามที่ระบุไว้ในตารางการกระจายความรับผิดชอบต่อผลการเรียนรู้ (Curriclum 
                        Mapping) ภายในเล่มมคอ. 2 ของหลักศูตร
                                                    </textarea>

                                    <input type="checkbox" name="gender26" value="true" <?php echo  $checked = ($row['gender26'] == "true") ? "checked" : ''; ?> disabled>3.1.1 สามารถรวบรวม ศึกษา วิเคราะห์ สรุปประเด็นปัญหาและความต้องการ</input>


                                    <h5>3.2.3 วิธีการสอน</h5>


                                    <input type="checkbox" name="gender27" value="true" <?php echo  $checked = ($row['gender27'] == "true") ? "checked" : ''; ?> disabled>3.2.1.การทำงานร่วมกัน (Collborative Learning) และอภิปรายร่วมกันภายในห้องเรียนโดยการมอบหมายให้นักศึกษาทำแบบฝึกหัด
                                    และปฏิบัติที่เกี่ยวข้องกับการเขียนโปรแกรมทางธุรกิจ</input>
                                    <br>
                                    <input type="checkbox" name="gender28" value="true" <?php echo  $checked = ($row['gender28'] == "true") ? "checked" : ''; ?> disabled>3.2.2.สอนแบบสาธิตควบคู่่กับการยกตัวอย่างในลักษณะของกรณีศึกษา</input>
                                    <br>
                                    <h5>3.2.3 ทักษะทางปัญญา</h5>
                                    <h5>
                                        <input type="checkbox" name="gender29" value="true" <?php echo  $checked = ($row['gender29'] == "true") ? "checked" : ''; ?> disabled>1.คิดอย่างมีวิจารณญญาณและเป็นระบบ</input>
                                        <br>
                                        <input type="checkbox" name="gender30" value="true" <?php echo  $checked = ($row['gender30'] == "true") ? "checked" : ''; ?> disabled>2.สามารถสืบค้น ตีความ และประเมินสารสนเทศ เพื่อใช้ในการแก้ปัญหาอย่างสร้างสรรค์</input>
                                        <br>
                                        <input type="checkbox" name="gender31" value="true" <?php echo  $checked = ($row['gender31'] == "true") ? "checked" : ''; ?> disabled>3.สามารถรวบรวม ศึกษา วิเคราะห์ สรุปประเด็นปัญหาและความต้องการ</input>
                                        <br>
                                        <input type="checkbox" name="gender32" value="true" <?php echo  $checked = ($row['gender32'] == "true") ? "checked" : ''; ?> disabled>4.สามารถประยุกต์ความรู้และทักษะในการแก้ปัญหาทางคอมพิวเตอร์ได้อย่างเหมาะสม</input>
                                        <br>
                                        <h5>3.2.4 ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบ</h5>
                                        <h5>
                                            <input type="checkbox" name="gender33" value="true" <?php echo  $checked = ($row['gender33'] == "true") ? "checked" : ''; ?> disabled>1.สามารถสื่อสารทั้งภาษาไทยและภาษาต่างประเทศกับกลุ่มคนหลากหลายได้อย่างมีประสิทธิภาพ</input>
                                            <br>
                                            <input type="checkbox" name="gender34" value="true" <?php echo  $checked = ($row['gender34'] == "true") ? "checked" : ''; ?> disabled>2.สามารถใช้ความช่วยเหลือและอำนวยความสะดวกแก่การแก้ปัญหาสถานะการณ์ต่างๆ ในกลุ่ม
                                            ทั้งในบทบาทของผู้นำ หรือในบทบาทของผู้ร่วมทีมงาน</input>
                                            <br>
                                            <input type="checkbox" name="gender35" value="true" <?php echo  $checked = ($row['gender35'] == "true") ? "checked" : ''; ?> disabled>3.สามารถใช้ความรู้ในศาสตร์มาชี้นำสังคมในประเด็นที่เหมาะสม</input>
                                            <br>
                                            <input type="checkbox" name="gender36" value="true" <?php echo  $checked = ($row['gender36'] == "true") ? "checked" : ''; ?> disabled>4.มีความรับผิดชอบในการกระทำของตนเองและรับผิดชอบของงานในกลุ่ม</input>
                                            <br>
                                            <input type="checkbox" name="gender37" value="true" <?php echo  $checked = ($row['gender37'] == "true") ? "checked" : ''; ?> disabled>5.สามารถเป็นผู้ริเริ่มแสดงประเด็นในการแก้ไขสถานการณ์ทั้งส่วนตัวและส่วนรวมพร้อมทั้งแสดงจุดยืน
                                            อย่างพอเหมาะ ทั้งตนเองและของกลุ่ม</input>
                                            <br>
                                            <input type="checkbox" name="gender38" value="true" <?php echo  $checked = ($row['gender38'] == "true") ? "checked" : ''; ?> disabled>6.มีความรับผิดชอบการพัฒนาการเรียนรู้ของตนเองและทางวิชาชีพอย่างต่อเนื่อง</input>
                                            <br>
                                            <h5>3.2.5 ทักษะการวิเคราะห์เชิงตัวเลข การสื่่อสารและการใช้เทคโนโลยีสารสนเทศ</h5>
                                            <h5>
                                                <input type="checkbox" name="gender39" value="true" <?php echo  $checked = ($row['gender39'] == "true") ? "checked" : ''; ?> disabled>1.มีทักษะในการใช้เครืองมือที่จำเป็นที่มรอยู่ในปัจจุบันต่อการทำงานที่เกี่ยวกับคอมพิวเตอร์</input>
                                                <br>
                                                <input type="checkbox" name="gender40" value="true" <?php echo  $checked = ($row['gender40'] == "true") ? "checked" : ''; ?> disabled>2.สามารถแนะนำประเด็นการแก้ไขปีญหา โดยใช้สารสนเทศทางคณิตศาสตร์หรือการแสดง
                                                สถิติประยุกต์ต่อปีญหาที่เกี่ยวข้องอย่างสร้างสรรค์</input>
                                                <br>
                                                <input type="checkbox" name="gender41" value="true" <?php echo  $checked = ($row['gender41'] == "true") ? "checked" : ''; ?> disabled>3.สามารถสื่อสารอย่างมีประสิทธิภาพทั้งปากเปล่าและการเขียน เลือกใช้รูปแบบของสื่อสารนำเสนออย่างเหมาะสม</input>
                                                <br>
                                                <input type="checkbox" name="gender42" value="true" <?php echo  $checked = ($row['gender42'] == "true") ? "checked" : ''; ?> disabled>4.สามารถใช้สามารถสนเทศและเทคโนโลยีสื่อสารอย่างเหมาะสม</input>



                                                <h5> 3.3 วิธีการประเมินผล</h5>


                                                <h5>
                                                    <input type="checkbox" name="gender43" value="true" <?php echo  $checked = ($row['gender43'] == "true") ? "checked" : ''; ?> disabled>2.3.1.ประเมินการทำแบบฝึกหัดแบบฝึกปฏิบัติ รายงาน และนำเสนอหน้าชั้นเรียน</input>
                                                    <br>
                                                    <input type="checkbox" name="gender44" value="true" <?php echo  $checked = ($row['gender44'] == "true") ? "checked" : ''; ?> disabled>2.3.2.ประเมินจากการคำรวณทางด้านระบบเลขฐาน และด้านคณิตศาสตร์ร่วมกับตัวดำเนินการต่างๆ </input>
                                                    <br>
                                                    <input type="checkbox" name="gender45" value="true" <?php echo  $checked = ($row['gender45'] == "true") ? "checked" : ''; ?> disabled>2.3.3.ประเมินจากฝึกปฏิบัติการเขียนโปรแกรมด้วยภาษา python เบื้องต้น</input>
                                                    <br>
                                                    <input type="checkbox" name="gender46" value="true" <?php echo  $checked = ($row['gender46'] == "true") ? "checked" : ''; ?> disabled>2.3.4.ประเมินจากการสอบกลางภาค และการสอบปลายภาค</input>
                                                    <br>
                                                    <input type="checkbox" name="gender47" value="true" <?php echo  $checked = ($row['gender47'] == "true") ? "checked" : ''; ?> disabled>2.3.5.ประเมินจากจิตพิสัยแลพงานที่มอบหมายต่าง ๆ </input>
                                                </h5>
                                                <h5>4.ทักษะความสัมพันธ์ ระหว่างบุคคลและความรับผิดชอบ</h5>
                                                <br>
                                                <label for="story">4.1 ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบที่ต้องพัฒนา</label>

                                                <textarea id="story" name="story" rows="7" cols="120" disabled>
                            นักศึกษาต้องออกไปประกอบอาชีพซึ่งส่วนใหญ่ต้องเกี่ยวข้องกับคนที่ไม่รู้จักมาก่อน คนที่มาจากสถาบันอื่น ๆ
                        และคนที่จะมาเป็นผู้บังคับบัญชา หรือคนที่จะมาอยู่ใต้บังคับบัญชา ความสามารถที่จะปรับตัวให่เข้ากับกลุ่มคนต่าง ๆ
                        เป็นเรื่องจำเป็นอย่างยิ่ง ดีงนั้น อาจารย์ต้องอดแทรกวีการที่เกี่ยวข้องกับคุณสมบัติต่างๆ ต่อไปนี้ทั้ง 6ข้อเพื่อให้
                        นักศึกษามีทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบที่จ้องพัฒนาที่เกี่ยวกับรายวิชาหลักการเชียน 
                        โปรแกรมคอมเบื้องต้นทางธุรกิจ อย่างน้อย 2ข้อตามที่ระบุไว้ในตารางกระจายความรับผิดชอบต่อผลการเรียนรู้
                         (Curriclum Mapping) ภายในเล่มมคอ. 2 ของหลักศูตร
                                                    </textarea>
                                                <br>
                                                <h5>
                                                    <input type="checkbox" name="gender48" value="true" <?php echo  $checked = ($row['gender48'] == "true") ? "checked" : ''; ?> disabled>4.1.1. สามารถสื่อสารทั้งภาษาไทยและภาษาต่างประเทศกับกลุ่มคนหลากหลายได้อย่างมีประสิทธิภาพ</input>
                                                    <br>
                                                    <input type="checkbox" name="gender49" value="true" <?php echo  $checked = ($row['gender49'] == "true") ? "checked" : ''; ?> disabled>4.1.2. มีความรับผิดชอบในการกระทำของตนเองและรับผิดชอบของงานในกลุ่ม </input>


                                                    <h5>4.2วิธีการสอน</h5>
                                                    <h5>
                                                        <input type="checkbox" name="gender50" value="true" <?php echo  $checked = ($row['gender50'] == "true") ? "checked" : ''; ?> disabled>4.2.1 การทำงานร่วมกัน(Collborative Learning)และอภิปรายร่วมกันภายในห้องเรียนโดยการมอบหมายให้นักศึกษาทำแบบฝึกหัด
                                                        และปฏิบัติที่เกี่ยวข้องกับการเขียนโปรแกรมทางธุรกิจ</input>
                                                        <br>
                                                        <input type="checkbox" name="gender51" value="true" <?php echo  $checked = ($row['gender51'] == "true") ? "checked" : ''; ?> disabled>4.2.2. สอนแบบสาธิตควบคู่่กับการยกตัวอย่างในลักษณะของกรณีศึกษา </input>
                                                        <br>
                                                        <input type="checkbox" name="gender52" value="true" <?php echo  $checked = ($row['gender52'] == "true") ? "checked" : ''; ?> disabled>4.2.3. ทำการบรรยายพร้อมยกตัวอย่างเกี่ยวกับประเด็นความรับผิดชอบในการทำงานของตนเองและตวามรับผิดชอบของงานกลุ่ม</input>

                                                        <h5>
                                                            <h5>4.2วิธีการประเมินผล</h5>
                                                            <h5>
                                                                <input type="checkbox" name="gender53" value="true" <?php echo  $checked = ($row['gender53'] == "true") ? "checked" : ''; ?> disabled>4.3.1 ประเมินการทำแบบฝึกหัดแบบ ฝึกปฏิบัติ รายงาน และนำเสนอหน้าชั้นเรียน</input>
                                                                <br>
                                                                <input type="checkbox" name="gender54" value="true" <?php echo  $checked = ($row['gender54'] == "true") ? "checked" : ''; ?> disabled>4.3.2.ประเมินจากฝึกปฏิบัติการเขียนโปรแกรมด้วยภาษา Python เบื้องต้น</input>
                                                                <br>
                                                                <input type="checkbox" name="gender55" value="true" <?php echo  $checked = ($row['gender55'] == "true") ? "checked" : ''; ?> disabled>4.3.3.ประเมินจากจิตพิสัยแลพงานที่มอบหมายต่าง</input>
                                                                <h5>5ทักษะการวิเคราะห์เชิงตัวเลข การสื่่อสารและการใช้เทคโนโลยีสารสนเทศ</h5>

                                                                <h5>5.1ทักษะการวิเคราะห์เชองตัวเลข การสื่อสารและการใช้เทคโนโลยีสารสนเทศ</h5>
                                                                <h5>
                                                                    <input type="checkbox" name="gender56" value="true" <?php echo  $checked = ($row['gender56'] == "true") ? "checked" : ''; ?> disabled>5.1.1มีทักษะในการใช้เครื่องมือที่จำเป็นที่มรอยู่ในปัจจุบันต่อการทำงานที่เกี่ยวกับคอมพิวเตอร์</input>
                                                                    <br>
                                                                    <input type="checkbox" name="gender57" value="true" <?php echo  $checked = ($row['gender57'] == "true") ? "checked" : ''; ?> disabled>5.1.2.สามารถสืบค้น ตีความ และประเมินสารสนเทศ เพื่อใช้ในการแก้ปัญหาอย่างสร้างสรรค์</input>
                                                                    <br>
                                                                    <input type="checkbox" name="gender58" value="true" <?php echo  $checked = ($row['gender58'] == "true") ? "checked" : ''; ?> disabled>5.1.3.สามารถประยุกต์ความรู้และทักษะในการแก้ปัญหาทางคอมพิวเตอร์ได้อย่างเหมาะสม</input>


                                                                    <h5>5.2วิธีการสอน</h5>
                                                                    <h5>
                                                                        <input type="checkbox" name="gender59" value="true" <?php echo  $checked = ($row['gender59'] == "true") ? "checked" : ''; ?> disabled>5.2.1ฝึกทำการวิเคราะห์ และแก้โจทย์ปัญหาทางคอมพิวเตอร์</input>
                                                                        <br>
                                                                        <input type="checkbox" name="gender60" value="true" <?php echo  $checked = ($row['gender60'] == "true") ? "checked" : ''; ?> disabled>5.2.2.ฝึกทำการคำนวณท้างด้านระบบเลขฐาน และด้านคณิตศาสตร์ร่วมกับตัวดำเนินการต่างๆ</input>
                                                                        <br>
                                                                        <input type="checkbox" name="gender61" value="true" <?php echo  $checked = ($row['gender61'] == "true") ? "checked" : ''; ?> disabled>5.2.3.ฝึกปฏิบัติการเขียนโปรแกรมด้วยภาษา Python เบื้องต้น</input>


                                                                        <h5>5.2วิธีการประเมินผล</h5>

                                                                        <h5>
                                                                            <input type="checkbox" name="gender62" value="true" <?php echo  $checked = ($row['gender62'] == "true") ? "checked" : ''; ?> disabled>5.3.1ประเมินการทำแบบฝึกหัด และปฏิบัติ รายงาน และนำเสนอหน้าชั้นเรียน</input>
                                                                            <br>
                                                                            <input type="checkbox" name="gender63" value="true" <?php echo  $checked = ($row['gender63'] == "true") ? "checked" : ''; ?> disabled>5.3.2.ประเมินการคำนวณท้างด้านระบบเลขฐาน และด้านคณิตศาสตร์ร่วมกับตัวดำเนินการต่างๆ</input>
                                                                            <br>
                                                                            <input type="checkbox" name="gender64" value="true" <?php echo  $checked = ($row['gender64'] == "true") ? "checked" : ''; ?> disabled>5.3.3.ประเมินปฏิบัติการเขียนโปรแกรมด้วยภาษา Python เบื้องต้น</input>
                                                                            <br>
                                                                            <input type="checkbox" name="gener65" value="true" <?php echo  $checked = ($row['gender65'] == "true") ? "checked" : ''; ?> disabled>5.3.4.ประเมินจากการสอบกลางภาค และการสอบปลายภาค</input>







                                                                            <h1 class="h3 mb-0 text-gray-800">หมวดที่ 5 แผนการสอนและการประเมินผล</h1>
                        </td>
                    </tr>
                </table>

                <!-- <form action="mko3_2.php"> -->

                <h5>แผนการสอน</h5>

                <h6>สัปดาห์ที่1</h6>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">หัวข้อ/รายละเอียด</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode1_1']; ?> </label>
                    </div>
                </div>



                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">กิจกรรมเรียนการสอนและสื่อที่ใช้</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode1_2']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">จำนวน ชั่วโมง</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['Coursecode1_3']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ผู้สอน</label>
                    <div class="col-sm-3">
                        <label class="col-form-label"> <?php echo $row['Coursecode1_4']; ?> </label>
                    </div>
                </div>

                <h6>สัปดาห์ที่2</h6>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">หัวข้อ/รายละเอียด</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode2_1']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">กิจกรรมเรียนการสอนและสื่อที่ใช้</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode2_2']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">จำนวน ชั่วโมง</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['Coursecode2_3']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ผู้สอน</label>
                    <div class="col-sm-3">
                        <label class="col-form-label"> <?php echo $row['Coursecode2_4']; ?> </label>
                    </div>
                </div>

                <h6>สัปดาห์ที่3</h6>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">หัวข้อ/รายละเอียด</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode3_1']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">กิจกรรมเรียนการสอนและสื่อที่ใช้</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode3_2']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">จำนวน ชั่วโมง</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['Coursecode3_3']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ผู้สอน</label>
                    <div class="col-sm-3">
                        <label class="col-form-label"> <?php echo $row['Coursecode3_4']; ?> </label>
                    </div>
                </div>

                <h6>สัปดาห์ที่4</h6>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">หัวข้อ/รายละเอียด</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode4_1']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">กิจกรรมเรียนการสอนและสื่อที่ใช้</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode4_2']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">จำนวน ชั่วโมง</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['Coursecode4_3']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ผู้สอน</label>
                    <div class="col-sm-3">
                        <label class="col-form-label"> <?php echo $row['Coursecode4_4']; ?> </label>
                    </div>
                </div>

                <h6>สัปดาห์ที่5</h6>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">หัวข้อ/รายละเอียด</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode5_1']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">กิจกรรมเรียนการสอนและสื่อที่ใช้</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode5_2']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">จำนวน ชั่วโมง</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['Coursecode5_3']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ผู้สอน</label>
                    <div class="col-sm-3">
                        <label class="col-form-label"> <?php echo $row['Coursecode5_4']; ?> </label>
                    </div>
                </div>

                <h6>สัปดาห์ที่6</h6>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">หัวข้อ/รายละเอียด</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode6_1']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">กิจกรรมเรียนการสอนและสื่อที่ใช้</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode6_2']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">จำนวน ชั่วโมง</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['Coursecode6_3']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ผู้สอน</label>
                    <div class="col-sm-3">
                        <label class="col-form-label"> <?php echo $row['Coursecode6_4']; ?> </label>
                    </div>
                </div>


                <h6>สัปดาห์ที่7</h6>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">หัวข้อ/รายละเอียด</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode7_1']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">กิจกรรมเรียนการสอนและสื่อที่ใช้</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode7_2']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">จำนวน ชั่วโมง</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['Coursecode7_3']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ผู้สอน</label>
                    <div class="col-sm-3">
                        <label class="col-form-label"> <?php echo $row['Coursecode7_4']; ?> </label>
                    </div>
                </div>


                <center>
                    <h5>สอบ</h5>
                </center>
                <h6>สัปดาห์ที่9</h6>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">หัวข้อ/รายละเอียด</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode9_1']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">กิจกรรมเรียนการสอนและสื่อที่ใช้</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode9_2']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">จำนวน ชั่วโมง</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['Coursecode9_3']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ผู้สอน</label>
                    <div class="col-sm-3">
                        <label class="col-form-label"> <?php echo $row['Coursecode9_4']; ?> </label>
                    </div>
                </div>

                <h6>สัปดาห์ที่10</h6>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">หัวข้อ/รายละเอียด</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode10_1']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">กิจกรรมเรียนการสอนและสื่อที่ใช้</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode10_2']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">จำนวน ชั่วโมง</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['Coursecode10_3']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ผู้สอน</label>
                    <div class="col-sm-3">
                        <label class="col-form-label"> <?php echo $row['Coursecode10_4']; ?> </label>
                    </div>
                </div>

                <h6>สัปดาห์ที่11</h6>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">หัวข้อ/รายละเอียด</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode11_1']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">กิจกรรมเรียนการสอนและสื่อที่ใช้</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode11_2']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">จำนวน ชั่วโมง</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['Coursecode11_3']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ผู้สอน</label>
                    <div class="col-sm-3">
                        <label class="col-form-label"> <?php echo $row['Coursecode11_4']; ?> </label>
                    </div>
                </div>

                <h6>สัปดาห์ที่12</h6>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">หัวข้อ/รายละเอียด</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode12_1']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">กิจกรรมเรียนการสอนและสื่อที่ใช้</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode12_2']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">จำนวน ชั่วโมง</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['Coursecode12_3']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ผู้สอน</label>
                    <div class="col-sm-3">
                        <label class="col-form-label"> <?php echo $row['Coursecode12_4']; ?> </label>
                    </div>
                </div>

                <h6>สัปดาห์ที่13</h6>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">หัวข้อ/รายละเอียด</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode13_1']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">กิจกรรมเรียนการสอนและสื่อที่ใช้</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode13_2']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">จำนวน ชั่วโมง</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['Coursecode13_3']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ผู้สอน</label>
                    <div class="col-sm-3">
                        <label class="col-form-label"> <?php echo $row['Coursecode13_4']; ?> </label>
                    </div>
                </div>

                <h6>สัปดาห์ที่14</h6>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">หัวข้อ/รายละเอียด</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode14_1']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">กิจกรรมเรียนการสอนและสื่อที่ใช้</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode14_2']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">จำนวน ชั่วโมง</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['Coursecode14_3']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ผู้สอน</label>
                    <div class="col-sm-3">
                        <label class="col-form-label"> <?php echo $row['Coursecode14_4']; ?> </label>
                    </div>
                </div>
                <h6>สัปดาห์ที่15</h6>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">หัวข้อ/รายละเอียด</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode15_1']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">กิจกรรมเรียนการสอนและสื่อที่ใช้</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode15_2']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">จำนวน ชั่วโมง</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['Coursecode15_3']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ผู้สอน</label>
                    <div class="col-sm-3">
                        <label class="col-form-label"> <?php echo $row['Coursecode15_4']; ?> </label>
                    </div>
                </div>

                <h6>สัปดาห์ที่16</h6>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">หัวข้อ/รายละเอียด</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode16_1']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">กิจกรรมเรียนการสอนและสื่อที่ใช้</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['Coursecode16_2']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">จำนวน ชั่วโมง</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['Coursecode16_3']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ผู้สอน</label>
                    <div class="col-sm-3">
                        <label class="col-form-label"> <?php echo $row['Coursecode16_4']; ?> </label>
                    </div>
                </div>


                <h5>2. แผนการประเมินผลการเรียนรู้</h5>
                <h6>กิจกรรมที่1</h6>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ผลการเรียนรู้*</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['a']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">วิธีการประเมิน</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['b']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">สัปดาห์ที่ประเมิน</label>
                    <div class="col-sm-5">
                        <label class="col-form-label"> <?php echo $row['c']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">สัดส่วนของการประเมิน</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['d']; ?> </label>
                    </div>
                </div>

                <h5>กิจกรรมที่2</h5>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ผลการเรียนรู้*</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['e']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">วิธีการประเมิน</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['f']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">สัปดาห์ที่ประเมิน</label>
                    <div class="col-sm-5">
                        <label class="col-form-label"> <?php echo $row['g']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">สัดส่วนของการประเมิน</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['h']; ?> </label>
                    </div>
                </div>

                <h5>กิจกรรมที่3</h5>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ผลการเรียนรู้*</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['s']; ?> </label>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">วิธีการประเมิน</label>
                    <div class="col-sm-10">
                        <label class="col-form-label"> <?php echo $row['i']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">สัปดาห์ที่ประเมิน</label>
                    <div class="col-sm-2">
                        <label class="col-form-label"> <?php echo $row['k']; ?> </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">สัดส่วนของการประเมิน</label>
                    <div class="col-sm-1">
                        <label class="col-form-label"> <?php echo $row['l']; ?> </label>
                    </div>
                </div>

                <h6 class="h3 mb-0 text-gray-800">หมวดที่ 6 ทรัพยากรประกรอบการเรียนการสอน</h6>
                </td>
                </tr>
                </table>
                <br>

                <form>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">1.เอกสารและตำราหลัก</label>
                        <div class="col-sm-12">
                            <label class="col-form-label"> <?php echo $row['documents']; ?> </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">2.เอกสารและข้อมูลสำคัญ</label>
                        <div class="col-sm-12">
                            <label class="col-form-label"> <?php echo $row['documentsa']; ?> </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">เอกสารและข้อมูลแนะนำ</label>
                        <div class="col-sm-12">
                            <label class="col-form-label"> <?php echo $row['documentsb']; ?> </label>
                        </div>
                    </div>

                    <h6 class="h3 mb-0 text-gray-800">หมวดที่ 7 การประเมินและปรับปรุงการดำเนินการของรายวิชา</h6>
                    </td>
                    </tr>
                    </table>
                    <br>

                    <form>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">1.กลยุทธ์การประเมินสิทธิผลของรายวิชาโดยนักศุกษา</label>
                            <div class="col-sm-12">
                                <label class="col-form-label"> <?php echo $row['Coursecode1']; ?> </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">2.กลยุทธ์การประเมินการสอน</label>
                            <div class="col-sm-12">
                                <label class="col-form-label"> <?php echo $row['Coursecode2']; ?> </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">3.การปรับปรุงการสอน</label>
                            <div class="col-sm-12">
                                <label class="col-form-label"> <?php echo $row['Coursecode3']; ?> </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">4.การทวนสอบมาตราฐานผลสัมถิทธิ์ของนักศึกษาในรายวิชา</label>
                            <div class="col-sm-12">
                                <label class="col-form-label"> <?php echo $row['Coursecode4']; ?> </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">5.การดำเนินการทบทวนและการว่างแผนปรับปรุงประสิทธิผลของรายวิชา</label>
                            <div class="col-sm-12">
                                <label class="col-form-label"> <?php echo $row['Coursecode5']; ?> </label>
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