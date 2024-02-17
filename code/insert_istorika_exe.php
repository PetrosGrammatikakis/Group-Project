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





// Λήψη των τιμών POST
$KWDIKOS = $_POST['KWDIKOS'];
$ONOMA = $_POST['ONOMA'];
$EPI8ETO = $_POST['EPI8ETO'];
$ETOS_GENISIS = $_POST['ETOS_GENISIS'];
$ETOS_THANATOU = $_POST['ETOS_THANATOU'];
$TOPOS_GENISIS = $_POST['TOPOS_GENISIS'];
$E8NOS_PR = $_POST['E8NOS_PR'];
$BASILIO_PR = $_POST['BASILIO_PR'];

// Use the function to sanitize the input
$sanitizedValue = sanitizeInput($conne, $E8NOS_PR);
$sanitizedValue1 = sanitizeInput($conne, $BASILIO_PR);
$sanitizedValue2 = sanitizeInput($conne, $ETOS_THANATOU);


// Σύνταξη εντολής SQL για εισαγωγή δεδομένων
// Check all possibilities with nested if statements
if ($sanitizedValue === null && $sanitizedValue1 === null && $sanitizedValue2 === null) {
    $qry = "INSERT INTO PROSWPO (KWDIKOS, ONOMA, EPI8ETO, ETOS_GENISIS, ETOS_THANATOU, TOPOS_GENISIS, BASILIO_PR, E8NOS_PR) VALUES ('$KWDIKOS', '$ONOMA', '$EPI8ETO', '$ETOS_GENISIS', null ,'$TOPOS_GENISIS', null, null)";
} elseif ($sanitizedValue !== null && $sanitizedValue1 === null && $sanitizedValue2 === null) {
    $qry = "INSERT INTO PROSWPO (KWDIKOS, ONOMA, EPI8ETO, ETOS_GENISIS, ETOS_THANATOU, TOPOS_GENISIS, BASILIO_PR, E8NOS_PR) VALUES ('$KWDIKOS', '$ONOMA', '$EPI8ETO', '$ETOS_GENISIS', null ,'$TOPOS_GENISIS', null, '$sanitizedValue')";
} elseif ($sanitizedValue === null && $sanitizedValue1 !== null && $sanitizedValue2 === null) {
    $qry = "INSERT INTO PROSWPO (KWDIKOS, ONOMA, EPI8ETO, ETOS_GENISIS, ETOS_THANATOU, TOPOS_GENISIS, BASILIO_PR, E8NOS_PR) VALUES ('$KWDIKOS', '$ONOMA', '$EPI8ETO', '$ETOS_GENISIS', null ,'$TOPOS_GENISIS', '$sanitizedValue1', null)";
} elseif ($sanitizedValue === null && $sanitizedValue1 === null && $sanitizedValue2 !== null) {
    $qry = "INSERT INTO PROSWPO (KWDIKOS, ONOMA, EPI8ETO, ETOS_GENISIS, ETOS_THANATOU, TOPOS_GENISIS, BASILIO_PR, E8NOS_PR) VALUES ('$KWDIKOS', '$ONOMA', '$EPI8ETO', '$ETOS_GENISIS','$sanitizedValue2' ,'$TOPOS_GENISIS', null, null )";;
} elseif ($sanitizedValue !== null && $sanitizedValue1 !== null && $sanitizedValue2 === null) {
    $qry = "INSERT INTO PROSWPO (KWDIKOS, ONOMA, EPI8ETO, ETOS_GENISIS, ETOS_THANATOU, TOPOS_GENISIS, BASILIO_PR, E8NOS_PR) VALUES ('$KWDIKOS', '$ONOMA', '$EPI8ETO', '$ETOS_GENISIS', null ,'$TOPOS_GENISIS', '$sanitizedValue1', '$sanitizedValue')";
} elseif ($sanitizedValue !== null && $sanitizedValue1 === null && $sanitizedValue2 !== null) {
    $qry = "INSERT INTO PROSWPO (KWDIKOS, ONOMA, EPI8ETO, ETOS_GENISIS, ETOS_THANATOU, TOPOS_GENISIS, BASILIO_PR, E8NOS_PR) VALUES ('$KWDIKOS', '$ONOMA', '$EPI8ETO', '$ETOS_GENISIS', '$sanitizedValue2' ,'$TOPOS_GENISIS', null, '$sanitizedValue')";
} elseif ($sanitizedValue === null && $sanitizedValue1 !== null && $sanitizedValue2 !== null) {
    $qry = "INSERT INTO PROSWPO (KWDIKOS, ONOMA, EPI8ETO, ETOS_GENISIS, ETOS_THANATOU, TOPOS_GENISIS, BASILIO_PR, E8NOS_PR) VALUES ('$KWDIKOS', '$ONOMA', '$EPI8ETO', '$ETOS_GENISIS', '$sanitizedValue2' ,'$TOPOS_GENISIS', '$sanitizedValue1', null)";
} else {
    $qry = "INSERT INTO PROSWPO (KWDIKOS, ONOMA, EPI8ETO, ETOS_GENISIS, ETOS_THANATOU, TOPOS_GENISIS, BASILIO_PR, E8NOS_PR) VALUES ('$KWDIKOS', '$ONOMA', '$EPI8ETO', '$ETOS_GENISIS','$sanitizedValue2' ,'$TOPOS_GENISIS', '$sanitizedValue1', '$sanitizedValue')";
}

// Εκτέλεση εντολής
echo "SQL Query: " . $qry; // Add this line
$qryexe = mysqli_query($conne, $qry);



if ($qryexe) {
    echo "Data inserted successfully";
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conne);
}
?>