<?PHP
include("connect.php");
$hid_save = $_POST['hid_save'];       

if($hid_save==1){
    
    $Coursecode = $_POST['Coursecode'];
    $Thaisubjectname = $_POST['Thaisubjectname'];
    $Englishsubjectname = $_POST['Englishsubjectname'];
    $Curriculumandcoursetype = $_POST['Curriculumandcoursetype'];
    $credit = $_POST['credit'];
    $nameteacher = $_POST['nameteacher'];
    $hid_id_edit = $_POST['hid_id_edit'];
    
    if($hid_id_edit>0 && $hid_id_edit!=''){

    $sql = "UPDATE dbcourse_add SET Coursecode = '".$Coursecode."' ,
            Thaisubjectname = '".$Thaisubjectname."' ,Englishsubjectname = '".$Englishsubjectname."', 
            Curriculumandcoursetype = '".$Curriculumandcoursetype."' ,
            credit =  '".$credit."',nameteacher = '".$nameteacher."' WHERE id = '".$hid_id_edit."' ";
    $result = $conn->query($sql);

    }else{

    $sql = "INSERT INTO dbcourse_add (Coursecode,
            Thaisubjectname,Englishsubjectname,Curriculumandcoursetype,credit,nameteacher)
            VALUES('".$Coursecode."','".$Thaisubjectname."',
                   '".$Englishsubjectname."',
                   '".$Curriculumandcoursetype."',
                   '".$credit."',
                   '".$nameteacher."')";
    $result = $conn->query($sql);
  
    }

    echo '<script type="text/javascript">'; 
    echo 'alert("Save OK!!");'; 
    echo 'window.location = "index.php";';
    echo '</script>';
}
?>
