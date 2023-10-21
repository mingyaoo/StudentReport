
<?php
include_once('connection.php');
header("Refresh:2; url= pupildoessubject.php");
print_r($_POST);
$stmt = $conn->prepare("INSERT INTO tblpupilstudies (Subjectid,Userid)VALUES (Subjectid,:Userid)");
$stmt->bindParam(':subjectid', $_POST["subjects"]);
$stmt->bindParam(':userid', $_POST["student"]);
$stmt->execute();
$conn=null;

?>


