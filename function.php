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

?>


