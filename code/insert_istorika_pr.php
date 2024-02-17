<?php
include 'connects.php';


if (!isset($conne)) {
    die("Database connection is not established");
}


// Fetch valid BASILIA_ID values from the BASEILIA table
$query = "SELECT BASILIA_ID FROM BASEILIA";
$result = mysqli_query($conne, $query);

$validBasilioValues = array();
while ($row = mysqli_fetch_assoc($result)) {
    $validBasilioValues[] = $row['BASILIA_ID'];
}

// Pass the validBasilioValues array to your JavaScript
echo "<script>var validBasilioValues = " . json_encode($validBasilioValues) . ";</script>";


// Fetch valid E8NOS_ID values from the E8NOS table
$query1 = "SELECT E8NOS_ID FROM E8NOS";
$result1 = mysqli_query($conne, $query1);

$validE8nosValues = array();
while ($row = mysqli_fetch_assoc($result1)) {
    $validE8nosValues[] = $row['E8NOS_ID'];
}

// Pass the validE8nosValues array to your JavaScript
echo "<script>var validE8nosValues = " . json_encode($validE8nosValues) . ";</script>";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISTORIKA PROSWPA</title>

    <link rel="stylesheet" href="form.css">




    <script>
        function validateBasilio() {
            var BASILIO_PR = document.forms["myForm_istorika"]["BASILIO_PR"].value;


            // Check if BASILIO_PR is null or empty
            if (BASILIO_PR === null || BASILIO_PR.trim() === "") {
                return true;
            }

            // Check if BASILIO_PR is in the validBasilioValues array
            if (!validBasilioValues.includes(BASILIO_PR)) {
                alert("Μη έγκυρη τιμή για Κωδικό Βασιλείου.");
                return false;
            }



            // Both values are valid
            return true;
        }


        function validateE8nos() {
            var E8NOS_PR = document.forms["myForm_istorika"]["E8NOS_PR"].value;
            // Check if E8NOS_PR is null or empty
            if (E8NOS_PR === null || E8NOS_PR.trim() === "") {
                return true;
            }

            // Check if E8NOS_PR is in the validE8nosValues array
            if (!validE8nosValues.includes(E8NOS_PR)) {
                alert("Μη έγκυρη τιμή για Κωδικό Εθνους.");
                return false;
            }
        }

        function validateForm() {
            var KWDIKOS = document.forms["myForm_istorika"]["KWDIKOS"].value;
            var ONOMA = document.forms["myForm_istorika"]["ONOMA"].value;
            var EPI8ETO = document.forms["myForm_istorika"]["EPI8ETO"].value;
            var ETOS_GENISIS = document.forms["myForm_istorika"]["ETOS_GENISIS"].value;
            var TOPOS_GENISIS = document.forms["myForm_istorika"]["TOPOS_GENISIS"].value;

            if (KWDIKOS.trim() === "") {
                alert("Συμπληρώστε το πεδίο ID.");
                return false; // Prevent form submission
            }
            if (ONOMA.trim() === "") {
                alert("Συμπληρώστε το πεδίο Ονομα ιστορικού προσώπου.");
                return false; // Prevent form submission
            }
            if (EPI8ETO.trim() === "") {
                alert("Συμπληρώστε το πεδίο Επίθετο ιστορικού προσώπου.");
                return false; // Prevent form submission
            }
            if (ETOS_GENISIS.trim() === "") {
                alert("Συμπληρώστε το πεδίο Έτος γέννησης.");
                return false; // Prevent form submission
            }
            if (TOPOS_GENISIS.trim() === "") {
                alert("Συμπληρώστε το πεδίο Τοπος γέννησης.");
                return false; // Prevent form submission
            }



            return true; // Allow form submission
        }
    </script>

</head>



<body>
    <div class="login-box">
        <form id="myForm_istorika" name="insert_istorika_pr" action="insert_istorika_exe.php" method="post" onsubmit="return validateForm() && validateBasilio() && validateE8nos()">
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
            <h1 style="color: #fff;">ΙΣΤΟΡΙΚΑ ΠΡΟΣΩΠΑ</h1>

            <div class="user-box">
                <label for="KWDIKOS">Συμπλήρωσε ένα μοναδικό κωδικό:</label><br>
                <input type="text" name="KWDIKOS" maxlength="7" pattern="[A-Za-zΑ-Ωα-ω]*" title="Έως 7 χαρακτήρες, μόνο γράμματα">
            </div>
            <br>
            <div class="user-box">
                <label for="ONOMA">'Ονομα ιστορικού προσώπου:</label><br>
                <input type="text" name="ONOMA" maxlength="30" pattern="[A-Za-zΑ-Ωα-ωΆ-Ώά-ώ]*" title="Έως 30 χαρακτήρες Μόνο γράμματα και όχι αριθμούς">
            </div>
            <br>
            <div class="user-box">
                <label for="EPI8ETO">Επίθετο ιστορικού προσώπου:</label><br>
                <input type="text" name="EPI8ETO" maxlength="30" pattern="[A-Za-zΑ-Ωα-ωΆ-Ώά-ώ]*" title="Έως 30 χαρακτήρες Μόνο γράμματα και όχι αριθμούς">
            </div>
            <br>
            <div class="user-box">
                <label for="ETOS_GENISIS">Έτος γέννησης:</label><br>
                <input type="text" name="ETOS_GENISIS" maxlength="5" pattern="[0-9-]*" title="Μόνο αριθμούς και το (-) ,όχι γράμματα">
            </div>
            <br>
            <div class="user-box">
                <label for="ETOS_THANATOU">Έτος θανάτου:</label><br>
                <input type="text" name="ETOS_THANATOU" maxlength="5" pattern="[0-9-]*" title="Μόνο αριθμούς και το (-) ,όχι γράμματα">
            </div>
            <br>
            <div class="user-box">
            </div>
            <div class="user-box">
                <label for="TOPOS_GENISIS">Τοπος γέννησης:</label><br>
                <input type="text" name="TOPOS_GENISIS" maxlength="40" pattern="[A-Za-zΑ-Ωα-ωΆ-Ώά-ώ0-9]*" title="Έως 40 χαρακτήρες, μόνο γράμματα και αριθμούς">
            </div>
            <div class="user-box">
                <label for="BASILIO_PR">Κωδικός Βασιλείου: </label><br>
                <input type="text" name="BASILIO_PR" maxlength="3" pattern="[A-Za-zΑ-Ωα-ωΆ-Ώά-ώ0-9]*" title="Έως 3 χαρακτήρες, μόνο γράμματα και αριθμούς">
            </div>
            <div class="user-box">
                <label for="E8NOS_PR">Κωδικός Εθνους : </label><br>
                <input type="text" name="E8NOS_PR" maxlength="3" pattern="[A-Za-zΑ-Ωα-ωΆ-Ώά-ώ0-9]*" title="Έως 3 χαρακτήρες, μόνο γράμματα και αριθμούς">
            </div>

            <br>

            <div>
                <a href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>

                    <input id="sub" type="submit" name="insert" value=" Εισαγωγή">
                    <input id="sub" type="reset" value="Καθαρισμός">
                </a>
            </div>
        </form>
    </div>




</body>

</html>