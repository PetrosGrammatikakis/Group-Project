
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

// Example usage:
$HMEROMINIA_KATASTROFIS = $_POST['HMEROMINIA_KATASTROFIS'];
$E8NOS_ID = $_POST['E8NOS_ID'];
$GLWSSA_E8 = $_POST['GLWSSA_E8'];
$ONOMA_E8NOS = $_POST['ONOMA_E8NOS'];
$HMEROMINIA_IDRISIS = $_POST['HMEROMINIA_IDRISIS'];

// Use the function to sanitize the input
$sanitizedValue = sanitizeInput($conne, $HMEROMINIA_KATASTROFIS);

// Construct the query
if ($sanitizedValue === null) {
    $qry = "INSERT INTO E8NOS (E8NOS_ID, GLWSSA_E8, ONOMA_E8NOS, HMEROMINIA_IDRISIS, HMEROMINIA_KATASTROFIS) VALUES ('$E8NOS_ID', '$GLWSSA_E8', '$ONOMA_E8NOS', '$HMEROMINIA_IDRISIS', NULL)";
} else {
    $qry = "INSERT INTO E8NOS (E8NOS_ID, GLWSSA_E8, ONOMA_E8NOS, HMEROMINIA_IDRISIS, HMEROMINIA_KATASTROFIS) VALUES ('$E8NOS_ID', '$GLWSSA_E8', '$ONOMA_E8NOS', '$HMEROMINIA_IDRISIS', '$sanitizedValue')";
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
