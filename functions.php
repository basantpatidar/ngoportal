<?php
/**
 * Created by PhpStorm.
 * User: basant
 * Date: 4/10/2018
 * Time: 5:41 PM
 */


function fetchVolunteer($email, $password){
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare("SELECT Email FROM ".$db_table_prefix."login WHERE Email = ? AND Password = ? LIMIT 1");
    $stmt-> bind_param("ss",$email,$password);
    $result = $stmt-> execute();
    $stmt->bind_result($email);
    $stmt->execute();
    $row = array();
    while ($stmt-> fetch()){
        $row[] = array(
            'email'     =>$email
        );
    }
    $stmt->close();
    return ($row);
}



/*function fetchAdmin($username, $password){
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare("SELECT aname FROM ".$db_table_prefix."adminlogin WHERE username = ? AND password = ? LIMIT 1");
    $stmt-> bind_param("ss",$username,$password);
    $result = $stmt-> execute();
    $stmt->bind_result($aname);
    $stmt->execute();
    $row = array();
    while ($stmt-> fetch()){
        $row[] = array(
            'aname'     =>$aname
        );
    }
    $stmt->close();
    return ($row);
}
function fetchStudent($sname, $password){
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare("SELECT sname FROM ".$db_table_prefix."studentrecord WHERE sname = ? AND password = ? LIMIT 1");
    $stmt-> bind_param("ss",$sname,$password);
    $result = $stmt-> execute();
    $stmt->bind_result($sname);
    $stmt->execute();
    $row = array();
    while ($stmt-> fetch()){
        $row[] = array(
            'sname'     =>$sname
        );
    }
    $stmt->close();
    return ($row);
}  */