<?php
/**
 * Created by PhpStorm.
 * User: basant patidar
 * Date: 4/10/2018
 * Time: 4:58 PM
 */
//Login Process Page
require_once ("config.php");
$email = $_POST['email'];
$password = $_POST['password'];
$loginUser = $_POST['login-type'];
print("$loginUser");

//PasswordChecker for Volunteer
if($loginUser == 'Volunteer') {
    $passwordChecker = fetchVolunteer($email, $password);
    if ($passwordChecker) {
        $email = $passwordChecker [0] ['email'];
        header('Location: http://localhost/ngoportal/welcome.php');
    } else {
        header('Location: http://localhost/ngoportal/login.html');
    }
}elseif($loginUser == 'NGO'){
            $passwordChecker = fetchNgo($email, $password);
            if ($passwordChecker) {
                $email = $passwordChecker [0] ['$email'];
                header('Location: http://localhost/ngoportal/welcome.php');
            } else {
                header('Location: http://localhost/ngoportal/login.html');
            }
    }


/* require_once ("config.php");
$username = $_GET['username'];
$password = $_GET['password'];
$submit = $_GET['submit'];
if($submit == 'Admin Login' && $submit != ""){
 $passwordChecker =  fetchAdmin($username,$password);
 if($passwordChecker){
     $aname = $passwordChecker[0]['aname'];
     header('Location: http://localhost/srh/index.php?aname='.$aname);
 }else{
     header('Location: http://localhost/srh/login.php');
 }
}elseif ($submit == 'Student Login' && $submit != ""){
    $passwordChecker = fetchStudent($username,$password);
    if($passwordChecker){
        $sname = $passwordChecker[0]['sname'];
        header('Location: http://localhost/srh/processSearch.php?search='.$sname.'&submit='."Search by Name");
    }else{
        header('Location: http://localhost/srh/login.php');
    }
}
*/
