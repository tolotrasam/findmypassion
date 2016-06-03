<?php
 require('../session.php');
require '../connect.php';
echo 'submitted!!!';
echo $gender = $_POST['gender'];
echo $nationality = $_POST['nationality'];
echo $birth = $_POST['birth'];
echo $passion1 = $_POST['passion1'];
echo $profession = $_POST['profession'];
echo $freetime = $_POST['freetime'];
echo $address = $_POST['address'];
$now = date("Y-m-d H:i:s",time());

 
echo $table = 'loginlist1';
//new connection with the previous variables
  // sql to create table


if ($conn->query($sql) === TRUE) {
    echo "Table newfeed created successfully";
} else {
    echo "Error creating '$table': " . $conn->error;
}

$sql = "UPDATE $table SET passion1 = '$passion1', bio ='$bio', date = '$now', birth = '$birth', filepath = '$filepath', filetype = '$filetype', profession = '$profession', address = '$address', nationality = '$nationality' , freetime ='$freetime' where username = '$login_session'";

if (mysqli_query($conn, $sql)) {
	//if the picture is uploaded sucessfully,it will be moved inside the container folder
	$target_Path = $target_Folder.basename( $_FILES['uploadimage']['name'] );
$savepath = $target_Path.basename( $_FILES['uploadimage']['name'] );
        move_uploaded_file( $_FILES['uploadimage']['tmp_name'], "../$target_Path" );
     // header ('location: ../welcome.php'); 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//header ('location: ../index.php')
?>
