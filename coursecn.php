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
        $get_user = $db->query("SELECT * FROM dbcourse");

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
        $get_user = $db->query("SELECT * FROM dbcourse WHERE name_m LIKE '%" . $post . "%' ");

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
        $get_user = $db->prepare("SELECT id,course,Coursename,credit,Studygroup,teacher FROM dbcourse WHERE id = ?");
        $get_user->bind_param('i', $user_id);
        $get_user->execute();
        $get_user->bind_result($id, $course, $Coursename, $credit, $Studygroup, $teacher);
        $get_user->fetch();

        $result = array(
            'id' => $id,
            'course' => $course,
            'Coursename' => $Coursename,
            'credit' => $credit,
            'Studygroup' => $Studygroup,
            'teacher' => $teacher
        );

        return $result;
    }

    //function เพื่ม user
    public function add_user($data)
    {

        $db = $this->connect();

        $add_user = $db->prepare("INSERT INTO dbcourse (id,course,Coursename,credit,Studygroup,teacher) VALUES(NULL,?,?,?) ");

        $add_user->bind_param("ssssss", $data['send_course'], $data['send_Coursename'], $data['send_credit'], $data['send_Studygroup'], $data['send_teacher']);

        if (!$add_user->execute()) {

            echo $db->error;
        } else {

            echo "บันทึกข้อมูลเรียบร้อย";
        }
    }
}
