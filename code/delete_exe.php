<?php
    include 'connects.php';

    // Λήψη των τιμών POST
    $KWDIKOS1 = mysqli_real_escape_string($conne, $_POST['KWDIKOS1']);

    // Σύνταξη εντολής SQL για διαγραφή δεδομένων
    $qry1 = "DELETE FROM PROSWPO WHERE KWDIKOS='$KWDIKOS1'";
    $qry2 = "DELETE FROM BASEILIA WHERE BASILIA_ID='$KWDIKOS1'";
    $qry3 = "DELETE FROM E8NOS WHERE E8NOS_ID='$KWDIKOS1'";

    // Εκτέλεση εντολών
    $qryexe1 = mysqli_query($conne, $qry1);
    $qryexe2 = mysqli_query($conne, $qry2);
    $qryexe3 = mysqli_query($conne, $qry3);

    // Έλεγχος για σφάλματα
    if ($qryexe1 && $qryexe2 && $qryexe3) {
        echo "Data deleted successfully";
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conne);
    }
?>
