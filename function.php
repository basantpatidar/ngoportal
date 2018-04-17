<?php
/**
 * Created by PhpStorm.
 * User: ag94123n
 * Date: 3/7/2018
 * Time: 8:08 PM
 */

//adding new contact in DB
/*
 * @return bool
 */
function getAllTest(){
    global $mysqli;

    $stmt = $mysqli->prepare("SELECT NGOUniqueID, NGOTestimonial FROM testimonial");
    $stmt -> execute();
    $stmt->bind_result($NGOUniqueID, $NGOTestimonial);
    while($stmt->fetch()){
        $row[] = array(
            'id' => $NGOUniqueID,
            'test' => $NGOTestimonial
        );
    }
    $stmt->close();
    return($row);
}

function makeDonation($DonationType, $NGOName){
    global $mysqli;

    $UserID = "ARB123A1";
    $Money = "50";

    $charArray = array_merge(range('A','Z'),range(0,9));
    $donationid = "";
    for($i=0;$i<9;$i++){
        $donationid.= $charArray[rand(0, (count($charArray)-1))];
    }

    $stmt = $mysqli->prepare("INSERT INTO donation (DonationID, UserID, NGOUniqueID, DonationType, Money) VALUES ('".$donationid."',?,?,?,?)");
    $stmt -> bind_param("ssss", $UserID, $NGOName, $DonationType, $Money);
    $result = $stmt->execute();
    $stmt -> close();

    return($result);
}

?>


