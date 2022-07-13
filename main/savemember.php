<?php
session_start();
include('../connect.php');
$l = $_POST['lastname'];
$f  = $_POST['firstname'];
$mi = $_POST['middleinitial'];
$su = $_POST['suffix'];
$ad = $_POST['address'];
$sex = $_POST['sex'];
$bday = $_POST['bday'];
$a = $_POST['asmkno'];
$c = $_POST['contactno'];
$i = $_POST['idnum'];
$loc = $_POST['location'];
// query

    /* check if the file uploaded successfully */

  //do your write to the database filename and other details   
$sql = "INSERT INTO asmkmembers (lastname,firstname,middleinitial,suffix,address,sex,bday,asmkno,contactno,idnum,location) VALUES (:l,:f,:mi,:su,:ad,:sex,:bday,:a,:c,:i,:loc)";
$q = $db->prepare($sql);
$q->execute(array(':l'=>$l,':f'=>$f,':mi'=>$mi,':su'=>$su,':ad'=>$ad,':sex'=>$sex,':bday'=>$bday,':a'=>$a,':c'=>$c,':i'=>$i,':loc'=>$loc));
header("location: members.php");


?>