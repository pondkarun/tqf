<?php
class Database
{

    private $host = 'localhost'; //ชื่อ Host 
    private $user = 'root'; //ชื่อผู้ใช้งาน ฐานข้อมูล
    private $password = ''; // password สำหรับเข้าจัดการฐานข้อมูล
    private $database = 'smomscic_tqf'; //ชื่อ ฐานข้อมูล

    //function เชื่อมต่อฐานข้อมูล
    protected function connect()
    {

        $mysqli = new mysqli($this->host, $this->user, $this->password, $this->database);

        $mysqli->set_charset("utf8");

        if ($mysqli->connect_error) {

            die('Connect Error: ' . $mysqli->connect_error);
        }

        return $mysqli;
    }

    //function เรื่ยกดูข้อมูล all user
    public function get_all_user()
    {

        $db = $this->connect();
        $get_user = $db->query("SELECT * FROM test");

        while ($user = $get_user->fetch_assoc()) {
            $result[] = $user;
        }

        if (!empty($result)) {

            return $result;
        }
    }

    public function search_user($post = null)
    {

        $db = $this->connect();
        $get_user = $db->query("SELECT * FROM test WHERE name_m LIKE '%" . $post . "%' ");

        while ($user = $get_user->fetch_assoc()) {
            $result[] = $user;
        }

        if (!empty($result)) {

            return $result;
        }
    }

    public function get_user($user_id)
    {

        $db = $this->connect();
        $get_user = $db->prepare("SELECT id,name_m,history_cru,want_cru FROM test WHERE id = ?");
        $get_user->bind_param('i', $user_id);
        $get_user->execute();
        $get_user->bind_result($id, $name_m, $history_cru, $want_cru);
        $get_user->fetch();

        $result = array(
            'id' => $id,
            'name_m' => $name_m,
            'history_cru' => $history_cru,
            'want_cru' => $want_cru
        );

        return $result;
    }

    //function เพื่ม user
    public function add_user($data)
    {

        $db = $this->connect();

        $add_user = $db->prepare("INSERT INTO test (id,name_m,history_cru,want_cru) VALUES(NULL,?,?,?) ");

        $add_user->bind_param("sss", $data['send_name_m'], $data['send_history_cru'], $data['send_want_cru']);

        if (!$add_user->execute()) {

            echo $db->error;
        } else {

            echo "บันทึกข้อมูลเรียบร้อย";
        }
    }

    //function edit user
    public function edit_user($data)
    {

        $db = $this->connect();

        $add_user = $db->prepare("UPDATE test SET name_m = ? , history_cru = ? , want_cru = ? WHERE id = ?");

        $add_user->bind_param("sssi", $data['edit_name_m'], $data['edit_history_cru'], $data['edit_want_cru'], $data['edit_user_id']);

        if (!$add_user->execute()) {

            echo $db->error;
        } else {

            echo "บันทึกข้อมูลเรียบร้อย";
        }
    }

    //function delete user
    public function delete_user($id)
    {

        $db = $this->connect();

        $del_user = $db->prepare("DELETE FROM test WHERE id = ?");

        $del_user->bind_param("i", $id);

        if (!$del_user->execute()) {

            echo $db->error;
        } else {

            echo "ลบข้อมูลเรียบร้อย";
        }
    }
}
