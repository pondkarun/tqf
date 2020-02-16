<?php
include "databasel.class.php";

//new database
$db = new Database();

if (isset($_POST['search_user'])) {
    //get search user
    $get_user = $db->search_user($_POST['search_user']);
} else {

    //call method getUser
    $get_user = $db->get_all_user();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>เขตลาดพร้าว</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script src="scriptl.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h4>เขตลาดพร้าว</h4>
                <div class="col-md-6">
                    <button class="btn btn-info" data-toggle="modal" data-target="#add_user">เพิ่มข้อมูล</button>
                </div>

                <div class="col-md-6">
                    <div class="pull-right">
                        <!-- form สำหรับค้นหาข้อมูล -->
                        <form class="form-inline" method="POST" action="indexl.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="search_user" placeholder="พิมพ์ชื่อหมู่บ้านที่ต้องการค้นหา">
                            </div>
                            <input type="submit" value="ค้นหา">
                        </form>
                    </div>
                </div>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="10%">ลำดับ</th>
                            <th width="20%">หมู่บ้าน</th>
                            <th width="30%">ประวัติงานบริการวิชากร</th>
                            <th width="30%">งานบริการวิชาการที่ต้องการ</th>
                            <th width="15%">แก้ไข</th>
                            <th width="15%">ลบ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $i = 1;
                        if (!empty($get_user)) {
                            foreach ($get_user as $user) {
                        ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $user['name_m'] ?></td>
                                    <td><?php echo $user['history_cru'] ?></td>
                                    <td><?php echo $user['want_cru'] ?></td>
                                    <td><button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#edit_user" onclick="return show_edit_user(<?php echo $user['id'] ?>);">แก้ไข</button></td>
                                    <td><button class="btn btn-danger btn-xs" onclick="return delete_user(<?php echo $user['id'] ?>);">ลบ</button></td>
                                </tr>

                        <?php
                                $i++;
                            }
                        } else {
                            echo "<tr><td colspan='6'>ไม่พบข้อมูล</td></tr>";
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>


    <!-- Modal Add User -->
    <div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">เพิ่มข้อมูล</h4>
                </div>
                <div class="modal-body">
                    <form id="add_user_form">
                        <div class="form-group">
                            <label>หมู่บ้าน</label>
                            <input type="text" class="form-control" name="send_name_m" placeholder="ระบุ หมู่บ้าน">
                        </div>
                        <div class="form-group">
                            <label>ประวัติงานบริการวิชาการ</label>
                            <input type="text" class="form-control" name="send_history_cru" placeholder="ระบุ ประวัติงานบริการวิชาการ">
                        </div>
                        <div class="form-group">
                            <label>งานบริการวิชาการที่ต้องการ</label>
                            <input type="text" class="form-control" name="send_want_cru" placeholder="ระบุ งานบริการวิชาการที่ต้องการ">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="return add_user_form();">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit User -->
    <div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">แก้ไขข้อมูล</h4>
                </div>
                <div class="modal-body">
                    <div id="edit_form"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="return edit_user_form();">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>