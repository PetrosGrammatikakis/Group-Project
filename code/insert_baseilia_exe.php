<?php
include 'connects.php';


function sanitizeInput($conne, $inputValue)
{
    // Check if the input is null or empty after trimming
    if ($inputValue === null || trim($inputValue) === "") {
        return null; // or any other default value or indication
    } else {
        return mysqli_real_escape_string($conne, $inputValue);
    }
}



$BASILIA_ID = mysqli_real_escape_string($conne, $_POST['BASILIA_ID']);
$PROTEYOUSA = mysqli_real_escape_string($conne, $_POST['PROTEYOUSA']);
$GLWSSA_BAS = mysqli_real_escape_string($conne, $_POST['GLWSSA_BAS']);
$HMEROMINIA_DIMIOURGIAS = mysqli_real_escape_string($conne, $_POST['HMEROMINIA_DIMIOURGIAS']);

// Use the function to sanitize the input
$sanitizedValue = sanitizeInput($conne, $_POST['HMEROMINIA_KATASTROFHS']);


// Construct the query
if ($sanitizedValue === null) {
    $qry = "INSERT INTO BASEILIA (BASILIA_ID, PROTEYOUSA, GLWSSA_BAS, HMEROMINIA_DIMIOURGIAS, HMEROMINIA_KATASTROFHS) VALUES ('$BASILIA_ID', '$PROTEYOUSA', '$GLWSSA_BAS', '$HMEROMINIA_DIMIOURGIAS', NULL)";
} else {
    $qry = "INSERT INTO BASEILIA (BASILIA_ID, PROTEYOUSA, GLWSSA_BAS, HMEROMINIA_DIMIOURGIAS, HMEROMINIA_KATASTROFHS) VALUES ('$BASILIA_ID', '$PROTEYOUSA', '$GLWSSA_BAS', '$HMEROMINIA_DIMIOURGIAS','$sanitizedValue')";
}


$qryexe = mysqli_query($conne, $qry);

if ($qryexe) {
    echo "Data inserted successfully";
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conne);
}
?>