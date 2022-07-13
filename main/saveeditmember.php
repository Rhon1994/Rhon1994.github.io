<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['asmkno'];
$l = $_POST['lastname'];
$f  = $_POST['firstname'];
$mi = $_POST['middleinitial'];
$su = $_POST['suffix'];
$ad = $_POST['address'];
$sex = $_POST['sex'];
$bday = $_POST['bday'];
$c = $_POST['contactno'];
$i = $_POST['idnum'];
$loc = $_POST['location'];
// query

$sql = "UPDATE asmkmembers 
        SET asmkno=?, lastname=?, firstname=?, middleinitial=?, suffix=?, address=?, sex=?, bday=?, contactno=?, idnum=?, location=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$l,$f,$mi,$su,$ad,$sex,$bday,$c,$i,$loc,$id));
header("location: members.php");

?>