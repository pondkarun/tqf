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
                                    <form action="mko3_4_save.php" method="post">
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

                                                        <input type="checkbox" name="gender1" value="true">1.1.1.ตระหนักในคุณค่าและคุณธรรม จริยธรรม เสียสละ แลพซื่อสัตว์สุจริต</input>
                                                        <br>
                                                        <input type="checkbox" name="gender2" value="true">1.1.2.มีวินัย ตรงต่อเวลา และความรับผิดชอบต่อตนเองและสังคม</input>
                                                        <br>
                                                        <input type="checkbox" name="gender3" value="true">1.1.3.มีภาวะความเป็นผู้นำและผู้ตาม สามารถทำงานเป็นทีมและสามารถแก้ไขขัดแย้งและ
                                                        ลำดับความสำคัญ</input>
                                                        <br>
                                                        <input type="checkbox" name="gender4" value="true">1.1.4.เครพสิทธิแลพรับฟังความคิดเห็นของผู้อื่นรวมทั้งเคารพในคุณค่าและศักดิ์ศรี
                                                        ความเป็นมนุษย์</input>
                                                        <br>
                                                        <input type="checkbox" name="gender5" value="true">1.1.5.เคารพกฏระเบียบและขอบังคับต่างๆ ขององค์กรและสังคม </input>
                                                        <br>
                                                        <input type="checkbox" name="gender6" value="true">1.1.6.สามารถวิเคราะห์ผลกระทบจากการ ใช้คอมพิวเตอร์ต่อบุคคล องค์กรและสังคม</input>
                                                        <br>
                                                        <input type="checkbox" name="gender7" value="true">1.1.7.มีจรรยาบรรณทางวิชาการและวิชาชีพ</input>
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

                                                        <textarea id="story" name="story" rows="5" cols="120">
                     นักศึกษาต้องมีความรู้เกี่ยวกับสาขาวิชาที่ศึกษาในแขนงวิชาคอมพิวเตอร์ธุรกิจ มีคุณธรรม จริยธรรม และความรับผิดชอบต่อตนเองและ
                    สังคม ความรู้เกี่ยวกับสาขาวิชาที่ศึกษานั้นต้องเป็นสิ่งที่นักศึกษาต้องรู้ เพื่อใช้ประกอบอาชีพและช่วยพัฒนาสังคม ดังนั้น
                    มาตรฐานความรู้ต้องครอบคลุมวิ่งต่อไปนี้ทั้ง 8ข้อ เพื่อให้นักศึกษามีตวามรู้ความเข้าใจเกี่ยวกับรายวิชาหลักการเขียน
                    โปรแกรมคอมเบื้องต้นทางธุรกิจ อย่างน้อย 4ข้อตามที่ระบุไว้ในตารางการกระจายความรับผิดชอบต่อผลการเรียนรู้
                    (Curriculum Mapping) ภายในเล่มมคอ. 2ของหลักศูตร

                                     </textarea>

                                                        <input type="checkbox" name="gender8" value="true">2.1.1.มีความรู้ความเข้าใจเกี่ยวกับหลักการและทฤษฎีที่สำคัญในเนื้อหาวิชาที่ศึกษา</input>
                                                        <br>
                                                        <input type="checkbox" name="gender9" value="true">2.1.2.สามารถวิเคราะห์ปัญหา เข้าใจและอธิบายความต้องการทางคอมพิวเตอร์รวมทั้งประยุกต์ความรู้ ทักษะและการ
                                                        ใช้เครื่องมือที่เหมาะสมแก้ไขปัญหา</input>
                                                        <br>
                                                        <input type="checkbox" name="gender10" value="true">2.1.3.สามารถวิเคราะห์ออกแบบ ติดตั้งปรับปรุงและ/หรือประเมินระบบองค์ประกอบต่างๆ ของระบบคอมพิวเตอร์
                                                        ให้ได้ตรงตามข้อกำหนด</input>
                                                        < br>
                                                            <input type="checkbox" name="gender11" value="true">2.1.4.สามารถติดตามความก้าวหน้าทางวิชาการ และวิวัฒนาการคอมพิวเตอร์ร่วมทั้งการนำไปประยุกต์
                                                            ความเป็นมนุษย์</input>
                                                            <br>
                                                            <input type="checkbox" name="gender12" value="true">2.1.5.รู้เข้าใจและสนใจพัฒนาความรู้ความ ความชำนาญทางคอมพิวเตอร์อย่างต่อเนื่อง </input>
                                                            <br>
                                                            <input type="checkbox" name="gender13" value="true">2.1.6.มีความรู้ในแนวทางกว้างของสาขาวิชาที่ต้องศึกษาเพื่อให้เล็งเห็นการเปลี่ยนแปลง และเข้าใจผลกระทบของเทค
                                                            โนโลยีใหม่ๆ ที่เกี่ยวข้อง</input>
                                                            <br>
                                                            <input type="checkbox" name="gender14" value="true">2.1.7.มีประสบการณ์ในการพัฒนาและ/หรือประยุกต์ซอฟต์แวร์ที่ใช้งานได้จิง</input>
                                                            <br>
                                                            <input type="checkbox" name="gender15" value="true">2.1.8.สามารถบรูณาการความรู้ในสาขาวิชาที่ศึกษากับความรู้ในศาสตร์อื่นๆ ที่เกี่ยวข้อง</input>
                                                            <br>




                                                            <h5>2.2 วิธีการสอบ</h5>
                                                            <input type="checkbox" name="gender16" value="true">2.2.1.การทำงานร่วมกันและอภิปายร่วมกันภายในห้องเรียน โดยการมอบหมายให้นักศึกษาทำแบบฝึกหัดและแบบฝึกปฏิบัติที่เกี่ยวข้องกับการเขียนโปรแกรมทางธุรกิจ</input>
                                                            <br>
                                                            <input type="checkbox" name="gender17" value="true">2.2.2.สอนแบบสาธิตควบคู่่กับการยกตัวอย่างในลักษณะของกรณีศึกษา</input>
                                                            <br>
                                                            <input type="checkbox" name="gender18" value="true">2.2.3.ฝึกทำการวิเคราะห์ และแก้โจทย์ปัญหาทางคอมพิวเตอร์</input>
                                                            <br>
                                                            <input type="checkbox" name="gender19" value="true">2.2.4.ฝึกทำการคำนวณท้างด้านระบบเลขฐาน และด้านคณิตศาสตร์ร่วมกับตัวดำเนินการต่างๆ</input>
                                                            <br>
                                                            <input type="checkbox" name="gender20" value="true">2.2.5.ฝึกปฏิบัติการเขียนโปรแกรมด้วยภาษา python เบื้องต้น </input>
                                                            <br>

                                                            </center>

                                                            <h5>2.3 วิธีการประเมินผล
                                                                <input type="checkbox" name="gender21" value="true">2.3.1.ประเมินการทำแบบฝึกหัดแบบฝึกปฏิบัติ รายงาน และนำเสนอหน้าชั้นเรียน</input>
                                                                <br>
                                                                <input type="checkbox" name="gender22" value="true">2.3.2.ประเมินจากการคำรวณทางด้านระบบเลขฐาน และด้านคณิตศาสตร์ร่วมกับตัวดำเนินการต่างๆ </input>
                                                                <br>
                                                                <input type="checkbox" name="gender23" value="true">2.3.3.ประเมินจากฝึกปฏิบัติการเขียนโปรแกรมด้วยภาษา python เบื้องต้น</input>
                                                                <br>
                                                                <input type="checkbox" name="gender24" value="true">2.3.4.ประเมินจากการสอบกลางภาค และการสอบปลายภาค</input>
                                                                <br>
                                                                <input type="checkbox" name="gender25" value="true">2.3.5.ประเมินจากจิตพิสัยแลพงานที่มอบหมายต่าง ๆ </input>
                                                                <br></h5>

                                                            </center>

                                                            <h5>ทักษะทางปัญญา
                                                                <br>
                                                                <label for="story">3.1ทักษะทางปัญญาที่ต้องพัฒนา</label>

                                                                <textarea id="story" name="story" rows="5" cols="120">
                            นักศึกษาต้องสามารถพัฒนาตนเองและประกอบวิชาชีพได้โดยพึ่งตนเองได้เมือจบการศึกษาแล้ว ดังนั้น
                        นักศึกษาจำเป็นจ้องได้รับการพัฒนาทักษะทางปัญญาไปพร้อมกับคุณธรรม จริยธรรม และความรู้เกี่ยวกับสาขาวิชาที่เรียน
                        ศึกษาในขณะที่สอนนักศึกษา อาจารย์ต้องเน้นให้นักศึกษาคิดหาเหตุผล เข้าใจที่มาและสาเหตุของปีญหา วิธีการแก้ไข
                        ปัญหารวมทั้งแนวคิดด้วยตนเอง ไม่สอนในลักษณะท่องจำ นักศึกษาคิดหาเหตุผล เข้าใจที่มาและสาเหตุของปัญหา 
                        วิธีการแก้ไขทักษะทางปัญญาต่อไปนี้ทั้ง 4ข้อ เพื่อให้นักศึกษามีทักษะทางปัญญาเกี่ยวกับรายวิชาหลักการเขียนโปรแกรม
                        คอมเบื้องต้นทางธุรกิจ อย่างน้อย 1จ้อตามที่ระบุไว้ในตารางการกระจายความรับผิดชอบต่อผลการเรียนรู้ (Curriclum 
                        Mapping) ภายในเล่มมคอ. 2 ของหลักศูตร
                                                    </textarea>

                                                                <input type="checkbox" name="gender26" value="true">3.1.1 สามารถรวบรวม ศึกษา วิเคราะห์ สรุปประเด็นปัญหาและความต้องการ</input>


                                                                <h5>3.2.3 วิธีการสอน</h5>


                                                                <input type="checkbox" name="gender27" value="true">3.2.1.การทำงานร่วมกัน (Collborative Learning) และอภิปรายร่วมกันภายในห้องเรียนโดยการมอบหมายให้นักศึกษาทำแบบฝึกหัด
                                                                และปฏิบัติที่เกี่ยวข้องกับการเขียนโปรแกรมทางธุรกิจ</input>
                                                                <br>
                                                                <input type="checkbox" name="gender28" value="true">3.2.2.สอนแบบสาธิตควบคู่่กับการยกตัวอย่างในลักษณะของกรณีศึกษา</input>
                                                                <br>
                                                                <h5>3.2.3 ทักษะทางปัญญา</h5>
                                                                <h5>
                                                                    <input type="checkbox" name="gender29" value="true">1.คิดอย่างมีวิจารณญญาณและเป็นระบบ</input>
                                                                    <br>
                                                                    <input type="checkbox" name="gender30" value="true">2.สามารถสืบค้น ตีความ และประเมินสารสนเทศ เพื่อใช้ในการแก้ปัญหาอย่างสร้างสรรค์</input>
                                                                    <br>
                                                                    <input type="checkbox" name="gender31" value="true">3.สามารถรวบรวม ศึกษา วิเคราะห์ สรุปประเด็นปัญหาและความต้องการ</input>
                                                                    <br>
                                                                    <input type="checkbox" name="gender32" value="true">4.สามารถประยุกต์ความรู้และทักษะในการแก้ปัญหาทางคอมพิวเตอร์ได้อย่างเหมาะสม</input>
                                                                    <br>
                                                                    <h5>3.2.4 ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบ</h5>
                                                                    <h5>
                                                                        <input type="checkbox" name="gender33" value="true">1.สามารถสื่อสารทั้งภาษาไทยและภาษาต่างประเทศกับกลุ่มคนหลากหลายได้อย่างมีประสิทธิภาพ</input>
                                                                        <br>
                                                                        <input type="checkbox" name="gender34" value="true">2.สามารถใช้ความช่วยเหลือและอำนวยความสะดวกแก่การแก้ปัญหาสถานะการณ์ต่างๆ ในกลุ่ม
                                                                        ทั้งในบทบาทของผู้นำ หรือในบทบาทของผู้ร่วมทีมงาน</input>
                                                                        <br>
                                                                        <input type="checkbox" name="gender35" value="true">3.สามารถใช้ความรู้ในศาสตร์มาชี้นำสังคมในประเด็นที่เหมาะสม</input>
                                                                        <br>
                                                                        <input type="checkbox" name="gender36" value="true">4.มีความรับผิดชอบในการกระทำของตนเองและรับผิดชอบของงานในกลุ่ม</input>
                                                                        <br>
                                                                        <input type="checkbox" name="gender37" value="true">5.สามารถเป็นผู้ริเริ่มแสดงประเด็นในการแก้ไขสถานการณ์ทั้งส่วนตัวและส่วนรวมพร้อมทั้งแสดงจุดยืน
                                                                        อย่างพอเหมาะ ทั้งตนเองและของกลุ่ม</input>
                                                                        <br>
                                                                        <input type="checkbox" name="gender38" value="true">6.มีความรับผิดชอบการพัฒนาการเรียนรู้ของตนเองและทางวิชาชีพอย่างต่อเนื่อง</input>
                                                                        <br>
                                                                        <h5>3.2.5 ทักษะการวิเคราะห์เชิงตัวเลข การสื่่อสารและการใช้เทคโนโลยีสารสนเทศ</h5>
                                                                        <h5>
                                                                            <input type="checkbox" name="gender39" value="true">1.มีทักษะในการใช้เครืองมือที่จำเป็นที่มรอยู่ในปัจจุบันต่อการทำงานที่เกี่ยวกับคอมพิวเตอร์</input>
                                                                            <br>
                                                                            <input type="checkbox" name="gender40" value="true">2.สามารถแนะนำประเด็นการแก้ไขปีญหา โดยใช้สารสนเทศทางคณิตศาสตร์หรือการแสดง
                                                                            สถิติประยุกต์ต่อปีญหาที่เกี่ยวข้องอย่างสร้างสรรค์</input>
                                                                            <br>
                                                                            <input type="checkbox" name="gender41" value="true">3.สามารถสื่อสารอย่างมีประสิทธิภาพทั้งปากเปล่าและการเขียน เลือกใช้รูปแบบของสื่อสารนำเสนออย่างเหมาะสม</input>
                                                                            <br>
                                                                            <input type="checkbox" name="gender42" value="true">4.สามารถใช้สามารถสนเทศและเทคโนโลยีสื่อสารอย่างเหมาะสม</input>



                                                                            <h5> 3.3 วิธีการประเมินผล</h5>


                                                                            <h5>
                                                                                <input type="checkbox" name="gender43" value="true">2.3.1.ประเมินการทำแบบฝึกหัดแบบฝึกปฏิบัติ รายงาน และนำเสนอหน้าชั้นเรียน</input>
                                                                                <br>
                                                                                <input type="checkbox" name="gender44" value="true">2.3.2.ประเมินจากการคำรวณทางด้านระบบเลขฐาน และด้านคณิตศาสตร์ร่วมกับตัวดำเนินการต่างๆ </input>
                                                                                <br>
                                                                                <input type="checkbox" name="gender45" value="true">2.3.3.ประเมินจากฝึกปฏิบัติการเขียนโปรแกรมด้วยภาษา python เบื้องต้น</input>
                                                                                <br>
                                                                                <input type="checkbox" name="gender46" value="true">2.3.4.ประเมินจากการสอบกลางภาค และการสอบปลายภาค</input>
                                                                                <br>
                                                                                <input type="checkbox" name="gender47" value="true">2.3.5.ประเมินจากจิตพิสัยแลพงานที่มอบหมายต่าง ๆ </input>
                                                                            </h5>
                                                                            <h5>4.ทักษะความสัมพันธ์ ระหว่างบุคคลและความรับผิดชอบ</h5>
                                                                            <br>
                                                                            <label for="story">4.1 ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบที่ต้องพัฒนา</label>

                                                                            <textarea id="story" name="story" rows="5" cols="120">
                            นักศึกษาต้องออกไปประกอบอาชีพซึ่งส่วนใหญ่ต้องเกี่ยวข้องกับคนที่ไม่รู้จักมาก่อน คนที่มาจากสถาบันอื่น ๆ
                        และคนที่จะมาเป็นผู้บังคับบัญชา หรือคนที่จะมาอยู่ใต้บังคับบัญชา ความสามารถที่จะปรับตัวให่เข้ากับกลุ่มคนต่าง ๆ
                        เป็นเรื่องจำเป็นอย่างยิ่ง ดีงนั้น อาจารย์ต้องอดแทรกวีการที่เกี่ยวข้องกับคุณสมบัติต่างๆ ต่อไปนี้ทั้ง 6ข้อเพื่อให้
                        นักศึกษามีทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบที่จ้องพัฒนาที่เกี่ยวกับรายวิชาหลักการเชียน 
                        โปรแกรมคอมเบื้องต้นทางธุรกิจ อย่างน้อย 2ข้อตามที่ระบุไว้ในตารางกระจายความรับผิดชอบต่อผลการเรียนรู้
                         (Curriclum Mapping) ภายในเล่มมคอ. 2 ของหลักศูตร
                                                    </textarea>
                                                                            <br>
                                                                            <h5>
                                                                                <input type="checkbox" name="gender48" value="true">4.1.1. สามารถสื่อสารทั้งภาษาไทยและภาษาต่างประเทศกับกลุ่มคนหลากหลายได้อย่างมีประสิทธิภาพ</input>
                                                                                <br>
                                                                                <input type="checkbox" name="gender49" value="true">4.1.2. มีความรับผิดชอบในการกระทำของตนเองและรับผิดชอบของงานในกลุ่ม </input>


                                                                                <h5>4.2วิธีการสอน</h5>
                                                                                <h5>
                                                                                    <input type="checkbox" name="gender50" value="true">4.2.1 การทำงานร่วมกัน(Collborative Learning)และอภิปรายร่วมกันภายในห้องเรียนโดยการมอบหมายให้นักศึกษาทำแบบฝึกหัด
                                                                                    และปฏิบัติที่เกี่ยวข้องกับการเขียนโปรแกรมทางธุรกิจ</input>
                                                                                    <br>
                                                                                    <input type="checkbox" name="gender51" value="true">4.2.2. สอนแบบสาธิตควบคู่่กับการยกตัวอย่างในลักษณะของกรณีศึกษา </input>
                                                                                    <br>
                                                                                    <input type="checkbox" name="gender52" value="true">4.2.3. ทำการบรรยายพร้อมยกตัวอย่างเกี่ยวกับประเด็นความรับผิดชอบในการทำงานของตนเองและตวามรับผิดชอบของงานกลุ่ม</input>

                                                                                    <h5>
                                                                                        <h5>4.2วิธีการประเมินผล</h5>
                                                                                        <h5>
                                                                                            <input type="checkbox" name="gender53" value="true">4.3.1 ประเมินการทำแบบฝึกหัดแบบ ฝึกปฏิบัติ รายงาน และนำเสนอหน้าชั้นเรียน</input>
                                                                                            <br>
                                                                                            <input type="checkbox" name="gender54" value="true">4.3.2.ประเมินจากฝึกปฏิบัติการเขียนโปรแกรมด้วยภาษา Python เบื้องต้น</input>
                                                                                            <br>
                                                                                            <input type="checkbox" name="gender55" value="true">4.3.3.ประเมินจากจิตพิสัยแลพงานที่มอบหมายต่าง</input>
                                                                                            <h5>5ทักษะการวิเคราะห์เชิงตัวเลข การสื่่อสารและการใช้เทคโนโลยีสารสนเทศ</h5>

                                                                                            <h5>5.1ทักษะการวิเคราะห์เชองตัวเลข การสื่อสารและการใช้เทคโนโลยีสารสนเทศ</h5>
                                                                                            <h5>
                                                                                                <input type="checkbox" name="gender56" value="true">5.1.1มีทักษะในการใช้เครื่องมือที่จำเป็นที่มรอยู่ในปัจจุบันต่อการทำงานที่เกี่ยวกับคอมพิวเตอร์</input>
                                                                                                <br>
                                                                                                <input type="checkbox" name="gender57" value="true">5.1.2.สามารถสืบค้น ตีความ และประเมินสารสนเทศ เพื่อใช้ในการแก้ปัญหาอย่างสร้างสรรค์</input>
                                                                                                <br>
                                                                                                <input type="checkbox" name="gender58" value="true">5.1.3.สามารถประยุกต์ความรู้และทักษะในการแก้ปัญหาทางคอมพิวเตอร์ได้อย่างเหมาะสม</input>


                                                                                                <h5>5.2วิธีการสอน</h5>
                                                                                                <h5>
                                                                                                    <input type="checkbox" name="gender59" value="true">5.2.1ฝึกทำการวิเคราะห์ และแก้โจทย์ปัญหาทางคอมพิวเตอร์</input>
                                                                                                    <br>
                                                                                                    <input type="checkbox" name="gender60" value="true">5.2.2.ฝึกทำการคำนวณท้างด้านระบบเลขฐาน และด้านคณิตศาสตร์ร่วมกับตัวดำเนินการต่างๆ</input>
                                                                                                    <br>
                                                                                                    <input type="checkbox" name="gender61" value="true">5.2.3.ฝึกปฏิบัติการเขียนโปรแกรมด้วยภาษา Python เบื้องต้น</input>


                                                                                                    <h5>5.2วิธีการประเมินผล</h5>

                                                                                                    <h5>
                                                                                                        <input type="checkbox" name="gender62" value="true">5.3.1ประเมินการทำแบบฝึกหัด และปฏิบัติ รายงาน และนำเสนอหน้าชั้นเรียน</input>
                                                                                                        <br>
                                                                                                        <input type="checkbox" name="gender63" value="true">5.3.2.ประเมินการคำนวณท้างด้านระบบเลขฐาน และด้านคณิตศาสตร์ร่วมกับตัวดำเนินการต่างๆ</input>
                                                                                                        <br>
                                                                                                        <input type="checkbox" name="gender64" value="true">5.3.3.ประเมินปฏิบัติการเขียนโปรแกรมด้วยภาษา Python เบื้องต้น</input>
                                                                                                        <br>
                                                                                                        <input type="checkbox" name="gener65" value="true">5.3.4.ประเมินจากการสอบกลางภาค และการสอบปลายภาค</input>









                                </div>
                                <center> <button type="submit" class="btn btn-sm btn-primary" href="mko3_2.php">ไปหมวดที่2</button>
                                    <input type="hidden" name="id_mko" value="<?php echo $_GET["id_mko"]; ?>">
                                    <button type="submit" name="save" class="col-sm-2  btn btn-primary ">
                                        บันทึก

                                    </button>
                                    <button type="submit" name="cancel" class="col-sm-2  btn btn-danger">

                                        ยกเลิก

                                    </button>
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